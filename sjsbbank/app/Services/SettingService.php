<?php

namespace App\Services;

use DB;
use Illuminate\Support\Facades\Storage;
use App\Services\LogService;
use App\Services\CommonService;
use Log;

class SettingService{

	protected $logService;
	protected $commonService;

	public function __construct(LogService $logService, CommonService $commonService){
		$this->logService = $logService;
		$this->commonService = $commonService;
	}

	// to get the setting data
	public function getSetting(){
		return DB::table('tb_cps_settings')
			   ->first();
	}

	// to update the setting details
	public function update($req){
		$domain = \Request::getHost();
        $subdomain = explode('.', $domain);

        $settingPath = 'sjsbbank';

		$setting = DB::table('tb_cps_settings')
				->first();
		$banklogo = ($setting->banklogo)?$setting->banklogo : "";
		if($req->banklogo != "")
		{
			if($req->hasFile('banklogo')){
				if($setting->banklogo && $setting->banklogo != ""){
					if(Storage::disk('public')->exists($setting->banklogo)){
						Storage::disk('public')->delete($setting->banklogo);
					}

				}

				

				$fileName = 'banklogo-'.time().'.'.$req->banklogo->getClientoriginalExtension();
                $req->file('banklogo')->storeAs($settingPath.'/setting/', $fileName, 'public');

                $banklogo = $settingPath.'/setting/'.$fileName;
			}
		}

		$desktopImage = ($setting->desktop_image)?$setting->desktop_image : "";
		if($req->desktop_image != "")
		{
			if($req->hasFile('desktop_image')){
				if($setting->desktop_image && $setting->desktop_image != ""){
					if(Storage::disk('public')->exists($setting->desktop_image)){
						Storage::disk('public')->delete($setting->desktop_image);
					}

				}
				$fileName = 'desktopimage-'.time().'.'.$req->desktop_image->getClientoriginalExtension();
                $req->file('desktop_image')->storeAs($settingPath.'/setting/', $fileName, 'public');

                $desktopImage = $settingPath.'/setting/'.$fileName;
			}
		}

		$data = [
			"chk_taken_from" => $req->chk_taken_from,
	      	"nooffailedpasswordattempt" => $req->nooffailedpasswordattempt,
	      	"homescreen_text" => $req->homescreen_text,
	      	"autolockminutes" => $req->autolockminutes,
	      	"banklogo" => $banklogo,
	      	"desktop_image" => $desktopImage,
	      	"toner_leaves_capacity" => $req->toner_leaves_capacity,
		];

		

		if($setting){
			// setting log when insert
			$setting = $this->commonService->getSettings();

			$this->logService->insertLog('tb_cps_settings', 'Setting', '', 'update', ["chk_taken_from" => $setting->chk_taken_from, "nooffailedpasswordattempt" => $setting->nooffailedpasswordattempt, "homescreen_text" => $setting->homescreen_text, "autolockminutes" => $setting->autolockminutes, "banklogo" => $banklogo, "desktop_image" => $desktopImage, "toner_leaves_capacity" => $setting->toner_leaves_capacity,], $data);

			DB::table('tb_cps_settings')->update($data);
		}else{
			// setting log when insert
			$this->logService->insertLog('tb_cps_settings', 'Setting', '', 'insert', [], $data);

			DB::table('tb_cps_settings')->insert($data);
		}
		return true;
	}
}