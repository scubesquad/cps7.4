<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\User;

class UploadingDataStatusLog extends Model
{
    use HasFactory;

    protected $table = "tb_uploadingdata_status_log";

    protected $fillable = ['id','unique_no','status','created_at','created_by'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class,'created_by', 'adminid');
    }


}
