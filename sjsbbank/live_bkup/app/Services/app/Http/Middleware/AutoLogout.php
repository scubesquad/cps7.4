<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Session\Store;
use App\Services\LogService;
use Auth;
use DB;

class AutoLogout
{
    protected $session;
    protected $logService;

    public function __construct(Store $session, LogService $logService)
    {
        $this->session = $session;
        $this->logService = $logService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $timeout = DB::table('tb_cps_settings')->value('autolockminutes');

        if(!session('last_active')) {
            $this->session->put('last_active', time());
        } elseif(time() - $this->session->get('last_active') > $timeout*60) {
            
            $this->session->forget('last_active');
            
            $this->logService->insertLog('tb_printadmin', 'System Logout', Auth::user()->adminid, 'insert', ['username' => Auth::user()->username, 'userid' => Auth::user()->userid], []);

            auth()->logout();
            return redirect('/login');
        }

        return $next($request);
    }
}
