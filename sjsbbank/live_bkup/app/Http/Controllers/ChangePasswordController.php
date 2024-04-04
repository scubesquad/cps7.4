<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\LogService;
use Auth;

class ChangePasswordController extends Controller
{
    protected $logService;

    public function __construct(LogService $logService){
        parent::__construct();
        $this->logService = $logService;
    }
    
    public function profile(Request $req){
        return view('users.profile');
    }

    public function changepassword(Request $request){
        // dd($request);
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches

            return response()->json([
                'status' => 500,
                'message' => "Your current password does not matches with the password you provided. Please try again.",
            ]);
            // return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        // check current password match with old or not
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return response()->json([
                'status' => 500,
                'message' => "New Password cannot be same as your current password. Please choose a different password.",
            ]);
            // return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        // validate password
        $validator = Validator::make($request->all(), [
                'current_password' => 'required',
                'new_password' => 'required|string|min:6|confirmed',
            ]);

        if ($validator->fails()){
            return response()->json([
                    "errors" => $validator->errors()
                ]);
        }else{
            $user = Auth::user();
            $user->password = bcrypt($request->get('new_password'));
            $user->save();

            // change password log when insert
            $this->logService->insertLog('', 'Chnage Password', '', 'changepassword', [], []);

            return response()->json([
                'status' => 200,
                'message' => "Password Updated Successfully"
            ]);
        }

    }
}
