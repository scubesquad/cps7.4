<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintRequestCollection extends Model
{
    use HasFactory;
    
    protected $table = "tb_print_req_collection";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
