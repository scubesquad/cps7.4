<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadTransactionService;
use App\Services\ValidateUploadFileService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use File;
use Log;

class UploadTransactionController extends Controller
{
    protected $uploadTransactionService;
    protected $validateUploadFileService;
    protected $commonService;

    public function __construct(UploadTransactionService $uploadTransactionService, ValidateUploadFileService $validateUploadFileService, CommonService $commonService){
        parent::__construct();
        $this->middleware(['permission:transaction.delete|transaction.filter|transaction.print|transaction.upload|transaction.view']);
        $this->uploadTransactionService = $uploadTransactionService;
        $this->validateUploadFileService = $validateUploadFileService;
        $this->commonService = $commonService;
    }

    public function upload(Request $req){
        $toner = $this->commonService->getSettings();

        return view('uploads.upload', compact('toner'));
    }

    // function to get upload list
    public function getUpload(Request $req){
        if($req->ajax())
        {
            $uploads = $this->uploadTransactionService->getUploadData($req);

            return DataTables::of($uploads)
                    ->toJson();
        }

    }

    // function to get filter list of filter data
    public function getFilter(Request $req){
        if($req->ajax()){
            $branch = $this->uploadTransactionService->getBranch();
            
            $transactionCode = $this->uploadTransactionService->getTransactionCode();

            $bookSize = $this->uploadTransactionService->getBookSize();

            return response()->json([
                'status' => 200,
                'data' => [
                    'branch' => $branch,
                    'transactionCode' => $transactionCode,
                    'bookSize' => $bookSize
                ]
            ]);

        }
    }

    // function to validate data and store in tb_uploading data
    public function store(Request $req){
        if($req->ajax()){

            if($req->hasFile('upload')){

                $bank = $this->commonService->getBankName();
                $setting = $this->commonService->getSettings();

                // code to  store upload file
                $fileName = 'uploadfile-'.time().'.'.$req->upload->getClientoriginalExtension();
                $req->file('upload')->storeAs('upload/'.$bank->bank_name.'/', $fileName, 'public');

                // read uploaded file
                $fh = fopen(Storage::disk('public')->path('upload/'.$bank->bank_name.'/'.$fileName),"r");
                $count = 1;   //variable for line no.
                $data = [];
                while ($line = fgets($fh)) 
                {
                    // check duplicate record find
                    $explode = explode("~",$line);
                    foreach($data as $da){
                        if(in_array($explode[0], $da)){
                            return response()->json([
                                'status' => 203,
                                'message' => "The Unique Request No ".$explode[0]." Already Exist.",
                            ]);
                        }

                        if($setting->chk_taken_from == 0)
                        {
                            if($da[29] <= $explode[29] && $explode[29] <= $da[30]){
                                return response()->json([
                                    'status' => 203,
                                    'message' => "Duplicate Record Found in File at line ".$count,
                                ]);
                            }
                        }
                    }

                    $data[] = $explode;
                    // code to validate upload file
                    $check = $this->validateUploadFileService->validate($setting, $explode, $count, $bank);
                    if($check['status'] == 203)
                    {
                        return response()->json([
                            'status' => 203,
                            'message' => $check['message'],
                        ]);
                    }
                    $count = $count + 1;
                }


                // code to save file record
                $upload = $this->uploadTransactionService->save($data, $bank);

                if($upload){
                    return response()->json([
                        'status' => 200,
                        'message' => "File uploaded successfully"
                    ]);
                }
            }
        }
    }

    // function to delete tb_uploading record
    public function delete(Request $req){
        if($req->ajax()){
            $upload = $this->uploadTransactionService->delete($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record removed successfully"
                ]);
            }
        }
    }

    // function to shift uploading data to pending data
    public function shiftUploadingDataToPendingTable(Request $req){
        if($req->ajax()){
            $upload = $this->uploadTransactionService->shiftUploadingDataToPendingTable($req);

            if($upload){
                return response()->json([
                    'status' => 200,
                    'message' => "Record Shifted successfully"
                ]);
            }
        }
    }
}
