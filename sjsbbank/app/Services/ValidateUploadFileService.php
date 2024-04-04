<?php

namespace App\Services;

use DB;
use Log;

class ValidateUploadFileService
{
	public function validate($setting, $data, $count, $bank, $transactionIndex)
	{
        // validate not of field
		if(count($data) != $transactionIndex['totalcolumn']){
            return [
                'status' => 203,
                'message' => "The uploaded file contains wrong data / no of field at line $count",
            ];
        }

        // if series bank generated
        if($setting->chk_taken_from == 0)
        {
            // validate the cheque series
            if((int)$data[$transactionIndex['chequenofrom']] <= 0){
                return [
                    'status' => 203,
                    'message' => "The uploaded file contains no. of start cheque series less than zero for record at line $count.",
                ];
            }

            if((int)$data[$transactionIndex['chequenofrom']] <= 0){
                return [
                    'status' => 203,
                    'message' => "The uploaded file contains no. of end cheque series less than zero for record at line $count",
                ];
            }
        }

        // validate book size and cheque size
        if((int)$data[$transactionIndex['noofbooks']] <= 0){
            return [
                'status' => 203,
                'message' => "The uploaded file contains no. of books size less than zero for record at line $count.",
            ];
        }
        if((int)$data[$transactionIndex['booksize']] <= 0){
            return [
                'status' => 203,
                'message' => "The uploaded file contains no. of cheque size less than zero for record at line $count.",
            ];
        }

        if($setting->chk_taken_from == 0)
        {
            // validate uploading, pending, printque and printcollection table data exist or not
            $checkUploading = $this->checkDuplicateUploadData('tb_print_req_collection', $data[$transactionIndex['accountno']], $data[$transactionIndex['chequenofrom']]);

            if($checkUploading){
            	return [
                    'status' => 203,
                    'message' => "This file has records which are already printed. Account No - ".$data[$transactionIndex['accountno']].". Cheque from series - ".$data[$transactionIndex['chequenofrom']],
                ];
            }


            $checkUploading = $this->checkDuplicateUploadData('tb_uploadingdata', $data[$transactionIndex['accountno']], $data[$transactionIndex['chequenofrom']]);

            if($checkUploading){
            	return [
                    'status' => 203,
                    'message' => "This file has records which are already uploaded for printing. Account No - ".$data[$transactionIndex['accountno']].". Cheque from series - ".$data[$transactionIndex['chequenofrom']],
                ];
            }

            $checkUploading = $this->checkDuplicateUploadData('tb_printque', $data[$transactionIndex['accountno']], $data[$transactionIndex['chequenofrom']]);

            if($checkUploading){
            	return [
                    'status' => 203,
                    'message' => "This file has records which are already uploaded for printing. Account No - ".$data[$transactionIndex['accountno']].". Cheque from series - ".$data[$transactionIndex['chequenofrom']],
                ];
            }

            $checkUploading = $this->checkDuplicateUploadData('tb_pending_print_req', $data[$transactionIndex['accountno']], $data[$transactionIndex['chequenofrom']]);

            if($checkUploading){
            	return [
                    'status' => 203,
                    'message' => "This file has records which are already uploaded for printing. Account No - ".$data[$transactionIndex['accountno']].". Cheque from series - ".$data[$transactionIndex['chequenofrom']],
                ];
            }

            $checkLastSeries = $this->checkLastSeries($data, $transactionIndex);

            if($checkLastSeries){
                return [
                    'status' => 203,
                    'message' => "No. of cheque and book size not matches with cheque last series at line $count",
                ];
            }
            // end of validate uploading, pending, printque and printcollection table data exist or not
        }

        $checkDuplicateUniqueReqNo = $this->checkDuplicateUniqueReqNo($data[$transactionIndex['uniquerequest']]);

        if($checkDuplicateUniqueReqNo){
            return [
                'status' => 203,
                'message' => "The Unique Request No ".$data[$transactionIndex['uniquerequest']]." Already Exist.",
            ];
        }

        // validate transaction code
        $checkTransactionCode = $this->checkTransactionCode($data[$transactionIndex['transactioncode']]);

        if($checkTransactionCode){
            return [
                'status' => 203,
                'message' => "Transaction Code ".$data[$transactionIndex['transactioncode']]." Not Exist in Transaction Master",
            ];
        }

        // validate branch
        $checkBranh = $this->checkBranchCode($data, $bank, $transactionIndex);

        if($checkBranh){
            return [
                'status' => 203,
                'message' => "Error in mapping details at line - ".$count,
            ];
        }

        //validation for system generate
        if($setting->chk_taken_from == 1){
            $bank = DB::table('tb_bankdetails')->select('is_branch_sub_code', 'number_digit_sub_code', 'starting_index_sub_code')->first();

            $check = DB::table('tb_cps_chequeseries')
                          ->where('series_transationcode', $data[$transactionIndex['transactioncode']])
                          ->where(DB::raw('LPAD(serise_branchcode_branch, 3, 0)'), str_pad($data[$transactionIndex['branchcode']], 3, "0", STR_PAD_LEFT ));
            if($bank->is_branch_sub_code){
                $check = $check->where('branch_sub_code', substr($data[$transactionIndex['accountno']], $bank->starting_index_sub_code-1, $bank->number_digit_sub_code));
            }
            $check = $check->doesntExist();

            if($check){
                return [
                    'status' => 203,
                    'message' => "Cheque series not exists for branch code ".$data[$transactionIndex['branchcode']]." at line  - ".$count,
                ];  
            }
        }

        return [
        	'status' => 200
        ];
	}

	// function to check the data is in table or not
	public function checkDuplicateUploadData($tableName, $accountNo, $startSeries){
		return DB::table($tableName)
               ->where('cps_unique_req', $accountNo)
			   ->where('cps_account_no', $accountNo)
			   ->where('cps_chq_no_from', '<=', $startSeries)
			   ->where('cps_chq_no_to', '>=', $startSeries)
			   ->exists();
	}

    // function to check the data unique no
    public function checkDuplicateUniqueReqNo($unique){
        if(DB::table('tb_uploadingdata')->where('cps_unique_req', $unique)->exists()){
            return true;
        }

        if(DB::table('tb_pending_print_req')->where('cps_unique_req', $unique)->exists()){
            return true;
        }

        if(DB::table('tb_printque')->where('cps_unique_req', $unique)->exists()){
            return true;
        }

        if(DB::table('tb_print_req_collection')->where('cps_unique_req', $unique)->exists()){
            return true;
        }

        return false;
    }

    // function to check branch
    public function checkBranchCode($data, $bank, $transactionIndex){

        $branch = DB::table('tb_branchdetails')
                ->where('branch_code', str_pad($data[$transactionIndex['branchcode']], 3, "0", STR_PAD_LEFT));

        if($bank->is_branch_sub_code == 1){
            $branch = $branch->where('branch_sub_code', substr($data[$transactionIndex['accountno']], $bank->starting_index_sub_code-1, $bank->number_digit_sub_code));
        }
        $branch = $branch->doesntExist();

        return $branch;
    }

    // function to check where transaction code exists or not
    public function checkTransactionCode($code){
        return DB::table('tb_cps_transactioncodes')
               ->where('transactioncode', $code)
               ->where('transactionstatus', 1)
               ->doesntExist();
    }


    // function to check book size is matched with chequelast series
    public function checkLastSeries($data, $transactionIndex){
        $totalBookSize = $data[$transactionIndex['noofbooks']] * $data[$transactionIndex['booksize']];

        $lastSeries = $data[$transactionIndex['chequenofrom']] + $totalBookSize - 1;
        if(str_pad($lastSeries, 6, "0", STR_PAD_LEFT ) != str_pad($data[$transactionIndex['chequenoto']], 6, "0", STR_PAD_LEFT )){
            return true;
        }
    }
}