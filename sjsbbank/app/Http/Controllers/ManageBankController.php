<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ManageBankService;
use App\Services\ManageBankTransactionIndexService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class ManageBankController extends Controller
{
    protected $manageBankService;

    protected $manageBankTransactionIndexService;

    public function __construct(ManageBankService $manageBankService, ManageBankTransactionIndexService $manageBankTransactionIndexService){
        $this->manageBankService = $manageBankService;
        $this->manageBankTransactionIndexService = $manageBankTransactionIndexService;
    }

    public function list(Request $req){
        $domain = \Request::getHost();
        $subdomain = explode('.', $domain);

        if($subdomain[0] != "cpsmaster"){
            abort(404);
        }

        return view('manage-bank.list');
    }

    public function getList(Request $req){
        if($req->ajax())
        {
            $manageBanks = $this->manageBankService->list($req);

            return DataTables::of($manageBanks)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    public function store(Request $req){
        if($req->ajax()){
            $validator = Validator::make($req->all(), [
                'name' => 'required',
                'subdomain' => 'required|unique:manage_banks'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $manageBank = $this->manageBankService->store($req);

                if($manageBank){
                    return response()->json([
                        'status' => 200,
                        'message' => "Banks Details Save Successfully."
                    ]);
                }else{
                    return response()->json([
                        'status' => 203,
                        'message' => "Something is wrong."
                    ]);
                }
            }
        }
    }

    public function edit(Request $req, $id){
        if($req->ajax()){

            $manageBank = $this->manageBankService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $manageBank
            ]);
        }
    }

    public function update(Request $req){
        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'name' => 'required',
                'subdomain' => 'required|unique:manage_banks,subdomain,'.$req->id.',id',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                $manageBank = $this->manageBankService->update($req);

                if($manageBank){
                    return response()->json([
                        'status' => 200,
                        'message' => "Banks Details updated Successfully."
                    ]);
                }else{
                    return response()->json([
                        'status' => 203,
                        'message' => "Something is wrong."
                    ]);
                }
            }
        }
    }

    // get transaction code index value by subdomain
    public function editTransactioncode(Request $req){
        if($req->ajax()){
            $this->manageBankTransactionIndexService->changeconnection($req->subdomain);

            $transactionIndex = $this->manageBankTransactionIndexService->getTransactionIndexvalue($req);

            return response()->json([
                'status' => 200,
                'data' => $transactionIndex
            ]);
        }
    }

    // code for transaction code index update
    public function updateTransactioncode(Request $req){
        if($req->ajax()){
            $this->manageBankTransactionIndexService->changeconnection($req->subdomain);

            $transactionIndex = $this->manageBankTransactionIndexService->update($req);

            if($transactionIndex){
                return response()->json([
                    'status' => 200,
                    'message' => 'Transaction Index Updated Successfully'
                ]);
            }
        }
    }
}
