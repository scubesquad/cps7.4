<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = "tb_bankdetails";

    public $primaryKey = 'bank_id';

    public $timestamps = false;

    protected $fillable = ['bank_id'];
}
