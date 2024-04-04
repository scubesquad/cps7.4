<?php
namespace App\Services;

use App\Models\Country;
use App\Services\LogService;
use Log;

class CountryService{

	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// function to get list of country
	public function list(){
		return Country::select('country_id', 'country_name', 'country_code', 'country_isdelete')
		       ->orderBy('country_id', 'desc');
	}

	// function to store country
	public function store($req=null){
		$country = new Country;
		$country->country_name = $req->country_name;
		$country->country_code = $req->country_code;
		$country->country_isdelete = $req->country_isdelete;
		if($country->save()){
			// country log when insert
			$this->logService->insertLog('tb_countrymaster', 'Country Master', $country->country_id, 'insert', [], ['country_name' => $req->country_name, 'country_code' => $req->country_code, 'country_isdelete' => $req->country_isdelete]);
			return true;
		}
	}

	// function to get country by id
	public function edit($id){
		return Country::find($id);
	}

	// function to update country by id
	public function update($req=null){

		$country = Country::find($req->country_id);

		// country log when update
		$this->logService->insertLog('tb_countrymaster', 'Country Master', $country->country_id, 'update', ['country_name' => $country->country_name, 'country_code' => $country->country_code, 'country_isdelete' => $country->country_isdelete], ['country_name' => $req->country_name, 'country_code' => $req->country_code, 'country_isdelete' => $req->country_isdelete]);
		$country->country_name = $req->country_name;
		$country->country_code = $req->country_code;
		$country->country_isdelete = $req->country_isdelete;

		
		

		if($country->save()){
			return true;
		}
	}

	// function to remove the country
	public function delete($req){
		$country = Country::find($req->id );
		
		// country log when delete
		$this->logService->insertLog('tb_countrymaster', 'Country Master', $country->country_id, 'delete', ['country_name' => $country->country_name, 'country_code' => $country->country_code, 'country_isdelete' => $country->country_isdelete], []);

		if($country->delete()){
			return true;
		}
	}
}