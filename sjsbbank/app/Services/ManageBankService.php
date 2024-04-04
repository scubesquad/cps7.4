<?php

namespace App\Services;

use DB;
use App\Models\ManageBank;
use App\Models\AssignPermission;
use Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ManageBankService{
	public function list($req){
		$manageBanks = ManageBank::select('id', 'name', 'subdomain', 'status')->orderBy('id', 'desc');

		return $manageBanks;
	}


	// Code to store the manage bank by superadmin
	public function store($req){
		$subdomain = explode(".", $req->subdomain);
		$manageBank = new ManageBank;
		$manageBank->name = $req->name;
		$manageBank->subdomain = 'sjsbbank';
		$manageBank->email = $req->email;
		$manageBank->mobile = $req->mobile;
		$manageBank->contact_person = $req->contact_person;
		$manageBank->state = $req->state;
		$manageBank->city = $req->city;
		$manageBank->address = $req->address;
		$manageBank->sales_person = $req->sales_person;
		$manageBank->input_file_format_description = $req->input_file_format_description;
		$manageBank->sample_input_file = $this->uploadfile($req, 'sjsbbank', 'sample_input_file');
		$manageBank->output_file_format_description = $req->output_file_format_description;
		$manageBank->sample_output_file = $this->uploadfile($req, 'sjsbbank', 'sample_output_file');
		$manageBank->sample_requisition = $this->uploadfile($req, 'sjsbbank', 'sample_requisition');
		$manageBank->sample_cheque = $this->uploadfile($req, 'sjsbbank', 'sample_cheque');
		$manageBank->special_requirement = $req->special_requirement;
		$manageBank->printer_brand = $req->printer_brand;
		$manageBank->printer_model = $req->printer_model;
		$manageBank->os_name = $req->os_name;
		$manageBank->os_bit_version = $req->os_bit_version;
		$manageBank->pcp_version = $req->pcp_version;
		$manageBank->installation_by = $req->installation_by;
		$manageBank->installation_date = date('Y-m-d', strtotime($req->installation_date));
		$manageBank->training_by = $req->training_by;
		$manageBank->training_date = date('Y-m-d', strtotime($req->training_date));
		$manageBank->licence_start_date = date('Y-m-d', strtotime($req->licence_start_date));
		$manageBank->licence_end_date = date('Y-m-d', strtotime('+365 days', strtotime($req->licence_start_date)));
		$moduleAccess = "";

		if(isset($req->module_access))
		{
			for($i=0; $i < count($req->module_access); $i++){
				if($i == 0){
					if($req->module_access[$i] != ""){
						$moduleAccess = $req->module_access[$i];
					}
				}else{
					if($req->module_access[$i] != ""){
						$moduleAccess = $moduleAccess. "|". $req->module_access[$i];
					}
				}
			}
		}

		$manageBank->module_access = $moduleAccess;
		$manageBank->status = 1;

		if($manageBank->save()){

			// Code to store the manage bank assign permission
			if(isset($req->module_access))
			{
				for($i=0; $i < count($req->module_access); $i++){
					$assignBank = new AssignPermission;
					$assignBank->manage_bank_id = $manageBank->id;
					$assignBank->name = $req->module_access[$i];
					$assignBank->save();
				}
			}

			$subdomain[0] = 'sjsbbank';
			// Code to create the database, migrate, seeder and assign permission to user 
	        $dbName = "cps_d_sjsbbank";
            // $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
            // $database = DB::select($query, [$dbName]);
            // if (empty($database)) {
            //     DB::connection('mysql')->statement('CREATE DATABASE '.$dbName);
            // }
        	
        	$password = "H%u435w8q";
	        if (\DB::statement('create database ' . $dbName) == true) {
	            $new_connection = 'new';
	            $nc = \Illuminate\Support\Facades\Config::set('database.connections.' . $new_connection, [
	                'driver'   => 'mysql',
	                'host'     => 'localhost',
	                'database' => $dbName,
	                // 'username' => 'cps_d_master',
	                // 'password' => $password,
	                'username' => 'root',
	                'password' => '',
	                "unix_socket" => "",
	                "charset" => "utf8mb4",
	                "collation" => "utf8mb4_unicode_ci",
	                "prefix" => "",
	                "prefix_indexes" => true,
	                "strict" => true,
	                "engine" => null,
	                "options" => []
	            ]);
	        }

	        
			DB::disconnect('mysql'); 
	        \Config::set("database.connections.mysql", [
	            'driver'   => 'mysql',
	            'host'     => 'localhost',
	            "port" => "3306",
	            'database' => $dbName,
	            'username' => 'root',
	            'password' => '',
	            "unix_socket" => "",
	            "charset" => "utf8mb4",
	            "collation" => "utf8mb4_unicode_ci",
	            "prefix" => "",
	            "prefix_indexes" => true,
	            "strict" => true,
	            "engine" => null,
	            "options" => []
	        ]);
	        DB::reconnect();

	        \Artisan::call('migrate:install');
	        \Artisan::call('migrate');
	        \Artisan::call('db:seed');

	        if(isset($req->module_access))
			{
				for($i=0; $i < count($req->module_access); $i++){
					
					if($req->module_access[$i] != ""){
						
						$per = new Permission;
						$per->name = $req->module_access[$i];
						$per->guard_name = 'web';
						$per->status = 1;
						$per->save();
					}
				}
			}

			// Assign Superadmin Permission
			$superAdmin = Role::where(['name' => 'Super Admin'])->first();
        	$superadminAssignPermission = [];
        	$superAdminPermission = ["role.view", "role.edit", "role.add", "country.view", "country.add", "country.edit", "country.delete", "state.view", "state.add", "state.edit", "state.delete", "bank.view", "branch.view", "branch.add", "branch.edit", "branch.delete", "transaction-code.view", "transaction-code.add", "transaction-code.edit", "transaction-code.delete", "cheque-series.view", "cheque-series.add", "cheque-series.edit", "cheque-series.delete", "transaction.view", "transaction.upload", "transaction.filter", "transaction.delete", "transaction.print", "pending-print-req.view", "pending-print-req.cancel", "pending-print-req.print", "reprint-request.view", "reprint-request.print", "manage-user.view", "manage-user.add", "manage-user.edit", "manage-user.delete", "report.printed-report-day-wise", "report.printed-report-selected-period", "report.printed-report-excel", "report.printed-report-pdf", "report.consolidate-report-daily", "report.consolidate-report-daily-excel", "report.consolidate-report-daily-pdf", "report.consolidate-report-monthly", "report.consolidate-report-monthly-excel", "report.consolidate-report-monthly-pdf", "report.reprint", "report.reprint-excel", "report.reprint-pdf", "report.customer", "report.customer-excel", "report.customer-pdf", "report.outputfile", "report.get-outputfile-excel", "report.outputfile-via-text", "report.get-outputfile-via-text", "backup", "setting", "positional-setting.view"];

        	if(isset($req->module_access))
			{
	        	for($i=0; $i < count($req->module_access); $i++){
					if(in_array($req->module_access[$i], $superAdminPermission)){
						$superadminAssignPermission[] = $req->module_access[$i];
					}
				}
				$superAdmin->givePermissionTo($superadminAssignPermission);
			}


			// Assign Admin Permission
			$admin = Role::where(['name' => 'Admin'])->first();
        	$adminAssignPermission = [];
        	$adminPermission = ["transaction.view", "transaction.upload", "transaction.filter", "transaction.delete", "transaction.print", "pending-print-req.view", "pending-print-req.cancel", "pending-print-req.print", "reprint-request.view", "reprint-request.print"];

        	if(isset($req->module_access))
			{
	        	for($i=0; $i < count($req->module_access); $i++){
					if(in_array($req->module_access[$i], $adminPermission)){
						$adminAssignPermission[] = $req->module_access[$i];
					}
				}
				$admin->givePermissionTo($adminAssignPermission);
			}

			// Assign reprint Permission
			$reprint = Role::where(['name' => 'Reprint'])->first();
        	$reprintAssignPermission = [];
        	$reprintPermission = ["transaction.view", "transaction.upload", "transaction.filter", "transaction.delete", "transaction.print", "pending-print-req.view", "pending-print-req.cancel", "pending-print-req.print", "reprint-request.view", "reprint-request.print"];

        	if(isset($req->module_access))
			{
	        	for($i=0; $i < count($req->module_access); $i++){
					if(in_array($req->module_access[$i], $reprintPermission)){
						$reprintAssignPermission[] = $req->module_access[$i];
					}
				}
				$reprint->givePermissionTo($reprintAssignPermission);
			}
			// ENd of Code to create the database, migrate, seeder and assign permission to user 

			return true;
		}
	}

	// function to upload file with pass the parameter
	public function uploadfile($req, $bank, $name){
		$newName = "";
		if($req->hasFile($name)){
			$fileName = $name.'-'.time().'.'.$req->$name->getClientoriginalExtension();
	        $req->file($name)->storeAs($bank.'/masterdata/', $fileName, 'public');
	        $newName = $bank.'/masterdata/'.$fileName;
	    }
	    return $newName;
	}

	// function to upload the file with pass parameter but remove existing file
	public function uploadupdatefile($req, $bank, $name, $fileValue){
		$newName = "";
		if($req->hasFile($name)){
			if($fileValue && $fileValue != ""){
				if(Storage::disk('public')->exists($fileValue)){
					Storage::disk('public')->delete($fileValue);
				}
			}

			$fileName = $name.'-'.time().'.'.$req->$name->getClientoriginalExtension();
	        $req->file($name)->storeAs($bank.'/masterdata', $fileName, 'public');
	        $newName = $bank.'/masterdata'.$fileName;
	    }
	    return $newName;
	}

	// funtion to get single record of manage banks
	public function edit($id){
		return ManageBank::find($id);
	}

	// function to update the manage banks
	public function update($req){
		$subdomain = explode(".", $req->subdomain);
		$manageBank = ManageBank::find($req->id);
		$manageBank->name = $req->name;
		$manageBank->subdomain = 'sjsbbank';
		$manageBank->email = $req->email;
		$manageBank->mobile = $req->mobile;
		$manageBank->contact_person = $req->contact_person;
		$manageBank->state = $req->state;
		$manageBank->city = $req->city;
		$manageBank->address = $req->address;
		$manageBank->sales_person = $req->sales_person;
		$manageBank->input_file_format_description = $req->input_file_format_description;
		$manageBank->sample_input_file = $this->uploadupdatefile($req, 'sjsbbank', 'sample_input_file', $manageBank->sample_input_file);
		$manageBank->output_file_format_description = $req->output_file_format_description;
		$manageBank->sample_output_file = $this->uploadupdatefile($req, 'sjsbbank', 'sample_output_file', $manageBank->sample_output_file);
		$manageBank->sample_requisition = $this->uploadupdatefile($req, 'sjsbbank', 'sample_requisition', $manageBank->sample_requisition);
		$manageBank->sample_cheque = $this->uploadupdatefile($req, 'sjsbbank', 'sample_cheque', $manageBank->sample_cheque);
		$manageBank->special_requirement = $req->special_requirement;
		$manageBank->printer_brand = $req->printer_brand;
		$manageBank->printer_model = $req->printer_model;
		$manageBank->os_name = $req->os_name;
		$manageBank->os_bit_version = $req->os_bit_version;
		$manageBank->pcp_version = $req->pcp_version;
		$manageBank->installation_by = $req->installation_by;
		$manageBank->installation_date = date('Y-m-d', strtotime($req->installation_date));
		$manageBank->training_by = $req->training_by;
		$manageBank->training_date = date('Y-m-d', strtotime($req->training_date));
		$manageBank->licence_start_date = date('Y-m-d', strtotime($req->licence_start_date));
		$manageBank->licence_end_date = date('Y-m-d', strtotime('+365 days', strtotime($req->licence_start_date)));
		$moduleAccess = "";
		if(isset($req->module_access))
		{
			for($i=0; $i < count($req->module_access); $i++){
				if($i == 0){
					if($req->module_access[$i] != ""){
						$moduleAccess = $req->module_access[$i];
					}
				}else{
					if($req->module_access[$i] != ""){
						$moduleAccess = $moduleAccess. "|". $req->module_access[$i];
					}
				}
			}
		}

		$manageBank->module_access = $moduleAccess;
		$manageBank->status = $req->status;

		if($manageBank->save()){
			if(isset($req->module_access))
			{
				AssignPermission::where('manage_bank_id', $manageBank->id)->delete();
				for($i=0; $i < count($req->module_access); $i++){
					$assignBank = new AssignPermission;
					$assignBank->manage_bank_id = $manageBank->id;
					$assignBank->name = $req->module_access[$i];
					$assignBank->save();
				}
			}
			
			$dbName = "cps_d_master";
			DB::disconnect('mysql'); 
	        \Config::set("database.connections.mysql", [
	            'driver'   => 'mysql',
	            'host'     => 'localhost',
	            "port" => "3306",
	            'database' => $dbName,
	            'username' => 'root',
	            'password' => '',
	            "unix_socket" => "",
	            "charset" => "utf8mb4",
	            "collation" => "utf8mb4_unicode_ci",
	            "prefix" => "",
	            "prefix_indexes" => true,
	            "strict" => true,
	            "engine" => null,
	            "options" => []
	        ]);
	        DB::reconnect();

	        DB::table('permissions')->update(['status' => 0]);

	        if(isset($req->module_access))
			{
				for($i=0; $i < count($req->module_access); $i++){
					
					if($req->module_access[$i] != ""){
						

				        if(DB::table('permissions')->where('name', $req->module_access[$i])->exists()){
				        	DB::table('permissions')->where('name', $req->module_access[$i])->update(['status' => 1]);
				        }else{
							$per = new Permission;
							$per->name = $req->module_access[$i];
							$per->guard_name = 'web';
							$per->status = 1;
							$per->save();
						}
					}
				}
			}
			return true;
		}
	}
}