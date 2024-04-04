<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PrintService;

class PrintController extends Controller
{
    protected $printService;

    public function __construct(PrintService $printService){
        parent::__construct();
        $this->printService = $printService;
    }

    public function print(){
        return view('print.print');
    }

    // print cheque logic
    public function printStore(Request $req){
        if($req->ajax()){

            $print = $this->printService->print();

            return response()->json([
                'status' => $print['status'],
                'message' => $print['message']
            ]);
        }
    }

    // cancel cheque where rollback the print req collection
    public function cancelPrint(Request $req){
        if($req->ajax()){
            $print = $this->printService->cancel();
            
            return response()->json([
                'status' => 200,
                'message' => 'Cancel Successfully'
            ]);
        }
    }

    // function where call ajax when pcp return false
    public function removePrintCollection(Request $req){
        if($req->ajax()){
            $print = $this->printService->removePrintCollection($req);

            return response()->json([
                'status' => 200,
                'message' => 'Data removed successfully'
            ]);
        }
    } 
}
