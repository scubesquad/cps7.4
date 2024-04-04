<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $table = "tb_printadmin";

    public $primaryKey = 'adminid';

    protected $fillable = ['username','password','lastlogintime','adminid','group_id','incorrect_attempt','user_status','password_status','user_type','userid','create_date','is_temp_password','branch_id','phone_number','otp','otp_expire_time','updated_by','updated_at'];
    
    public $timestamps = false;
}
