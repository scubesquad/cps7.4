<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CommonService;
use App\Services\DashboardService;
use Auth;
use App\Models\PrintRequestCollection;
use App\Models\PendingPrintRequest;
use App\Models\Branch;
use App\Models\BranchUser;
use App\Models\UploadingData;

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
            $user = Auth::user();

            $user_id = $user->adminid;
            $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
            $ids = explode(",", $userBranches);


            
            $todatDate = date('Y-m-d');
            
            if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
                $branches = Branch::get();
                // $sendToBranchCount = UploadingData::where('cps_status','Pending For Approval')->whereDate('created_at','=',$todatDate)->count();
                $sendToBranchCount = UploadingData::whereDate('created_at','=',$todatDate)->count();

                $rejectedUploadCount = UploadingData::where('cps_status','!=','Pending For Approval')->whereDate('created_at','=',$todatDate)->count();
                $receivedBankCount = PrintRequestCollection::where('cps_status','Send To Branch')->whereDate('cps_date','=',$todatDate)->count();
                
                // $pickByCustCount = PrintRequestCollection::where('cps_status','Picked Up')->whereDate('cps_date','=',$todatDate)->count();
                $pickByCustCount = 0;
                
            } else {
                $branches = Branch::whereIn('branch_id',$ids)->get();
                $sendToBranchCount = UploadingData::where('cps_status','Pending For Approval')->whereIn('branch_id',$ids)->whereDate('created_at','=',$todatDate)->count();
                $receivedBankCount = PrintRequestCollection::where('cps_status','Printed')->whereIn('branch_id',$ids)->whereDate('cps_date','=',$todatDate)->count();
                
                $rejectedUploadCount = 0;
                $pickByCustCount = 0;
                //$uploads->whereIn('branch_id',$ids)->get();
            }

            //$sendToBranchCount = PendingPrintRequest::where('cps_status','Approved for printing')->whereDate('created_at','=',$todatDate)->count();
            //$receivedBankCount = PrintRequestCollection::where('cps_status','Send To Branch')->whereDate('cps_date','=',$todatDate)->count();
            //$pickByCustCount = PrintRequestCollection::where('cps_status','Picked Up')->whereDate('cps_date','=',$todatDate)->count();
            
            return view('dashboard.dashboard', compact('setting','sendToBranchCount','receivedBankCount','pickByCustCount','rejectedUploadCount','branches'));
        }
    }
}
