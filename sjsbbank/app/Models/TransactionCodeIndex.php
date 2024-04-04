<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCodeIndex extends Model
{
    use HasFactory;

    protected $table = "transaction_code_index";

    public $timestamps = false;

    public $fillable = ['name', 'index'];
}
