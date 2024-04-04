<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrintRequestCollection;

class BranchUser extends Model
{
    use HasFactory;

    protected $table = "branch_user";

    public $primaryKey = 'id';

    public $timestamps = false;

    
}
