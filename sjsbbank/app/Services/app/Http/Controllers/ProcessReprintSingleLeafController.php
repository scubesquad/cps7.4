<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Reprint\ProcessReprintSingleLeafService;
use Yajra\Datatables\Datatables;

class ProcessReprintSingleLeafController extends Controller
{
    protected $processReprintSingleLeafService;

    public function __construct(ProcessReprintSingleLeafService $processReprintSingleLeafService){
        parent::__construct();
        $this->middleware(['permission:reprint-single-leaf.delete|reprint-single-leaf.print|reprint-single-leaf.view']);
        $this->processReprintSingleLeafService = $processReprintSingleLeafService;
    }

    public function list(){
        return view('process-reprint.process_single_leaf_list');
    }

    // function to get list of reprint request
    public function getList(Request $req){
        if($req->ajax())
        {
            $processReprint = $this->processReprintSingleLeafService->list();

            return DataTables::of($processReprint)
                    ->addIndexColumn()
                    ->setRowId(function ($user) {
                        return 'row_'.$user->id;
                    })
                    ->toJson();
        }
    }
}
