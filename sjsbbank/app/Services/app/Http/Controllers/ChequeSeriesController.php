<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChequeSeriesService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class ChequeSeriesController extends Controller
{
    protected $chequeSeriesService;
    protected $commonService;

    public function __construct(ChequeSeriesService $chequeSeriesService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:cheque-series.add|cheque-series.delete|cheque-series.edit|cheque-series.view']);
        $this->chequeSeriesService = $chequeSeriesService;
        $this->commonService = $commonService;
    }

    public function list(Request $req){
        // to get bank 
        $banks = $this->commonService->getBankDetails();

        // to get branch 
        $branchs = $this->commonService->getBranch();

        // to get active transaction code
        $transactonCodes = $this->commonService->getActiveTransactionCodes();
        
        return view('master.series.list', compact('banks', 'branchs', 'transactonCodes'));
    }

    // function to get cheque series list
    public function getList(Request $req){
        if($req->ajax())
        {
            $chequeSeries = $this->chequeSeriesService->list();

            return DataTables::of($chequeSeries)
                    ->addIndexColumn()
                    ->editColumn('series_from', function ($data) {
                        return str_pad($data->series_from, 6, "0", STR_PAD_LEFT); 
                    })
                    ->editColumn('series_to', function ($data) {
                        return str_pad($data->series_to, 6, "0", STR_PAD_LEFT); 
                    })
                    ->editColumn('series_lastno', function ($data) {
                        return str_pad($data->series_lastno, 6, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // function to store cheque series
    public function store(Request $req){

        if($req->ajax()){

            $validator = Validator::make($req->all(), [
                'series_bank_id' => 'required',
                'branch_id' => 'required',
                'transactioncode' => 'required',
                'series_from' => 'required|digits_between:6,6',
                'series_to' => 'required|digits_between:6,6',
                'series_lastno' => 'required|digits_between:6,6',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                if($req->series_from <= $req->series_lastno && $req->series_lastno <= $req->series_to)
                {
                    $chequeSeries = $this->chequeSeriesService->store($req);
                    // dd($req);
                    // $chequeSeries = true;
                    if($chequeSeries){
                        return response()->json([
                            'status' => 200,
                            'message' => "Cheque Series Added Successfully"
                        ]);
                    }else{
                        return response()->json([
                            'status' => 201,
                            'message' => "Something went wrong"
                        ]);
                    }
                }else{
                    return response()->json([
                        'status' => 203,
                        'message' => "Cheque Series last number in between cheque series from and cheque series to"
                    ]);
                }
            }
        }
    }

    // function to get cheque series by id
    public function edit(Request $req, $id){
        if($req->ajax())
        {
            $chequeSeries = $this->chequeSeriesService->edit($id);

            return response()->json([
                'status' => 200,
                'data' => $chequeSeries
            ]);
        }
    }

    // function to validate and update cheque series
    public function update(Request $req){
        if($req->ajax())
        {
            $validator = Validator::make($req->all(), [
                'series_bank_id' => 'required',
                'branch_id' => 'required',
                'transactioncode' => 'required',
                'series_from' => 'required|digits_between:6,6',
                'series_to' => 'required|digits_between:6,6',
                'series_lastno' => 'required|digits_between:6,6',
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                if($req->series_from <= $req->series_lastno && $req->series_lastno <= $req->series_to)
                {
                    $chequeSeries = $this->chequeSeriesService->update($req);

                    if($chequeSeries){
                        return response()->json([
                            'status' => 200,
                            'message' => "Cheque Series Updated Successfully"
                        ]);
                    }else{
                        return response()->json([
                            'status' => 201,
                            'message' => "Something went wrong"
                        ]);
                    }
                }else{
                    return response()->json([
                        'status' => 203,
                        'message' => "Cheque Series last number in between cheque series from and cheque series to"
                    ]);
                }
            }
        }
    } 

    // function to remove cheque series
    public function delete(Request $req){
        if($req->ajax()){
            $series = $this->chequeSeriesService->delete($req);

            if($series){
                return response()->json([
                    'status' => 200,
                    'message' => "Cheque Series Removed Successfully"
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
