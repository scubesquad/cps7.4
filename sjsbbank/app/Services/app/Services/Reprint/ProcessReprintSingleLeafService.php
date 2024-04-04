<?php

namespace App\Services\Reprint;

use DB;
use Auth;

class ProcessReprintSingleLeafService
{
	// get not approved reprint request
	public function list(){
		return DB::table('tb_cps_reprintque')
			   ->where('cps_reprint_approved', 0);
	}
}