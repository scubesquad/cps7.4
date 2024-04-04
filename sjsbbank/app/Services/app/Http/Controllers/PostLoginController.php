<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Services\LogService;
use DB;

class PostLoginController extends Controller
{
    protected $logService;

    public function __construct(LogService $logService){
        $this->logService = $logService;
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        } else {
            if (Auth::attempt($request->only(["username", "password"]))) {

                $domain = \Request::getHost();
                $subdomain = explode('.', $domain);
                // query to get pasword expire value from setting
                $passwordExpire = DB::table('tb_cps_settings')->value('password_expiry');

                if($subdomain[0] != "cpsmaster")
                {
                    // check that password is expire or not
                    if(date('Y-m-d') > date('Y-m-d', strtotime(Auth::user()->create_date.' +'.$passwordExpire.' days'))){
                        Auth::logout();
                        return response()->json([
                            "status" => false,
                            "errors" => ["Your Password is expired please contact your administrator"]
                        ]);
                    }
                }

                // check user status
                if(Auth::user()->user_status == 0 || Auth::user()->password_status == 0){
                    Auth::logout();
                    return response()->json([
                        "status" => false,
                        "errors" => ["Your Password is disabled please contact admin"]
                    ]);
                }

                // Check incorrect attempt
                $noOfAttempt = DB::table('tb_cps_settings')->value('nooffailedpasswordattempt');
                if(Auth::user()->incorrect_attempt > $noOfAttempt && Auth::user()->userid != "superadmin"){
                    DB::table('tb_printadmin')->where('adminid', Auth::user()->adminid)->update([
                        'user_status' => 0,
                        'password_status' => 0
                    ]);
                    Auth::logout();
                    return response()->json([
                        "status" => false,
                        "errors" => ["Your Password is disabled please contact admin"]
                    ]);
                }

                // insert login log
                $this->logService->insertLog('tb_printadmin', 'Login', Auth::user()->adminid, 'insert', ['username' => Auth::user()->username, 'userid' => Auth::user()->userid], []);

                return response()->json([
                    "status" => true, 
                    "redirect" => url("dashboard")
                ]);

            } else {
                DB::table('tb_printadmin')->where('userid', $request->username)->increment('incorrect_attempt', 1);
                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]
                ]);
            }
        }
    }
}
