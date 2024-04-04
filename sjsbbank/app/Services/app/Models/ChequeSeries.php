<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChequeSeries extends Model
{
    use HasFactory;

    protected $table = "tb_cps_chequeseries";

    protected $primaryKey = 'series_id';

    public $timestamps = false;
}
