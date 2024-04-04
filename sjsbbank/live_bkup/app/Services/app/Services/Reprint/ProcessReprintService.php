<?php

namespace App\Services\Reprint;

use DB;
use App\Models\PrintSequence;
use App\Services\LogService;
use App\Services\PrintQueryService;
use Log;

class ProcessReprintService{
	protected $printQueryService;
	protected $logService;

	public function __construct(PrintQueryService $printQueryService, LogService $logService){
		$this->printQueryService = $printQueryService;
		$this->logService = $logService;
	}

	public function list(){
		return DB::table('tb_cps_reprintque')
			   ->where('cps_reprint_approved', 0);
	}

	// function to change reprint request status and add print sequence
	public function update($req){
		DB::table('tb_cps_reprintque')
		->whereIn('id', $req->id)
		->update([
			'cps_reprint_approved' => 1
		]);
		// add in print sequence
		if(isset($req->printinbunch) && $req->printinbunch == "bunch"){
			$rePrintqueues = DB::table('tb_cps_reprintque')->where('cps_reprint_approved', 1)->get();
			// Log::info($req->printinbunch."1");

	        foreach($rePrintqueues as $rePrintque){
	        	$cps_no_of_books = $rePrintque->cps_no_of_books;
				$cps_book_size = $rePrintque->cps_book_size;
				for($i=0;$i<$cps_no_of_books;$i++) {
					if($i==0){
						$chequeStart=$rePrintque->cps_chq_no_from;
						$chequeEnd=$chequeStart+($cps_book_size-1);
					}else{
						$chequeStart=$chequeEnd+1;
						$chequeEnd=$chequeStart+($cps_book_size-1);
				 	}
					
					$chequefrom=$chequeStart;
					$chequeto=$chequeEnd;


					$sequence = new PrintSequence;
					$sequence->cps_unique_req = $rePrintque->cps_unique_req;
					$sequence->cps_micr_code = $rePrintque->cps_micr_code;
					$sequence->cps_branchmicr_code = $rePrintque->cps_branchmicr_code;
					$sequence->cps_account_no = $rePrintque->cps_account_no;
					$sequence->cps_act_name = $rePrintque->cps_act_name;
					$sequence->cps_no_of_books = 1;
					$sequence->cps_dly_bearer_order = $rePrintque->cps_dly_bearer_order;
					$sequence->cps_book_size = $rePrintque->cps_book_size;
					$sequence->cps_tr_code = $rePrintque->cps_tr_code;
					$sequence->cps_atpar = $rePrintque->cps_atpar;
					$sequence->cps_act_jointname1 = $rePrintque->cps_act_jointname1;
					$sequence->cps_act_jointname2 = $rePrintque->cps_act_jointname2;
					$sequence->cps_auth_sign1 = $rePrintque->cps_auth_sign1;
					$sequence->cps_auth_sign2 = $rePrintque->cps_auth_sign2;
					$sequence->cps_auth_sign3 = $rePrintque->cps_auth_sign3;
					$sequence->cps_act_address1 = $rePrintque->cps_act_address1;
					$sequence->cps_act_address2 = $rePrintque->cps_act_address2;
					$sequence->cps_act_address3 = $rePrintque->cps_act_address3;
					$sequence->cps_act_address4 = $rePrintque->cps_act_address4;
					$sequence->cps_act_address5 = $rePrintque->cps_act_address5;
					$sequence->cps_act_city = $rePrintque->cps_act_city;
					$sequence->cps_state = $rePrintque->cps_state;
					$sequence->cps_country = $rePrintque->cps_country;
					$sequence->cps_emailid = $rePrintque->cps_emailid;
					$sequence->cps_act_pin = $rePrintque->cps_act_pin;
					$sequence->cps_act_telephone_res = $rePrintque->cps_act_telephone_res;
					$sequence->cps_act_telephone_off = $rePrintque->cps_act_telephone_off;
					$sequence->cps_act_mobile = $rePrintque->cps_act_mobile;
					$sequence->cps_ifsc_code = $rePrintque->cps_ifsc_code;
					$sequence->cps_chq_no_from = $chequefrom;
					$sequence->cps_chq_no_to = $chequeto;
					$sequence->cps_micr_account_no = $rePrintque->cps_micr_account_no;
					$sequence->cps_date = $rePrintque->cps_date;
					$sequence->cps_process_user_id = $rePrintque->cps_process_user_id;
					$sequence->cps_bsr_code = $rePrintque->cps_bsr_code;
					$sequence->cps_pr_code = $rePrintque->cps_pr_code;
					$sequence->cps_short_name = $rePrintque->cps_short_name;
					$sequence->cps_issue_date = $rePrintque->cps_issue_date;
					$sequence->cps_product_code = $rePrintque->cps_product_code;
					$sequence->branch_sub_code = $rePrintque->branch_sub_code;
					$sequence->save();
				}
	        }
		}

		return true;
	}

	// function to remove reprint request
	public function delete($req){
		// DB::table('tb_cps_reprintque')
		// ->whereIn('id', $req->id)
		// ->delete();

		$reprintQueues = DB::table('tb_cps_reprintque')->whereIn('id', $req->id)->get();

		$total = DB::table('tb_cps_reprintque')->whereIn('id', $req->id)->count();
		$count = count($reprintQueues);

		$logRecordId = "";
		$logDetails = [];
		foreach($reprintQueues as $reprintQueue){
			if($logRecordId != "")
				$logRecordId = $logRecordId.','.$reprintQueue->id;
			else
				$logRecordId = $reprintQueue->id;
			$logDetails[] = $this->printQueryService->logDetails($reprintQueue);

			DB::table('tb_cps_reprintque')
			->where('id', $reprintQueue->id)
			->delete();
		}
        // reprint request log when delete
		$this->logService->insertLog('tb_cps_reprintque', 'Reprint Cheques', $logRecordId, 'delete', $logDetails, [],  "Total $total/$count reprint request deleted");
        // End of code log

		return true;
	}
}