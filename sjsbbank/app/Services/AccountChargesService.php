<?php

namespace App\Services;
use App\Models\AccountCharges;
use App\Models\Branch;
use App\Services\LogService;


class AccountChargesService{
	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// function to get cheque series list
	public function list()
	{
		return AccountCharges::select('tb_account_charges.id', 'tb_account_charges.book_size', 'tb_account_charges.charges')
			   ->orderBy('id', 'desc');
	}

	// function to store cheque series
	public function store($req=null)
	{
		$accountCharges = new AccountCharges;
		$accountCharges->book_size = $req->book_size;
		$accountCharges->charges = $req->charges;
		if($accountCharges->save()){
			// cheque series code log when insert
			//$this->logService->insertLog('tb_account_charges', 'Account Charges Master', $accountCharges->id, 'insert', [], ['book_size' => $req->book_size, 'charges' => $req->charges]);
			return true;
		}
	}

	// function to get cheque series by id
	public function edit($id)
	{
		return AccountCharges::find($id);
	}

	// function to update cheque series by id
	public function update($req=null)
	{
		$accountCharges = AccountCharges::find($req->id);
		//$this->logService->insertLog('tb_account_charges', 'Account Charges Master', $accountCharges->id, 'update', ['book_size' => $req->book_size, 'charges' => $req->charges]);
		// cheque series code log when update
		
		$accountCharges->book_size = $req->book_size;
		$accountCharges->charges = $req->charges;
		if($accountCharges->save()){
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
		$accountCharges = AccountCharges::find($req->id);

		// cheque series code log when delete
		$this->logService->insertLog('tb_account_charges', 'Account Charges Master', $accountCharges->id, 'delete', ['book_size' => $req->book_size, 'charges' => $req->charges], []);

		if($accountCharges->delete()){
			return true;
		}
	}

	public function CheckSeriesExists($req){
		return AccountCharges::where('series_transationcode', $req->transactioncode)
		       ->where('series_branchcode', $req->branch_id)
		       ->exists();
	}

	public function updateCheckSeriesExists($req){
		return AccountCharges::where('series_transationcode', $req->transactioncode)
		       ->where('series_branchcode', $req->branch_id)
		       ->where('id', '!=', $req->id)
		       ->exists();
	}
}