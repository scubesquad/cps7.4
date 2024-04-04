<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHolderMaster extends Model
{
    use HasFactory;

    protected $table = "tb_accountholdermaster";

    protected $primaryKey = 'adminid';

    public $timestamps = false;
}
