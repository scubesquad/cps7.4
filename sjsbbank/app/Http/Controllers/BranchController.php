<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BranchService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    protected $branchService;
    protected $commonService;

    public function __construct(BranchService $branchService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:branch.add|branch.delete|branch.edit|branch.view']);
        $this->branchService = $branchService;
        $this->commonService = $commonService;
    }


    public function list(Request $req){
        // to get active country
        $country = $this->commonService->getActiveCountry();

        // to  get bank details
        $bank = $this->commonService->getBankName();

        return view('master.branch.list', compact('country', 'bank'));
    }

    // function to get branch details
    public function getList(Request $req){
        if($req->ajax())
        {
            $branch = $this->branchService->list();

            return DataTables::of($branch)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to validate and save branch
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'branch_name' => 'required',
                'branch_short_name' => 'required',
                'branch_code' => 'required',
                'branch_address1' => 'required',
                'branch_country_id' => 'required',
                'branch_state_id' => 'required',
                'branch_City_Code' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $checkBranch = $this->branchService->checkBranchExists($req);

                if($checkBranch){
                    return response()->json([
                        'status' => 201,
                        'message' => "Branch Code ".$req->branch_code." Already Exist"
                    ]);
                }

                $branch = $this->branchService->store($req);

                if($branch){
                    return response()->json([
                        'status' => 200,
                        'message' => "Branch Added Successfully"
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

    // function to get branch details by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $branch = $this->branchService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $branch
            ]);
        }
    }

    // function to update branch
    public function update(Request $req){
        // dd($req);
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                'branch_name' => 'required',
                'branch_short_name' => 'required',
                'branch_code' => 'required',
                'branch_address1' => 'required',
                'branch_country_id' => 'required',
                'branch_state_id' => 'required',
                'branch_City_Code' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $branch = $this->branchService->update($req);

                if($branch){
                    return response()->json([
                        'status' => 200,
                        'message' => "Branch Updated Successfully"
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

    // function to remove branch
    public function delete(Request $req){
        if($req->ajax()){
            $branch = $this->branchService->delete($req);

            if($branch){
                return response()->json([
                    'status' => 200,
                    'message' => "Branch Removed Successfully"
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
