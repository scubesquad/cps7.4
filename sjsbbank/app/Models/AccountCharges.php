<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountCharges extends Model
{
    use HasFactory;

    protected $table = "tb_account_charges";

    protected $primaryKey = 'id';

    public $timestamps = false;
}
