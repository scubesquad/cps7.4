<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "tb_statemaster";

    public $primaryKey = 'state_id';

    public $timestamps = false;
}
