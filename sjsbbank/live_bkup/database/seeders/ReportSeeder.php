<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'report.printed-report-day-wise']);
        Permission::create(['name' => 'report.printed-report-selected-period']);
        Permission::create(['name' => 'report.printed-report-excel']);
        Permission::create(['name' => 'report.printed-report-pdf']);
        Permission::create(['name' => 'report.consolidate-report-daily']);
        Permission::create(['name' => 'report.consolidate-report-daily-excel']);
        Permission::create(['name' => 'report.consolidate-report-daily-pdf']);
        Permission::create(['name' => 'report.consolidate-report-monthly']);
        Permission::create(['name' => 'report.consolidate-report-monthly-excel']);
        Permission::create(['name' => 'report.consolidate-report-monthly-pdf']);
        Permission::create(['name' => 'report.reprint']);
        Permission::create(['name' => 'report.reprint-excel']);
        Permission::create(['name' => 'report.reprint-pdf']);
        Permission::create(['name' => 'report.customer']);
        Permission::create(['name' => 'report.customer-excel']);
        Permission::create(['name' => 'report.customer-pdf']);
        Permission::create(['name' => 'report.outputfile']);
        Permission::create(['name' => 'report.get-outputfile-excel']);
        Permission::create(['name' => 'report.outputfile-via-text']);
        Permission::create(['name' => 'report.get-outputfile-via-text']);
        Permission::create(['name' => 'backup']);
        Permission::create(['name' => 'setting']);


        $superAdmin = Role::where(['name' => 'Super Admin'])->first();
        $superAdmin->givePermissionTo(['report.printed-report-day-wise', 'report.printed-report-selected-period', 'report.printed-report-excel', 'report.printed-report-pdf', 'report.consolidate-report-daily', 'report.consolidate-report-daily-excel', 'report.consolidate-report-daily-pdf', 'report.consolidate-report-monthly', 'report.consolidate-report-monthly-excel', 'report.consolidate-report-monthly-pdf', 'report.reprint', 'report.reprint-excel', 'report.reprint-pdf', 'report.customer', 'report.customer-excel', 'report.customer-pdf', 'report.outputfile', 'report.get-outputfile-excel', 'report.outputfile-via-text', 'report.get-outputfile-via-text', 'backup', 'setting']);
    }
}
