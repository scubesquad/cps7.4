<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TransactionCodeSeriesService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class TransactionCodeController extends Controller
{
    protected $transactionCodeSeriesService;

    public function __construct(TransactionCodeSeriesService $transactionCodeSeriesService){
        parent::__construct();
        $this->middleware(['permission:transaction-code.add|transaction-code.edit|transaction-code.delete|transaction-code.view']);
        $this->transactionCodeSeriesService = $transactionCodeSeriesService;
    }

    public function list(Request $req){
        
        return view('master.transaction-code.list');
    }

    // function to get transaction code list
    public function getList(Request $req){
        if($req->ajax())
        {
            $transactionCode = $this->transactionCodeSeriesService->list();

            return DataTables::of($transactionCode)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to validate and store transaction code
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'transactioncodedescription' => 'required',
                'transactioncode' => 'required|unique:tb_cps_transactioncodes',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $transactionCode = $this->transactionCodeSeriesService->store($req);

                if($transactionCode){
                    return response()->json([
                        'status' => 200,
                        'message' => "Transaction Code Added Successfully"
                    ]);
                }else{
                    return response()->json([
                        'status' => 201,
                        'message' => "Something went wrong"
                    ]);
                }
            }
        }
    }

    // function to get transaction code by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $transactionCode = $this->transactionCodeSeriesService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $transactionCode
            ]);
        }
    }

    // function to validate and update transaction code
    public function update(Request $req){
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                'transactioncodedescription' => 'required',
                'transactioncode' => 'required|unique:tb_cps_transactioncodes,transactioncode,'.$req->transactioncode_id.',transactioncode_id',
                'transactionstatus' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $transactionCode = $this->transactionCodeSeriesService->update($req);

                if($transactionCode){
                    return response()->json([
                        'status' => 200,
                        'message' => "Transaction Code Updated Successfully"
                    ]);
                }else{
                    return response()->json([
                        'status' => 201,
                        'message' => "Something went wrong"
                    ]);
                }
            }
        }
    } 

    // function to  remove transaction code
    public function delete(Request $req){
        if($req->ajax()){
            $transactionCode = $this->transactionCodeSeriesService->delete($req);

            if($transactionCode){
                return response()->json([
                    'status' => 200,
                    'message' => "Transaction Code Removed Successfully"
                ]);
            }else{
                return response()->json([
                    'status' => 201,
                    'message' => "Something went wrong"
                ]);
            }
        }
    }
}
