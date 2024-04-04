<?php

namespace App\Services;

use DB;

class DashboardService{

	// function to get total active banks
	public function getTotalActiveBank(){
		return DB::table('manage_banks')->where('status', 1)->count();
	}

	// function to get total Inactive banks
	public function getTotalInactiveBank(){
		return DB::table('manage_banks')->where('status', 0)->count();
	}

	// funtion to get banks whose licence will expire within 45days
	public function getBanks(){
		$bank = DB::table('manage_banks')
			  ->where('installation_date', '>=', date('d-m-Y', strtotime('-45 days')))
			  ->select('name', 'city', 'sales_person', 'licence_start_date', 'status')
			  ->get();

		return $bank;
	}
}