<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BankService;
use App\Services\CommonService;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    protected $bankService;
    protected $commonService;

    public function __construct(BankService $bankService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:bank.view']);
        $this->bankService = $bankService;
        $this->commonService = $commonService;
    }

    public function edit(Request $req){
        // to get bank details
        $bank = $this->bankService->edit();

        // to get the active country
        $country = $this->commonService->getActiveCountry();

        return view('master.bank.edit', compact('country', 'bank'));
    }

    // to validate bank and update
    public function update(Request $req){
        if($req->ajax()){
            $validator = Validator::make($req->all(), [
                'bank_name' => 'required',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $state = $this->bankService->update($req);

                if($state){
                    return response()->json([
                        'status' => 200,
                        'message' => "Bank details updated Sucessfully."
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

    // function to get active state
    public function getState(Request $req){
        if($req->ajax()){
            $state = $this->commonService->getActiveStateByCountryId($req->state_id);

            return response()->json([
                'status' => 200,
                'data' => $state
            ]);
        }
    }
}
