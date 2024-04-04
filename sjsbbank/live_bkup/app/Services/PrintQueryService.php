<?php

namespace  App\Services;

use Log;
use DB;

class PrintQueryService
{

	// function to generate the micro repete line
	public function microLine($text, $w, $fontSize)
	{
		$microlineEnrollment = strtoupper($text);
	    $microlineEnrollment = preg_replace('/\s+/', '', $microlineEnrollment);
	    $textArrayEnrollment = imagettfbbox($fontSize, 0, 'C:\xampp8.2.4\htdocs\CPS2\public\font\Arial.ttf', $microlineEnrollment);
	    $strWidthEnrollment = ($textArrayEnrollment[2] - $textArrayEnrollment[0]);
	    $strHeightEnrollment = $textArrayEnrollment[6] - $textArrayEnrollment[1] / $fontSize;
	    $latestWidthEnrollment = $w;
	    $microlineEnrollmentstrLength = strlen($microlineEnrollment);
	    //width per character
	    $microlineEnrollmentcharacterWd = $strWidthEnrollment/$microlineEnrollmentstrLength;
	    //Required no of characters required in string to match width
	    $microlineEnrollmentCharReq = $latestWidthEnrollment/$microlineEnrollmentcharacterWd;
	    $microlineEnrollmentCharReq = ceil($microlineEnrollmentCharReq);
	    //No of time string should repeated
	    $repeatemicrolineEnrollmentCount = $latestWidthEnrollment/$strWidthEnrollment;
	    $repeatemicrolineEnrollmentCount = ceil($repeatemicrolineEnrollmentCount)+1;
	    //Repeatation of string 
	    $microlineEnrollmentstrRep = str_repeat($microlineEnrollment, $repeatemicrolineEnrollmentCount); 
	    //Cut string in required characters (final string)
	    $arrayEnrollment = substr($microlineEnrollmentstrRep,0,$microlineEnrollmentCharReq);
	    // echo $microlineEnrollmentCharReq. "     dd    ";               

	    return $arrayEnrollment;
	}

	// function to get transaction key value
	public function getTransactionKeyValue(){
		return DB::table('tb_cps_transactioncodes')
			   ->where('transactionstatus', 1)
			   ->pluck('transactioncodedescription', 'transactioncode')
			   ->toArray();
	}

	// function to heck that prinque is empty or not
	public function checkPrintqueEmptyOrNot(){
		return DB::table('tb_printque')->distinct()->exists();
	}

	// function to get bankdetails
	public function getBankDetails(){
		return DB::table('tb_bankdetails')->select('bank_name', 'bank_website', 'bank_printers', 'is_branch_sub_code')->first();
	}

	// function to get first three cheque sequence data
	public function getFirstThreeSequence($bank, $skip)
	{
		$result = DB::table('tb_print_sequence');            
        if($bank->is_branch_sub_code == 1){
            $result = $result->join('tb_branchdetails', function($join){
        	    	$join->on('tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
        	    	$join->on('tb_branchdetails.branch_sub_code', '=', 'tb_print_sequence.branch_sub_code');
        	    });
        }else{
        	$result = $result->join('tb_branchdetails', 'tb_branchdetails.branch_code', '=', DB::raw('LPAD(tb_print_sequence.cps_branchmicr_code, 3, 0)'));
        }

        $result = $result->skip($skip)->select('tb_print_sequence.*', 'tb_branchdetails.branch_neftifsccode')
        		->take(3)
        		->get();

        return $result;
	}

	// function to get print sequence by array of id
	public function getPrintSequenceById($id){
		return DB::table('tb_print_sequence')->whereIn('id', $id)->get();
	}

	// function to get Branch Details by branch code and sub code
	public function getBranchDetailByBranchCode($bankDetails, $branchCode, $subCode){
		$branch = DB::table('tb_branchdetails')
                ->where('tb_branchdetails.branch_code', str_pad($branchCode,3,"0", STR_PAD_LEFT));

        if($bankDetails->is_branch_sub_code == 1){
            $branch = $branch->where('branch_sub_code', $subCode);
        }
        $branch = $branch->first();

        return $branch;
	}
	
	// function to deduct toner if yes in setting
	public function tonerSetting(){
		$setting =  DB::table('tb_cps_settings')->select('toner_leaves_capacity', 'is_toner')->first();

		if($setting->is_toner == 1){
			DB::table('tb_cps_settings')->decrement('toner_leaves_capacity', 1);
		}
	}


	// function to get print req collection data for log
	public function getPrintReqCollection($id){
		return DB::table('tb_print_req_collection')
			   ->whereIn('id', $id)
			   ->get();
	}

	public function getReprintReqCollection($id){
		return DB::table('tb_reprint_req_collection')
			   ->whereIn('id', $id)
			   ->get();
	}


	// log Array details
	public function logDetails($data){
		return [
			'id' => $data->id,
			'cps_unique_req' => $data->cps_unique_req,
			'cps_micr_code' => $data->cps_micr_code,
			'cps_branchmicr_code' => $data->cps_branchmicr_code,
			'cps_tr_code' => $data->cps_tr_code,
			'cps_account_no' => $data->cps_account_no,
			'cps_act_name' => $data->cps_act_name,
			'cps_act_jointname1' => $data->cps_act_jointname1,
			'cps_act_jointname2' => $data->cps_act_jointname2,
			'cps_act_address1' => $data->cps_act_address1,
			'cps_act_address2' => $data->cps_act_address2,
			'cps_act_address3' => $data->cps_act_address3,
			'cps_act_address4' => $data->cps_act_address4,
			'cps_act_address5' => $data->cps_act_address5,
			'cps_act_city' => $data->cps_act_city,
			'cps_act_pin' => $data->cps_act_pin,
			'cps_no_of_books' => $data->cps_no_of_books,
			'cps_book_size' => $data->cps_book_size,
			'cps_dly_bearer_order' => $data->cps_dly_bearer_order,
			'cps_chq_no_from' => $data->cps_chq_no_from,
			'cps_chq_no_to' => $data->cps_chq_no_to,
			'cps_issue_date' => $data->cps_issue_date,
			'cps_date' => $data->cps_date,
			'cps_micr_account_no' => $data->cps_micr_account_no,
			'cps_process_user_id' => $data->cps_process_user_id,
			'cps_product_code' => $data->cps_product_code,
			'cps_auth_sign1' => $data->cps_auth_sign1,
			'cps_auth_sign2' => $data->cps_auth_sign2,
			'cps_auth_sign3' => $data->cps_auth_sign3,
			'cps_act_mobile' => $data->cps_act_mobile,
			'cps_act_telephone_res' => $data->cps_act_telephone_res,
			'cps_act_telephone_off' => $data->cps_act_telephone_off,
			'cps_bsr_code' => $data->cps_bsr_code,
			'branch_sub_code' => $data->branch_sub_code
		];
	}

	// to get xposition of cheque and slip 
	public function getXPosition(){
		return DB::table('positional_settings')->where('status', 1)
			   ->pluck('xposition', 'name');
	}

	// to get yposition of cheque and slip 
	public function getYPosition(){
		return DB::table('positional_settings')->where('status', 1)
			   ->pluck('yposition', 'name');
	}
}