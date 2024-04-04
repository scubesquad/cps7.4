<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_printadmin')->insert([
            'userid' => 'superadmin',
            'username' => 'Superadmin',
            'password' => bcrypt('superadmin'),
            'user_type' => '0',
            'lastlogintime' => now(),
            'incorrect_attempt' => 0,
            'group_id' => 0,
            'password_status' => 1,
            'create_date' => date('Y-m-d'),
            'is_temp_password' => 1
        ]);

        DB::table('tb_printadmin')->insert([
            'userid' => 'admin',
            'username' => 'Admin',
            'password' => bcrypt('admin'),
            'user_type' => '0',
            'lastlogintime' => now(),
            'incorrect_attempt' => 0,
            'group_id' => 0,
            'password_status' => 1,
            'create_date' => date('Y-m-d'),
            'is_temp_password' => 1
        ]);

        DB::table('tb_printadmin')->insert([
            'userid' => 'reprint',
            'username' => 'Reprint',
            'password' => bcrypt('reprint'),
            'user_type' => '0',
            'lastlogintime' => now(),
            'incorrect_attempt' => 0,
            'group_id' => 0,
            'password_status' => 1,
            'create_date' => date('Y-m-d'),
            'is_temp_password' => 1
        ]);

        Role::create(['name' => 'Super Admin']);
        $user = User::find(1);
        $user->assignRole('Super Admin');

        Role::create(['name' => 'Admin']);
        $user = User::find(2);
        $user->assignRole('Admin');

        Role::create(['name' => 'Reprint']);
        $user = User::find(2);
        $user->assignRole('Reprint');
    }
}
