<?php

namespace App\Services\Reports;

use DB;
use App\Services\CommonService;

class ConsolidateDailyReportServices{
	protected $commonService;

	public function __construct(CommonService $commonService){
		$this->commonService = $commonService;
	}

	public function getConsolidatedDailyReport($req){
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

		if($req->transaction != ""){
			$report = $report->where('tb_print_req_collection.cps_tr_code', $req->transaction);
		}

		return $report;
	}

	public function getPdfConsolidatedDailyReport($req){
		// code to get bank is branch sub code
		$bank = $this->commonService->getBankName();

		// Code to get distinct branch of print req collection
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

		if($req->transaction != ""){
			$reports = $reports->where('tb_print_req_collection.cps_tr_code', $req->transaction);
		}

		$reports = $reports->select('tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.branch_sub_code', 'tb_branchdetails.branch_name')->distinct()->get();

		
		$data = [];
		foreach($reports as $report){
			$data[] = [
				'branch_name' => $report->branch_name,
				'branch_code' => $report->cps_branchmicr_code,
				'data' => $this->getFilterPrintReqCollection($req,$report->cps_branchmicr_code, $report->branch_sub_code)
			];
		}

		return $data;
	}

	// function to get Filter print req collection
	public function getFilterPrintReqCollection($req, $branchCode, $branchSubCode){
		$report = $this->getConsolidatedDailyReport($req);

		$report = $report->leftJoin('tb_cps_transactioncodes', 'tb_cps_transactioncodes.transactioncode', '=', 'tb_print_req_collection.cps_tr_code')
				->where('tb_print_req_collection.cps_branchmicr_code', $branchCode)
				->where('tb_print_req_collection.branch_sub_code', $branchSubCode)
				->select('tb_cps_transactioncodes.transactioncodedescription', 'tb_print_req_collection.cps_account_no', 'tb_print_req_collection.cps_chq_no_from', 'tb_print_req_collection.cps_chq_no_to', 'tb_print_req_collection.cps_no_of_books', 'tb_print_req_collection.cps_book_size', 'tb_print_req_collection.cps_act_name', 'tb_print_req_collection.cps_date')
				->get();

		return $report;
	}

}