<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class ReprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'transaction.view']);
        Permission::create(['name' => 'transaction.upload']);
        Permission::create(['name' => 'transaction.filter']);
        Permission::create(['name' => 'transaction.delete']);
        Permission::create(['name' => 'transaction.print']);

        Permission::create(['name' => 'pending-print-req.view']);
        Permission::create(['name' => 'pending-print-req.cancel']);
        Permission::create(['name' => 'pending-print-req.print']);

        Permission::create(['name' => 'reprint-request.view']);
        Permission::create(['name' => 'reprint-request.print']);

        Permission::create(['name' => 'manage-user.view']);
        Permission::create(['name' => 'manage-user.add']);
        Permission::create(['name' => 'manage-user.edit']);
        Permission::create(['name' => 'manage-user.delete']);

        Permission::create(['name' => 'process-reprint.view']);
        Permission::create(['name' => 'process-reprint.print-in-bunch']);
        Permission::create(['name' => 'process-reprint.print-selected-pages']);
        Permission::create(['name' => 'process-reprint.delete']);
        Permission::create(['name' => 'process-reprint.print-requisiion-only']);

        Permission::create(['name' => 'reprint-single-leaf.view']);
        Permission::create(['name' => 'reprint-single-leaf.print']);
        Permission::create(['name' => 'reprint-single-leaf.delete']);

        $superAdmin = Role::where(['name' => 'Super Admin'])->first();
        $superAdmin->givePermissionTo(['transaction.view', 'transaction.upload', 'transaction.delete', 'transaction.print', 'pending-print-req.view', 'pending-print-req.cancel', 'pending-print-req.print', 'manage-user.view', 'manage-user.add', 'manage-user.edit', 'manage-user.delete', 'reprint-request.view', 'reprint-request.print', 'transaction.filter']);

        $admin = Role::where(['name' => 'Admin'])->first();
        $admin->givePermissionTo(['transaction.view', 'transaction.upload', 'transaction.delete', 'transaction.print', 'pending-print-req.view', 'pending-print-req.cancel', 'pending-print-req.print', 'reprint-request.view', 'reprint-request.print', 'transaction.filter']);

        $reprint = Role::where(['name' => 'Reprint'])->first();
        $reprint->givePermissionTo(['process-reprint.view', 'process-reprint.print-in-bunch', 'process-reprint.print-selected-pages', 'process-reprint.delete', 'process-reprint.print-requisiion-only', 'reprint-single-leaf.view', 'reprint-single-leaf.print', 'reprint-single-leaf.delete']);
    }
}
