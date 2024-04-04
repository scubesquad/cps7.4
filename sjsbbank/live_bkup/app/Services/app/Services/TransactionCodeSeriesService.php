<?php
namespace App\Services;

use App\Models\TransactionCode;
use App\Services\LogService;

class TransactionCodeSeriesService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// function to get list of transaction code
	public function list(){
		return TransactionCode::select('transactioncode_id', 'transactioncodedescription', 'transactioncode', 'transactionstatus', 'alphacode')
		       ->orderBy('transactioncode_id', 'desc');
	}

	// function to store transaction code
	public function store($req=null){
		$transactionCode = new TransactionCode;
		$transactionCode->transactioncodedescription = $req->transactioncodedescription;
		$transactionCode->transactioncode = $req->transactioncode;
		$transactionCode->transactionstatus = $req->transactionstatus;
		$transactionCode->alphacode = $req->alphacode;
		if($transactionCode->save()){
			// transaction code log when insert
			$this->logService->insertLog('tb_cps_transactioncodes', 'Transaction Code Master', $transactionCode->transactioncode_id, 'insert', [], ['transactioncodedescription' => $req->transactioncodedescription, 'transactioncode' => $req->transactioncode, 'transactionstatus' => $req->transactionstatus, 'alphacode' => $req->alphacode]);
			return true;
		}
	}

	// function to get transaction code by id
	public function edit($id){
		return TransactionCode::find($id);
	}

	// function to update transaction code by id
	public function update($req=null){
		$transactionCode = TransactionCode::find($req->transactioncode_id);

		// transaction code log when insert
		$this->logService->insertLog('tb_cps_transactioncodes', 'Transaction Code Master', $transactionCode->transactioncode_id, 'update', ['transactioncodedescription' => $transactionCode->transactioncodedescription, 'transactioncode' => $transactionCode->transactioncode, 'transactionstatus' => $transactionCode->transactionstatus, 'alphacode' => $transactionCode->alphacode], ['transactioncodedescription' => $req->transactioncodedescription, 'transactioncode' => $req->transactioncode, 'transactionstatus' => $req->transactionstatus, 'alphacode' => $req->alphacode]);

		$transactionCode->transactioncodedescription = $req->transactioncodedescription;
		$transactionCode->transactioncode = $req->transactioncode;
		$transactionCode->transactionstatus = $req->transactionstatus;
		$transactionCode->alphacode = $req->alphacode;
		if($transactionCode->save()){
			return true;
		}
	}

	// function to remove the transaction code
	public function delete($req){
		$transactionCode = TransactionCode::find($req->id);

		// transaction code log when delete
		$this->logService->insertLog('tb_cps_transactioncodes', 'Transaction Code Master', $transactionCode->transactioncode_id, 'delete', ['transactioncodedescription' => $transactionCode->transactioncodedescription, 'transactioncode' => $transactionCode->transactioncode, 'transactionstatus' => $transactionCode->transactionstatus, 'alphacode' => $transactionCode->alphacode], []);

		if($transactionCode->delete()){
			return true;
		}
	}
}