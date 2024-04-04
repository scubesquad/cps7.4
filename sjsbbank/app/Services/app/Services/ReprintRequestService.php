<?php

namespace App\Services;

use DB;
use Log;
use App\Models\PrintRequestCollection;
use App\Services\LogService;
use App\Services\PrintQueryService;

class ReprintRequestService{
	protected $printQueryService;
	protected $logService;

	public function __construct(PrintQueryService $printQueryService, LogService $logService){
		$this->printQueryService = $printQueryService;
		$this->logService = $logService;
	}

	// to get the list of print req collection data
	public function list($req){
		$reprint = DB::table('tb_print_req_collection');

		if(isset($req->start_date) && $req->start_date != ""){
			$reprint = $reprint->whereDate('cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}

		if(isset($req->end_date) && $req->end_date != ""){
			$reprint = $reprint->whereDate('cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		return $reprint;
	}

	// copy print collection table data to reprintque table
	public function shiftPrintCollectionToReprintQue($req){
		PrintRequestCollection::select("cps_unique_req", "cps_micr_code", "cps_branchmicr_code", "cps_account_no", "cps_act_name", "cps_no_of_books", "cps_dly_bearer_order", "cps_book_size", "cps_tr_code", "cps_atpar", "cps_act_jointname1", "cps_act_jointname2", "cps_auth_sign1", "cps_auth_sign2", "cps_auth_sign3", "cps_act_address1", "cps_act_address2", "cps_act_address3", "cps_act_address4", "cps_act_address5", "cps_act_city", "cps_state", "cps_country", "cps_emailid", "cps_act_pin", "cps_act_telephone_res", "cps_act_telephone_off", "cps_act_mobile", "cps_ifsc_code", "cps_chq_no_from", "cps_chq_no_to", "cps_micr_account_no", "cps_date", "cps_process_user_id", "cps_bsr_code", "cps_pr_code", "cps_short_name", "cps_issue_date", "cps_product_code", "branch_sub_code")
	        ->whereIn('id', $req->id)
	        ->each(function ($printCollection) {
	                $reprintQue = $printCollection->replicate();
	                $reprintQue->setTable('tb_cps_reprintque');
	                $reprintQue->save();
	          });

	    // Code for log
        $logRecordId = "";
		$logDetails = [];
        $prints = $this->printQueryService->getPrintReqCollection($req->id);
        $count = count($prints);
        foreach($prints as $print){
        	if($logRecordId != "")
				$logRecordId = $logRecordId.','.$print->id;
			else
				$logRecordId = $print->id;

        	$logDetails[] = $this->printQueryService->logDetails($print);
        }
        // reprint request log when delete
		$this->logService->insertLog('tb_cps_reprintque', 'Reprint Cheques Request', $logRecordId, 'reprint-request', $logDetails, [],  "Total $count request send for reprint");
        // End of code log


	    return true;
	}

	// cheque that print req collection data exists in reprintque or not
	public function checkIsAlreadyReprintOrNot($req){
		return DB::table('tb_cps_reprintque')
			   ->join('tb_print_req_collection', 'tb_print_req_collection.cps_unique_req', '=', 'tb_cps_reprintque.cps_unique_req')
			   ->whereIn('tb_print_req_collection.id', $req->id)
			   ->exists();
	}
}