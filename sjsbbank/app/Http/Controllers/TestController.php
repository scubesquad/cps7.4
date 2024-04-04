<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CommonService;
use App\Services\DashboardService;
use Auth;
use App\Traits\SmsTrait;
use App\Services\SMSService;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportBranch;

class TestController extends Controller
{
    protected $commonService;
    protected $dashboardService;
    protected $smsService;

    use SmsTrait;

    public function __construct(SMSService $smsService){
        // parent::__construct();
        // $this->commonService = $commonService;
        $this->smsService = $smsService;
    }

    public function test(){

        $mobile_no = '7083008499'; // Replace with the recipient's phone number
        $text = 'Your OTP for our CPS software is 145263. Team SSSL';

        $apiKey = "Aba25a4289e4f4b2565ab5d40504b7839";
        $message = urlencode($text);
        $sender_id = "CPSSYS";

        $url = "https://alerts.solutionsinfini.com/api/v4/?api_key=" . $apiKey . "&method=sms&message=" . $message . "&to=" . $mobile_no . "&sender=" . $sender_id . "";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        print_r($result);
        curl_close($ch);

        $data = (json_decode($result, true));

        if ($data['status'] == "OK") {
            return 1;
        } else {
            return 0;
        }


        
    }

    public function testPrint(){

        $printersinfo[0][0] = "HP LaserJet Pro M402-M403 n-dne PCL 6";
        $printersinfo[0][2] = 'Tray 2';
        $PrintPath= public_path()."/pdf/Cheque.pdf";
        echo $msg =  exec('gsbatchprint\gsbatchprintc -P "'.$printersinfo[0][0].'" -F "'.$PrintPath.'" -I "'.$printersinfo[0][2].'" -N 1 2>&1');    
 
    }

    public function importView(Request $request){
        return view('importFile');
    }

    public function import(Request $request){
        Excel::import(new ImportBranch, $request->file('file')->store('files'));

        
        return redirect()->route('importView');
    }

}
