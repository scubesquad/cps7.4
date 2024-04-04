<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ManageBankService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class ManageBankController extends Controller
{
    protected $manageBankService;

    public function __construct(ManageBankService $manageBankService){
        $this->manageBankService = $manageBankService;
    }

    public function list(Request $req){

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
}
