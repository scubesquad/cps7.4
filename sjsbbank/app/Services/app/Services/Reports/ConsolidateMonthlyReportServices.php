<?php

namespace App\Services\Reports;

use DB;
use App\Services\CommonService;

class ConsolidateMonthlyReportServices{
	protected $commonService;

	public function __construct(CommonService $commonService){
		$this->commonService = $commonService;
	}

	public function getConsolidateMonthlyReport($req){
		$report = DB::table('tb_print_req_collection');

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

		$report = $report->groupBy(['cps_branchmicr_code', 'branch_sub_code', 'cps_book_size', 'cps_tr_code'])
				->select('cps_branchmicr_code', 'cps_tr_code', 'cps_book_size', DB::raw('sum(cps_no_of_books) as cps_no_of_books'), DB::raw('sum(cps_book_size * cps_no_of_books) as total_leave'));

		return $report;
	}

	// function to get consolidate report
	public function getPdfConsolidatedMonthlyReport($req){
		// code to get bank is branch sub code
		$bank = $this->commonService->getBankName();

		$reports = DB::table('tb_print_req_collection');
		if($bank->is_branch_sub_code == 1){
            $reports = $reports->join('tb_branchdetails', function($join){
        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_req_collection.cps_branchmicr_code, 3, 0)'));
        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_print_req_collection.branch_sub_code');
        	    });
        }else{
        	$reports = $reports->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_req_collection.cps_branchmicr_code, 3, 0)'));
        }
        

		if($req->start_date != ""){
			$reports = $reports->whereDate('tb_print_req_collection.cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}else{
			$reports = $reports->whereDate('tb_print_req_collection.cps_date', date('Y-m-d'));
		}

		if($req->end_date != ""){
			$reports = $reports->whereDate('tb_print_req_collection.cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		if($req->branch != ""){
			$reports = $reports->where('tb_print_req_collection.cps_branchmicr_code', $req->branch);
		}

		$reports = $reports->select('tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.branch_sub_code', 'tb_branchdetails.branch_name')->distinct()->get();

		$data = [];
		foreach($reports as $report){
			$results = $this->getFilterPrintReqCollection($req, $report->cps_branchmicr_code, $report->branch_sub_code);
			$data[] = [
				'branch_name' => $report->branch_name,
				'branch_code' => $report->cps_branchmicr_code,
				'data' => $results->groupBy(['cps_tr_code'])
			];
		}

		return $data;
	}

	// function to get Filter print req collection
	public function getFilterPrintReqCollection($req, $branchCode, $branchSubCode){

		$report = $this->getConsolidateMonthlyReport($req);

		$report = $report->where('tb_print_req_collection.cps_branchmicr_code', $branchCode)
				->where('tb_print_req_collection.branch_sub_code', $branchSubCode)
				->get();

		return $report;
	}
}