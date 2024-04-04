<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountChargesService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class AccountChargesController extends Controller
{
    protected $accountChargesService;
    protected $commonService;

    public function __construct(AccountChargesService $accountChargesService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:account-charges.add|account-charges.delete|account-charges.edit|account-charges.view']);
        $this->accountChargesService = $accountChargesService;
        $this->commonService = $commonService;
    }

    public function list(Request $req){
        // to get bank 
        $banks = $this->commonService->getBankDetails();

        // to get branch 
        $branchs = $this->commonService->getBranch();

        // to get active transaction code
        $transactonCodes = $this->commonService->getActiveTransactionCodes();
        
        return view('master.account-charges.list', compact('banks', 'branchs', 'transactonCodes'));
    }

    // function to get cheque series list
    public function getList(Request $req){
        if($req->ajax())
        {
            $accountCharges = $this->accountChargesService->list();

            return DataTables::of($accountCharges)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to store cheque series
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'book_size' => 'required|unique:tb_account_charges',
                'charges' => 'required',
            ]);

            if ($validator->fails()){
                return response()->json([
                    "errors" => $validator->errors()
                ]);
            }else{
                
                $accountCharges = $this->accountChargesService->store($req);
                
                if($accountCharges){
                    return response()->json([
                        'status' => 200,
                        'message' => "Account Charges Added Successfully"
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

    // function to get cheque series by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $accountCharges = $this->accountChargesService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $accountCharges
            ]);
        }
    }

    // function to validate and update cheque series
    public function update(Request $req){
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                //'book_size' => 'required',
                'book_size' => 'required|unique:tb_account_charges,book_size,'.$req->id,
                'charges' => 'required',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                $accountCharges = $this->accountChargesService->update($req);
                if($accountCharges){
                    return response()->json([
                        'status' => 200,
                        'message' => "Account Charges Updated Successfully"
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

    // function to remove cheque series
    public function delete(Request $req){
        if($req->ajax()){
            $series = $this->accountChargesService->delete($req);

            if($series){
                return response()->json([
                    'status' => 200,
                    'message' => "Account Charges Removed Successfully"
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
