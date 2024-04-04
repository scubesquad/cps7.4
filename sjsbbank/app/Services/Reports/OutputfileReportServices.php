<?php

namespace App\Services\Reports;

use DB;

class OutputfileReportServices{
	public function getOutputfileReport($req){
		$outputfile = DB::table('tb_print_req_collection')
					->leftJoin('tb_cps_transactioncodes', 'tb_cps_transactioncodes.transactioncode', '=', 'tb_print_req_collection.cps_tr_code')
					->select('tb_cps_transactioncodes.transactioncodedescription', 'tb_print_req_collection.cps_unique_req', 'tb_print_req_collection.cps_account_no', 'tb_print_req_collection.cps_act_name', 'tb_print_req_collection.cps_no_of_books', 'tb_print_req_collection.cps_book_size', 'tb_print_req_collection.cps_chq_no_from', 'tb_print_req_collection.cps_chq_no_to', 'tb_print_req_collection.cps_date', 'tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.cps_product_code', 'tb_print_req_collection.cps_bsr_code', 'tb_print_req_collection.cps_tr_code');

		if($req->start_date != ""){
			$outputfile = $outputfile->whereDate('tb_print_req_collection.cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}else{
			$outputfile = $outputfile->whereDate('tb_print_req_collection.cps_date', date('Y-m-d'));
		}

		if($req->end_date != ""){
			$outputfile = $outputfile->whereDate('tb_print_req_collection.cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		if($req->branch != ""){
			$outputfile = $outputfile->where('tb_print_req_collection.cps_branchmicr_code', $req->branch);
		}

		if($req->transaction != ""){
			$outputfile = $outputfile->where('tb_print_req_collection.cps_tr_code', $req->transaction);
		}

		if($req->booksize != ""){
			$outputfile = $outputfile->where('tb_print_req_collection.cps_book_size', $req->booksize);
		}

		return $outputfile;
	}

	// function to get distict book size
	public function getBookSize($req){
		$outputfile = DB::table('tb_print_req_collection')
					->select('cps_book_size');

		if($req->start_date != ""){
			$outputfile = $outputfile->whereDate('cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}else{
			$outputfile = $outputfile->whereDate('cps_date', date('Y-m-d'));
		}

		if($req->end_date != ""){
			$outputfile = $outputfile->whereDate('cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		if($req->branch != ""){
			$outputfile = $outputfile->where('cps_branchmicr_code', $req->branch);
		}

		if($req->transaction != ""){
			$outputfile = $outputfile->where('cps_tr_code', $req->transaction);
		}

		if($req->booksize != ""){
			$outputfile = $outputfile->where('cps_book_size', $req->booksize);
		}

		return $outputfile->distinct()->get();
	}

	// generate output file code
	public function generateOutPutFile($reports, $alphaCode){
		$data = "";
		
		foreach($reports as $report){
		  	$instrument_type = $report->cps_tr_code;
		  	$alpha_code = $alphaCode[$report->cps_tr_code];
						 
			$branch_code = trim($report->cps_branchmicr_code);
			$product_code = trim($report->cps_product_code);
			// Get right 6 of account
			$account = trim($report->cps_account_no);
			$account = substr($account, strlen($account) - 6);
			$acc6 = ltrim($account, "0");

			$pdate = str_replace("-", "", $report->cps_date);
			//$reqno = ltrim($report->cps_unique_req, "0");
			$chq_pages = ltrim($report->cps_book_size, "0");
			$no_of_books = ltrim($report->cps_no_of_books, "0");
			$series_start = trim($report->cps_chq_no_from);
			$cps_bsr_code = trim($report->cps_bsr_code);


			$data .= str_pad($branch_code, 6, "0", STR_PAD_LEFT) . $product_code;
			$data .= str_pad($acc6, 13, " ", STR_PAD_LEFT) . $pdate;
			$data .= str_pad($cps_bsr_code, 7, " ", STR_PAD_LEFT);
			$data .= str_pad($chq_pages, 5, " ", STR_PAD_LEFT);
			$data .= str_pad($no_of_books, 8, " ", STR_PAD_LEFT);
			$data .= str_pad($series_start, 12, " ", STR_PAD_LEFT);
			$data .= str_pad($alpha_code, 4, " ", STR_PAD_LEFT);
			$data .= str_pad($instrument_type, 4, " ", STR_PAD_LEFT);   
			$data .= str_pad($acc6, 6, "0", STR_PAD_LEFT) . $pdate . "000000" . "\r\n";
		}

		return $data;
	}
}