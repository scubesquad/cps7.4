<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;

class CheckDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $domain = \Request::getHost();
        $subdomain = explode('.', $domain);

        if($subdomain[0] == "cpsmaster"){
            $dbName = "cps_d_master";
            // $username = "cps_d_master";
            // $password = "H%u435w8q";
            $username = "root";
            $password = "";
        }else{
            $dbName = "cps_d_sjsbbank";
            // $username = "cps_d_".$subdomain[0];
            // $password = "r~Z78e6f4";
            $username = "root";
            $password = "";
        }
        DB::disconnect('mysql'); 
        \Config::set("database.connections.mysql", [
            'driver'   => 'mysql',
            'host'     => 'localhost',
            "port" => "3306",
            'database' => $dbName,
            'username' => $username,
            'password' => $password,
            "unix_socket" => "",
            "charset" => "utf8mb4",
            "collation" => "utf8mb4_unicode_ci",
            "prefix" => "",
            "prefix_indexes" => true,
            "strict" => false,
            "engine" => null,
            "options" => []
        ]);
        DB::reconnect();
        return $next($request);
    }
}
