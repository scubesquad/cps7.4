<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Branch;
use Auth;

class AjaxController extends Controller
{
    
    public function __construct(){
        //
    }

    public function getBranchDetails($id) {

        $branchDetail = Branch::where('branch_id',$id)->first();

        return response()->json([
            'status' => 200,
            'data' => $branchDetail
        ]);
    }
    
}
