<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintSequence extends Model
{
    use HasFactory;
    
    protected $table = "tb_print_sequence";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
