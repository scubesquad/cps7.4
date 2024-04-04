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
use App\Services\LogService;
use Log;

class ReprintChequeService
{
	protected $printSlipService;
	protected $printChequeService;
	protected $printQueryService;
	protected $logService;

	public function __construct(PrintChequeService $printChequeService, PrintSlipService $printSlipService, PrintQueryService $printQueryService, LogService $logService){
		$this->printSlipService = $printSlipService;
		$this->printChequeService = $printChequeService;
		$this->printQueryService = $printQueryService;
		$this->logService = $logService;
	}

	public function reprintCheque($req){
		$selected_requisition = false;
		$requisitiononly = false;
		$selective = false;
		$html = "";
		$randomNumber =  rand(1,10000000000);
		$isPrintSlip = 0;
		$isPrintCheque = 0;
		ini_set("max_execution_time", 300000);
		$xpos = $this->printQueryService->getXPosition();  //to get the x position of cheque & slip
	    $ypos = $this->printQueryService->getYPosition();  //to get the y position of cheque & slip

		// function to get transaction key value
		$transactionKey = $this->printQueryService->getTransactionKeyValue();

		$print_user = Auth::user()->userid;

		// check reprint request condition 
		if (isset($req->selective_pages_no) && $req->selective_pages_no != "") {
			$selective = true;
			$selective_page_array = explode(",", $req->selective_pages_no);
		}
		if (isset($req->requisition) && $req->selective_pages_no != "") {
			$selected_requisition = true;
		}
		if (isset($req->requisitiononly) && $req->requisitiononly != "") {
			$requisitiononly = true;
			$selected_requisition = true;
		}

		// query to check approved reprint reprint exist or not
		$resultnoofchequeleavestype = DB::table('tb_cps_reprintque')
									->where('cps_reprint_approved', 1)
									->exists();
		if ($resultnoofchequeleavestype) {
			
			$printersinfo = "";
			// to get bank details
			$printerDetails = DB::table('tb_bankdetails')->first();
			if ($printerDetails && $printerDetails->bank_printers != "") {
				$printersinfo = unserialize($printerDetails->bank_printers);
			} else {
				return [
					'status' => 203,
					'message' => 'Please enter printer details in branch master'
				];
			}

			$firstchequerow = [];
			$secondchequerow = [];
			$thirdchequerow = [];
			$printqueid = [];

			$firstrequestsliprow = [];
			$secondrequestsliprow = [];
			$thirdrequestsliprow = [];
			

			

			// to get reprint request / print sequence 
			if ((isset($_GET['selective_pages_no']) && $_GET['selective_pages_no'] != "") || (isset($req->requisitiononly) && $req->requisitiononly != "")) {
				$result = DB::table('tb_cps_reprintque');
				if($printerDetails->is_branch_sub_code == 1){
		            $result = $result->join('tb_branchdetails', function($join){
		        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_cps_reprintque.cps_branchmicr_code, 3, 0)'));
		        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_cps_reprintque.branch_sub_code');
		        	    });
		        }else{
		        	$result = $result->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_cps_reprintque.cps_branchmicr_code, 3, 0)'));
		        }
		        $result = $result->where('cps_reprint_approved', 1)->get();
			}
			else{
				$result = DB::table('tb_print_sequence');            
		        if($printerDetails->is_branch_sub_code == 1){
		            $result = $result->join('tb_branchdetails', function($join){
		        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
		        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_print_sequence.branch_sub_code');
		        	    });
		        }else{
		        	$result = $result->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
		        }

		        $result = $result->skip(0)->select('tb_print_sequence.*', 'tb_branchdetails.branch_neftifsccode')
		        		->take(3)
		        		->get();
        	}
	            
        	
			$jump = 0;
			//echo "SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code";
			// ============================================================ FOR CHK SLIP ========================================================
			if (count($result) > 0) {

	            $total_leaves = 0;
	            $total_slips = 0;
	            foreach ($result as $key => $value) {
	                $total_leaves += ($value->cps_book_size * $value->cps_no_of_books);
	                $total_slips += $value->cps_no_of_books;
	            }
	            $no_pages = ceil($total_leaves / 3);


				$slipCounter = 1;
				foreach ($result as $rowresultslips) {
					$chkFrom = $rowresultslips->cps_chq_no_from;
					$chkTo = $rowresultslips->cps_chq_no_to;

					for ($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++) {
						if ($rowresultslips->cps_no_of_books > 1) {
							$chkTo = $chkFrom + $rowresultslips->cps_book_size;
						}

						if ($slipCounter % 3 == 1) {
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
														'branch_neftifsccode' => $rowresultslips->branch_neftifsccode,  
														'cps_auth_sign1' => $rowresultslips->cps_auth_sign1, 
														'cps_branchmicr_code' => $rowresultslips->cps_branchmicr_code, 
														'cps_tr_code' => $rowresultslips->cps_tr_code, 
														'cps_unique_req' => $rowresultslips->cps_unique_req, 
														'print_user' => $print_user, 
														'branch_sub_code' => $rowresultslips->branch_sub_code
													);
						} elseif ($slipCounter % 3 == 2) {
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
														'branch_neftifsccode' => $rowresultslips->branch_neftifsccode,  
														'cps_auth_sign1' => $rowresultslips->cps_auth_sign1, 
														'cps_branchmicr_code' => $rowresultslips->cps_branchmicr_code, 
														'cps_tr_code' => $rowresultslips->cps_tr_code, 
														'cps_unique_req' => $rowresultslips->cps_unique_req, 
														'print_user' => $print_user, 
														'branch_sub_code' => $rowresultslips->branch_sub_code
													);
						} elseif ($slipCounter % 3 == 0) {
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
														'branch_neftifsccode' => $rowresultslips->branch_neftifsccode,  
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

				// generate printed slip code
				$pdf = new TCPDF();
	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
				$noofbooks = 1;
				for ($j = 0; $j < count($firstrequestsliprow); $j++) {
					if (isset($firstrequestsliprow[$j])) {
						$firstrequestslipdata = $firstrequestsliprow[$j];
					} else {
						$firstrequestslipdata = "";
					}

					if (isset($secondrequestsliprow[$j])) {
						$secondrequestslipdata = $secondrequestsliprow[$j];
					} else {
						$secondrequestslipdata = "";
					}

					if (isset($thirdrequestsliprow[$j])) {
						$thirdrequestslipdata = $thirdrequestsliprow[$j];
					} else {
						$thirdrequestslipdata = "";
					}

					if(isset($req->printinbunch) && $req->printinbunch == "bunch"){
						if(isset($req->requisition) && $req->requisition=1){
							$html .= $this->printSlipService->printRequestSlip($pdf, 2, $firstrequestslipdata, $secondrequestslipdata, $thirdrequestslipdata, 3, $noofbooks, $printersinfo, $transactionKey, $printerDetails, $xpos, $ypos);
		                    $isPrintSlip = 1;
						}
					}else{
						if (!$selective || $selected_requisition) {
							$html .= $this->printSlipService->printRequestSlip($pdf, 2, $firstrequestslipdata, $secondrequestslipdata, $thirdrequestslipdata, 3, $noofbooks, $printersinfo, $transactionKey, $printerDetails, $xpos, $ypos);
		                    $isPrintSlip = 1;
						}
					}
					
				}
				if ($requisitiononly) {
					$html .= "<br />Only Requisition Slip printed.";
				}
				$pdf->Output(public_path().'/pdf/Slip.pdf', 'F');


				if(isset($req->printinbunch) && $req->printinbunch == "bunch"){
					if(isset($req->requisition) && $req->requisition=1){
						exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
					}
				}else{
					if (!$selective || $selected_requisition) {
						exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
					}
				}


				$html .= "<br>";

				$firstrequestsliprow = [];
				$secondrequestsliprow = [];
				$thirdrequestsliprow = [];

				//================================================================ END =============================================================

				foreach ($result as $rowresults) {
					$chequeno = $rowresults->cps_chq_no_from;
					if (trim($rowresults->cps_act_jointname1) != "") {
						$name1 = $rowresults->cps_act_jointname1;
						$name2 = $rowresults->cps_act_jointname2;
						$name3 = "";
					} else {
						$name1 = $rowresults->cps_auth_sign1;
						$name2 = $rowresults->cps_auth_sign2;
						$name3 = $rowresults->cps_auth_sign3;
					}

					$chkserisediff = (($rowresults->cps_chq_no_to - $rowresults->cps_chq_no_from) + 1);
					for ($i = 0; $i < $chkserisediff; $i++) {
						if ($i != 0) {
							$chequeno = $chequeno + 1;
						}

						$chequeno = str_pad($chequeno, 6, "0", STR_PAD_LEFT);

						if ($jump < $no_pages) {
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
						} elseif (($jump < ($no_pages * 2)) && ($jump >= $no_pages)) {
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
						} elseif (($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2)) {
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
					$printqueid[] = $rowresults->id;
				}

				// function to generate cheque
				$pdf = new TCPDF();
	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
				for ($j = 0, $p = 1; $j < count($firstchequerow); $j++, $p++) {
					if (isset($firstchequerow[$j])) {
						$firstchequedata = $firstchequerow[$j];
					}

					if (isset($secondchequerow[$j])) {
						$secondchequedata = $secondchequerow[$j];
					} else {
						$secondchequedata = "";
					}

					if (isset($thirdchequerow[$j])) {
						$thirdchequedata = $thirdchequerow[$j];
					} else {
						$thirdchequedata = "";
					}
					if (!$requisitiononly) {
						$isPrintCheque = 1;
						if ($selective) {
							if (in_array($p, $selective_page_array)) {
								$html .= $this->printChequeService->printCheques($pdf, 3, $firstchequedata, $secondchequedata, $thirdchequedata, 3, $printersinfo, $printerDetails, $xpos, $ypos);
							}

						} else {
							$html .= $this->printChequeService->printCheques($pdf, 3, $firstchequedata, $secondchequedata, $thirdchequedata, 3, $printersinfo, $printerDetails, $xpos, $ypos);
						}
					}
					
				}

				
				$pdf->Output(public_path().'/pdf/Cheque.pdf', 'F');
				

				if (!$requisitiononly) {
					if ($selective) {
						if (in_array($p, $selective_page_array)) {
							exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
						}

					} else {
						exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
					}
				} 

				

				$firstchequerow = [];
				$secondchequerow = [];
				$thirdchequerow = [];

				

				/*$resultInsert = $db->get_results("SELECT * FROM tb_cps_reprintque where cps_reprint_approved=1");
				foreach ($resultInsert as $rowresultsInsert) {
					insertIntoPrintCollection($rowresultsInsert);
				}*/

 
				// to check the print sequence and reprint request exist or not
	            $result = DB::table('tb_print_sequence');            
		        if($printerDetails->is_branch_sub_code == 1){
		            $result = $result->join('tb_branchdetails', function($join){
		        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
		        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_print_sequence.branch_sub_code');
		        	    });
		        }else{
		        	$result = $result->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
		        }

		        $result = $result->skip(3)->select('tb_print_sequence.*', 'tb_branchdetails.branch_neftifsccode')
		        		->take(3)
		        		->get();
	          

		        // get data to reprintque and sequece for insert in reprintcollection
				if ((isset($req->selective_pages_no) && $req->selective_pages_no != "")  || (isset($req->requisitiononly) && $req->requisitiononly != "")) {
					$resultInsert = DB::table('tb_cps_reprintque')->where('cps_reprint_approved', 1)->get();
				}
				else{
		            $resultInsert = DB::table('tb_print_sequence')->whereIn('id', $printqueid)->get();
				}
	            $printCollectionId = "";
	            $logid = [];
	            foreach ($resultInsert as $rowresultsInsert) {
	                $printid = $this->insertIntoReprintCollection($rowresultsInsert, $req);
	                $printCollectionId .= $printid.",";
	                $logid[] = $printid;
	            }
	            $printCollectionId = rtrim($printCollectionId, ',');
	            $slippdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Slip.pdf'));
	            $chequepdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Cheque.pdf'));


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
				$this->logService->insertLog('tb_reprint_req_collection', 'Reprint Cheques', $logRecordId, 'reprint', [], $logDetails,  "Total $count reprint request printed");
	            // End of code log


	            if (isset($_GET['selective_pages_no']) && $_GET['selective_pages_no'] != "") {
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
		            		'isPrintCheque' => $isPrintCheque,
		            		'sliptray' => $printersinfo[0][1],
		            		'chequetray' => $printersinfo[0][2]
		            	]
		            ];
				}else{
					if(count($result) > 0)
		            {
		            	return [
			            	'status' => 200,
			            	'message' => [
			            		'status' => true,
			            		'data' => $html,
			            		'slippdf' => $slippdf,
			            		'chequepdf' => $chequepdf,
			            		'isPrint' => true,
			            		'printer' => $printersinfo[0][0],
			            		'rand' => $randomNumber,
			            		'insertid' => $printCollectionId,
			            		'isPrintSlip' => $isPrintSlip,
			            		'isPrintCheque' => $isPrintCheque,
			            		'sliptray' => $printersinfo[0][1],
			            		'chequetray' => $printersinfo[0][2]
			            	]
			            ];

		            }else{
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
			            		'isPrintCheque' => $isPrintCheque,
			            		'sliptray' => $printersinfo[0][1],
			            		'chequetray' => $printersinfo[0][2]
			            	]
			            ];

		            }
				}
	            
	            unset($slippdf);
	            unset($chequepdf);




			} else {
				return [
	            	'status' => 203,
	            	'message' => "There are no records to print. Please check the Pending Print Request page to print again."
	            ];
			}
		} else {
			return [
            	'status' => 203,
            	'message' => "There are no records to print. Please check the Pending Print Request page to print again."
            ];
		}
	}

	// function to insert data in reprint collection
	public function insertIntoReprintCollection($result, $req) {
       	// return "ok";
        if ((isset($req->selective_pages_no) && $req->selective_pages_no != "") || (isset($req->requisitiononly) && $req->requisitiononly != "")) {
			$id = $this->insertReprintCollection($result);

			DB::table('tb_cps_reprintque')->where('id', $result->id)->delete();

			return $id;

        }else{
        	$collectionId = "";
        	$results = DB::table('tb_cps_reprintque')
        		     ->where('cps_account_no', $result->cps_account_no)
        		     ->where('cps_chq_no_to', $result->cps_chq_no_to)
        		     ->where('cps_reprint_approved', 1)
        		     ->first();
	        if($results) 
	        {
	            $collectionId = $this->insertReprintCollection($results);
	            DB::table('tb_cps_reprintque')
		     	->where('cps_account_no', $result->cps_account_no)
		     	->where('cps_chq_no_to', $result->cps_chq_no_to)
		     	->where('cps_reprint_approved', 1)
		     	->delete();
	        }
	        DB::table('tb_print_sequence')->where('id', $result->id)->delete();
	       	
	        return $collectionId;
	    }
    }

    // function to insert in reprintcollection
    public function insertReprintCollection($result){
		$reprint = new RePrintRequestCollection;
		$reprint->cps_unique_req = $result->cps_unique_req;
		$reprint->cps_micr_code = $result->cps_micr_code;
		$reprint->cps_branchmicr_code = $result->cps_branchmicr_code;
		$reprint->cps_account_no = $result->cps_account_no;
		$reprint->cps_act_name = $result->cps_act_name;
		$reprint->cps_no_of_books = $result->cps_no_of_books;
		$reprint->cps_dly_bearer_order = $result->cps_dly_bearer_order;
		$reprint->cps_book_size = $result->cps_book_size;
		$reprint->cps_tr_code = $result->cps_tr_code;
		$reprint->cps_atpar = $result->cps_atpar;
		$reprint->cps_act_jointname1 = $result->cps_act_jointname1;
		$reprint->cps_act_jointname2 = $result->cps_act_jointname2;
		$reprint->cps_auth_sign1 = $result->cps_auth_sign1;
		$reprint->cps_auth_sign2 = $result->cps_auth_sign2;
		$reprint->cps_auth_sign3 = $result->cps_auth_sign3;
		$reprint->cps_act_address1 = $result->cps_act_address1;
		$reprint->cps_act_address2 = $result->cps_act_address2;
		$reprint->cps_act_address3 = $result->cps_act_address3;
		$reprint->cps_act_address4 = $result->cps_act_address4;
		$reprint->cps_act_address5 = $result->cps_act_address5;
		$reprint->cps_act_city = $result->cps_act_city;
		$reprint->cps_state = $result->cps_state;
		$reprint->cps_country = $result->cps_country;
		$reprint->cps_emailid = $result->cps_emailid;
		$reprint->cps_act_pin = $result->cps_act_pin;
		$reprint->cps_act_telephone_res = $result->cps_act_telephone_res;
		$reprint->cps_act_telephone_off = $result->cps_act_telephone_off;
		$reprint->cps_act_mobile = $result->cps_act_mobile;
		$reprint->cps_ifsc_code = $result->cps_ifsc_code;
		$reprint->cps_chq_no_from = $result->cps_chq_no_from;
		$reprint->cps_chq_no_to = $result->cps_chq_no_to;
		$reprint->cps_micr_account_no = $result->cps_micr_account_no;
		$reprint->cps_date = date('Y-m-d');
		$reprint->cps_process_user_id = Auth::user()->adminid;
		$reprint->cps_bsr_code = $result->cps_bsr_code;
		$reprint->cps_pr_code = $result->cps_pr_code;
		$reprint->cps_short_name = $result->cps_short_name;
		$reprint->cps_issue_date = $result->cps_issue_date;
		$reprint->cps_product_code = $result->cps_product_code;
		$reprint->branch_sub_code = $result->branch_sub_code;
		if($reprint->save()){
			return $reprint->id;
		}
    }


    // function to remove reprint collection data by id
    public function removeReprintCollection($req){
    
    	$datas = explode(',', $req->id);
    	
		if(count($datas) > 0)
		{
			$id = [];
			foreach($datas as $data){
				if($data != ""){
					$id[] = $data;
				}
			}
		}
		
		$collections = DB::table('tb_reprint_req_collection')
			         ->whereIn('id', $id)
			         ->get();

		foreach($collections as $collection){
			$reprintque = new RePrintQueue;
			$reprintque->cps_unique_req = $collection->cps_unique_req;
			$reprintque->cps_micr_code = $collection->cps_micr_code;
			$reprintque->cps_branchmicr_code = $collection->cps_branchmicr_code;
			$reprintque->cps_account_no = $collection->cps_account_no;
			$reprintque->cps_act_name = $collection->cps_act_name;
			$reprintque->cps_no_of_books = $collection->cps_no_of_books;
			$reprintque->cps_dly_bearer_order = $collection->cps_dly_bearer_order;
			$reprintque->cps_book_size = $collection->cps_book_size;
			$reprintque->cps_tr_code = $collection->cps_tr_code;
			$reprintque->cps_atpar = $collection->cps_atpar;
			$reprintque->cps_act_jointname1 = $collection->cps_act_jointname1;
			$reprintque->cps_act_jointname2 = $collection->cps_act_jointname2;
			$reprintque->cps_auth_sign1 = $collection->cps_auth_sign1;
			$reprintque->cps_auth_sign2 = $collection->cps_auth_sign2;
			$reprintque->cps_auth_sign3 = $collection->cps_auth_sign3;
			$reprintque->cps_act_address1 = $collection->cps_act_address1;
			$reprintque->cps_act_address2 = $collection->cps_act_address2;
			$reprintque->cps_act_address3 = $collection->cps_act_address3;
			$reprintque->cps_act_address4 = $collection->cps_act_address4;
			$reprintque->cps_act_address5 = $collection->cps_act_address5;
			$reprintque->cps_act_city = $collection->cps_act_city;
			$reprintque->cps_state = $collection->cps_state;
			$reprintque->cps_country = $collection->cps_country;
			$reprintque->cps_emailid = $collection->cps_emailid;
			$reprintque->cps_act_pin = $collection->cps_act_pin;
			$reprintque->cps_act_telephone_res = $collection->cps_act_telephone_res;
			$reprintque->cps_act_telephone_off = $collection->cps_act_telephone_off;
			$reprintque->cps_act_mobile = $collection->cps_act_mobile;
			$reprintque->cps_ifsc_code = $collection->cps_ifsc_code;
			$reprintque->cps_chq_no_from = $collection->cps_chq_no_from;
			$reprintque->cps_chq_no_to = $collection->cps_chq_no_to;
			$reprintque->cps_micr_account_no = $collection->cps_micr_account_no;
			$reprintque->cps_date = $collection->cps_date;
			$reprintque->cps_process_user_id = $collection->cps_process_user_id;
			$reprintque->cps_reprint_approved = 0;
			$reprintque->cps_bsr_code = $collection->cps_bsr_code;
			$reprintque->cps_pr_code = $collection->cps_pr_code;
			$reprintque->cps_short_name = $collection->cps_short_name;
			$reprintque->cps_product_code = $collection->cps_product_code;
			$reprintque->branch_sub_code = $collection->branch_sub_code;
			$reprintque->save();

			DB::table('tb_reprint_req_collection')
			         ->where('id', $collection->id)
			         ->delete();
		}
		

		return true;
    } 
}