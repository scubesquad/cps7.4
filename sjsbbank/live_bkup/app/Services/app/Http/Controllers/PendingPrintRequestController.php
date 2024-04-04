<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PendingPrintRequestService;
use Yajra\Datatables\Datatables;
use Log;

class PendingPrintRequestController extends Controller
{
    protected $pendingPrintRequestService;

    public function __construct(PendingPrintRequestService $pendingPrintRequestService){
        parent::__construct();
        $this->middleware(['permission:pending-print-req.cancel|pending-print-req.print|pending-print-req.view']);
        $this->pendingPrintRequestService = $pendingPrintRequestService;
    }

    public function list(Request $req){

        return view('pending-print-req.list');
    }

    public function getList(Request $req){
        if($req->ajax())
        {
            $pendingPrintRequest = $this->pendingPrintRequestService->list();

            return DataTables::of($pendingPrintRequest)
                    ->toJson();
        }
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
}
