<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ScriptController extends Controller
{
    public function script(Request $req){
        $dbName = "cps_d_".$req->db;

        // $password = "H%u435w8q";
        $password = "";
        if (\DB::statement('create database ' . $dbName) == true) {
            $new_connection = 'new';
            $nc = \Illuminate\Support\Facades\Config::set('database.connections.' . $new_connection, [
                'driver'   => 'mysql',
                'host'     => 'localhost',
                'database' => $dbName,
                // 'username' => 'cps_d_master',
                'username' => 'root',
                'password' => $password,
                /*'username' => 'developer',
                'password' => 'developer',*/
                "unix_socket" => "",
                "charset" => "utf8mb4",
                "collation" => "utf8mb4_unicode_ci",
                "prefix" => "",
                "prefix_indexes" => true,
                "strict" => true,
                "engine" => null,
                "options" => []
            ]);
        }

        echo "Database ".$req->db." Created successfully";
    }

    public function script1(Request $req){
        $dbName = "cps_d_".$req->db;
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
        $database = DB::select($query, [$dbName]);
        if (empty($database)) {
            DB::connection('mysql')->statement('CREATE DATABASE '.$dbName);
        }

        echo "Database ".$req->db." Created successfully";
    }
}
