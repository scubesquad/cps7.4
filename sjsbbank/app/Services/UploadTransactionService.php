<?php
namespace App\Services;

use DB;
use App\Models\UploadingData;
use App\Services\LogService;
use Auth;
use App\Models\BranchUser;
use App\Models\UploadingDataStatusLog;

class UploadTransactionService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// to get the list of uploading data
	public function getUploadData($req)
	{
		$user = Auth::user();
		$upload = DB::table('tb_uploadingdata')
			->select('id', 'cps_unique_req', 'cps_micr_code', 'cps_account_no', 'cps_act_name', 'cps_no_of_books', 'cps_book_size', 'cps_tr_code', 'cps_atpar', 'cps_chq_no_from', 'cps_chq_no_to', 'cps_act_address1', 'cps_act_address2', 'cps_act_address3', 'cps_act_address4', 'cps_act_address5', 'cps_act_city', 'cps_act_pin', 'cps_act_mobile');
		if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'HO') {
			$upload->orderBy('id', 'asc');
		} else {
			$user_id = $user->adminid;
			$userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        	$ids = explode(",", $userBranches);
			$upload->whereIn('branch_id',$ids);
			if($user->roles[0]->name == 'maker') {
				$upload->where('created_by',$user_id);
			}
		
		}
		//$upload->where('cps_status','Pending For Approval');
		$upload->orderBy('id', 'asc');
			

		if(isset($req->branch) && $req->branch != ""){
			$upload = $upload->where('cps_micr_code', $req->branch);
		}

		if(isset($req->transaction) && $req->transaction != ""){
			$upload = $upload->where('cps_tr_code', $req->transaction);
		}

		if(isset($req->bookSize) && $req->bookSize != ""){
			$upload = $upload->where('cps_book_size', $req->bookSize);
		}

		return $upload;
	}

	// to save the uploading data
	public function save($data, $bank, $transactionIndex){
		$logRecordId = "";
		$logDetails = [];

		foreach($data as $key => $value){

			$brcode =  $value[$transactionIndex['branchcode']];
			$padding = "";
			switch (strlen($brcode)) {
			  	case '1':
			  		$padding = "00";
			  		break;
			  	
			  	case '2':
			  		$padding = "0";
			  		break;
			}
			$cpsbranch_code = $padding . $value[$transactionIndex['branchcode']];
			
			$cpsmicr_code = $value[$transactionIndex['bankcode']] . $value[$transactionIndex['citycode']] . $cpsbranch_code;


			$upload = new UploadingData;
			$upload->cps_unique_req = $value[$transactionIndex['uniquerequest']];
			$upload->cps_micr_code = $cpsmicr_code;
			$upload->cps_branchmicr_code = $cpsbranch_code;
			$upload->cps_tr_code = $value[$transactionIndex['transactioncode']];
			$upload->cps_account_no = $value[$transactionIndex['accountno']];
			$upload->cps_act_name = $value[$transactionIndex['customername']];
			$upload->cps_act_jointname1 = $value[$transactionIndex['jointname1']];
			$upload->cps_act_jointname2 = $value[$transactionIndex['jointname2']];
			$upload->cps_act_address1 = $value[$transactionIndex['address1']];
			$upload->cps_act_address2 = $value[$transactionIndex['address2']];
			$upload->cps_act_address3 = $value[$transactionIndex['address3']];
			$upload->cps_act_address4 = $value[$transactionIndex['address4']];
			$upload->cps_act_address5 = $value[$transactionIndex['address5']];
			$upload->cps_act_city = $value[$transactionIndex['city']];
			$upload->cps_act_pin = $value[$transactionIndex['pincode']];
			$upload->cps_no_of_books = $value[$transactionIndex['noofbooks']];
			$upload->cps_book_size = $value[$transactionIndex['booksize']];
			$upload->cps_dly_bearer_order = 'Y';
			$upload->cps_chq_no_from = $value[$transactionIndex['chequenofrom']];
			$upload->cps_chq_no_to = $value[$transactionIndex['chequenoto']];
			$upload->cps_issue_date = date('Y-m-d', strtotime($value[$transactionIndex['issuedate']]));
			$upload->cps_date = date('Y-m-d', strtotime($value[$transactionIndex['issuedate']]));
			$upload->cps_micr_account_no = $value[$transactionIndex['micraccountno']];
			$upload->cps_process_user_id = Auth::user()->adminid;
			$upload->cps_product_code = $value[$transactionIndex['productcode']];
			$upload->cps_auth_sign1 = $value[$transactionIndex['signatory1']];
			$upload->cps_auth_sign2 = $value[$transactionIndex['signatory2']];
			$upload->cps_auth_sign3 = $value[$transactionIndex['signatory3']];
			$upload->cps_act_mobile = $value[$transactionIndex['mobile']];
			$upload->cps_act_telephone_res = $value[$transactionIndex['telephoneres']];
			$upload->cps_act_telephone_off = $value[$transactionIndex['telephoneoff']];
			$upload->cps_bsr_code = $value[$transactionIndex['bsrcode']];
			if($bank->is_branch_sub_code == 1){
				$upload->branch_sub_code = substr($value[$transactionIndex['accountno']], $bank->starting_index_sub_code-1, $bank->number_digit_sub_code);
			}
			$upload->save();

			if($logRecordId != "")
				$logRecordId = $logRecordId.','.$upload->id;
			else
				$logRecordId = $upload->id;
			$logDetails[] = $this->logDetails($upload);

		}

		// upload log when insert
		$count = count($data);
		$this->logService->insertLog('tb_uploadingdata', 'Upload & Print With Text File', $logRecordId, 'insert', [], $logDetails, "Total $count record uploaded");
		return true;
	}

	// function to delete record
	public function delete($req){
		// delete log
		$uploads = UploadingData::whereIn('id', $req->id)->get();

		$total = UploadingData::count();
		$count = count($uploads);

		$logRecordId = "";
		$logDetails = [];
		foreach($uploads as $upload){
			if($logRecordId != "")
				$logRecordId = $logRecordId.','.$upload->id;
			else
				$logRecordId = $upload->id;
			$logDetails[] = $this->logDetails($upload);

			UploadingData::find($upload->id)->delete();
		}

		// upload log when delete
		$this->logService->insertLog('tb_uploadingdata', 'Upload & Print With Text File', $logRecordId, 'delete', $logDetails, [],  "Total $total/$count record deleted");
		return true;
	}

	// function to shift uploading record to pending record
	public function shiftUploadingDataToPendingTable($req){
		UploadingData::select("*")
	        ->whereIn('id', $req->id)
	        ->each(function ($upload) {
	                $pending = $upload->replicate();
	                $pending->setTable('tb_pending_print_req');
					$pending->cps_status = 'Approved for printing';
					$pending->created_at = date('Y-m-d H:i:s');
					$pending->created_by =Auth::user()->adminid;
	                $pending->save();
					
					// // create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $pending->cps_unique_req;
					$UploadingDataStatusLogNew->status = 'Approved for printing';
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
	                $UploadingDataStatusLogNew->save();

					$upload->delete();
	          });

	        return true;
	}

	// function to get uploaing details
	public function getBranch(){
		return DB::table('tb_uploadingdata')
			   ->join('tb_branchdetails', 'tb_uploadingdata.cps_branchmicr_code', '=', 'tb_branchdetails.branch_code')
			   ->select('tb_branchdetails.branch_name', 'tb_branchdetails.branch_code', 'tb_branchdetails.branch_sub_code')
			   ->distinct()
			   ->get();
	}

	// function to get uploading transaction code
	public function getTransactionCode(){
		return DB::table('tb_uploadingdata')
			   ->select('cps_tr_code')
			   ->distinct()
			   ->get();
	}

	// function to get uploading book size
	public function getBookSize(){
		return DB::table('tb_uploadingdata')
			   ->select('cps_book_size')
			   ->distinct()
			   ->get();
	}

	// log details
	public function logDetails($upload){
		return [
			'id' => $upload->id,
			'cps_unique_req' => $upload->cps_unique_req,
			'cps_micr_code' => $upload->cps_micr_code,
			'cps_branchmicr_code' => $upload->cps_branchmicr_code,
			'cps_tr_code' => $upload->cps_tr_code,
			'cps_account_no' => $upload->cps_account_no,
			'cps_act_name' => $upload->cps_act_name,
			'cps_act_jointname1' => $upload->cps_act_jointname1,
			'cps_act_jointname2' => $upload->cps_act_jointname2,
			'cps_act_address1' => $upload->cps_act_address1,
			'cps_act_address2' => $upload->cps_act_address2,
			'cps_act_address3' => $upload->cps_act_address3,
			'cps_act_address4' => $upload->cps_act_address4,
			'cps_act_address5' => $upload->cps_act_address5,
			'cps_act_city' => $upload->cps_act_city,
			'cps_act_pin' => $upload->cps_act_pin,
			'cps_no_of_books' => $upload->cps_no_of_books,
			'cps_book_size' => $upload->cps_book_size,
			'cps_dly_bearer_order' => $upload->cps_dly_bearer_order,
			'cps_chq_no_from' => $upload->cps_chq_no_from,
			'cps_chq_no_to' => $upload->cps_chq_no_to,
			'cps_issue_date' => $upload->cps_issue_date,
			'cps_date' => $upload->cps_date,
			'cps_micr_account_no' => $upload->cps_micr_account_no,
			'cps_process_user_id' => $upload->cps_process_user_id,
			'cps_product_code' => $upload->cps_product_code,
			'cps_auth_sign1' => $upload->cps_auth_sign1,
			'cps_auth_sign2' => $upload->cps_auth_sign2,
			'cps_auth_sign3' => $upload->cps_auth_sign3,
			'cps_act_mobile' => $upload->cps_act_mobile,
			'cps_act_telephone_res' => $upload->cps_act_telephone_res,
			'cps_act_telephone_off' => $upload->cps_act_telephone_off,
			'cps_bsr_code' => $upload->cps_bsr_code,
			'branch_sub_code' => $upload->branch_sub_code
		];
	}


	// function to reject print request
	public function rejectPrintReuest($req){

		UploadingData::select("*")
	        ->whereIn('id', $req->id)
	        ->each(function ($upload) {
	                $upload->cps_status = "Rejected By ".Auth::user()->roles[0]->name;
					$upload->updated_at = date('Y-m-d H:i:s');
					$upload->updated_by =Auth::user()->adminid;
	                $upload->save();

					// create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $upload->cps_unique_req;
					$UploadingDataStatusLogNew->status = "Rejected By ".Auth::user()->roles[0]->name;
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
					$UploadingDataStatusLogNew->save();

					
	          });

	        return true;
	}

}