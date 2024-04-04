<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CommonService;
use App\Services\DashboardService;
use Auth;

class DashboardController extends Controller
{
    protected $commonService;
    protected $dashboardService;

    public function __construct(CommonService $commonService, DashboardService $dashboardService){
        parent::__construct();
        $this->commonService = $commonService;
        $this->dashboardService = $dashboardService;
    }

    public function dashboard(){

        // return view('dashboard.superadmin-dashboard');
        $domain = \Request::getHost();
        $subdomain = explode('.', $domain);

        if($subdomain[0] == 'cpsmaster'){
            // to get total active bank
            $totalActive = $this->dashboardService->getTotalActiveBank();

            // to get total inactive bank
            $totalInactive = $this->dashboardService->getTotalInactiveBank();

            // to get bank whose licence will expire within 45 days
            $banks = $this->dashboardService->getBanks();

            return view('dashboard.superadmin-dashboard', compact('totalActive', 'totalInactive', 'banks'));
        }else{
            // to get setting
            $setting = $this->commonService->getSettings();

            return view('dashboard.dashboard', compact('setting'));
        }
    }
}
