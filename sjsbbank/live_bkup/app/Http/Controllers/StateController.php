<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use App\Services\StateService;
use App\Services\CommonService;

class StateController extends Controller
{
    protected $stateService;
    protected $commonService;

    public function __construct(StateService $stateService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:state.add|state.edit|state.delete|state.view']);
        $this->stateService = $stateService;
        $this->commonService = $commonService;
    }

    public function list(Request $req){
        
        $country = $this->commonService->getActiveCountry();

        return view('master.state.list', compact('country'));
    }

    // function to get state list
    public function getList(Request $req){
        if($req->ajax())
        {
            $state = $this->stateService->list();

            return DataTables::of($state)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to validate and store state
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'state_name' => 'required|unique:tb_statemaster,state_name',
                'is_delete' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $state = $this->stateService->store($req);

                if($state){
                    return response()->json([
                        'status' => 200,
                        'message' => "State Added Successfully"
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

    // function to get state by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $state = $this->stateService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $state
            ]);
        }
    }

    // functio to validate and update state
    public function update(Request $req){
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                'state_name' => 'required|unique:tb_statemaster,state_name,'.$req->state_id.',state_id',
                'is_delete' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $state = $this->stateService->update($req);

                if($state){
                    return response()->json([
                        'status' => 200,
                        'message' => "State Updated Successfully"
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

    // function to remove state
    public function delete(Request $req){
        if($req->ajax()){

            $checkBranch = $this->commonService->checkStateExistsInBranch($req->id);
            $checkBank = $this->commonService->checkStateExistsInBank($req->id);

            if($checkBranch || $checkBank){
                return response()->json([
                    'status' => 201,
                    'message' => "State already assign to the bank master or branch master"
                ]);
            }


            $state = $this->stateService->delete($req);

            if($state){
                return response()->json([
                    'status' => 200,
                    'message' => "State Removed Successfully"
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
