<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RePrintQueue extends Model
{
    use HasFactory;

    protected $table = "tb_cps_reprintque";

    protected $primaryKey = 'id';
    
    protected $fillable = [ 'id','cps_unique_req','cps_micr_code','cps_branchmicr_code','cps_account_no','cps_act_name','cps_no_of_books','cps_dly_bearer_order','cps_book_size','cps_tr_code','cps_atpar','cps_act_jointname1','cps_act_jointname2','cps_auth_sign1','cps_auth_sign2','cps_auth_sign3','cps_act_address1','cps_act_address2','cps_act_address3','cps_act_address4','cps_act_address5','cps_act_city','cps_state','cps_country','cps_emailid','cps_act_pin','cps_act_telephone_res','cps_act_telephone_off','cps_act_mobile','cps_ifsc_code','cps_chq_no_from','cps_chq_no_to','cps_micr_account_no','cps_date','cps_process_user_id','cps_bsr_code','cps_pr_code','cps_reprint_approved','cps_short_name','cps_issue_date','cps_product_code','branch_sub_code'];
    
    public $timestamps = false;
}
