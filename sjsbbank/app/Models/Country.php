<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $table = "tb_countrymaster";

    public $primaryKey = 'country_id';

    public $timestamps = false;
}
