<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionalSetting extends Model
{
    use HasFactory;

    protected $table = "positional_settings";

    public $timestamps = false;

    protected $fillable = ['name', 'xposition', 'yposition'];
}
