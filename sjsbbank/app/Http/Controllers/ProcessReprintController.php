<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Reprint\ProcessReprintService;
use Yajra\Datatables\Datatables;

class ProcessReprintController extends Controller
{
    protected $processReprintService;

    public function __construct(ProcessReprintService $processReprintService){
        parent::__construct();
        $this->middleware(['permission:process-reprint.delete|process-reprint.print-in-bunch|process-reprint.print-requisiion-only|process-reprint.print-selected-pages|process-reprint.view']);
        $this->processReprintService = $processReprintService;
    }

    public function list(){
        return view('process-reprint.processlist');
    }

    // get the list of reprint request
    public function getList(Request $req){
        if($req->ajax())
        {
            $processReprint = $this->processReprintService->list();

            return DataTables::of($processReprint)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to shift reprint que 
    public function update(Request $req){
        
        if($req->ajax()){

            $processReprint = $this->processReprintService->update($req);

            return response()->json([
                'status' => 200,
                'message' => "request placed"
            ]);
        }
    }

    // function to remove reprint request
    public function delete(Request $req){
        if($req->ajax()){
            $processReprint = $this->processReprintService->delete($req);

            return response()->json([
                'status' => 200,
                'message' => "reprint request removed successfully"
            ]);
        }
    }
}
