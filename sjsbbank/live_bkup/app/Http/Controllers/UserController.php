<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\RoleService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use App\Models\Branch;
use App\Models\BranchUser;

class UserController extends Controller
{
    protected $userService;
    protected $roleService;

    public function __construct(UserService $userService, RoleService $roleService){
        parent::__construct();
        $this->middleware(['permission:manage-user.add|manage-user.delete|manage-user.edit|manage-user.view']);
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function list(){
        $roles = $this->roleService->list();
        $branches = Branch::get();
        //return view('users.list', compact('roles'));
        return view('users.list', [
            'roles' => $roles,
            "branches" => $branches
        ]);
    }

    // function to get user list
    public function getList(Request $req){
        if($req->ajax())
        {
            $user = $this->userService->list();

            return DataTables::of($user)
                    ->addIndexColumn()
                    ->editColumn('lastlogintime', function ($data) {
                        return date('d-m-Y h:i:s', strtotime($data->lastlogintime)); 
                    })
                    ->toJson();
        }
    }

    // function to validate and store user
    public function store(Request $req){
        if($req->ajax()){
            $validator = Validator::make($req->all(), [
                'role_name' => 'required',
                'branch_name' => 'required',
                'username' => 'required',
                'phone_number' => 'required',
                'password' => 'required|min:8',
                'userid' => 'required|unique:tb_printadmin',
                'user_status' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                $user = $this->userService->store($req);

                if($user){
                    return response()->json([
                        'status' => 200,
                        'message' => 'User created successfully'
                    ]);
                }
            }
        }
    }

    // function to get user by id
    public function edit(Request $req, $id){
        // if($req->ajax()){
        //     $user = $this->userService->edit($id);

        //     return response()->json([
        //         'status' => 200,
        //         'role' => $user->roles()->first()->name,
        //         'data' => $user
        //     ]);
        // }
        if($req->ajax()){
            $user = $this->userService->edit($id);
            $branches = Branch::get();
            $userBranch = BranchUser::select('id','branch_id','user_id')->where('user_id',$user->adminid)->get();
            
            $assigned_branches = array();

            if(!empty($userBranch)) {
                foreach ($userBranch as $branch) {
                    array_push($assigned_branches, $branch['branch_id']);
                }
            }            
            $html = "<option value=''>Select Branch</option>";
            foreach($branches as $branch) {
                if(in_array($branch->branch_id,$assigned_branches)) {
                    $select = "selected='selected'";
                } else {
                    $select = null;
                }
                $html .= "<option $select value='$branch->branch_id'>$branch->branch_name</option>";
            }
            
            
            return response()->json([
                'status' => 200,
                'role' => $user->roles()->first()->name,
                'data' => $user,
                'html' => $html
            ]);
        }

    }

    // function to validate and update user
    public function update(Request $req){
        if($req->ajax()){
            $validator = Validator::make($req->all(), [
                'role_name' => 'required',
                'branch_name' => 'required',
                'username' => 'required',
                'phone_number' => 'required',
                'password' => 'nullable|min:8',
                'userid' => 'required|unique:tb_printadmin,adminid,'.$req->id.',adminid',
                'user_status' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json([
                        "errors" => $validator->errors()
                    ]);
            }else{
                $user = $this->userService->update($req);

                if($user){
                    return response()->json([
                        'status' => 200,
                        'message' => 'User updated successfully'
                    ]);
                }
            }
        }
    }

    // function to remove user by id
    public function delete(Request $req){
        if($req->ajax()){
            $user = $this->userService->delete($req);

            return response()->json([
                'status' => 200,
                'message' => "User Removed Successfully"
            ]);
        }
    }
}
