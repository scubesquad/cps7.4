<?php

namespace App\Services;

use App\Models\PositionalSetting;
use DB;

class PositionalSettingService{
	// to get xposition of cheque and slip 
	public function getXPosition(){
		return PositionalSetting::where('status', 1)
			   ->pluck('xposition', 'name');
	}

	// to get yposition of cheque and slip 
	public function getYPosition(){
		return PositionalSetting::where('status', 1)
			   ->pluck('yposition', 'name');
	}

	// function to update position
	public function update($req){

		// code to update cheque series y-axis position
		$yposition = ['chequeleaf1', 'chequeleaf2', 'chequeleaf3', 'slipleaf1', 'slipleaf2', 'slipleaf3'];

		foreach($yposition as $ypos)
		{
			PositionalSetting::updateOrCreate(
			        ['name' => $ypos],
			        ['name' => $ypos, 'yposition' => $req->$ypos],
			    );
		}

		// code to update cheque series position
		if(isset($req->chequeseriesname)){
			for($i=0; $i < count($req->chequeseriesname); $i++){
				PositionalSetting::updateOrCreate(
			        ['name' => $req->chequeseriesname[$i]],
			        ['name' => $req->chequeseriesname[$i], 'xposition' => $req->xposition[$i], 'yposition' => $req->yposition[$i]],
			    );
			}
		}

		return true;
	}
}