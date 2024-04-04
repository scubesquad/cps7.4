<?php
namespace App\Services;

use DB;
use App\Models\UploadingData;
use App\Services\LogService;
use Auth;
use App\Models\BranchUser;
use App\Models\UploadingDataStatusLog;
use App\Models\PrintRequestCollection;
use App\Mail\sendStatusMail;
use Mail;

class TransactionService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// to get the list of uploading data
	public function getPrintData($req)
	{
		$user = Auth::user();
		$upload = DB::table('tb_print_req_collection')
			->select('id', 'cps_unique_req', 'cps_micr_code', 'cps_account_no', 'cps_act_name', 'cps_no_of_books', 'cps_book_size', 'cps_tr_code', 'cps_atpar', 'cps_chq_no_from', 'cps_chq_no_to', 'cps_act_address1', 'cps_act_address2', 'cps_act_address3', 'cps_act_address4', 'cps_act_address5', 'cps_act_city', 'cps_act_pin', 'cps_act_mobile');
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

	public function sendToBranch($req){
		PrintRequestCollection::select("*")
	        ->whereIn('id', $req->id)
	        ->each(function ($printRecord) {
	                $printRecord->cps_status = 'Send To Branch';
					$printRecord->updated_at = date('Y-m-d H:i:s');
					$printRecord->updated_by =Auth::user()->adminid;
	                $printRecord->save();


					// create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $printRecord->cps_unique_req;
					$UploadingDataStatusLogNew->status = 'Send To Branch';
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
					$UploadingDataStatusLogNew->save();
					
					
	          });

	        return true;
	}


	
	public function readyForPickup($req){
		PrintRequestCollection::select("*")
	        ->whereIn('id', $req->id)
	        ->each(function ($printRecord) {
	                $printRecord->cps_status = 'Ready For Pickup';
					$printRecord->updated_at = date('Y-m-d H:i:s');
					$printRecord->updated_by =Auth::user()->adminid;
	                $printRecord->save();


					// create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $printRecord->cps_unique_req;
					$UploadingDataStatusLogNew->status = 'Ready For Pickup';
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
					$UploadingDataStatusLogNew->save();
					//send mail
					if($printRecord->cps_emailid) {
						$mailData = [
							'name' => $printRecord->cps_act_name,
							'title' => 'Solapur Bank Cheque Book Request',
							'body' => 'Please collect cheque book from branch.'
						];	
						Mail::to($printRecord->cps_emailid)->send(new sendStatusMail($mailData));
					}

					
	          });

	        return true;
	}

	public function pickupUp($req){
		PrintRequestCollection::select("*")
	        ->whereIn('id', $req->id)
	        ->each(function ($printRecord) {
	                $printRecord->cps_status = 'Picked Up';
					$printRecord->updated_at = date('Y-m-d H:i:s');
					$printRecord->updated_by =Auth::user()->adminid;
	                $printRecord->save();


					// create status status
					$UploadingDataStatusLogNew = new UploadingDataStatusLog();
					$UploadingDataStatusLogNew->unique_no = $printRecord->cps_unique_req;
					$UploadingDataStatusLogNew->status = 'Picked Up';
					$UploadingDataStatusLogNew->created_at = date('Y-m-d H:i:s');
					$UploadingDataStatusLogNew->created_by = Auth::user()->adminid;
					$UploadingDataStatusLogNew->save();

					//send mail
					if($printRecord->cps_emailid) {
						$mailData = [
							'name' => $printRecord->cps_act_name,
							'title' => 'Solapur Bank Cheque Book Request',
							'body' => 'Thank you for collecting cheque book.'
						];	
						Mail::to($printRecord->cps_emailid)->send(new sendStatusMail($mailData));
					}
					
					
	          });

	        return true;
	}



}