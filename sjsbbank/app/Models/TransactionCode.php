<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCode extends Model
{
    use HasFactory;

    protected $table = "tb_cps_transactioncodes";

    protected $primaryKey = 'transactioncode_id';

    public $timestamps = false;
}
