<?php

namespace App\Services;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Services\LogService;
use Auth;

class UserService
{
	protected $logService;

	public function __construct(LogService $logService){
		$this->logService = $logService;
	}

	// to get the list of user
	public function list(){
		return User::select('adminid', 'username', 'lastlogintime', 'user_status')->get();
	}

	// to store the user
	public function store($req){
		$user = new User;
		$user->username = $req->username;
		$user->userid = $req->userid;
		$user->user_status = $req->user_status;
		$user->password = bcrypt($req->password);
		$user->lastlogintime = date('Y-m-d h:i:s');
		$user->user_type = 1;
		$user->password_status = 1;
		$user->incorrect_attempt = 0;
		$user->create_date = date('Y-m-d');
		$user->is_temp_password = 1;
		if($req->role_name != ""){
			$user->assignRole($req->role_name);
		}
		if($user->save()){

			// user log when insert
			$this->logService->insertLog('tb_printadmin', 'Manage User', $user->adminid, 'insert', [], ['username' => $req->username, 'userid' => $req->userid, 'user_status' => $req->user_status, 'lastlogintime' => $user->lastlogintime, 'create_date' => $user->create_date, 'role' => $req->role_name]);

			return true;
		}
	}

	// to edit the user
	public function edit($id){
		return User::find($id);
	}

	// to update the user
	public function update($req){
		$user = User::find($req->id);

		// user log when update
		$this->logService->insertLog('tb_printadmin', 'Manage User', $user->adminid, 'update', ['username' => $user->username, 'user_status' => $user->user_status, 'updated_by' => $user->updated_by, 'updated_at' => $user->updated_at, 'role' => Auth::user()->getRoleNames()[0]], ['username' => $req->username, 'user_status' => $req->user_status, 'updated_by' => Auth::user()->adminid, 'updated_at' => now(), 'role' => $req->role_name]);


		$user->username = $req->username;
		$user->user_status = $req->user_status;
		if($req->password != ""){
			$user->password = bcrypt($req->password);
		}
		
		if($req->user_status == 1){
			$user->password_status = 1;
			$user->incorrect_attempt = 0;
		}
		$user->is_temp_password = $req->is_temp_password;
		$user->updated_by = Auth::user()->adminid;
		$user->updated_at = now();

		if($req->role_name != ""){
			$user->roles()->detach();
			$user->assignRole($req->role_name);
		}
		if($user->save()){
			return true;
		}
	}

	// to delete the user
	public function delete($req){
		$user = User::find($req->id);
		// user log when delete
		$this->logService->insertLog('tb_printadmin', 'Manage User', $user->adminid, 'delete', ['username' => $user->username, 'user_status' => $user->user_status, 'updated_by' => $user->updated_by, 'updated_at' => $user->updated_at, 'lastlogintime' => $user->lastlogintime, 'create_date' => $user->create_date, 'role' => Auth::user()->getRoleNames()[0]], []);

		$user->roles()->detach();
		if($user->delete()){
			return true;
		}
	}
}