<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrintRequestCollection;

class Branch extends Model
{
    use HasFactory;

    protected $table = "tb_branchdetails";

    public $primaryKey = 'branch_id';

    public $timestamps = false;

    public function printRequestCollection(){
        return $this->hasOne(PrintRequestCollection::class, 'cps_branchmicr_code', 'branch_id');
    }
}
