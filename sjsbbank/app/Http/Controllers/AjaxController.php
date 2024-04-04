<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Branch;
use App\Models\PrintRequestCollection;
use Auth;
use App\Models\PendingPrintRequest;
use App\Models\UploadingData;
use App\Models\BranchUser;

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


    public function ajaxGetAccountDetails(Request $request) {
        $printAccountDetail = PrintRequestCollection::where('branch_id',$request->branch_id)->where('cps_account_no',$request->customer_ac_no)->first();
        if($printAccountDetail) {
            return response()->json([
                'status' => 200,
                'data' => $printAccountDetail
            ]);
        } else {
            return response()->json([
                'status' => 201,
                'data' => 'data not found'
            ]);
        }
    }

    // Dashboard Search function 
    public function dashboardAjaxSearch(Request $request) {

        $user = Auth::user();

        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
            // $sendToBranchCount = UploadingData::where('cps_status','Pending For Approval')->whereDate('created_at', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('created_at', '<=', date('Y-m-d', strtotime($endDate)))->count();
            $sendToBranchCount = UploadingData::whereDate('created_at', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('created_at', '<=', date('Y-m-d', strtotime($endDate)))->count();
            $rejectedUploadCount = UploadingData::where('cps_status','!=','Pending For Approval')->whereDate('created_at', '<=', date('Y-m-d', strtotime($endDate)))->count();

            $receivedBankCount = PrintRequestCollection::where('cps_status','Send To Branch')->whereDate('cps_date', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('cps_date', '<=', date('Y-m-d', strtotime($endDate)))->count();
            $pickByCustCount = PrintRequestCollection::where('cps_status','Picked Up')->whereDate('cps_date', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('cps_date', '<=', date('Y-m-d', strtotime($endDate)))->count();
        } else {
            $sendToBranchCount = UploadingData::where('cps_status','Pending For Approval')->whereIn('branch_id',$ids)->whereDate('created_at', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('created_at', '<=', date('Y-m-d', strtotime($endDate)))->count();
            $receivedBankCount = PrintRequestCollection::where('cps_status','Printed')->whereIn('branch_id',$ids)->whereDate('cps_date', '>=', date('Y-m-d', strtotime($startDate)))->whereDate('cps_date', '<=', date('Y-m-d', strtotime($endDate)))->count();
            $rejectedUploadCount = 0;
            $pickByCustCount = 0;

        }

        return response()->json([
            'status' => 200,
            'sendToBranchCount' => $sendToBranchCount,
            'receivedBankCount' => $receivedBankCount,
            'rejectedUploadCount' => $rejectedUploadCount,
            'pickByCustCount' => $pickByCustCount
        ]);

    }


    
}
