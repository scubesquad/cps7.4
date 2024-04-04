<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadTransactionService;
use App\Services\ValidateUploadFileService;
use App\Services\TransactionService;
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

class TransactionListController extends Controller
{
    protected $uploadTransactionService;
    protected $transactionService;
    protected $validateUploadFileService;
    protected $commonService;

    public function __construct(UploadTransactionService $uploadTransactionService,TransactionService $transactionService, ValidateUploadFileService $validateUploadFileService, CommonService $commonService){
        parent::__construct();
        //$this->middleware(['permission:transaction.delete|transaction.filter|transaction.print|transaction.upload|transaction.view']);
        $this->uploadTransactionService = $uploadTransactionService;
        $this->transactionService = $transactionService;
        $this->validateUploadFileService = $validateUploadFileService;
        $this->commonService = $commonService;
    }

    public function index(Request $req){
        $transcationCodes = TransactionCode::orderBy('transactioncode', 'asc')->get();
        return view('transactions.list',[
            'transcationCodes' => $transcationCodes,
        ]);
        //  compact('toner'));
    }

    // function to get upload list
    public function getTransactionList(Request $req){
        
        if($req->ajax())
        {
            $record = $this->transactionService->getPrintData($req);

            return DataTables::of($record)
                    ->addIndexColumn()
                    ->toJson();
        }

    }

    // function to get printed list
    public function getPrintRecordAjax(Request $req){
        
        $uploads = PrintRequestCollection::where('cps_status','printed');
        $user = Auth::user();
        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);
        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        //echo $user->roles[0]->name;
        // if( ($user->roles[0]->name != 'Super Admin') && ($user->roles[0]->name != 'Admin') ) {
        //     $uploads->whereIn('branch_id',$ids);
        // }
        // else if($user->roles[0]->name != 'HO') {
        //     $uploads->whereIn('branch_id',$ids);
        // }

        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
            $uploads->whereNotNull('branch_id');
        } else {
            $uploads->whereIn('branch_id',$ids)->get();
        }
        

        $uploads->get();
        return DataTables::of($uploads)
            ->addColumn('action', function ($upload) {
                if($upload->cps_status =='Printed') {
                    $html = '
                    <a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(' . "'" . $upload->id . "'" . ') ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->editColumn('id', function ($upload) {
                if($upload->cps_status =='Printed') {
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

    // function to get print send to branch list
    public function getPrintSendToBranchRecordAjax(Request $req){    
        $uploads = PrintRequestCollection::where('cps_status','Send To Branch');
        $user = Auth::user();
        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);
        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        if($user->roles[0]->name != 'Super Admin' && $user->roles[0]->name != 'Admin') {
            $uploads->whereIn('branch_id',$ids)->get();
        }
        $uploads->get();
        return DataTables::of($uploads)
            ->addColumn('action', function ($upload) {
                if($upload->cps_status =='Send To Branch') {
                    $html = '
                    <a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(' . "'" . $upload->id . "'" . ') ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->editColumn('id', function ($upload) {
                if($upload->cps_status =='Send To Branch') {
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


    // function to get print send to branch list
    public function getPrintReadyForPickupRecordAjax(Request $req){    
        $uploads = PrintRequestCollection::where('cps_status','Ready For Pickup')->orwhere('cps_status', '=', 'Picked Up');
        $user = Auth::user();
        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);
        // $data = DB::table('tb_branchdetails')->whereIn('branch_id', $ids)->get();
        if($user->roles[0]->name != 'Super Admin' && $user->roles[0]->name != 'Admin') {
            $uploads->whereIn('branch_id',$ids)->get();
        }
        $uploads->get();
        return DataTables::of($uploads)
            ->addColumn('action', function ($upload) {
                if($upload->cps_status =='Ready For Pickup') {
                    $html = '
                    <a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=editRecord(' . "'" . $upload->id . "'" . ') ><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->editColumn('id', function ($upload) {
                if($upload->cps_status =='Ready For Pickup') {
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



    // send To Branch
    public function sendToBranchAjax(Request $req){
            if($req->ajax()){
                $printRecord = $this->transactionService->sendToBranch($req);
    
                if($printRecord){
                    return response()->json([
                        'status' => 200,
                        'message' => "Record Send To Branch successfully"
                    ]);
                }
            }
        
    }

    // ready-for-pickup
    public function readyForPickupAjax(Request $req){
        if($req->ajax()){
            $printRecord = $this->transactionService->readyForPickup($req);

            if($printRecord){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Ready For Pickup successfully"
                ]);
            }
        }
    
    }

    // ready-for-pickup
    public function pickupUpAjax(Request $req){
        if($req->ajax()){
            $printRecord = $this->transactionService->pickupUp($req);

            if($printRecord){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Pickup Up successfully"
                ]);
            }
        }
    
    }

    
}
