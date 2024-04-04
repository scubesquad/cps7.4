<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintQueue extends Model
{
    use HasFactory;
    
    protected $table = "tb_printque";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
