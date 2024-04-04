<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Services\LogService;
use Log;
use Auth;

class LoginController extends Controller
{
    protected $logService;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->logService = new LogService;
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'userid';
    }

    public function logout(Request $request) {
        $this->logService->insertLog('tb_printadmin', 'Logout', Auth::user()->adminid, 'insert', ['username' => Auth::user()->username, 'userid' => Auth::user()->userid], []);
        Auth::logout();
        return redirect('/login');
    }
}
