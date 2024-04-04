<?php

namespace App\Services;

use App\Models\Branch;
use App\Services\LogService;
use App\Services\CommonService;

class BranchService{
	protected $logService;
	protected $commonService;

	public function __construct(LogService $logService, CommonService $commonService){
		$this->logService = $logService; // log service reference to store log related branch
		$this->commonService = $commonService; 
	}

	// function to get branch list
	public function list(){
		return Branch::select('branch_id', 'branch_name', 'branch_code', 'branch_sub_code')->orderBy('branch_id', 'desc');
	}

	// function to store branch
	public function store($req=null){
		$branch = new Branch;
		$branch->branch_name = $req->branch_name;
		$branch->branch_code = $req->branch_code;
		$branch->branch_sub_code = (isset($req->branch_sub_code)) ? $req->branch_sub_code : null;
		$branch->branch_City_Code = $req->branch_City_Code;
		$branch->branch_neftifsccode = $req->branch_neftifsccode;
		$branch->branch_micr = $req->branch_micr;
		$branch->branch_atparmicrcode = $req->branch_atparmicrcode;
		$branch->branch_address1 = $req->branch_address1;
		$branch->branch_address2 = $req->branch_address2;
		$branch->branch_country_id = $req->branch_country_id;
		$branch->branch_state_id = $req->branch_state_id;
		$branch->branch_contactperson1 = $req->branch_contactperson1;
		$branch->branch_contactpersonmobile1 = $req->branch_contactpersonmobile1;
		$branch->branch_telephone1 = $req->branch_telephone1;
		$branch->branch_email1 = $req->branch_email1;
		$branch->branch_contactperson2 = $req->branch_contactperson2;
		$branch->branch_contactpersonmobile2 = $req->branch_contactpersonmobile2;
		$branch->branch_telephone2 = $req->branch_telephone2;
		$branch->branch_email2 = $req->branch_email2;
		$branch->branch_reg_busi_hrs = $req->branch_reg_busi_hrs;
		$branch->branch_half_busi_hrs = $req->branch_half_busi_hrs;
		$branch->branch_sunday_working = $req->branch_sunday_working;
		$branch->branch_tollfree_no = $req->branch_tollfree_no;
		$branch->branch_services = $req->branch_services;

		if($branch->save()){

			// branch log when insert
			$this->logService->insertLog('tb_branchdetails', 'Branch Master', $branch->branch_id, 'insert', [], ['branch_name' => $req->branch_name, 'branch_code' => $req->branch_code, 'branch_sub_code' => (isset($req->branch_sub_code)) ? $req->branch_sub_code : null, 'branch_City_Code' => $req->branch_City_Code, 'branch_neftifsccode' => $req->branch_neftifsccode, 'branch_micr' => $req->branch_micr, 'branch_atparmicrcode' => $req->branch_atparmicrcode, 'branch_address1' => $req->branch_address1, 'branch_address2' => $req->branch_address2, 'branch_country_id' => $req->branch_country_id, 'branch_state_id' => $req->branch_state_id, 'branch_contactperson1' => $req->branch_contactperson1, 'branch_contactpersonmobile1' => $req->branch_contactpersonmobile1, 'branch_telephone1' => $req->branch_telephone1, 'branch_email1' => $req->branch_email1, 'branch_contactperson2' => $req->branch_contactperson2, 'branch_contactpersonmobile2' => $req->branch_contactpersonmobile2, 'branch_telephone2' => $req->branch_telephone2, 'branch_email2' => $req->branch_email2, 'branch_reg_busi_hrs' => $req->branch_reg_busi_hrs, 'branch_half_busi_hrs' => $req->branch_half_busi_hrs, 'branch_sunday_working' => $req->branch_sunday_working, 'branch_tollfree_no' => $req->branch_tollfree_no, 'branch_services' => $req->branch_services]);
			return true;
		}
	}

	// funtion to get the single branch details
	public function edit($id){
		return Branch::find($id);
	}

	// function to update the branch
	public function update($req){
		$branch = Branch::find($req->branch_id);

		// branch log when update
		$this->logService->insertLog('tb_branchdetails', 'Branch Master', $branch->branch_id, 'update', ['branch_name' => $branch->branch_name, 'branch_code' => $branch->branch_code, 'branch_sub_code' => $branch->branch_sub_code, 'branch_City_Code' => $branch->branch_City_Code, 'branch_neftifsccode' => $branch->branch_neftifsccode, 'branch_micr' => $branch->branch_micr, 'branch_atparmicrcode' => $branch->branch_atparmicrcode, 'branch_address1' => $branch->branch_address1, 'branch_address2' => $branch->branch_address2, 'branch_country_id' => $branch->branch_country_id, 'branch_state_id' => $branch->branch_state_id, 'branch_contactperson1' => $branch->branch_contactperson1, 'branch_contactpersonmobile1' => $branch->branch_contactpersonmobile1, 'branch_telephone1' => $branch->branch_telephone1, 'branch_email1' => $branch->branch_email1, 'branch_contactperson2' => $branch->branch_contactperson2, 'branch_contactpersonmobile2' => $branch->branch_contactpersonmobile2, 'branch_telephone2' => $branch->branch_telephone2, 'branch_email2' => $branch->branch_email2, 'branch_reg_busi_hrs' => $branch->branch_reg_busi_hrs, 'branch_half_busi_hrs' => $branch->branch_half_busi_hrs, 'branch_sunday_working' => $branch->branch_sunday_working, 'branch_tollfree_no' => $branch->branch_tollfree_no, 'branch_services' => $branch->branch_services], ['branch_name' => $req->branch_name, 'branch_code' => $req->branch_code, 'branch_sub_code' => (isset($req->branch_sub_code)) ? $req->branch_sub_code : null, 'branch_City_Code' => $req->branch_City_Code, 'branch_neftifsccode' => $req->branch_neftifsccode, 'branch_micr' => $req->branch_micr, 'branch_atparmicrcode' => $req->branch_atparmicrcode, 'branch_address1' => $req->branch_address1, 'branch_address2' => $req->branch_address2, 'branch_country_id' => $req->branch_country_id, 'branch_state_id' => $req->branch_state_id, 'branch_contactperson1' => $req->branch_contactperson1, 'branch_contactpersonmobile1' => $req->branch_contactpersonmobile1, 'branch_telephone1' => $req->branch_telephone1, 'branch_email1' => $req->branch_email1, 'branch_contactperson2' => $req->branch_contactperson2, 'branch_contactpersonmobile2' => $req->branch_contactpersonmobile2, 'branch_telephone2' => $req->branch_telephone2, 'branch_email2' => $req->branch_email2, 'branch_reg_busi_hrs' => $req->branch_reg_busi_hrs, 'branch_half_busi_hrs' => $req->branch_half_busi_hrs, 'branch_sunday_working' => $req->branch_sunday_working, 'branch_tollfree_no' => $req->branch_tollfree_no, 'branch_services' => $req->branch_services]);


		$branch->branch_name = $req->branch_name;
		$branch->branch_code = $req->branch_code;
		$branch->branch_sub_code = (isset($req->branch_sub_code)) ? $req->branch_sub_code : null;
		$branch->branch_City_Code = $req->branch_City_Code;
		$branch->branch_neftifsccode = $req->branch_neftifsccode;
		$branch->branch_micr = $req->branch_micr;
		$branch->branch_atparmicrcode = $req->branch_atparmicrcode;
		$branch->branch_address1 = $req->branch_address1;
		$branch->branch_address2 = $req->branch_address2;
		$branch->branch_country_id = $req->branch_country_id;
		$branch->branch_state_id = $req->branch_state_id;
		$branch->branch_contactperson1 = $req->branch_contactperson1;
		$branch->branch_contactpersonmobile1 = $req->branch_contactpersonmobile1;
		$branch->branch_telephone1 = $req->branch_telephone1;
		$branch->branch_email1 = $req->branch_email1;
		$branch->branch_contactperson2 = $req->branch_contactperson2;
		$branch->branch_contactpersonmobile2 = $req->branch_contactpersonmobile2;
		$branch->branch_telephone2 = $req->branch_telephone2;
		$branch->branch_email2 = $req->branch_email2;
		$branch->branch_reg_busi_hrs = $req->branch_reg_busi_hrs;
		$branch->branch_half_busi_hrs = $req->branch_half_busi_hrs;
		$branch->branch_sunday_working = $req->branch_sunday_working;
		$branch->branch_tollfree_no = $req->branch_tollfree_no;
		$branch->branch_services = $req->branch_services;

		if($branch->save()){
			return true;
		}
	}

	// function to remove the branch
	public function delete($req){
		$branch = Branch::find($req->id);

		// branch log when delete
		$this->logService->insertLog('tb_branchdetails', 'Branch Master', $branch->branch_id, 'delete', ['branch_name' => $branch->branch_name, 'branch_code' => $branch->branch_code, 'branch_sub_code' => $branch->branch_sub_code, 'branch_City_Code' => $branch->branch_City_Code, 'branch_neftifsccode' => $branch->branch_neftifsccode, 'branch_micr' => $branch->branch_micr, 'branch_atparmicrcode' => $branch->branch_atparmicrcode, 'branch_address1' => $branch->branch_address1, 'branch_address2' => $branch->branch_address2, 'branch_country_id' => $branch->branch_country_id, 'branch_state_id' => $branch->branch_state_id, 'branch_contactperson1' => $branch->branch_contactperson1, 'branch_contactpersonmobile1' => $branch->branch_contactpersonmobile1, 'branch_telephone1' => $branch->branch_telephone1, 'branch_email1' => $branch->branch_email1, 'branch_contactperson2' => $branch->branch_contactperson2, 'branch_contactpersonmobile2' => $branch->branch_contactpersonmobile2, 'branch_telephone2' => $branch->branch_telephone2, 'branch_email2' => $branch->branch_email2, 'branch_reg_busi_hrs' => $branch->branch_reg_busi_hrs, 'branch_half_busi_hrs' => $branch->branch_half_busi_hrs, 'branch_sunday_working' => $branch->branch_sunday_working, 'branch_tollfree_no' => $branch->branch_tollfree_no, 'branch_services' => $branch->branch_services], []);

		if($branch->delete()){
			return true;
		}
	}

	// function to check branch exist or not
	public function checkBranchExists($req){
		$bank = $this->commonService->getBankName();

		$check = Branch::where('branch_code', $req->branch_code);
		if($bank->is_branch_sub_code){
			$check = $check->where('branch_sub_code', $req->branch_sub_code);
		}

		$check = $check->exists();

		return $check;
	}
}