<?php

namespace App\Services\Reports;

use DB;

class PrintedReportServices{
	public function getPrintedReport($req){
		$report = DB::table('tb_print_req_collection')
				->leftJoin('tb_printadmin', 'tb_printadmin.adminid', '=', 'tb_print_req_collection.cps_process_user_id')
				->leftJoin('tb_cps_transactioncodes', 'tb_cps_transactioncodes.transactioncode', '=', 'tb_print_req_collection.cps_tr_code')
				->select('tb_printadmin.username', 'tb_cps_transactioncodes.transactioncodedescription', 'tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.cps_account_no', 'tb_print_req_collection.cps_act_name', 'tb_print_req_collection.cps_no_of_books', 'tb_print_req_collection.cps_book_size', 'tb_print_req_collection.cps_chq_no_from', 'tb_print_req_collection.cps_chq_no_to', 'tb_print_req_collection.cps_date');

		if($req->start_date != ""){
			$report = $report->whereDate('tb_print_req_collection.cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}else{
			$report = $report->whereDate('tb_print_req_collection.cps_date', date('Y-m-d'));
		}

		if($req->end_date != ""){
			$report = $report->whereDate('tb_print_req_collection.cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		if($req->branch != ""){
			$report = $report->where('tb_print_req_collection.cps_branchmicr_code', $req->branch);
		}

		if($req->transaction != ""){
			$report = $report->where('tb_print_req_collection.cps_tr_code', $req->transaction);
		}

		return $report;
	}
}