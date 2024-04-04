<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    public function dashboard(){
        return view('demo.dashboard');
    }

    public function list(){
        return view('demo.list');
    }
}
