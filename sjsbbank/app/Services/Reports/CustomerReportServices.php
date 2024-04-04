<?php

namespace App\Services\Reports;

use DB;

class CustomerReportServices{
	public function getCustomerReport($req){
		$report = DB::table('tb_print_req_collection')
				->leftJoin('tb_printadmin', 'tb_printadmin.adminid', '=', 'tb_print_req_collection.cps_process_user_id')
				->select('tb_printadmin.username', 'tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.cps_account_no', 'tb_print_req_collection.cps_act_name', 'tb_print_req_collection.cps_no_of_books', 'tb_print_req_collection.cps_book_size', 'tb_print_req_collection.cps_chq_no_from', 'tb_print_req_collection.cps_chq_no_to', 'tb_print_req_collection.cps_date');

		if($req->name != ""){
			$report = $report->where('tb_print_req_collection.cps_act_name', 'like', '%'.$req->name.'%');
		}else{
			$report = $report->whereNull('tb_print_req_collection.cps_act_name');
		}

		return $report;
	}
}