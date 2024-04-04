<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(){
        $this->middleware(function($request, $next){
            $logo = DB::table('tb_cps_settings')->value('banklogo');

            View::share('logo', $logo);

            return $next($request);
        });
    }
}
