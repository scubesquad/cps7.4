<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Services\RoleService;

class RoleController extends Controller
{
    protected $role;

    public function __construct()
    {
        parent::__construct();
        $this->middleware(['permission:role.edit|role.view']);
        $this->role = new RoleService;
    }

    public function list(Request $req)
    {
        return view('master.roles.list');
    }

    // function to get roles list
    public function getList(Request $req)
    {
        if($req->ajax())
        {
            $role = $this->role->list();

            return DataTables::of($role)
                    ->addIndexColumn()
                    ->toJson();
        }
    }

    // function to store role
    public function store(Request $request)
    {
        $role = $this->role->store($request);

        if($role)
        {
            return response()->json([
                'status' => 200,
                'message' => "Role Added Successfully"
            ]);
        }else{
            return response()->json([
                'status' => 201,
                'message' => "Something went wrong"
            ]);
        }
    }

    // function to get roles and related permission
    public function edit($id)
    {
        $role = $this->role->getRoleById($id);

        $permissions = $this->role->getPermission();

        $rolePermisisons = $this->role->getPermissionId($id);
        $rolePermisisons1 = $this->role->getPermissionId($id);

        return view('master.roles.edit', compact('role', 'permissions', 'rolePermisisons'));
    }

    // function to update role
    public function update(Request $request)
    {
        $role = $this->role->update($request);

        if($role)
        {
            session()->flash('success', 'Role '.$request->name.' updated successfully');

            return redirect('/master/role/list');
        }
    }
}