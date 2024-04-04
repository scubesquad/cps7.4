<?php

namespace App\Services;

use App\Models\PendingPrintRequest;
use App\Models\PrintSequence;
use App\Models\PrintQueue;
use DB;
use App\Models\UploadingDataStatusLog;
use Auth;
class PendingPrintRequestService{
	
	// function to get the list of pending print request
	public function list(){
		return PendingPrintRequest::select('id', 'cps_unique_req', 'cps_micr_code', 'cps_account_no', 'cps_act_name', 'cps_no_of_books', 'cps_book_size', 'cps_tr_code', 'cps_atpar', 'cps_chq_no_from', 'cps_chq_no_to', 'cps_act_address1', 'cps_act_address2', 'cps_act_address3', 'cps_act_address4', 'cps_act_address5', 'cps_act_city', 'cps_act_pin', 'cps_act_mobile','cps_status');
	}


	// function to shift pending record to uploading record
	public function shiftPendingDataTouploading($req){
		PendingPrintRequest::select("id", "cps_unique_req", "cps_micr_code", "cps_branchmicr_code", "cps_account_no", "cps_act_name", "cps_no_of_books", "cps_dly_bearer_order", "cps_book_size", "cps_tr_code", "cps_atpar", "cps_act_jointname1", "cps_act_jointname2", "cps_auth_sign1", "cps_auth_sign2", "cps_auth_sign3", "cps_act_address1", "cps_act_address2", "cps_act_address3", "cps_act_address4", "cps_act_address5", "cps_act_city", "cps_state", "cps_country", "cps_emailid", "cps_act_pin", "cps_act_telephone_res", "cps_act_telephone_off", "cps_act_mobile", "cps_ifsc_code", "cps_chq_no_from", "cps_chq_no_to", "cps_micr_account_no", "cps_date", "cps_process_user_id", "cps_bsr_code", "cps_pr_code", "cps_short_name", "cps_issue_date", "cps_product_code", "branch_sub_code")
	        ->whereIn('id', $req->id)
	        ->each(function ($pending) {
	                $upload = $pending->replicate();
	                $upload->setTable('tb_uploadingdata');
	                $upload->save();

	                $pending->delete();
	          });

	        return true;
	}

	// function to shift pending request data to pending que
	public function shiftPendingDataToPrintQueue($req){

		// query to check that cheque series will generate through file or bank
		$chqTaken = DB::table('tb_cps_settings')->value('chk_taken_from');

		if($chqTaken == 1){

			// query to check bank have branch sub code or not
			$isbranchSubCode = DB::table('tb_bankdetails')->value('is_branch_sub_code');

			// code to generate system sequence cheque series
			$results = DB::table('tb_pending_print_req')->whereIn('id', $req->id)->get();

			foreach($results as $result){
				$rowchkserise = DB::table('tb_cps_chequeseries')
							  ->where('series_transationcode', $result->cps_tr_code)
							  ->where('serise_branchcode_branch', $result->cps_branchmicr_code);
				if($isbranchSubCode){
					$rowchkserise = $rowchkserise->where('branch_sub_code', $result->branch_sub_code);
				}
				$rowchkserise = $rowchkserise->select('series_lastno')
							  ->first();

				$chequefrom = $rowchkserise->series_lastno;
				$chequeto = $chequefrom + ($result->cps_book_size * $result->cps_no_of_books) - 1;

				// save print que
				$printque = new PrintQueue;
				$printque->cps_unique_req = $result->cps_unique_req;
				$printque->cps_micr_code = $result->cps_micr_code;
				$printque->cps_branchmicr_code = $result->cps_branchmicr_code;
				$printque->cps_account_no = $result->cps_account_no;
				$printque->cps_act_name = $result->cps_act_name;
				$printque->cps_dly_bearer_order = $result->cps_dly_bearer_order;
				$printque->cps_no_of_books = $result->cps_no_of_books;
				$printque->cps_book_size = $result->cps_book_size;
				$printque->cps_tr_code = $result->cps_tr_code;
				$printque->cps_atpar = $result->cps_atpar;
				$printque->cps_act_jointname1 = $result->cps_act_jointname1;
				$printque->cps_act_jointname2 = $result->cps_act_jointname2;
				$printque->cps_auth_sign1 = $result->cps_auth_sign1;
				$printque->cps_auth_sign2 = $result->cps_auth_sign2;
				$printque->cps_auth_sign3 = $result->cps_auth_sign3;
				$printque->cps_act_address1 = $result->cps_act_address1;
				$printque->cps_act_address2 = $result->cps_act_address2;
				$printque->cps_act_address3 = $result->cps_act_address3;
				$printque->cps_act_address4 = $result->cps_act_address4;
				$printque->cps_act_address5 = $result->cps_act_address5;
				$printque->cps_act_city = $result->cps_act_city;
				$printque->cps_state = $result->cps_state;
				$printque->cps_country = $result->cps_country;
				$printque->cps_emailid = $result->cps_emailid;
				$printque->cps_act_pin = $result->cps_act_pin;
				$printque->cps_act_telephone_res = $result->cps_act_telephone_res;
				$printque->cps_act_telephone_off = $result->cps_act_telephone_off;
				$printque->cps_act_mobile = $result->cps_act_mobile;
				$printque->cps_ifsc_code = $result->cps_ifsc_code;
				$printque->cps_chq_no_from = $chequefrom;
				$printque->cps_chq_no_to = $chequeto;
				$printque->cps_micr_account_no = $result->cps_micr_account_no;
				$printque->cps_date = $result->cps_date;
				$printque->cps_process_user_id = $result->cps_process_user_id;
				$printque->cps_bsr_code = $result->cps_bsr_code;
				$printque->cps_pr_code = $result->cps_pr_code;
				$printque->cps_short_name = $result->cps_short_name;
				$printque->cps_issue_date = $result->cps_issue_date;
				$printque->cps_product_code = $result->cps_product_code;
				$printque->branch_sub_code = $result->branch_sub_code;
				$printque->save();

				// Query to increment cheque series
				$rowchkserise = DB::table('tb_cps_chequeseries')
							  ->where('series_transationcode', $result->cps_tr_code)
							  ->where('serise_branchcode_branch', $result->cps_branchmicr_code);
				if($isbranchSubCode){
					$rowchkserise = $rowchkserise->where('branch_sub_code', $result->branch_sub_code);
				}
				$rowchkserise = $rowchkserise->update(['series_lastno' => $chequeto+1]);

				DB::table('tb_pending_print_req')->where('id', $result->id)->delete();
			}
			//end of code to generate system sequence cheque series
		}else{
			// code to generate bank sequence cheque series
			PendingPrintRequest::select("id", "cps_unique_req", "cps_micr_code", "cps_branchmicr_code", "cps_account_no", "cps_act_name", "cps_no_of_books", "cps_dly_bearer_order", "cps_book_size", "cps_tr_code", "cps_atpar", "cps_act_jointname1", "cps_act_jointname2", "cps_auth_sign1", "cps_auth_sign2", "cps_auth_sign3", "cps_act_address1", "cps_act_address2", "cps_act_address3", "cps_act_address4", "cps_act_address5", "cps_act_city", "cps_state", "cps_country", "cps_emailid", "cps_act_pin", "cps_act_telephone_res", "cps_act_telephone_off", "cps_act_mobile", "cps_ifsc_code", "cps_chq_no_from", "cps_chq_no_to", "cps_micr_account_no", "cps_date", "cps_process_user_id", "cps_bsr_code", "cps_pr_code", "cps_short_name", "cps_issue_date", "cps_product_code", "branch_sub_code", "branch_id","cheque_charges")
		    ->whereIn('id', $req->id)
		    ->each(function ($pending) {
		        $printque = $pending->replicate();
		        $printque->setTable('tb_printque');
		        $printque->save();

		
				// // create status status
				$UploadingDataStatusLogNew = new UploadingDataStatusLog();
				$UploadingDataStatusLogNew->unique_no = $printque->cps_unique_req;
				$UploadingDataStatusLogNew->status = 'Printing Queue';
				$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
				$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
				$UploadingDataStatusLogNew->save();

				$pending->delete();
		    });
		    // end of code to generate bank sequence cheque series
		}

        $this->savePrintqueToSequence();
		
	    return true;
	}

	// function to store print que to sequence
	public function savePrintqueToSequence(){
		$printqueues = DB::table('tb_printque')->get();
		
        foreach($printqueues as $printque){
        	$cps_no_of_books = $printque->cps_no_of_books;
			$cps_book_size = $printque->cps_book_size;

			// code to separte book size by 1
			for($i=0;$i<$cps_no_of_books;$i++) {
				if($i==0){
					$chequeStart=$printque->cps_chq_no_from;
					// $chequeEnd=$chequeStart+($cps_book_size);
					$chequeEnd=$chequeStart+($cps_book_size-1);
				}else{
					$chequeStart=$chequeEnd+1;
					// $chequeEnd=$chequeStart+($cps_book_size);
					$chequeEnd=$chequeStart+($cps_book_size-1);
			 	}
				
				$chequefrom=$chequeStart;
				$chequeto=$chequeEnd;


				$sequence = new PrintSequence;
				$sequence->cps_unique_req = $printque->cps_unique_req;
				$sequence->cps_micr_code = $printque->cps_micr_code;
				$sequence->cps_branchmicr_code = $printque->cps_branchmicr_code;
				$sequence->cps_account_no = $printque->cps_account_no;
				$sequence->cps_act_name = $printque->cps_act_name;
				$sequence->cps_no_of_books = 1;
				$sequence->cps_dly_bearer_order = $printque->cps_dly_bearer_order;
				$sequence->cps_book_size = $printque->cps_book_size;
				$sequence->cps_tr_code = $printque->cps_tr_code;
				$sequence->cps_atpar = $printque->cps_atpar;
				$sequence->cps_act_jointname1 = $printque->cps_act_jointname1;
				$sequence->cps_act_jointname2 = $printque->cps_act_jointname2;
				$sequence->cps_auth_sign1 = $printque->cps_auth_sign1;
				$sequence->cps_auth_sign2 = $printque->cps_auth_sign2;
				$sequence->cps_auth_sign3 = $printque->cps_auth_sign3;
				$sequence->cps_act_address1 = $printque->cps_act_address1;
				$sequence->cps_act_address2 = $printque->cps_act_address2;
				$sequence->cps_act_address3 = $printque->cps_act_address3;
				$sequence->cps_act_address4 = $printque->cps_act_address4;
				$sequence->cps_act_address5 = $printque->cps_act_address5;
				$sequence->cps_act_city = $printque->cps_act_city;
				$sequence->cps_state = $printque->cps_state;
				$sequence->cps_country = $printque->cps_country;
				$sequence->cps_emailid = $printque->cps_emailid;
				$sequence->cps_act_pin = $printque->cps_act_pin;
				$sequence->cps_act_telephone_res = $printque->cps_act_telephone_res;
				$sequence->cps_act_telephone_off = $printque->cps_act_telephone_off;
				$sequence->cps_act_mobile = $printque->cps_act_mobile;
				$sequence->cps_ifsc_code = $printque->cps_ifsc_code;
				$sequence->cps_chq_no_from = $chequefrom;
				$sequence->cps_chq_no_to = $chequeto;
				$sequence->cps_micr_account_no = $printque->cps_micr_account_no;
				$sequence->cps_date = $printque->cps_date;
				$sequence->cps_process_user_id = $printque->cps_process_user_id;
				$sequence->cps_bsr_code = $printque->cps_bsr_code;
				$sequence->cps_pr_code = $printque->cps_pr_code;
				$sequence->cps_short_name = $printque->cps_short_name;
				$sequence->cps_issue_date = $printque->cps_issue_date;
				$sequence->cps_product_code = $printque->cps_product_code;
				$sequence->branch_sub_code = $printque->branch_sub_code;
				$sequence->branch_id = $printque->branch_id;
				$sequence->save();
			}
        }
	}

	// function to reject print request
	public function rejectPrintReuest($req){

		PendingPrintRequest::select("id", "cps_unique_req", "cps_micr_code", "cps_branchmicr_code", "cps_account_no", "cps_act_name", "cps_no_of_books", "cps_dly_bearer_order", "cps_book_size", "cps_tr_code", "cps_atpar", "cps_act_jointname1", "cps_act_jointname2", "cps_auth_sign1", "cps_auth_sign2", "cps_auth_sign3", "cps_act_address1", "cps_act_address2", "cps_act_address3", "cps_act_address4", "cps_act_address5", "cps_act_city", "cps_state", "cps_country", "cps_emailid", "cps_act_pin", "cps_act_telephone_res", "cps_act_telephone_off", "cps_act_mobile", "cps_ifsc_code", "cps_chq_no_from", "cps_chq_no_to", "cps_micr_account_no", "cps_date", "cps_process_user_id", "cps_bsr_code", "cps_pr_code", "cps_short_name", "cps_issue_date", "cps_product_code", "branch_sub_code")
	        ->whereIn('id', $req->id)
	        ->each(function ($pending) {
	                $upload = $pending->replicate();
	                $upload->setTable('tb_uploadingdata');

					$upload->cps_status = "Rejected By ".Auth::user()->roles[0]->name;
					$upload->created_at = date('Y-m-d H:i:s');
					$upload->created_by =Auth::user()->adminid;
	                $upload->save();

					// create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $upload->cps_unique_req;
					$UploadingDataStatusLogNew->status = "Rejected By ".Auth::user()->roles[0]->name;
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
					$UploadingDataStatusLogNew->save();

					
	                $pending->delete();
	          });

	        return true;
	}

}