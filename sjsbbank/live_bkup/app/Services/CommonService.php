<?php

namespace App\Services;
use App\Models\Country;
use App\Models\State;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\TransactionCode;
use DB;

class CommonService
{
	// to get the active country
	public function getActiveCountry(){
		return Country::where('country_isdelete', 1)
			   ->select('country_id', 'country_name')
			   ->get();
	}

	// to get the active state by country id
	public function getActiveStateByCountryId($countryId){
		return State::where('is_delete', 1)
			   ->where('country_id', $countryId)
			   ->select('state_id', 'state_name')
			   ->get();
	}

	// to get the bank details
	public function getBankDetails(){
		return Bank::select('bank_id', 'bank_name')->get();
	}

	// to get the brancs details
	public function getBranch(){	
		return Branch::select('branch_id', 'branch_name', 'branch_code', 'branch_sub_code')->get();
	}

	// to get active transaction code
	public function getActiveTransactionCodes(){
		return TransactionCode::where('transactionstatus', 1)
			   ->select('transactioncode_id', 'transactioncodedescription', 'transactioncode')
			   ->get();
	}

	// function to get bank name
	public function getBankName(){
		return Bank::select('bank_name', 'is_branch_sub_code', 'starting_index_sub_code', 'number_digit_sub_code')
			   ->first();
	}

	// query to check country exists in state or not
	public function checkCountryExistsInState($id){
		return DB::table('tb_statemaster')
			   ->where('country_id', $id)
			   ->exists();
	}

	// query to check bank exists in state or not
	public function checkStateExistsInBank($id){
		return DB::table('tb_bankdetails')
			   ->where('bank_state_id', $id)
			   ->exists();
	}

	// query to check branch exists in state or not
	public function checkStateExistsInBranch($id){
		return DB::table('tb_branchdetails')
			   ->where('branch_state_id', $id)
			   ->exists();
	}

	// funtion to get the transaction code and name as array key value
	public function getTransactionKeyValue(){
		return DB::table('tb_cps_transactioncodes')
			   ->where('transactionstatus', 1)
			   ->pluck('transactioncodedescription', 'transactioncode')
			   ->toArray();
	}

	// funtion to get the transaction code and alphacode as array key value
	public function getTransactionAlphaKeyValue(){
		return DB::table('tb_cps_transactioncodes')
			   ->where('transactionstatus', 1)
			   ->pluck('alphacode', 'transactioncode')
			   ->toArray();
	}

	// funtion to get settings value
	public function getSettings(){
		return DB::table('tb_cps_settings')->first();
	}

	public function getTransactionIndex(){
		return DB::table('transaction_code_index')->pluck('index', 'name');
	}
}