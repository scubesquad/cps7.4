<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PositionalSettingService;

class PositionalSettingController extends Controller
{
    protected $positionalSettingService;

    public function __construct(PositionalSettingService $positionalSettingService){
        $this->middleware(['permission:positional-setting.view']);
        $this->positionalSettingService = $positionalSettingService;
    } 

    public function edit(Request $req){
        $xpos = $this->positionalSettingService->getXPosition();

        $ypos = $this->positionalSettingService->getYPosition();
        // return $ypos;
        return view('positional-settings.edit', compact('xpos', 'ypos'));
    }

    public function update(Request $req){
        $position = $this->positionalSettingService->update($req);

        if($position){
            return response()->json([
                'status' => 200,
                'message' => 'Position updated'
            ]);
        }
    }
}
