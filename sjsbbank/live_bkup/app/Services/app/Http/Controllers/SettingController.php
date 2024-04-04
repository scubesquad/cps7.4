<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    protected $settingService;

    public function __construct(SettingService $settingService){
        parent::__construct();
        $this->middleware(['permission:setting']);
        $this->settingService = $settingService;
    }

    public function edit(){
        $setting = $this->settingService->getSetting();

        return view('setting.edit', compact('setting'));
    }

    // funtion to update setting
    public function update(SettingRequest $req){
        $setting = $this->settingService->update($req);

        if($setting){
            return back();
        }
    }
}
