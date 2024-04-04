<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\SmsTrait;
use App\Services\LogService;
use DB;
use App\Models\User;
use Session;
use Carbon\Carbon;
use Mail;
use App\Mail\sendOtpMail;
use Hash;

class PostLoginController extends Controller
{
    protected $logService;

    use SmsTrait;

    public function __construct(LogService $logService){
        $this->logService = $logService;
    }

    public function postLogin(Request $request)
    {
        $domain = \Request::getHost();
        $subdomain = explode('.', $domain);

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        } else {

            $userExist = User::where('username',$request->username)->first();
            if($userExist) {

                if (!Hash::check($request->password, $userExist->password)) {
                    return response()->json([
                        "status" => false,
                        "errors" => ["Password is not match with user"]
                    ]);
                }

                $passwordExpire = DB::table('tb_cps_settings')->value('password_expiry');

                if(date('Y-m-d') > date('Y-m-d', strtotime($userExist->create_date.' +'.$passwordExpire.' days'))){
                    return response()->json([
                        "status" => false,
                        "errors" => ["Your Password is expired please contact your administrator"]
                    ]);
                }
                if($userExist->otp_verification == 1){

                    $phonTrue = true;
                    if($userExist->phone_number) {
                        $phonTrue = true;
                    } else {
                        $phonTrue = false;
                    }
                    

                    if($phonTrue) {
                        Session::put('username', $request->username);
                        Session::put('password', $request->password);
                        Session::put('phone_number', $userExist->phone_number);

                        // OTP functionlity
                        $currentDateTime = Carbon::now();
                        $newDateTime = Carbon::now()->addMinute(10);

                        if(1== 1){
                            $otpNumber = rand(123456, 999999);
                            $userExist->update([
                                'otp' => $otpNumber,
                                'otp_expire_time' => Carbon::now()->addMinute(10)
                            ]);
                            
                            $mailData = [
                                'title' => 'Verification OTP',
                                'body' => 'Your mobile verification OTP is '.$otpNumber
                            ];
                            
                            $mesage = 'Your OTP for our CPS software is '.$otpNumber.'. Team SSSL';
                            //Mail::to('dev7@scube.net.in')->cc(['tester@scube.net.in','dev12@scube.net.in'])->send(new sendOtpMail($mailData));
                            return response()->json([
                                "status" => true, 
                                "redirect" => url("otp")
                            ]);

                        } else {

                            Auth::login($userExist);
                            $passwordExpire = DB::table('tb_cps_settings')->value('password_expiry');
                            if(date('Y-m-d') > date('Y-m-d', strtotime(Auth::user()->create_date.' +'.$passwordExpire.' days'))){
                                Auth::logout();
                                return response()->json([
                                    "status" => false,
                                    "errors" => ["Your Password is expired please contact your administrator"]
                                ]);
                            }

                            
                            return response()->json([
                                "status" => true, 
                                "redirect" => url("dashboard")
                            ]);
                        }
                        //Mail::to('dev7@scube.net.in')->send(new sendOtpMail($mailData));
                        //tester2@scube.net.in
                        
                        //// send mail otp login
                        $this->sendSms($userExist->phone_number,$mesage);
                        //// send mail otp login
                        


                        
                        
                        // OTP Functionlity end

                        //Auth::login($userExist);
                        
                        return response()->json([
                            "status" => true, 
                            "redirect" => url("otp")
                        ]);

                    } else {
                        return response()->json([
                            "status" => false,
                            "errors" => ["Phone Number is not exist"]
                        ]);
                    }
                } else {
                    Auth::login($userExist);    
                    return response()->json([
                        "status" => true, 
                        "redirect" => url("dashboard")
                    ]);
                    
                }
                
                
            } else {
                return response()->json([
                    "status" => false,
                    "errors" => ["User not found"]
                ]);
            }


            
        }
    }

    public function postLoginOld(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'phone_number' => 'required',
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

    public function otp(Request $request){
        $username = Session::get('username');
        $password = Session::get('password');
        $phone_number = Session::get('phone_number');
       
        
        if($username) {
            return view('otp.otpVerification',[
                'username' => $username,
                'password' => $password,
                'phone_number' => $phone_number
            ]);
        } else {
            return view('errors.404');
        }
    }

    public function otpVerification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                "status" => false,
                "errors" => $validator->errors()
            ]);
        } else {
            
            if($request->otp) {
                $user = User::where('username',$request->username)->first();

                if($user->otp != $request->otp) {
                    return response()->json([
                        "status" => false,
                        "errors" => ["OTP is mismatch."]
                    ]);
                }
                if($user->otp_expire_time < Carbon::now()) {
                    return response()->json([
                        "status" => false,
                        "errors" => ["OTP hab been expiry."]
                    ]);
                }

                //session()->forget('some_data');
                session()->flush();

                //Auth::login($user);
                 

                $user->update([
                    'otp_expire_time'=>Carbon::now()
                ]);
                Auth::attempt($request->only(["username", "password"]));

                return response()->json([
                    "status" => true, 
                    "redirect" => url("dashboard")
                ]);

                

            } else {
                return response()->json([
                    "status" => false,
                    "errors" => ["OTP is requireds."]
                ]);
            }
            
        }

    }

}
