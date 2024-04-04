<?php

namespace App\Services;

use DB;
use Auth;
use TCPDF;
use App\Models\PrintRequestCollection;
use App\Services\PrintChequeService;
use App\Services\PrintSlipService;
use App\Services\PrintQueryService;
use App\Services\LogService;
use Log;
use App\Models\UploadingDataStatusLog;

class PrintService
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

	public function print(){
	    ini_set("max_execution_time", 300000);
	    $html = "";
	    $randomNumber =  rand(1,10000000000); //pdf generating random number
	    $print_user = Auth::user()->userid; // name who is printing
	    $xpos = $this->printQueryService->getXPosition();  //to get the x position of cheque & slip
	    $ypos = $this->printQueryService->getYPosition();  //to get the y position of cheque & slip

	    // to  get the transaction key value of name and code
	    $transactionKey = $this->printQueryService->getTransactionKeyValue();
	    


	    if ($this->printQueryService->checkPrintqueEmptyOrNot()) 
	    {
	    	//  to get bank details and printer inffo
	        $printersinfo = "";

	        $bank = $this->printQueryService->getBankDetails();

	        // if printer is not set in bank master
	        if (!empty($bank->bank_printers)) {
	            $printersinfo = unserialize($bank->bank_printers);
	        } else {
	            return [
	            	'status' => 203,
	            	'message' => "Please enter printer details in bank master"
	            ];
	        }

	        $firstchequerow = [];
	        $secondchequerow = [];
	        $thirdchequerow = [];
	        $printQueueId = [];

	        $firstrequestsliprow = [];
	        $secondrequestsliprow = [];
	        $thirdrequestsliprow = [];
	       
	        // to get first three data of the sequence table 
            $result = $this->printQueryService->getFirstThreeSequence($bank, 0);

	        
	        // ============================================================ FOR CHK SLIP ========================================================
	        if (count($result) > 0) {
	            $bunch_count = 0;
	            // --> Loop start for bunch printing
	        
	            // count no of pages
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

	                for ($slips = 0; $slips < $rowresultslips->cps_no_of_books; $slips++) {
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
	                            'cps_act_mobile' => $rowresultslips->cps_act_mobile,
	                            'cps_account_no' => $rowresultslips->cps_account_no,
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
	                            'cps_act_mobile' => $rowresultslips->cps_act_mobile, 
	                            'cps_account_no' => $rowresultslips->cps_account_no, 
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
	                            'cps_act_mobile' => $rowresultslips->cps_act_mobile,
	                            'cps_account_no' => $rowresultslips->cps_account_no,
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

	            // generate first three data slip
	            $pdf = new TCPDF;

	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
	            $noofbooks = 1;
	            // $html = "";
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

	                // funtion where write the slip generate code
	                $html .= $this->printSlipService->printRequestSlip($pdf, 2, $firstrequestslipdata, $secondrequestslipdata, $thirdrequestslipdata, 3, $noofbooks, $printersinfo, $transactionKey, $bank, $xpos, $ypos);
	                $noofbooks++;
	            }
	            $html .= "<br>";
	            $pdf->Output(public_path().'/pdf/Slip.pdf', 'F');
				exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");

	            $html .= "<br>";
	           
	          

	            // echo "<br />";
	            //================================================================ END =============================================================
	            $jump = 0;
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
	                        $firstchequerow[] = [
	                            'chequeno' => $chequeno, 
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
	                            'branch_sub_code' => $rowresults->branch_sub_code
	                        ];
	                    } elseif (($jump < ($no_pages * 2)) && ($jump >= $no_pages)) {
	                        $secondchequerow[] = [
	                            'chequeno' => $chequeno, 
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
	                            'branch_sub_code' => $rowresults->branch_sub_code
	                        ];
	                    } elseif (($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2)) {
	                        $thirdchequerow[] = [
	                            'chequeno' => $chequeno, 
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
	                            'branch_sub_code' => $rowresults->branch_sub_code
	                        ];
	                    }
	                    $jump++;
	                }
	                
	                $printQueueId[] = $rowresults->id;
	            }
	            
	            // generate first three data cheque
	            $pdf = new TCPDF();

	            $pdf->setPrintHeader(false);
	            $pdf->setPrintFooter(false);
	            
	            for ($j = 0; $j < count($firstchequerow); $j++) {
	                if (isset($firstchequerow[$j])) {
	                    $firstchequedata =  $firstchequerow[$j];
	                }

	                if (isset($secondchequerow[$j])) {
	                    $secondchequedata =  $secondchequerow[$j];
	                } else {
	                    $secondchequedata = "";
	                }

	                if (isset($thirdchequerow[$j])) {
	                    $thirdchequedata =  $thirdchequerow[$j];
	                } else {
	                    $thirdchequedata = "";
	                }
	                // function where write the generate the cheque data
	                $html .= $this->printChequeService->printCheques($pdf, 3, $firstchequedata, $secondchequedata, $thirdchequedata, 3, $printersinfo, $bank, $xpos, $ypos);
	            }

	            $pdf->Output(public_path().'/pdf/Cheque.pdf', 'F');
				
				exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".public_path()."\pdf\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");

				
	            // to check the sequence table have data or not
        		$result = $this->printQueryService->getFirstThreeSequence($bank, 3);
	            // Reset all arrays

	        	// to get the print sequece data of that id which generate the cheque
	            $resultInsert = $this->printQueryService->getPrintSequenceById($printQueueId);
	            

				
	            // logic to save data in print collection table and remove from print que and sequece table
	            $printCollectionId = "";
				$logid = [];
	            foreach ($resultInsert as $rowresultsInsert) {
	                $printid = $this->insertIntoPrintCollection($rowresultsInsert);
	                $printCollectionId .= $printid.",";
	                $logid[] = $printid;
	            }
	            $printCollectionId = rtrim($printCollectionId, ',');
	            // end of logic to save data in print collection table and remove from print que and sequece table
	         	
	         	// convert generate pdf in base64
	            $slippdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Slip.pdf'));
	            $chequepdf = "data:application/pdf;base64,".base64_encode(file_get_contents(public_path().'/pdf/Cheque.pdf'));
	            
	            // remove the generate cheque and slip file
	            // unlink(public_path().'/pdf/Slip.pdf');
	            // unlink(public_path().'/pdf/Cheque.pdf');
	            // $counts = ($_REQUEST['count']-1)*3;

	            // Code for log
	            $logRecordId = "";
				$logDetails = [];
	            $prints = $this->printQueryService->getPrintReqCollection($logid);
	            $count = count($prints);
	            foreach($prints as $print){
	            	if($logRecordId != "")
						$logRecordId = $logRecordId.','.$print->id;
					else
						$logRecordId = $print->id;

	            	$logDetails[] = $this->printQueryService->logDetails($print);
	            }
	            // print log when delete
				$this->logService->insertLog('tb_print_req_collection', 'Print Cheques', $logRecordId, 'print', [], $logDetails,  "Total $count record printed");
	            // End of code log

	            if(count((array)$result))
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
		            		'sliptray' => $printersinfo[0][1],
		            		'chequetray' => $printersinfo[0][2]
		            	]
		            ];
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

	// function to insert printque data to print req collection
	public function insertIntoPrintCollection($result){
		$results = DB::table('tb_printque')
				 ->where('cps_account_no', $result->cps_account_no)
				 ->where('cps_chq_no_to', $result->cps_chq_no_to)
				 ->first();
		
		
        $collectionId = "";
		if($results) 
        {
            $printReqCollection = new PrintRequestCollection();
            $printReqCollection->cps_unique_req = $results->cps_unique_req;
            $printReqCollection->cps_micr_code = $results->cps_micr_code;
            $printReqCollection->cps_branchmicr_code = $results->cps_branchmicr_code;
            $printReqCollection->cps_account_no = $results->cps_account_no;
            $printReqCollection->cps_act_name = $results->cps_act_name;
            $printReqCollection->cps_no_of_books = $results->cps_no_of_books;
            $printReqCollection->cps_dly_bearer_order = $results->cps_dly_bearer_order;
            $printReqCollection->cps_book_size = $results->cps_book_size;
            $printReqCollection->cps_tr_code = $results->cps_tr_code;
            $printReqCollection->cps_atpar = $results->cps_atpar;
            $printReqCollection->cps_act_jointname1 = $results->cps_act_jointname1;
            $printReqCollection->cps_act_jointname2 = $results->cps_act_jointname2;
            $printReqCollection->cps_auth_sign1 = $results->cps_auth_sign1;
            $printReqCollection->cps_auth_sign2 = $results->cps_auth_sign2;
            $printReqCollection->cps_auth_sign3 = $results->cps_auth_sign3;
            $printReqCollection->cps_act_address1 = $results->cps_act_address1;
            $printReqCollection->cps_act_address2 = $results->cps_act_address2;
            $printReqCollection->cps_act_address3 = $results->cps_act_address3;
            $printReqCollection->cps_act_address4 = $results->cps_act_address4;
            $printReqCollection->cps_act_address5 = $results->cps_act_address5;
            $printReqCollection->cps_act_city = $results->cps_act_city;
            $printReqCollection->cps_state = $results->cps_state;
            $printReqCollection->cps_country = $results->cps_country;
            $printReqCollection->cps_emailid = $results->cps_emailid;
            $printReqCollection->cps_act_pin = $results->cps_act_pin;
            $printReqCollection->cps_act_telephone_res = $results->cps_act_telephone_res;
            $printReqCollection->cps_act_telephone_off = $results->cps_act_telephone_off;
            $printReqCollection->cps_act_mobile = $results->cps_act_mobile;
            $printReqCollection->cps_ifsc_code = $results->cps_ifsc_code;
            $printReqCollection->cps_chq_no_from = $results->cps_chq_no_from;
            $printReqCollection->cps_chq_no_to = $results->cps_chq_no_to;
            $printReqCollection->cps_micr_account_no = $results->cps_micr_account_no;
            $printReqCollection->cps_date = date('Y-m-d');
            $printReqCollection->cps_process_user_id = Auth::user()->adminid;
            $printReqCollection->cps_bsr_code = $results->cps_bsr_code;
            $printReqCollection->cps_pr_code = $results->cps_pr_code;
            $printReqCollection->cps_short_name = $results->cps_short_name;
            $printReqCollection->cps_issue_date = $results->cps_issue_date;
            $printReqCollection->cps_product_code = $results->cps_product_code;
            $printReqCollection->branch_sub_code = $results->branch_sub_code;
            $printReqCollection->branch_id = $results->branch_id;
            $printReqCollection->cheque_charges = $results->cheque_charges;
            $printReqCollection->created_at = date('Y-m-d H:i:s');
            $printReqCollection->created_by = Auth::user()->adminid;
			$printReqCollection->cps_status = 'Printed';
            $printReqCollection->save();

            $collectionId = $printReqCollection->id;
			
			// create status status
			$UploadingDataStatusLogNew = new UploadingDataStatusLog();
			$UploadingDataStatusLogNew->unique_no = $printReqCollection->cps_unique_req;
			$UploadingDataStatusLogNew->status = 'Printed';
			$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
			$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
			$UploadingDataStatusLogNew->save();
			
            DB::table('tb_printque')
	        ->where('id', $results->id)
	        ->delete();
        }

       

        DB::table('tb_print_sequence')
        ->where('id', $result->id)
        ->delete();

        return $collectionId;
        
	}


	// function to remove print request collection data
	public function removePrintCollection($req){

		$id = explode(',', $req->id);
		
		PrintRequestCollection::select("id", "cps_unique_req", "cps_micr_code", "cps_branchmicr_code", "cps_account_no", "cps_act_name", "cps_no_of_books", "cps_dly_bearer_order", "cps_book_size", "cps_tr_code", "cps_atpar", "cps_act_jointname1", "cps_act_jointname2", "cps_auth_sign1", "cps_auth_sign2", "cps_auth_sign3", "cps_act_address1", "cps_act_address2", "cps_act_address3", "cps_act_address4", "cps_act_address5", "cps_act_city", "cps_state", "cps_country", "cps_emailid", "cps_act_pin", "cps_act_telephone_res", "cps_act_telephone_off", "cps_act_mobile", "cps_ifsc_code", "cps_chq_no_from", "cps_chq_no_to", "cps_micr_account_no", "cps_date", "cps_process_user_id", "cps_bsr_code", "cps_pr_code", "cps_short_name", "cps_issue_date", "cps_product_code", "branch_sub_code")
	        ->whereIn('id', $id)
	        ->each(function ($printReqCollection) {
	                $pending = $printReqCollection->replicate();
	                $pending->setTable('tb_pending_print_req');
	                $pending->save();

	                $printReqCollection->delete();
	        });

	        return true;
	}
}