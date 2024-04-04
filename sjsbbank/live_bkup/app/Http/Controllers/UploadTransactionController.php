<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadTransactionService;
use App\Services\ValidateUploadFileService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use File;
use Log;
use App\Models\Country;
use App\Models\State;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\BranchUser;
use App\Models\TransactionCode;
use App\Models\ChequeSeries;
use App\Models\UploadingData;
use App\Models\PrintRequestCollection;
use App\Models\UploadingDataStatusLog;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Validator;

class UploadTransactionController extends Controller
{
    protected $uploadTransactionService;
    protected $validateUploadFileService;
    protected $commonService;

    public function __construct(UploadTransactionService $uploadTransactionService, ValidateUploadFileService $validateUploadFileService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:transaction.delete|transaction.filter|transaction.print|transaction.upload|transaction.view']);
        $this->uploadTransactionService = $uploadTransactionService;
        $this->validateUploadFileService = $validateUploadFileService;
        $this->commonService = $commonService;
    }

    public function upload(Request $req){

        // echo Auth::user()->roles[0]->name;
        // die();
        $toner = $this->commonService->getSettings();
        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();
        return view('uploads.upload',[
            'toner' => $toner,
            'transcationCodes' => $transcationCodes,
        ]);
        //  compact('toner'));
    }

    // function to get upload list
    public function getUpload(Request $req){
        if($req->ajax())
        {
            $uploads = $this->uploadTransactionService->getUploadData($req);
            return DataTables::of($uploads)
                    ->toJson();
        }

    }


    // function to get upload list
    public function getUploadRecordAjax(Request $req){
        
        $uploads = UploadingData::get();
        return DataTables::of($uploads)
            ->addColumn('action', function ($upload) {
                if($upload->cps_status !='Rejected By HO') {
                    $html = '
                    <a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(' . "'" . $upload->id . "'" . ') ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->editColumn('id', function ($upload) {
                if($upload->cps_status !='Rejected By HO') {
                    return '<input type="checkbox" class="selectId" name="id" value="'.$upload->id .'">';
                } else {
                    return $upload->id;
                }
            })
            ->editColumn('created_at', function ($upload) {
                return $upload->created_at ? with(new \Carbon\Carbon($upload->created_at))->format('d-m-Y H:i') : '';
            })
            ->editColumn('updated_at', function ($upload) {
                return $upload->updated_at ? with(new \Carbon\Carbon($upload->updated_at))->format('d-m-Y H:i') : '';
            })
            ->rawColumns(['id','action'])
            ->make(true);


    }


    // function to get filter list of filter data
    public function getFilter(Request $req){
        if($req->ajax()){
            $branch = $this->uploadTransactionService->getBranch();
            
            $transactionCode = $this->uploadTransactionService->getTransactionCode();

            $bookSize = $this->uploadTransactionService->getBookSize();

            return response()->json([
                'status' => 200,
                'data' => [
                    'branch' => $branch,
                    'transactionCode' => $transactionCode,
                    'bookSize' => $bookSize
                ]
            ]);

        }
    }

    // function to validate data and store in tb_uploading data
    public function store(Request $req){
        if($req->ajax()){

            if($req->hasFile('upload')){

                $bank = $this->commonService->getBankName();
                $setting = $this->commonService->getSettings();
                $transactionIndex = $this->commonService->getTransactionIndex(); //to get transaction code index value

                $domain = \Request::getHost();
                $subdomain = explode('.', $domain);
                $uploadPath = $subdomain[0];
                // code to  store upload file
                $fileName = 'uploadfile-'.time().'.'.$req->upload->getClientoriginalExtension();
                $req->file('upload')->storeAs($uploadPath.'/upload/', $fileName, 'public');

                // read uploaded file
                $fh = fopen(Storage::disk('public')->path($uploadPath.'/upload/'.$fileName),"r");
                $count = 1;   //variable for line no.
                $data = [];
                while ($line = fgets($fh)) 
                {
                    // check duplicate record find
                    $explode = explode($transactionIndex['explode'],$line);
                    foreach($data as $da){
                        if(in_array($explode[$transactionIndex['uniquerequest']], $da)){
                            return response()->json([
                                'status' => 203,
                                'message' => "The Unique Request No ".$explode[$transactionIndex['uniquerequest']]." Already Exist.",
                            ]);
                        }

                        if($setting->chk_taken_from == 0)
                        {
                            if($da[$transactionIndex['chequenofrom']] <= $explode[$transactionIndex['chequenofrom']] && $explode[$transactionIndex['chequenofrom']] <= $da[$transactionIndex['chequenoto']]){
                                return response()->json([
                                    'status' => 203,
                                    'message' => "Duplicate Record Found in File at line ".$count,
                                ]);
                            }
                        }
                    }

                    $data[] = $explode;
                    // code to validate upload file
                    $check = $this->validateUploadFileService->validate($setting, $explode, $count, $bank, $transactionIndex);
                    if($check['status'] == 203)
                    {
                        return response()->json([
                            'status' => 203,
                            'message' => $check['message'],
                        ]);
                    }
                    $count = $count + 1;
                }


                // code to save file record
                $upload = $this->uploadTransactionService->save($data, $bank, $transactionIndex);

                if($upload){
                    return response()->json([
                        'status' => 200,
                        'message' => "File uploaded successfully"
                    ]);
                }
            }
        }
    }

    // function to delete tb_uploading record
    public function delete(Request $req){
        if($req->ajax()){
            $upload = $this->uploadTransactionService->delete($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record removed successfully"
                ]);
            }
        }
    }

    // function to shift uploading data to pending data
    public function shiftUploadingDataToPendingTable(Request $req){
        if($req->ajax()){
            $upload = $this->uploadTransactionService->shiftUploadingDataToPendingTable($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Shifted successfully"
                ]);
            }
        }
    }

    // new function by rohit
    // function to shift uploading data to pending data
    public function rejectPrintReuest(Request $req){
        if($req->ajax()){
            $upload = $this->uploadTransactionService->rejectPrintReuest($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Reject by HO successfully"
                ]);
            }
        }
    }

    // Manual Print page
    public function manual(Request $req){
        $bank = Bank::select('bank_id', 'bank_name','bank_code')->first();
        $user = Auth::user();
        $user_id = $user->adminid;

        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'HO') {
            $branches = Branch::get();
        } else {
            $branches = Branch::whereIn('branch_id',$ids)->get();
        }
            
        
        // transcationCodes
        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();


        $chequeSeries = ChequeSeries::select('series_lastno')->where('series_transationcode',10)->where('series_branchcode',4)->first();
        // echo "<pre>";
        // print_r($chequeSeries);
        // echo "</pre>";

        // die();
        return view('uploads.manual', [
            'bank' => $bank,
            'branches' => $branches,
            'transcationCodes' => $transcationCodes,
        ]);
    }

    // manual print store
    public function manualStore(Request $request){
        
        $this->validate($request, [
            'branch_name' => 'required',
            'ifsc_code' => 'required',
            'micr_ac_no' => 'required',
            'account_type' => 'required',
            'customer_ac_no' => 'required',
            'no_of_books' => 'required',
            'book_size' => 'required',
            // 'cheque_from' => 'required',
            // 'cheque_to' => 'required',
            'customer_name' => 'required',
            'bearer_order' => 'required',
            'address_line_1' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'cust_email_id' => 'required',
        ]);
        $chequeSeries = ChequeSeries::select('series_lastno')->where('series_transationcode',$request->account_type)->where('series_branchcode',$request->branch_name)->first();
        $chequefrom = $chequeSeries->series_lastno;
		$chequeto = $chequefrom + ($request->book_size * $request->no_of_books) - 1;

        $unique = PrintRequestCollection::select('cps_unique_req')->orderBy('cps_unique_req', 'DESC')->first();
        if($unique) {
            $uniqueNo = $unique->cps_unique_req+1;
        } else {
            $uniqueNo='000001';
        }
        
        $uploadingData = new UploadingData();
        //$uploadingData->bank_name = $request->bank_name;
        $uploadingData->cps_unique_req = $uniqueNo;
        $uploadingData->branch_id = $request->branch_name;
        $uploadingData->cps_branchmicr_code = $request->branch_code;
        $uploadingData->cps_micr_code = $request->city_code.$request->bank_code.$request->branch_code;
        //$uploadingData->city_code = $request->city_code;
        $uploadingData->cps_ifsc_code = $request->ifsc_code;
        $uploadingData->cps_tr_code = $request->account_type;
        $uploadingData->cps_account_no = $request->customer_ac_no;
        $uploadingData->cps_micr_account_no = $request->micr_ac_no;
        $uploadingData->cps_no_of_books = $request->no_of_books;
        $uploadingData->cps_book_size = $request->book_size;
        $uploadingData->cps_dly_bearer_order = $request->bearer_order;
        $uploadingData->cps_chq_no_from = $chequefrom;
        $uploadingData->cps_chq_no_to = $chequeto;
        // $uploadingData->cps_chq_no_from = $request->cheque_from;
        // $uploadingData->cps_chq_no_to = $request->cheque_to;
        $uploadingData->cps_act_name = $request->customer_name;
        $uploadingData->cps_act_jointname1 = $request->customer_name_joint_1;
        $uploadingData->cps_act_jointname2 = $request->customer_name_joint_2;
        $uploadingData->cps_auth_sign1 = $request->sign_authority_1;
        $uploadingData->cps_auth_sign2 = $request->sign_authority_2;
        $uploadingData->cps_auth_sign3 = $request->sign_authority_3;
        $uploadingData->cps_act_address1 = $request->address_line_1;
        $uploadingData->cps_act_address2 = $request->address_line_2;
        $uploadingData->cps_act_address3 = $request->address_line_3;
        $uploadingData->cps_act_city = $request->city;
        $uploadingData->cps_act_pin = $request->pin_code;
        $uploadingData->cps_act_mobile = $request->cust_mobile_no;
        $uploadingData->cps_emailid = $request->cust_email_id;
        $uploadingData->cps_status = 'Pending For Approval';
        $uploadingData->created_at = date('Y-m-d H:i:s');
        $uploadingData->created_by = Auth::user()->adminid;
        $uploadingData->save();

        if($uploadingData){
            $UploadingDataStatusLog =  new UploadingDataStatusLog();
            $UploadingDataStatusLog->unique_no = $uploadingData->cps_unique_req;
            $UploadingDataStatusLog->status = 'Pending For Approval';
            $UploadingDataStatusLog->created_at = date('Y-m-d H:i:s');
            $UploadingDataStatusLog->created_by = Auth::user()->adminid;
            $UploadingDataStatusLog->save();

            // update check series
            $lastchequeno = $chequeto + 1;
            $chequeSeries = ChequeSeries::where('series_transationcode',$request->account_type)->where('series_branchcode',$request->branch_name)->first();
            $chequeSeries->series_lastno = $lastchequeno; 
            $chequeSeries->save();
            

            return redirect()->route('transaction.upload');
        }

    }

    // manual edit 
    public function manualEdit($id){
        
        $uploadingData = UploadingData::findOrFail($id);
        
        $branchDetail = Branch::findOrFail($uploadingData->branch_id);
        
        $bank = Bank::select('bank_id', 'bank_name','bank_code')->first();
        
        $user = Auth::user();
        $user_id = $user->adminid;

        // login user assign branches list
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'HO') {
            $branches = Branch::get();
        } else {
            $branches = Branch::whereIn('branch_id',$ids)->get();
        }
        // transcationCodes
        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();
        

        $branchSelectHtml = "<option value=''>Select Branch</option>";
        foreach($branches as $branch) {
            //$branch->branch_id == $uploadingData->branch_id ? "selected='selected'" : ""
            if($branch->branch_id == $uploadingData->branch_id ) {
                $select = "selected='selected'";
            } else {
                $select = null;
            }
            $branchSelectHtml .= "<option $select value='$branch->branch_id'>$branch->branch_name</option>";
            // $html .= "<option $select value='$branch->branch_id'>$branch->branch_name</option>";
        }

        return response()->json([
            'status' => 200,
            'uploadingData' => $uploadingData,
            'bank' => $bank,
            'branches' => $branches,
            'transcationCodes' => $transcationCodes,
            'branchSelectHtml' => $branchSelectHtml,
            'branchDetail' => $branchDetail,
        ]);

        // return view('uploads.manualEdit', [
        //     'uploadingData' => $uploadingData,
        //     'bank' => $bank,
        //     'branches' => $branches,
        //     'transcationCodes' => $transcationCodes,
        // ]);
    }

    // manual form update
    public function manualUpdate(Request $request, $upload_id) {
        $validation_rules = array(
            'bank_name' => 'required',
            'branch_name' => 'required|numeric',
            'city_code' => 'required|numeric',
            'customer_ac_no' => 'required|numeric',
            'micr_ac_no' => 'required|numeric',
        );
        $validation = Validator::make($request->all(), $validation_rules);
        if ($validation->fails()) {
            return json_encode([
                'errors' => $validation->errors()->getMessages(),
                'code' => 422,
            ]);
        }

        
        $uploadingData = uploadingData::findOrFail($upload_id);
        $uploadingData->branch_id = $request->branch_name;
        $uploadingData->cps_branchmicr_code = $request->branch_code;
        $uploadingData->cps_micr_code = $request->city_code.$request->bank_code.$request->branch_code;
        //$uploadingData->city_code = $request->city_code;
        $uploadingData->cps_ifsc_code = $request->ifsc_code;
        $uploadingData->cps_tr_code = $request->account_type;
        $uploadingData->cps_account_no = $request->customer_ac_no;
        $uploadingData->cps_micr_account_no = $request->micr_ac_no;
        $uploadingData->cps_no_of_books = $request->no_of_books;
        $uploadingData->cps_book_size = $request->book_size;
        $uploadingData->cps_dly_bearer_order = $request->bearer_order;
        $uploadingData->cps_chq_no_from = $request->cheque_from;
        $uploadingData->cps_chq_no_to = $request->cheque_to;
        $uploadingData->cps_act_name = $request->customer_name;
        $uploadingData->cps_act_jointname1 = $request->customer_joint_name1;
        $uploadingData->cps_act_jointname2 = $request->customer_joint_name1;
        $uploadingData->cps_auth_sign1 = $request->sign_authority1;
        $uploadingData->cps_auth_sign2 = $request->sign_authority2;
        $uploadingData->cps_auth_sign3 = $request->sign_authority3;
        $uploadingData->cps_act_address1 = $request->address_line1;
        $uploadingData->cps_act_address2 = $request->address_line2;
        $uploadingData->cps_act_address3 = $request->address_line3;
        $uploadingData->cps_act_city = $request->city;
        $uploadingData->cps_act_pin = $request->pin_code;
        $uploadingData->cps_act_mobile = $request->cust_mobile_no;
        $uploadingData->cps_emailid = $request->cust_email_id;
        $uploadingData->updated_at = date('Y-m-d H:i:s');
        $uploadingData->updated_by = Auth::user()->adminid;
        $uploadingData->save();

        return response()->json([
            'status' => 200,
            'data' => $uploadingData
        ]);
        
    }


}
