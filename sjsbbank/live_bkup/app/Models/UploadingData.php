<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;

class UploadingData extends Model
{
    use HasFactory;

    protected $table = "tb_uploadingdata";

    public $timestamps = false;


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

}
