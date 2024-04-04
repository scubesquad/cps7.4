<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReprintRequestService;
use Yajra\Datatables\Datatables;

class ReprintRequestController extends Controller
{
    protected $reprintRequestService;

    public function __construct(ReprintRequestService $reprintRequestService){
        parent::__construct();
        $this->middleware(['permission:reprint-request.print|reprint-request.view']);
        $this->reprintRequestService = $reprintRequestService;
    }

    public function list(){
        return view('reprint.list');
    }

    // function to get reprint list
    public function getList(Request $req)
    {
        if($req->ajax())
        {
            $reprint = $this->reprintRequestService->list($req);

            return DataTables::of($reprint)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to  shift print collection to reprint que
    public function shiftPrintCollectionToReprintQue(Request $req){
        if($req->ajax()){
            $reprint = $this->reprintRequestService->checkIsAlreadyReprintOrNot($req);

            if($reprint)
            {
                return response()->json([
                    'status' => 203,
                    'message' => "Your request is already placed to admin"
                ]);
            }

            $reprint = $this->reprintRequestService->shiftPrintCollectionToReprintQue($req);

            return response()->json([
                'status' => 200,
                'message' => "Your request is placed to the reprint admin"
            ]);
        }
    }
}
