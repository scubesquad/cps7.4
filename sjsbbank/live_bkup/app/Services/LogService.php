<?php

namespace App\Services;

use App\Models\LogTable;
use DB;
use Auth;

class LogService{

	// function to get list of logs
	public function list($req){
		$log = DB::table('log_table')
			 ->leftJoin('tb_printadmin', 'tb_printadmin.adminid', '=', 'log_table.user_id')
			 ->select('log_table.id', 'log_table.name', 'tb_printadmin.username', 'log_table.created', 'log_table.action_performed');

		if(isset($req->start_date) && $req->start_date != ""){
			$log = $log->whereDate('log_table.created', '>=', date('Y-m-d', strtotime($req->start_date)));
		}

		if(isset($req->end_date) && $req->end_date != ""){
			$log = $log->whereDate('log_table.created', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		$log = $log->orderBy('log_table.id', 'desc');

		return $log;
	}

	// funtion to get log details by id
	public function getLog($id){
		$log = DB::table('log_table')
			 ->leftJoin('tb_printadmin', 'tb_printadmin.adminid', '=', 'log_table.user_id')
			 ->select('log_table.name', 'tb_printadmin.username', 'log_table.created', 'log_table.action_performed', 'log_table.message', 'log_table.details', 'log_table.previous_details')
			 ->where('log_table.id', $id)
			 ->first();

		return $log;
	}

	// funtion to store log
	public function insertLog($table, $name, $recordId, $actionPerformed, $previousDetails, $latestDetails, $message=""){
		$log = new LogTable;
		$log->table_name = $table;
		$log->name = $name;
		$log->record_id = $recordId;
		$log->user_id = Auth::user()->adminid;
		$log->action_performed = $actionPerformed;
		$log->previous_details = json_encode($previousDetails);
		$log->details = json_encode($latestDetails);
		$log->message = $message;
		$log->created = date('Y-m-d H:i:s');
		if($log->save()){
			return true;
		}
	}
}