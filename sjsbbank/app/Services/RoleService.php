<?php

namespace App\Services;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleService
{
    // to get the list of roles
    public function list()
    {
        return Role::all();
    }

    // to store the roles
    public function store($req){
        $role = new Role;
        $role->name = $req->name;
        if($role->save()){
            return true;
        }
    }

    // to get the role by id
    public function getRoleById($id=null)
    {
        return Role::find($id);
    }

    // to get the permission
    public function getPermission($req=null)
    {
        return Permission::orderBy('name')->where('status', 1)->get();
    }

    // to get the permission by id
    public function getPermissionId($id=null)
    {
        $role = $this->getRoleById($id);

        return $role->permissions->pluck('id')->toArray();
    }

    // to update the role
    public function update($req=null)
    {
        $role = Role::find($req->id);
        $role->name = $req->name;
        $role->save();

        $rolePermisisons = $role->permissions->pluck('id')->toArray();

        foreach($rolePermisisons as $rp) {
            $role->revokePermissionTo($rp);
        }

        if(!empty($req->get('permissions'))) {
            foreach ($req->get('permissions') as $permission) {
                $p = Permission::where('id', '=', $permission)->firstOrFail();
                $role->givePermissionTo($p);
            }
        }

        return true;
    }


    // function to remove the country
	public function delete($req){
		$role = Role::find($req->id );
		
		//// country log when delete
		//$this->logService->insertLog('tb_countrymaster', 'Country Master', $country->country_id, 'delete', ['country_name' => $country->country_name, 'country_code' => $country->country_code, 'country_isdelete' => $country->country_isdelete], []);

		if($role->delete()){
			return true;
		}
	}

}
