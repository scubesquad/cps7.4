<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CountryService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    protected $countryService;
    protected $commonService;

    public function __construct(CountryService $countryService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:country.add|country.delete|country.edit|country.view']);
        $this->countryService = $countryService;
        $this->commonService = $commonService;
    }

    //  function to show country list page
    public function list(Request $req){
        return view('master.country.list');
    }

    // function to get country list
    public function getList(Request $req){
        if($req->ajax())
        {
            $country = $this->countryService->list();

            return DataTables::of($country)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to validate and save country
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'country_name' => 'required|unique:tb_countrymaster',
                'country_code' => 'required|unique:tb_countrymaster',
                'country_isdelete' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $country = $this->countryService->store($req);

                if($country){
                    return response()->json([
                        'status' => 200,
                        'message' => "Country Added Successfully"
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

    // function to get country by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $country = $this->countryService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $country
            ]);
        }
    }

    // function to validate and update country by id
    public function update(Request $req){
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                'country_name' => 'required|unique:tb_countrymaster,country_name,'.$req->country_id.',country_id',
                'country_code' => 'required|unique:tb_countrymaster,country_code,'.$req->country_id.',country_id',
                'country_isdelete' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{

                $country = $this->countryService->update($req);

                if($country){
                    return response()->json([
                        'status' => 200,
                        'message' => "Country Updated Successfully"
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

    // function to remove country
    public function delete(Request $req){
        if($req->ajax()){
            $check = $this->commonService->checkCountryExistsInState($req->id);

            if($check){
                return response()->json([
                    'status' => 201,
                    'message' => "Country already assign to the state"
                ]);
            }

            $country = $this->countryService->delete($req);

            if($country){
                return response()->json([
                    'status' => 200,
                    'message' => "Country Removed Successfully"
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
