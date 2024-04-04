<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Reprint\ReprintChequeService;
use App\Services\Reprint\ReprintSingleLeafChequeService;

class ReprintChequeController extends Controller
{
    protected $reprintChequeService;
    protected $reprintSingleLeafChequeService;

    public function __construct(ReprintChequeService $reprintChequeService, ReprintSingleLeafChequeService $reprintSingleLeafChequeService){
        parent::__construct();
        $this->reprintChequeService = $reprintChequeService;
        $this->reprintSingleLeafChequeService = $reprintSingleLeafChequeService;
    }

    public function reprint(){
        return view('reprint.print');
    }

    // function to reprint cheque and slip code
    public function reprintCheque(Request $req){
        if($req->ajax()){
            if($req->do == 'reprint'){
                $print = $this->reprintSingleLeafChequeService->reprintSingleLeafCheque($req);
            }else{
                $print = $this->reprintChequeService->reprintCheque($req);
            }

            return response()->json([
                'status' => $print['status'],
                'message' => $print['message']
            ]);
        }
    }

    // function to remove reprint collection
    public function removeReprintCollection(Request $req){
        if($req->ajax()){
            $print = $this->reprintChequeService->removeReprintCollection($req);

            return response()->json([
                'status' => 200,
                'data' => $print
            ]);
        }
    }
}
