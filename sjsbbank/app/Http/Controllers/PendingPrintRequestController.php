<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PendingPrintRequestService;
use App\Models\PendingPrintRequest;
use Yajra\Datatables\Datatables;
use Log;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\BranchUser;
use App\Models\TransactionCode;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;


class PendingPrintRequestController extends Controller
{
    protected $pendingPrintRequestService;

    public function __construct(PendingPrintRequestService $pendingPrintRequestService){
        parent::__construct();
        $this->middleware(['permission:pending-print-req.cancel|pending-print-req.print|pending-print-req.view']);
        $this->pendingPrintRequestService = $pendingPrintRequestService;
    }

    public function list(Request $req){

        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();
        $branches = Branch::orderBy('branch_id', 'asc')->get();
        return view('pending-print-req.list',[
            'transcationCodes' => $transcationCodes,
            'branches' => $branches,
        ]);

        //return view('pending-print-req.list');
    }

    public function getList(Request $req){
        if($req->ajax())
        {
            $pendingPrintRequest = $this->pendingPrintRequestService->list();

            return DataTables::of($pendingPrintRequest)
                    ->toJson();
        }
    }


    // function to get upload list
    public function getPendingPrintRequestRecordAjax(Request $req){
        //$user = Auth::user();
        $records = PendingPrintRequest::select('id', 'cps_unique_req', 'cps_micr_code', 'cps_account_no', 'cps_act_name', 'cps_no_of_books', 'cps_book_size', 'cps_tr_code', 'cps_atpar', 'cps_chq_no_from', 'cps_chq_no_to', 'cps_act_address1', 'cps_act_address2', 'cps_act_address3', 'cps_act_address4', 'cps_act_address5', 'cps_act_city', 'cps_act_pin', 'cps_act_mobile','cps_status');
        // if (!empty($req->branch)) {
        //     // $records->where('branch', 'like', '%' . $req->branch . '%');
        //     $records->where('cps_branchmicr_code', $req->branch);
        // }
        // if (!empty($req->transaction_type)) {
        //     $records->where('cps_tr_code', $req->transaction_type);
        // }
        // if (!empty($req->book_size)) {
        //     $records->where('cps_book_size', $req->book_size);
        // }
        
        $user = Auth::user();
        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        // if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
        //     // $records->whereIn('branch_id',$ids)->get();
        // } else {
        //     $records->whereIn('branch_id',$ids)->get();
        // }
        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
            $records->whereNotNull('branch_id');
        } else {
            $records->whereIn('branch_id',$ids)->get();
        }
        $records->get();
        return DataTables::of($records)
            ->addColumn('action', function ($record) {
                if($record->cps_status !='Rejected By HO') {
                    $html = '
                    <a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(' . "'" . $record->id . "'" . ') ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->editColumn('id', function ($record) {
                if($record->cps_status !='Rejected By HO') {
                    return '<input type="checkbox" class="selectId" name="id" value="'.$record->id .'">';
                } else {
                    return $record->id;
                }
            })
            ->editColumn('created_at', function ($record) {
                return $record->created_at ? with(new \Carbon\Carbon($record->created_at))->format('d-m-Y H:i') : '';
            })
            ->editColumn('updated_at', function ($record) {
                return $record->updated_at ? with(new \Carbon\Carbon($record->updated_at))->format('d-m-Y H:i') : '';
            })
            ->rawColumns(['id','action'])
            ->make(true);


    }


    // edit functionality 
    public function edit($id){
        
        $pendingPrintRequestData = PendingPrintRequest::findOrFail($id);
        
        $branchDetail = Branch::findOrFail($pendingPrintRequestData->branch_id);
        
        $bank = Bank::select('bank_id', 'bank_name','bank_code')->first();
        
        $user = Auth::user();
        $user_id = $user->adminid;

        // login user assign branches list
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
            $branches = Branch::get();
        } else {
            $branches = Branch::whereIn('branch_id',$ids)->get();
        }
        // transcationCodes
        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();
        

        $branchSelectHtml = "<option value=''>Select Branch</option>";
        foreach($branches as $branch) {
            //$branch->branch_id == $pendingPrintRequestData->branch_id ? "selected='selected'" : ""
            if($branch->branch_id == $pendingPrintRequestData->branch_id ) {
                $select = "selected='selected'";
            } else {
                $select = null;
            }
            $branchSelectHtml .= "<option $select value='$branch->branch_id'>$branch->branch_name</option>";
            // $html .= "<option $select value='$branch->branch_id'>$branch->branch_name</option>";
        }

        return response()->json([
            'status' => 200,
            'pendingPrintRequestData' => $pendingPrintRequestData,
            'bank' => $bank,
            'branches' => $branches,
            'transcationCodes' => $transcationCodes,
            'branchSelectHtml' => $branchSelectHtml,
            'branchDetail' => $branchDetail,
        ]);
    }

    // edit form update
    public function editAjaxUpdate(Request $request, $id) {
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

        
        $PendingPrintRequestData = PendingPrintRequest::findOrFail($id);
        $PendingPrintRequestData->branch_id = $request->branch_name;
        $PendingPrintRequestData->cps_branchmicr_code = $request->branch_code;
        $PendingPrintRequestData->cps_micr_code = $request->city_code.$request->bank_code.$request->branch_code;
        //$PendingPrintRequestData->city_code = $request->city_code;
        $PendingPrintRequestData->cps_ifsc_code = $request->ifsc_code;
        $PendingPrintRequestData->cps_tr_code = $request->account_type;
        $PendingPrintRequestData->cps_account_no = $request->customer_ac_no;
        $PendingPrintRequestData->cps_micr_account_no = $request->micr_ac_no;
        $PendingPrintRequestData->cps_no_of_books = $request->no_of_books;
        $PendingPrintRequestData->cps_book_size = $request->book_size;
        $PendingPrintRequestData->cps_dly_bearer_order = $request->bearer_order;
        // $PendingPrintRequestData->cps_chq_no_from = $request->cheque_from;
        // $PendingPrintRequestData->cps_chq_no_to = $request->cheque_to;
        $PendingPrintRequestData->cps_act_name = $request->customer_name;
        $PendingPrintRequestData->cps_act_jointname1 = $request->customer_joint_name1;
        $PendingPrintRequestData->cps_act_jointname2 = $request->customer_joint_name1;
        $PendingPrintRequestData->cps_auth_sign1 = $request->sign_authority1;
        $PendingPrintRequestData->cps_auth_sign2 = $request->sign_authority2;
        $PendingPrintRequestData->cps_auth_sign3 = $request->sign_authority3;
        $PendingPrintRequestData->cps_act_address1 = $request->address_line1;
        $PendingPrintRequestData->cps_act_address2 = $request->address_line2;
        $PendingPrintRequestData->cps_act_address3 = $request->address_line3;
        $PendingPrintRequestData->cps_act_city = $request->city;
        $PendingPrintRequestData->cps_act_pin = $request->pin_code;
        $PendingPrintRequestData->cps_act_mobile = $request->cust_mobile_no;
        $PendingPrintRequestData->cps_emailid = $request->cust_email_id;
        $PendingPrintRequestData->updated_at = date('Y-m-d H:i:s');
        $PendingPrintRequestData->updated_by = Auth::user()->adminid;
        $PendingPrintRequestData->save();

        return response()->json([
            'status' => 200,
            'data' => $PendingPrintRequestData
        ]);
        
    }


    // function to shift pending data to uploading table
    public function shiftPendingDataTouploading(Request $req){
        if($req->ajax()){
            $pendingPrintReq = $this->pendingPrintRequestService->shiftPendingDataTouploading($req);

            if($pendingPrintReq){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Shifted successfully"
                ]);
            }
        }
    }


    // function to shift pending data to printque table
    public function shiftPendingDataToPrintQueue(Request $req){
        if($req->ajax()){
            $pendingPrintReq = $this->pendingPrintRequestService->shiftPendingDataToPrintQueue($req);
        
            if($pendingPrintReq){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Shifted successfully"
                ]);
            }
        }
    }


    // function to shift uploading data to pending data
    public function rejectPrintReuest(Request $req){
        if($req->ajax()){
            $upload = $this->pendingPrintRequestService->rejectPrintReuest($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Reject by HO successfully"
                ]);
            }
        }
    }


}
