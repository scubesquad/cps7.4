<?php

namespace App\Services\Reprint;

use DB;
use Auth;
use TCPDF;
use App\Models\RePrintRequestCollection;
use App\Models\RePrintQueue;
use App\Services\PrintChequeService;
use App\Services\PrintSlipService;
use App\Services\PrintQueryService;
use App\Services\Reprint\ReprintChequeService;
use App\Services\LogService;
use Log;

class ReprintSingleLeafChequeService
{
	protected $printSlipService;
	protected $printChequeService;
	protected $printQueryService;
	protected $reprintChequeService;
	protected $logService;

	public function __construct(PrintChequeService $printChequeService, PrintSlipService $printSlipService, PrintQueryService $printQueryService, ReprintChequeService $reprintChequeService, LogService $logService){
		$this->printSlipService = $printSlipService;
		$this->printChequeService = $printChequeService;
		$this->printQueryService = $printQueryService;
		$this->reprintChequeService = $reprintChequeService;
		$this->logService = $logService;
	}

	public function reprintSingleLeafCheque($req){
		
		$selected_requisition = false;
		$randomNumber =  rand(1,10000000000);
		$html = "";
		$isPrintSlip = 0;
		ini_set("max_execution_time",300000);
		$print_user = Auth::user()->userid;

		// to get the transaction key
		$transactionKey = $this->printQueryService->getTransactionKeyValue();
		$xpos = $this->printQueryService->getXPosition();  //to get the x position of cheque & slip
	    $ypos = $this->printQueryService->getYPosition();  //to get the y position of cheque & slip

		// for getting single leaf
		$toreprint = [];
		$total_leaves = 0;

		
		// print_r($_GET);
		// echo "<br>";
		
		foreach ($_GET as $acc => $value) {
	
			if(substr($acc, 0, 4) == 'acc_')
			{
				$chkno = [];
				foreach ($value as $key => $value) {
					$chkno[] = $value;
					$total_leaves++;
				}
				$acc = substr($acc, 4);
				$toreprint[$acc] = $chkno;
			}
		}
		// die();
		// echo "<br>";
		// echo "<br>";
		
		
		
		if(isset($req->requisition))
		{
			$selected_requisition = true;
		}

		
		
		
		$resultnoofchequeleavestype = DB::table('tb_cps_reprintque')
									->where('cps_reprint_approved', 1)
									->exists();
		
		
		if($resultnoofchequeleavestype)
		{
			$printersinfo = "";
			
			// to get bank details
			$printerDetails = DB::table('tb_bankdetails')->first();
			if($printerDetails && $printerDetails->bank_printers != ""){
				$printersinfo = unserialize($printerDetails->bank_printers);
			}
			else
			{
				return [
					'status' => 203,
					'message' => 'Please enter printer details in branch master'
				];
			}
	
			$firstchequerow = [];
			$secondchequerow = [];
			$thirdchequerow = [];
			
			$firstrequestsliprow = [];
			$secondrequestsliprow = [];
			$thirdrequestsliprow = [];
						
			// function to get approved reprintque no of books size
			$noofbooks = DB::table('tb_cps_reprintque')
				 ->where('cps_reprint_approved', 1)
				 ->sum(DB::raw('cps_book_size * cps_no_of_books'));			
			// $total_leaves = $row->total_leaves;	
			$total_slips = $noofbooks;	
			$no_pages = ceil($total_leaves/3);
			
			// function to get approved reprint que
			$result = DB::table('tb_cps_reprintque');            
	        if($printerDetails->is_branch_sub_code == 1){
	            $result = $result->join('tb_branchdetails', function($join){
	        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_cps_reprintque.cps_branchmicr_code, 3, 0)'));
	        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_cps_reprintque.branch_sub_code');
	        	    });
	        }else{
	        	$result = $result->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_cps_reprintque.cps_branchmicr_code, 3, 0)'));
	        }

	        $result = $result->select('tb_cps_reprintque.*', 'tb_branchdetails.branch_neftifsccode')
	        		->where('cps_reprint_approved', 1)
	        		->get();



			$jump=0;

			if(count($result) > 0){
				$slipCounter = 1;			
				foreach($result as $rowresultslips)
				{				
					$chkFrom = $rowresultslips->cps_chq_no_from;
					$chkTo = $rowresultslips->cps_chq_no_to;
					
					for($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++)
					{						
						if($rowresultslips->cps_no_of_books > 1)
						{
							$chkTo = $chkFrom + $rowresultslips->cps_book_size;							 
						}
												
						if($slipCounter % 3 == 1) 
						{							
							$firstrequestsliprow[] = array(
										'cps_act_name' => $rowresultslips->cps_act_name, 
										'cps_act_address1' => $rowresultslips->cps_act_address1, 
										'cps_act_address2' => $rowresultslips->cps_act_address2, 
										'cps_act_address3' => $rowresultslips->cps_act_address3, 
										'cps_act_city' => $rowresultslips->cps_act_city, 
										'cps_act_pin' => $rowresultslips->cps_act_pin, 
										'cps_act_address4' => $rowresultslips->cps_act_address4, 
										'cps_act_address5' => $rowresultslips->cps_act_address5, 
										'cps_act_telephone_res' => $rowresultslips->cps_act_telephone_res, 
										'cps_act_telephone_off' => $rowresultslips->cps_act_telephone_off, 
										'cps_act_mobile' => $rowresultslips->cps_act_mobile, 'cps_account_no' => $rowresultslips->cps_account_no, 
										'cps_emailid' => $rowresultslips->cps_emailid, 
										'cps_book_size' => $rowresultslips->cps_book_size, 
										'chkFrom' => $chkFrom, 
										'chkTo' => $chkTo, 
										'cps_auth_sign1' => $rowresultslips->cps_auth_sign1, 
										'cps_branchmicr_code' => $rowresultslips->cps_branchmicr_code, 
										'cps_tr_code' => $rowresultslips->cps_tr_code, 
										'cps_unique_req' => $rowresultslips->cps_unique_req, 
										'print_user' => $print_user, 
										'branch_sub_code' => $rowresultslips->branch_sub_code
									);
						}
						elseif($slipCounter % 3 == 2) 
						{						
							$secondrequestsliprow[] = array(
										'cps_act_name' => $rowresultslips->cps_act_name, 
										'cps_act_address1' => $rowresultslips->cps_act_address1, 
										'cps_act_address2' => $rowresultslips->cps_act_address2, 
										'cps_act_address3' => $rowresultslips->cps_act_address3, 
										'cps_act_city' => $rowresultslips->cps_act_city, 
										'cps_act_pin' => $rowresultslips->cps_act_pin, 
										'cps_act_address4' => $rowresultslips->cps_act_address4, 
										'cps_act_address5' => $rowresultslips->cps_act_address5, 
										'cps_act_telephone_res' => $rowresultslips->cps_act_telephone_res, 
										'cps_act_telephone_off' => $rowresultslips->cps_act_telephone_off, 
										'cps_act_mobile' => $rowresultslips->cps_act_mobile, 'cps_account_no' => $rowresultslips->cps_account_no, 
										'cps_emailid' => $rowresultslips->cps_emailid, 
										'cps_book_size' => $rowresultslips->cps_book_size, 
										'chkFrom' => $chkFrom, 
										'chkTo' => $chkTo, 
										'cps_auth_sign1' => $rowresultslips->cps_auth_sign1, 
										'cps_branchmicr_code' => $rowresultslips->cps_branchmicr_code, 
										'cps_tr_code' => $rowresultslips->cps_tr_code, 
										'cps_unique_req' => $rowresultslips->cps_unique_req, 
										'print_user' => $print_user, 
										'branch_sub_code' => $rowresultslips->branch_sub_code
									);
						}
						elseif($slipCounter % 3 == 0) 
						{						
							$thirdrequestsliprow[] = array(
										'cps_act_name' => $rowresultslips->cps_act_name, 
										'cps_act_address1' => $rowresultslips->cps_act_address1, 
										'cps_act_address2' => $rowresultslips->cps_act_address2, 
										'cps_act_address3' => $rowresultslips->cps_act_address3, 
										'cps_act_city' => $rowresultslips->cps_act_city, 
										'cps_act_pin' => $rowresultslips->cps_act_pin, 
										'cps_act_address4' => $rowresultslips->cps_act_address4, 
										'cps_act_address5' => $rowresultslips->cps_act_address5, 
										'cps_act_telephone_res' => $rowresultslips->cps_act_telephone_res, 
										'cps_act_telephone_off' => $rowresultslips->cps_act_telephone_off, 
										'cps_act_mobile' => $rowresultslips->cps_act_mobile, 'cps_account_no' => $rowresultslips->cps_account_no, 
										'cps_emailid' => $rowresultslips->cps_emailid, 
										'cps_book_size' => $rowresultslips->cps_book_size, 
										'chkFrom' => $chkFrom, 
										'chkTo' => $chkTo, 
										'cps_auth_sign1' => $rowresultslips->cps_auth_sign1, 
										'cps_branchmicr_code' => $rowresultslips->cps_branchmicr_code, 
										'cps_tr_code' => $rowresultslips->cps_tr_code, 
										'cps_unique_req' => $rowresultslips->cps_unique_req, 
										'print_user' => $print_user, 
										'branch_sub_code' => $rowresultslips->branch_sub_code
									);
						}
				
						$chkFrom = $chkTo;
						$slipCounter++;
					}				
				}
				
				// function to generate slip
				$pdf = new TCPDF();
	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
				$noofbooks = 1;
				for($j = 0;$j<count($firstrequestsliprow);$j++)
				{		
					if(isset($firstrequestsliprow[$j]))
						$firstrequestslipdata = $firstrequestsliprow[$j];
					else
						$firstrequestslipdata = "";
						
					if(isset($secondrequestsliprow[$j]))
						$secondrequestslipdata = $secondrequestsliprow[$j];
					else	
						$secondrequestslipdata = "";
					
					if(isset($thirdrequestsliprow[$j]))
						$thirdrequestslipdata = $thirdrequestsliprow[$j];
					else
						$thirdrequestslipdata = "";
					
					
					if($selected_requisition)
					{
						$html .= $this->printSlipService->printRequestSlip($pdf,2,$firstrequestslipdata,$secondrequestslipdata,$thirdrequestslipdata,3,$noofbooks,$printersinfo, $transactionKey, $printerDetails, $xpos, $ypos);
						$isPrintSlip =  1;											
					}
					//$noofbooks++;
				}

				$pdf->Output(public_path().'/pdf/Slip.pdf', 'F');
				if($selected_requisition){
					exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Slip.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
				}
				
				
				$html .= "<br>";

				$firstrequestsliprow = [];
				$secondrequestsliprow = [];
				$thirdrequestsliprow = [];	
		
					
				foreach($result as $rowresults)
				{
					$chequeno = $rowresults->cps_chq_no_from;
					if(trim($rowresults->cps_act_jointname1)!="")
					{
						$name1 = $rowresults->cps_act_jointname1;
						$name2 = $rowresults->cps_act_jointname2;
						$name3 = "";
					}
					else
					{
						$name1 = $rowresults->cps_auth_sign1;
						$name2 = $rowresults->cps_auth_sign2;
						$name3 = $rowresults->cps_auth_sign3;
					}	
					
					$chkserisediff = (($rowresults->cps_chq_no_to - $rowresults->cps_chq_no_from) + 1);
					
					
					for($i = 0; $i < $chkserisediff; $i++)
					{									 
						if($i!=0){
							$chequeno = $chequeno + 1;
						}
						$chequeno = str_pad($chequeno, 6, "0", STR_PAD_LEFT);
						$acc = $rowresults->cps_account_no;
						if(!in_array($chequeno, $toreprint[$acc])){
							continue;
						}
						
						if($jump < $no_pages)
						{	
							$firstchequerow[] = array('chequeno' => $chequeno,  
										'cps_micr_code' => $rowresults->cps_micr_code,
										'cps_micr_account_no' => $rowresults->cps_micr_account_no,
										'cps_account_no' => $rowresults->cps_account_no,
										'cps_tr_code' => $rowresults->cps_tr_code,
										'cps_act_name' => $rowresults->cps_act_name,
										'cps_act_address1' => $rowresults->cps_act_address1, 
										'cps_act_city' => $rowresults->cps_act_city,
										'cps_act_pin' => $rowresults->cps_act_pin, 
										'name1' => $name1, 
										'name2' => $name2, 
										'name3' => $name3, 
										'cps_auth_sign1' => $rowresults->cps_auth_sign1, 
										'branch_neftifsccode' => $rowresults->branch_neftifsccode, 
										'cps_branchmicr_code' => $rowresults->cps_branchmicr_code, 
										'cps_unique_req' => $rowresults->cps_unique_req, 
										'print_user' => $print_user,
										'cps_date' => $rowresults->cps_date,
										'branch_sub_code' => $rowresults->branch_sub_code);																
						}
						elseif(($jump < ($no_pages * 2)) && ($jump >= $no_pages))
						{
							$secondchequerow[] = array('chequeno' => $chequeno,  
										'cps_micr_code' => $rowresults->cps_micr_code,
										'cps_micr_account_no' => $rowresults->cps_micr_account_no,
										'cps_account_no' => $rowresults->cps_account_no,
										'cps_tr_code' => $rowresults->cps_tr_code,
										'cps_act_name' => $rowresults->cps_act_name,
										'cps_act_address1' => $rowresults->cps_act_address1, 
										'cps_act_city' => $rowresults->cps_act_city,
										'cps_act_pin' => $rowresults->cps_act_pin, 
										'name1' => $name1, 
										'name2' => $name2, 
										'name3' => $name3, 
										'cps_auth_sign1' => $rowresults->cps_auth_sign1, 
										'branch_neftifsccode' => $rowresults->branch_neftifsccode, 
										'cps_branchmicr_code' => $rowresults->cps_branchmicr_code, 
										'cps_unique_req' => $rowresults->cps_unique_req, 
										'print_user' => $print_user,
										'cps_date' => $rowresults->cps_date,
										'branch_sub_code' => $rowresults->branch_sub_code);																
						}
						elseif(($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2))
						{	
							$thirdchequerow[] = array('chequeno' => $chequeno,  
										'cps_micr_code' => $rowresults->cps_micr_code,
										'cps_micr_account_no' => $rowresults->cps_micr_account_no,
										'cps_account_no' => $rowresults->cps_account_no,
										'cps_tr_code' => $rowresults->cps_tr_code,
										'cps_act_name' => $rowresults->cps_act_name,
										'cps_act_address1' => $rowresults->cps_act_address1, 
										'cps_act_city' => $rowresults->cps_act_city,
										'cps_act_pin' => $rowresults->cps_act_pin, 
										'name1' => $name1, 
										'name2' => $name2, 
										'name3' => $name3, 
										'cps_auth_sign1' => $rowresults->cps_auth_sign1, 
										'branch_neftifsccode' => $rowresults->branch_neftifsccode, 
										'cps_branchmicr_code' => $rowresults->cps_branchmicr_code, 
										'cps_unique_req' => $rowresults->cps_unique_req, 
										'print_user' => $print_user,
										'cps_date' => $rowresults->cps_date,
										'branch_sub_code' => $rowresults->branch_sub_code);																
						}	
							
						$jump++;	
					}			
				}
				
				//function to generate cheque
				$pdf = new TCPDF();
	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
				for($j = 0; $j<count($firstchequerow); $j++)
				{
					if(isset($firstchequerow[$j]))
						$firstchequedata = $firstchequerow[$j];
	
					if(isset($secondchequerow[$j]))
					{
						$secondchequedata = $secondchequerow[$j];
					}
					else
					{
						$secondchequedata = "";
					}
					
					if(isset($thirdchequerow[$j]))
					{
						$thirdchequedata = $thirdchequerow[$j];
					}
					else
					{
						$thirdchequedata = "";
					}

					
					$html .= $this->printChequeService->printCheques($pdf, 3,$firstchequedata,$secondchequedata,$thirdchequedata,3,$printersinfo, $printerDetails, $xpos, $ypos);
					
				}
				$pdf->Output(public_path().'/pdf/Cheque.pdf', 'F');
				
				exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");

										
				$firstchequerow = [];
				$secondchequerow = [];
				$thirdchequerow = [];
											
				$resultInsert = DB::table('tb_cps_reprintque')->where('cps_reprint_approved', 1)->get();
				$printCollectionId = "";
				$logid = [];
				foreach($resultInsert as $rowresultsInsert)
				{	
					$printid = $this->insertIntoReprintCollection($rowresultsInsert);
					$printCollectionId .= $printid.",";
					$logid[] = $printid;
				}

				$printCollectionId = rtrim($printCollectionId, ',');
		            $slippdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Slip.pdf'));
		            $chequepdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Cheque.pdf'));
		            
		            // unlink(public_path().'/pdf/Slip.pdf');
		            // unlink(public_path().'/pdf/Cheque.pdf');
	                // echo '{"status":"true", "data":"'.$html.'", "slippdf":"'.$slippdf.'", "chequepdf":"'.$chequepdf.'", "isPrint":"false", "count":"'.$counts.'", "printer":"'.$printersinfo[0][0].'", "rand":"'.$randomNumber.'", "insertid":"'.$printCollectionId.'", "isPrintSlip":"'.$isPrintSlip.'"}';
		            
		            // Code for log
		            $logRecordId = "";
					$logDetails = [];
		            $reprints = $this->printQueryService->getReprintReqCollection($logid);
		            $count = count($reprints);
		            foreach($reprints as $reprint){
		            	if($logRecordId != "")
							$logRecordId = $logRecordId.','.$reprint->id;
						else
							$logRecordId = $reprint->id;

		            	$logDetails[] = $this->printQueryService->logDetails($reprint);
		            }
		            // reprint log when delete
					$this->logService->insertLog('tb_reprint_req_collection', 'Reprint Single Leaf', $logRecordId, 'reprint', [], $logDetails,  "Total $count single leaf reprint request printed.");
		            // End of code log


		            return [
		            	'status' => 200,
		            	'message' => [
		            		'status' => true,
		            		'data' => $html,
		            		'slippdf' => $slippdf,
		            		'chequepdf' => $chequepdf,
		            		'isPrint' => false,
		            		'printer' => $printersinfo[0][0],
		            		'rand' => $randomNumber,
		            		'insertid' => $printCollectionId,
		            		'isPrintSlip' => $isPrintSlip,
		            		'isPrintCheque' => 1,
		            		'sliptray' => $printersinfo[0][1],
		            		'chequetray' => $printersinfo[0][2]
		            	]
		            ];
			}else{
				return [
	            	'status' => 203,
	            	'message' => "There are no records to print. Please check the Pending Print Request page to print again."
	            ];
			}					
		}
		else
		{
			return [
            	'status' => 203,
            	'message' => "There are no records to print. Please check the Pending Print Request page to print again."
            ];
		}

	}


	public function insertIntoReprintCollection($result) {
       	// return "ok";
		$id = $this->reprintChequeService->insertReprintCollection($result);

		DB::table('tb_cps_reprintque')->where('id', $result->id)->delete();

		return $id;

    }

}