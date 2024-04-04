<?php

namespace App\Services;

use App\Models\Bank;
use App\Services\LogService;

class BankService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// funtion to get single bank details
	public function edit(){
		return Bank::first();
	}

	// funtion to update bank
	public function update($req=null){
		$arrayPrinters=array();	
		foreach($_REQUEST['printername'] as $key=>$value)
		{
			$arrayPrinters[] = array($value,$_REQUEST['printertray1'][$key],$_REQUEST['printertray2'][$key]);
		}

		$bank  = Bank::firstOrNew(['bank_id' => 1]);

		// bank log when bank update
		$this->logService->insertLog('tb_bankdetails', 'Bank Master', $bank->bank_id, 'update', ['bank_name' => $bank->bank_name, 'bank_code' => $bank->bank_code, 'bank_address1' => $bank->bank_address1, 'bank_address2' => $bank->bank_address2, 'bank_country_id' => $bank->bank_country_id, 'bank_state_id' => $bank->bank_state_id, 'bank_pin' => $bank->bank_pin, 'bank_contact_no1' => $bank->bank_contact_no1, 'bank_contact_no2' => $bank->bank_contact_no2, 'bank_contact_per1' => $bank->bank_contact_per1, 'bank_contact_per2' => $bank->bank_contact_per2, 'bank_contact_per_LL1' => $bank->bank_contact_per_LL1, 'bank_contact_per_LL2' => $bank->bank_contact_per_LL2, 'bank_emailid' => $bank->bank_emailid, 'bank_emailid2' => $bank->bank_emailid2, 'bank_website' => $bank->bank_website, 'bank_printers' => $bank->bank_printers, 'is_branch_sub_code' => $bank->is_branch_sub_code, 'number_digit_sub_code' => $bank->number_digit_sub_code, 'starting_index_sub_code' => $bank->starting_index_sub_code], ['bank_name' => $req->bank_name, 'bank_code' => $req->bank_code, 'bank_address1' => $req->bank_address1, 'bank_address2' => $req->bank_address2, 'bank_country_id' => $req->bank_country_id, 'bank_state_id' => $req->bank_state_id, 'bank_pin' => $req->bank_pin, 'bank_contact_no1' => $req->bank_contact_no1, 'bank_contact_no2' => $req->bank_contact_no2, 'bank_contact_per1' => $req->bank_contact_per1, 'bank_contact_per2' => $req->bank_contact_per2, 'bank_contact_per_LL1' => $req->bank_contact_per_LL1, 'bank_contact_per_LL2' => $req->bank_contact_per_LL2, 'bank_emailid' => $req->bank_emailid, 'bank_emailid2' => $req->bank_emailid2, 'bank_website' => $req->bank_website, 'bank_printers' => serialize($arrayPrinters), 'is_branch_sub_code' => $req->is_branch_sub_code, 'number_digit_sub_code' => $req->number_digit_sub_code, 'starting_index_sub_code' => $req->starting_index_sub_code]);

		$bank->bank_name = $req->bank_name;
		$bank->bank_code = $req->bank_code;
		$bank->bank_address1 = $req->bank_address1;
		$bank->bank_address2 = $req->bank_address2;
		$bank->bank_country_id = $req->bank_country_id;
		$bank->bank_state_id = $req->bank_state_id;
		$bank->bank_pin = $req->bank_pin;
		$bank->bank_contact_no1 = $req->bank_contact_no1;
		$bank->bank_contact_no2 = $req->bank_contact_no2;
		$bank->bank_contact_per1 = $req->bank_contact_per1;
		$bank->bank_contact_per2 = $req->bank_contact_per2;
		$bank->bank_contact_per_LL1 = $req->bank_contact_per_LL1;
		$bank->bank_contact_per_LL2 = $req->bank_contact_per_LL2;
		$bank->bank_emailid = $req->bank_emailid;
		$bank->bank_emailid2 = $req->bank_emailid2;
		$bank->bank_website = $req->bank_website;
		$bank->bank_printers = serialize($arrayPrinters);
		$bank->is_branch_sub_code = $req->is_branch_sub_code;
		$bank->number_digit_sub_code = ($req->is_branch_sub_code) ? $req->number_digit_sub_code : 0;
		$bank->starting_index_sub_code = ($req->is_branch_sub_code) ? $req->starting_index_sub_code : 0;

		if($bank->save()){
			return true;
		}
	}
}