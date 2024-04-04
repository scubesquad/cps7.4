<?php

namespace App\Services;

use App\Models\TransactionCodeIndex;
use DB;

class ManageBankTransactionIndexService{

	public function changeconnection($subdomain){
        $dbName = "cps_d_".$subdomain;
        $username = "cps_d_master";
        $password = "H%u435w8q";
        DB::disconnect('mysql'); 
        \Config::set("database.connections.mysql", [
            'driver' => 'mysql',
            'host' => 'localhost',
            "port" => "3306",
            'database' => $dbName,
            'username' => $username,
            'password' => $password,
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
	}

	public function getTransactionIndexvalue(){
		return TransactionCodeIndex::pluck('index', 'name');
	}

	public function update($req){
		if(isset($req->name)){
			for($i=0; $i < count($req->name); $i++){
				TransactionCodeIndex::updateOrCreate(
			        ['name' => $req->name[$i]],
			        ['name' => $req->name[$i], 'index' => $req->index[$i]],
			    );
			}
		}
		return true;
	}
}