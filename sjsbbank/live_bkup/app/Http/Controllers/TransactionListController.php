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

    // function to get print list
    public function getPrintRecordAjax(Request $req){
        
        $uploads = PrintRequestCollection::get();
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
                //if($upload->cps_status ='Rejected By HO') {
                    return '<input type="checkbox" class="selectId" name="id" value="'.$upload->id .'">';
                // } else {
                //    return $upload->id;
                // }
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


    // 
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
    
}
