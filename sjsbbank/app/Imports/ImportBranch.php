<?php

namespace App\Imports;

use App\Models\BranchNew;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBranch implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
        die();
        $branchCode ='';
        if(strlen($row[15]) == 1){
            $branchCode = '00'.$row[15];
        }if(strlen($row[15]) == 2){
            $branchCode = '0'.$row[15];
        } else {
            $branchCode = $row[15];
        }
        return new BranchNew([
            'branch_name' => $row[1],
            'branch_short_name' => $row[19],
            'branch_code' => $branchCode,
            'branch_sub_code' => $row[16],
            'branch_City_Code' => $row[16],
            'branch_neftifsccode' => $row[12],
            'branch_micr' => $row[1],
            'branch_atparmicrcode' => $row[1],
            'branch_address1' => $row[1],
            'branch_address2' => $row[1],
            'branch_country_id' => '1',
            'branch_state_id' => '1',
            'branch_contactperson1' => $row[1],
            'branch_contactpersonmobile1' => $row[1],
            'branch_telephone1' => $row[1],
            'branch_email1' => $row[1],
            'branch_contactperson2' => $row[1],
            'branch_contactpersonmobile2' => $row[1],
            'branch_telephone2' => $row[1],
            'branch_email2' => $row[1],
            'branch_reg_busi_hrs' => $row[1],
            'branch_half_busi_hrs' => $row[1],
            'branch_sunday_working' => $row[1],
            'branch_tollfree_no' => $row[1],
            'branch_services' => $row[1],

        ]);
    }
}
