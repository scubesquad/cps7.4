<?php

namespace App\Services;

use Log;
use App\Services\PrintQueryService;

class PrintSlipService{

    protected $printQueryService;

    public function __construct(PrintQueryService $printQueryService){
        $this->printQueryService = $printQueryService;
    }

	function printRequestSlip($pdf, $type, $firstchequedata, $secondchequedata, $thirdchequedata, $noOfRequestSlip, $noofbooks, $printersinfo, $trn_string_array, $bankDetails) {

        $html = "";
     
        
        //First request slip
        $arrSlipData = [];
        $arrSlipData[0] = $firstchequedata;
        $arrSlipData[1] = $secondchequedata;
        $arrSlipData[2] = $thirdchequedata;

        //$pdf = new FPDF();
        

        
        $pdf->AddPage();

        
        for ($i = 0; $i < $noOfRequestSlip; $i++) { 
            
            if(!isset($arrSlipData[$i]['cps_branchmicr_code']))
            {
                 break;
            }
           
            // Query to  get the branch details by branch_code and sub_code
            $branchDetails = $this->printQueryService->getBranchDetailByBranchCode($bankDetails, $arrSlipData[$i]['cps_branchmicr_code'], $arrSlipData[$i]['branch_sub_code']);

            // set the first, secode and third slip y-axis position
            if($i == 1){
                $yAxis = 92; 
            }elseif($i == 2){
                $yAxis = 185;
            }else{
                $yAxis = 0;
            }
            // end of set the first, secode and third slip y-axis position


            if ($noofbooks == 1) {
                $firstslipfrom = $arrSlipData[$i]['chkFrom'];
                $firstslipto = $arrSlipData[$i]['chkFrom'] + $arrSlipData[$i]['cps_book_size'] - 1;
            } else {
                $noofbooks = $noofbooks - 1;
                $firstslipfrom = $arrSlipData[$i]['chkFrom'] + ($noofbooks * $arrSlipData[$i]['cps_book_size']);
                $firstslipto = $firstslipfrom + $arrSlipData[$i]['cps_book_size'] - 1;
            }
            $html .= "<br/> From :- " . $firstslipfrom . "    To :- " . $firstslipto . "<br/>";
           

            // print branch details
            $pdf->SetFont('Arial_B', 'B', 5);
            $pdf->SetXY(18, $yAxis + 9);
            $pdf->Cell(100, 0, $branchDetails->branch_name." : ".$branchDetails->branch_address1.',', '', 0, 'L');

            $addressLine2="";
            if(!empty($branchDetails->branch_address2)){
                $addressLine2 .=htmlspecialchars_decode($branchDetails->branch_address2);
            }

            $pdf->SetXY(18, $yAxis + 12);
            $pdf->Cell(100, 0, $addressLine2, '', 0, 'L');

            $pdf->SetFont('Arial_B', 'B', 8);
            

            // to print account details
            $trn_str = $trn_string_array[$arrSlipData[$i]['cps_tr_code']];
            $pdf->SetXY(23, $yAxis + 17);
            $pdf->Cell(100, 0, $trn_str . ' A/c. No. :  ' . htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), '', 0, 'L');

            $pdf->SetFont('Arial', '', 7);
            $pdf->SetXY(23, $yAxis + 21);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 24);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address1']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 27);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address2']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 30);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address3']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 33);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address4']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 36);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address5']), '', 0, 'L');
            $pdf->SetXY(23, $yAxis + 39);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_city']) . "  " . htmlspecialchars_decode($arrSlipData[$i]['cps_act_pin']), '', 0, 'L');


            //--------> print vertically start
            $x = 11.5;
            $pdf->SetFont('Arial', '', 5);
            $pdf->StartTransform();
            $pdf->SetXY($x, $yAxis + 76);
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_unique_req'])); // unique request no
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($x, $yAxis + 56);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['print_user'])); //  operator id
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($x, $yAxis + 37);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode(date("d-m-Y H:i:s"))); //  date time
            $pdf->Rotate(0);
            $pdf->StopTransform();
            // -------> print vertically end

            //--------> print vertically start
            $x1 = 90;
            $pdf->SetFont('Arial', '', 5);
            $pdf->StartTransform();
            $pdf->SetXY($x1, $yAxis + 76);
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_unique_req'])); // unique request no
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($x1, $yAxis + 56);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['print_user'])); //  operator id
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($x1, $yAxis + 37);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode(date("d-m-Y H:i:s"))); //  date time
            $pdf->Rotate(0);
            $pdf->StopTransform();
            // -------> print vertically end

            $pdf->SetFont('Arial_B', 'B', 8);
            $pdf->SetXY(21, $yAxis + 53);
            $pdf->Cell(100, 0, 'Cheque No. From  ' . str_pad(htmlspecialchars_decode($firstslipfrom), 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad(htmlspecialchars_decode($firstslipto), 6, "0", STR_PAD_LEFT), '', 0, 'L');

            $pdf->SetXY(34, $yAxis + 56);
            $pdf->Cell(100, 0, "Branch Information", '', 0, 'L');

            $firstno = $arrSlipData[$i]['cps_act_telephone_res'] > 0 ? $arrSlipData[$i]['cps_act_telephone_res'] : "";
            $secondno = $arrSlipData[$i]['cps_act_telephone_off'] > 0 ? $arrSlipData[$i]['cps_act_telephone_off'] : "";
            $thirdno = $arrSlipData[$i]['cps_act_mobile'] > 0 ? $arrSlipData[$i]['cps_act_mobile'] : "";

            // coordinates for printing in small box ----------------------
            $smx = 19;
            $smy = $yAxis + 60;
            $smdy = 2.5;
            $smdotx = $smx + 18;
            $sminfx = $smdotx + 2;

            $pdf->SetFont('Arial', '', 6);
            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Regu. Busi. Hrs.", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_reg_busi_hrs), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Half Day Busi. Hrs.", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_half_busi_hrs), '', 0, 'L');
            $smy += $smdy;


            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Sunday Working", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_sunday_working), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Branch E-Mail-1", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_email1), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Branch E-Mail-2", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_email2), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Web Address", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($bankDetails->bank_website), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Contact No.", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_telephone1), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Toll Free No.", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_tollfree_no), '', 0, 'L');
            $smy += $smdy;

            $pdf->SetXY($smx, $smy);
            $pdf->Cell(100, 0, "Branch Service", '', 0, 'L');
            $pdf->SetXY($smdotx, $smy);
            $pdf->Cell(100, 0, ":", '', 0, 'L');
            $pdf->SetXY($sminfx, $smy);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_Services), '', 0, 'L');

            // printing small box ends ----------------------------------
            //Second Part
            // right part of requisition slip
            $secondPartX = 99;

            $pdf->SetFont('Arial_B', 'B', 8);
            
            $pdf->SetXY(104, $yAxis + 6);
            $pdf->Cell(100, 0, 'Cheque Book Request (Bank Copy)                    Date:________________', '', 0, 'L');
            $pdf->SetFont('Arial_B', 'B', 7);
            $pdf->SetXY($secondPartX, $yAxis + 10);
            $pdf->Cell(100, 0, 'The Manager', '', 0, 'L');
            $pdf->SetXY($secondPartX, $yAxis + 13);
            $pdf->Cell(100, 0, htmlspecialchars_decode($bankDetails->bank_name), '', 0, 'L');

            $pdf->SetFont('Arial_B', 'B', 6);
            $pdf->SetXY($secondPartX, $yAxis + 16);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_name) . ": " . htmlspecialchars_decode($branchDetails->branch_address1) . ',', '', 0, 'L');
            $addressLine2="";
            if(!empty($branchDetails->branch_address2)){
                $addressLine2 .=htmlspecialchars_decode($branchDetails->branch_address2);
            }

            
            $pdf->SetXY($secondPartX, $yAxis + 19);
            $pdf->Cell(100, 0, $addressLine2, '', 0, 'L');

            $pdf->SetFont('Arial_B', 'B', 8);
            //$pdf->Text(140,209,$arrSlipData[$i]['chkFrom']);
            //$pdf->Text(187,209,$arrSlipData[$i][15]);
            $pdf->SetXY($secondPartX, $yAxis + 22);
            $pdf->Cell(100, 0,  'Cheque No. From  ' . str_pad(htmlspecialchars_decode($firstslipfrom), 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad(htmlspecialchars_decode($firstslipto), 6, "0", STR_PAD_LEFT), '', 0, 'L');

            $pdf->SetXY($secondPartX, $yAxis + 26);
            $pdf->Cell(100, 0, 'Please Issue _______ Cheque Books Containing _______ Leaves', '', 0, 'L');
          
            $pdf->SetFont('Arial_B', 'B', 8);

            $pdf->SetXY($secondPartX, $yAxis + 30);
            $pdf->Cell(100, 0, 'Characteristics :     Bearer        Order', '', 0, 'L');
            $pdf->SetXY($secondPartX, $yAxis + 34);
            $pdf->Cell(100, 0, 'Cheque Book    :      Normal         Payable At Par', '', 0, 'L');
            $pdf->SetXY($secondPartX, $yAxis + 38);
            $pdf->Cell(100, 0, htmlspecialchars_decode($trn_str) . ' A/c No.: ' . htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), '', 0, 'L');


            //$pdf->Text(115,229, 'Cheque No. From  '.$arrSlipData[$i]['chkFrom'].'       To  '.$arrSlipData[$i][15]);

            $pdf->Image(dirname(__FILE__) . "\..\..\images\checkbox.png", 138, $yAxis + 30.5);
            $pdf->Image(dirname(__FILE__) . "\..\..\images\checkbox.png", 151, $yAxis + 30.5);

            $pdf->SetXY(161, $yAxis + 53);
            $pdf->Cell(100, 0, "Signature Verified / Authorised", '', 0, 'L');
            
            $pdf->SetFont('Arial', '', 8);

            $pdf->SetXY(99, $yAxis + 43);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 47);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address1']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 50);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address2']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 53);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address3']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 56);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address4']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 59);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address5']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 62);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_city']) . "-" . htmlspecialchars_decode($arrSlipData[$i]['cps_act_pin']), '', 0, 'L');
            $pdf->SetXY(99, $yAxis + 68);
            $pdf->Cell(100, 0, 'Contact No.:' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_telephone_res']) . '    ' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_telephone_off']) . '    ' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_mobile']), '', 0, 'L');


        


            $pdf->SetFont('Arial_B', 'B', 8);
            $pdf->SetXY($secondPartX, $yAxis + 88);
            $pdf->Cell(100, 0, 'Signature of Bearer', '', 0, 'L');
            $pdf->SetXY($secondPartX, $yAxis + 75);
           
            if (htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']) == "SELF" && htmlspecialchars_decode($arrSlipData[$i]['cps_tr_code']) == 10 && substr(htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), 6, 1) != "2") {
                $pdf->SetXY(162, $yAxis + 84);
                if (htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']) == '') {
                    $pdf->SetFont('Arial', '', 7);
                    $pdf->Cell(40, 5, "Self", 0, 0, 'R');
                } else {
                    $pdf->Cell(40, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), 0, 0, 'R');
                }

            } else {
                $pdf->Cell(100, 5, "For " . htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), 0, 0, 'R');

                $pdf->SetFont('Arial', '', 7);

                $pdf->SetXY(162, $yAxis + 84);
                if (htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']) == '') {
                    $pdf->Cell(40, 5, "Self", 0, 0, 'R');
                } else {
                    $pdf->Cell(40, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), 0, 0, 'R');
                }

            }
        }
      
        // function for toner
        $this->printQueryService->tonerSetting();
        
        return $html;
    }
}