<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RePrintRequestCollection extends Model
{
    use HasFactory;
    
    protected $table = "tb_reprint_req_collection";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
