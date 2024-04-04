<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Services\LogService;

class LogController extends Controller
{
    protected $logService;

    public function __construct(LogService $logService){
        parent::__construct();
        $this->logService = $logService;
    }

    public function list(Request $req){
        return view('log.list');
    }

    // function to get log
    public function getList(Request $req){
        if($req->ajax())
        {
            $log = $this->logService->list($req);

            return DataTables::of($log)
                   ->addIndexColumn()
                   ->editColumn('created', function ($data) {
                        return date('d-m-Y h:i:s', strtotime($data->created)); 
                   })
                   ->toJson();
        }
    }

    // function to get log details by id
    public function getLog($id){
        $log = $this->logService->getLog($id);

        return view('log.details', compact('log'));
    }
}
