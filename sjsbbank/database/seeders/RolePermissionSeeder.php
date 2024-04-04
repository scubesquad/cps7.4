<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'role.view']);
        Permission::create(['name' => 'role.add']);
        Permission::create(['name' => 'role.edit']);

        Permission::create(['name' => 'country.view']);
        Permission::create(['name' => 'country.add']);
        Permission::create(['name' => 'country.edit']);
        Permission::create(['name' => 'country.delete']);

        Permission::create(['name' => 'state.view']);
        Permission::create(['name' => 'state.add']);
        Permission::create(['name' => 'state.edit']);
        Permission::create(['name' => 'state.delete']);

        Permission::create(['name' => 'bank.view']);

        Permission::create(['name' => 'branch.view']);
        Permission::create(['name' => 'branch.add']);
        Permission::create(['name' => 'branch.edit']);
        Permission::create(['name' => 'branch.delete']);

        Permission::create(['name' => 'transaction-code.view']);
        Permission::create(['name' => 'transaction-code.add']);
        Permission::create(['name' => 'transaction-code.edit']);
        Permission::create(['name' => 'transaction-code.delete']);

        Permission::create(['name' => 'cheque-series.view']);
        Permission::create(['name' => 'cheque-series.add']);
        Permission::create(['name' => 'cheque-series.edit']);
        Permission::create(['name' => 'cheque-series.delete']);

        $superAdmin = Role::create(['name' => 'Super Admin']);
        $user = User::find(1);

        $user->assignRole('Super Admin');
        $superAdmin->givePermissionTo(['role.view', 'role.add', 'role.edit', 'country.view', 'country.add', 'country.edit', 'country.delete', 'state.view', 'state.add', 'state.edit', 'state.delete', 'branch.view', 'branch.add', 'branch.edit', 'branch.delete', 'transaction-code.view', 'transaction-code.add', 'transaction-code.edit', 'transaction-code.delete', 'cheque-series.view', 'cheque-series.add', 'cheque-series.edit', 'cheque-series.delete', 'bank.view']);

        $admin = Role::create(['name' => 'Admin']);
        $reprint = Role::create(['name' => 'Reprint']);
    }
}
