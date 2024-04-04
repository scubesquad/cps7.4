<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RePrintQueue extends Model
{
    use HasFactory;

    protected $table = "tb_cps_reprintque";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
