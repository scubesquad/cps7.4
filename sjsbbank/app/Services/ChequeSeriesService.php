<?php

namespace App\Services;
use App\Models\ChequeSeries;
use App\Models\Branch;
use App\Services\LogService;


class ChequeSeriesService{
	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// function to get cheque series list
	public function list()
	{
		return ChequeSeries::leftJoin('tb_branchdetails', 'tb_branchdetails.branch_id', '=',  'tb_cps_chequeseries.series_branchcode')
			   ->select('tb_cps_chequeseries.series_id', 'tb_cps_chequeseries.series_transationcode', 'tb_cps_chequeseries.series_from', 'tb_cps_chequeseries.series_to', 'tb_cps_chequeseries.series_lastno', 'tb_branchdetails.branch_name')
			   ->orderBy('series_id', 'desc');
	}

	// function to store cheque series
	public function store($req=null)
	{
		$branchId = $this->getBranchCode($req->branch_id);
		$chequeSeries = new ChequeSeries;
		$chequeSeries->series_transationcode = $req->transactioncode;
		$chequeSeries->series_branchcode = $req->branch_id;
		$chequeSeries->serise_branchcode_branch = $branchId;
		$chequeSeries->series_from = $req->series_from;
		$chequeSeries->series_to = $req->series_to;
		$chequeSeries->series_lastno = $req->series_lastno;
		$chequeSeries->serise_Bank = $req->series_bank_id;
		$chequeSeries->branch_sub_code = $req->branch_sub_code;
		if($chequeSeries->save()){
			// cheque series code log when insert
			$this->logService->insertLog('tb_cps_chequeseries', 'Cheque Series Master', $chequeSeries->series_id, 'insert', [], ['series_transationcode' => $req->transactioncode, 'series_branchcode' => $req->branch_id, 'serise_branchcode_branch' => $branchId, 'series_from' => $req->series_from, 'series_to' => $req->series_to, 'series_lastno' => $req->series_lastno, 'serise_Bank' => $req->series_bank_id, 'branch_sub_code' => $req->branch_sub_code]);
			return true;
		}
	}

	// function to get cheque series by id
	public function edit($id)
	{
		return ChequeSeries::find($id);
	}

	// function to update cheque series by id
	public function update($req=null)
	{
		$branchId = $this->getBranchCode($req->branch_id);
		$chequeSeries = ChequeSeries::find($req->id);

		// cheque series code log when update
		$this->logService->insertLog('tb_cps_chequeseries', 'Cheque Series Master', $chequeSeries->series_id, 'update', ['series_transationcode' => $chequeSeries->series_transationcode, 'series_branchcode' => $chequeSeries->series_branchcode, 'serise_branchcode_branch' => $chequeSeries->serise_branchcode_branch, 'series_from' => $chequeSeries->series_from, 'series_to' => $chequeSeries->series_to, 'series_lastno' => $chequeSeries->series_lastno, 'serise_Bank' => $chequeSeries->serise_Bank, 'branch_sub_code' => $chequeSeries->branch_sub_code], ['series_transationcode' => $req->series_transationcode, 'series_branchcode' => $req->branch_id, 'serise_branchcode_branch' => $branchId, 'series_from' => $req->series_from, 'series_to' => $req->series_to, 'series_lastno' => $req->series_lastno, 'serise_Bank' => $req->series_bank_id, 'branch_sub_code' => $req->branch_sub_code]);

		$chequeSeries->series_branchcode = $req->branch_id;
		$chequeSeries->series_transationcode = $req->transactioncode;
		$chequeSeries->serise_branchcode_branch = $branchId;
		$chequeSeries->series_from = $req->series_from;
		$chequeSeries->series_to = $req->series_to;
		$chequeSeries->series_lastno = $req->series_lastno;
		$chequeSeries->serise_Bank = $req->series_bank_id;
		$chequeSeries->branch_sub_code = $req->branch_sub_code;
		if($chequeSeries->save()){
			return true;
		}
	}

	// function to get the branch code by branch id
	public function getBranchCode($id)
	{
		return Branch::where('branch_id', $id)
		       ->value('branch_code');
	}

	// function to remove the cheque series code
	public function delete($req){
		$chequeSeries = ChequeSeries::find($req->id);

		// cheque series code log when delete
		$this->logService->insertLog('tb_cps_chequeseries', 'Cheque Series Master', $chequeSeries->series_id, 'delete', ['series_transationcode' => $chequeSeries->series_transationcode, 'series_branchcode' => $chequeSeries->series_branchcode, 'serise_branchcode_branch' => $chequeSeries->serise_branchcode_branch, 'series_from' => $chequeSeries->series_from, 'series_to' => $chequeSeries->series_to, 'series_lastno' => $chequeSeries->series_lastno, 'serise_Bank' => $chequeSeries->serise_Bank, 'branch_sub_code' => $chequeSeries->branch_sub_code], []);

		if($chequeSeries->delete()){
			return true;
		}
	}

	public function CheckSeriesExists($req){
		return ChequeSeries::where('series_transationcode', $req->transactioncode)
		       ->where('series_branchcode', $req->branch_id)
		       ->exists();
	}

	public function updateCheckSeriesExists($req){
		return ChequeSeries::where('series_transationcode', $req->transactioncode)
		       ->where('series_branchcode', $req->branch_id)
		       ->where('series_id', '!=', $req->id)
		       ->exists();
	}
}