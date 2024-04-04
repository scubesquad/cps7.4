<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_cps_settings')->insert([
            'archivefolderpath' => 'uploads/',
            'inputfileformat' => 'Excel',
            'outputfileformat' => 'Excel',
            'nooffailedpasswordattempt' => '10',
            'password_expiry' => 365,
            'homescreen_text' => 'Bank Name',
            'poweredby' => 'DevHarsh Infotech Pvt Ltd',
            'autolockminutes' => 360,
            'is_toner' => 1
        ]);
    }
}
