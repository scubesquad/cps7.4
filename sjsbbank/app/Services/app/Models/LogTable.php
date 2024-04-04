<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogTable extends Model
{
    use HasFactory;

    public $table = "log_table";

    public $primaryKey = 'id';

    public $timestamps = false;
}
