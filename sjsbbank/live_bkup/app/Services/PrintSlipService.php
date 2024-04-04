<?php

namespace App\Services;

use Log;
use App\Services\PrintQueryService;
use TCPDF_FONTS;

class PrintSlipService{

    protected $printQueryService;

    public function __construct(PrintQueryService $printQueryService){
        $this->printQueryService = $printQueryService;
    }

	function printRequestSlip($pdf, $type, $firstchequedata, $secondchequedata, $thirdchequedata, $noOfRequestSlip, $noofbooks, $printersinfo, $trn_string_array, $bankDetails, $xpos, $ypos) {

        $html = "";
     
        
        //First request slip
        $arrSlipData = [];
        $arrSlipData[0] = $firstchequedata;
        $arrSlipData[1] = $secondchequedata;
        $arrSlipData[2] = $thirdchequedata;

        //$pdf = new FPDF();
        

        $arial = TCPDF_FONTS::addTTFfont(public_path().'\font\Arial.TTF', 'TrueTypeUnicode', '', 96);
        $arialb = TCPDF_FONTS::addTTFfont(public_path().'\font\ArialB.TTF', 'TrueTypeUnicode', '', 96);
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
                $yAxis = $ypos['slipleaf2']; 
            }elseif($i == 2){
                $yAxis = $ypos['slipleaf3'];
            }else{
                $yAxis = $ypos['slipleaf1'];
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
            $pdf->SetFont($arial,'B',5.5);
            $pdf->SetXY($xpos['leftslipbankname'], $yAxis + $ypos['leftslipbankname']);
            $pdf->Cell(100, 0, $bankDetails->bank_name, '', 0, 'L');

            $pdf->SetFont($arial, 'B', 5);
            $pdf->SetXY($xpos['leftslipbranchaddress1'], $yAxis + $ypos['leftslipbranchaddress1']);
            $pdf->Cell(100, 0, $branchDetails->branch_name." : ".$branchDetails->branch_address1.',', '', 0, 'L');

            $addressLine2="";
            if(!empty($branchDetails->branch_address2)){
                $addressLine2 .=htmlspecialchars_decode($branchDetails->branch_address2);
            }

            $pdf->SetXY($xpos['leftslipbranchaddress2'], $yAxis + $ypos['leftslipbranchaddress2']);
            $pdf->Cell(100, 0, $addressLine2, '', 0, 'L');

            $pdf->SetFont($arial, 'B', 8);
            

            // to print account details
            $trn_str = $trn_string_array[$arrSlipData[$i]['cps_tr_code']];
            $pdf->SetXY($xpos['leftslipaccountno'], $yAxis + $ypos['leftslipaccountno']);
            $pdf->Cell(100, 0, $trn_str . ' A/c. No. :  ' . htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), '', 0, 'L');

            $pdf->SetFont($arial, '', 7);
            $pdf->SetXY($xpos['leftslipcustomername'], $yAxis + $ypos['leftslipcustomername']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomeraddress1'], $yAxis + $ypos['leftslipcustomeraddress1']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address1']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomeraddress2'], $yAxis + $ypos['leftslipcustomeraddress2']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address2']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomeraddress3'], $yAxis + $ypos['leftslipcustomeraddress3']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address3']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomeraddress4'], $yAxis + $ypos['leftslipcustomeraddress4']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address4']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomeraddress5'], $yAxis + $ypos['leftslipcustomeraddress5']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address5']), '', 0, 'L');
            $pdf->SetXY($xpos['leftslipcustomercity'], $yAxis + $ypos['leftslipcustomercity']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_city']) . "  " . htmlspecialchars_decode($arrSlipData[$i]['cps_act_pin']), '', 0, 'L');


            //--------> print vertically start
            $x = 11.5;
            $pdf->SetFont($arial, '', 5);
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

            $pdf->SetFont($arial, 'B', 8);
            $pdf->SetXY($xpos['leftslipchequeseries'], $yAxis + $ypos['leftslipchequeseries']);
            $pdf->Cell(100, 0, 'Cheque No. From  ' . str_pad(htmlspecialchars_decode($firstslipfrom), 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad(htmlspecialchars_decode($firstslipto), 6, "0", STR_PAD_LEFT), '', 0, 'L');

            $pdf->SetXY($xpos['leftslipbranchinfotext'], $yAxis + $ypos['leftslipbranchinfotext']);
            $pdf->Cell(100, 0, "Branch Information", '', 0, 'L');

            $firstno = $arrSlipData[$i]['cps_act_telephone_res'] > 0 ? $arrSlipData[$i]['cps_act_telephone_res'] : "";
            $secondno = $arrSlipData[$i]['cps_act_telephone_off'] > 0 ? $arrSlipData[$i]['cps_act_telephone_off'] : "";
            $thirdno = $arrSlipData[$i]['cps_act_mobile'] > 0 ? $arrSlipData[$i]['cps_act_mobile'] : "";

            // coordinates for printing in small box ----------------------
            $smx = $xpos['leftslipbranchinfoname'];
            $smy = $yAxis + $ypos['leftslipbranchinfoname'];
            $smdy = 2.5;
            $smdotx = $xpos['leftslipbranchinfocolon'];
            $sminfx = $smdotx + 2;

            $pdf->SetFont($arial, '', 6);
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


            //--------> print vertically start
            $x1 = 90;
            $pdf->SetFont($arial, '', 5);
            $pdf->StartTransform();
            $pdf->SetXY($xpos['rightsliprotateuniqueno'], $yAxis + $ypos['rightsliprotateuniqueno']);
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_unique_req'])); // unique request no
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($xpos['rightsliprotateusername'], $yAxis + $ypos['rightsliprotateusername']);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode($arrSlipData[$i]['print_user'])); //  operator id
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($xpos['rightsliprotatedatetime'], $yAxis + $ypos['rightsliprotatedatetime']);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, htmlspecialchars_decode(date("d-m-Y H:i:s"))); //  date time
            $pdf->Rotate(0);
            $pdf->StopTransform();
            // -------> print vertically end

            $pdf->SetFont($arial, 'B', 8);
            
            $pdf->SetXY($xpos['rightslipchequebookreq'], $yAxis + $ypos['rightslipchequebookreq']);
            $pdf->Cell(100, 0, 'Cheque Book Request (Bank Copy)                    Date:________________', '', 0, 'L');
            $pdf->SetFont($arial, 'B', 7);
            $pdf->SetXY($xpos['rightslipmanagertext'], $yAxis + $ypos['rightslipmanagertext']);
            $pdf->Cell(100, 0, 'The Manager', '', 0, 'L');
            $pdf->SetXY($xpos['rightslipbankname'], $yAxis + $ypos['rightslipbankname']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($bankDetails->bank_name), '', 0, 'L');

            $pdf->SetFont($arial, 'B', 6);
            $pdf->SetXY($xpos['rightslipaddress1'], $yAxis + $ypos['rightslipaddress1']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($branchDetails->branch_name) . ": " . htmlspecialchars_decode($branchDetails->branch_address1) . ',', '', 0, 'L');
            $addressLine2="";
            if(!empty($branchDetails->branch_address2)){
                $addressLine2 .=htmlspecialchars_decode($branchDetails->branch_address2);
            }

            
            $pdf->SetXY($xpos['rightslipaddress2'], $yAxis + $ypos['rightslipaddress2']);
            $pdf->Cell(100, 0, $addressLine2, '', 0, 'L');

            $pdf->SetFont($arial, 'B', 8);
            //$pdf->Text(140,209,$arrSlipData[$i]['chkFrom']);
            //$pdf->Text(187,209,$arrSlipData[$i][15]);
            $pdf->SetXY($xpos['rightslipchequeseriesfrom'], $yAxis + $ypos['rightslipchequeseriesfrom']);
            $pdf->Cell(100, 0,  'Cheque No. From  ' . str_pad(htmlspecialchars_decode($firstslipfrom), 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad(htmlspecialchars_decode($firstslipto), 6, "0", STR_PAD_LEFT), '', 0, 'L');

            $pdf->SetXY($xpos['rightslipissuetext'], $yAxis + $ypos['rightslipissuetext']);
            $pdf->Cell(100, 0, 'Please Issue _______ Cheque Books Containing _______ Leaves', '', 0, 'L');
          
            $pdf->SetFont($arial, 'B', 8);

            $pdf->SetXY($xpos['rightslipcharacterstics'], $yAxis + $ypos['rightslipcharacterstics']);
            $pdf->Cell(100, 0, 'Characteristics :     Bearer        Order', '', 0, 'L');
            $pdf->SetXY($xpos['rightslipchequebook'], $yAxis + $ypos['rightslipchequebook']);
            $pdf->Cell(100, 0, 'Cheque Book    :      Normal         Payable At Par', '', 0, 'L');
            $pdf->SetXY($xpos['rightslipaccountno'], $yAxis + $ypos['rightslipaccountno']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($trn_str) . ' A/c No.: ' . htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), '', 0, 'L');


            //$pdf->Text(115,229, 'Cheque No. From  '.$arrSlipData[$i]['chkFrom'].'       To  '.$arrSlipData[$i][15]);

            $pdf->Image(public_path()."/image/checkbox.png", $xpos['rightslipcharacterstics']+38, $yAxis + $ypos['rightslipcharacterstics']);
            $pdf->Image(public_path()."/image/checkbox.png", $xpos['rightslipcharacterstics']+51, $yAxis + $ypos['rightslipcharacterstics']);

            $pdf->SetXY($xpos['rightslipsignatureverified'], $yAxis + $ypos['rightslipsignatureverified']);
            $pdf->Cell(100, 0, "Signature Verified / Authorised", '', 0, 'L');
            
            $pdf->SetFont($arial, '', 8);

            $pdf->SetXY($xpos['rightslipcustomername'], $yAxis + $ypos['rightslipcustomername']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomeraddress1'], $yAxis + $ypos['rightslipcustomeraddress1']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address1']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomeraddress1'], $yAxis + $ypos['rightslipcustomeraddress2']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address2']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomeraddress1'], $yAxis + $ypos['rightslipcustomeraddress3']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address3']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomeraddress1'], $yAxis + $ypos['rightslipcustomeraddress4']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address4']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomeraddress1'], $yAxis + $ypos['rightslipcustomeraddress5']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_address5']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcustomercity'], $yAxis + $ypos['rightslipcustomercity']);
            $pdf->Cell(100, 0, htmlspecialchars_decode($arrSlipData[$i]['cps_act_city']) . "-" . htmlspecialchars_decode($arrSlipData[$i]['cps_act_pin']), '', 0, 'L');
            $pdf->SetXY($xpos['rightslipcontactno'], $yAxis + $ypos['rightslipcontactno']);
            $pdf->Cell(100, 0, 'Contact No.:' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_telephone_res']) . '    ' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_telephone_off']) . '    ' . htmlspecialchars_decode($arrSlipData[$i]['cps_act_mobile']), '', 0, 'L');


        


            $pdf->SetFont($arial, 'B', 8);
            $pdf->SetXY($xpos['rightslipsignatureofbearer'], $yAxis + $ypos['rightslipsignatureofbearer']);
            $pdf->Cell(100, 0, 'Signature of Bearer', '', 0, 'L');
            $pdf->SetXY($xpos['rightslipacountholdertopname'], $yAxis + $ypos['rightslipacountholdertopname']);
           
            if (htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']) == "SELF" && htmlspecialchars_decode($arrSlipData[$i]['cps_tr_code']) == 10 && substr(htmlspecialchars_decode($arrSlipData[$i]['cps_account_no']), 6, 1) != "2") {
                $pdf->SetXY($xpos['rightslipaccountholderbottomname'], $yAxis + $ypos['rightslipaccountholderbottomname']);
                if (htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']) == '') {
                    $pdf->SetFont($arial, '', 7);
                    $pdf->Cell(40, 5, "Self", 0, 0, 'R');
                } else {
                    $pdf->Cell(40, 5, htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), 0, 0, 'R');
                }

            } else {
                $pdf->Cell(100, 5, "For " . htmlspecialchars_decode($arrSlipData[$i]['cps_act_name']), 0, 0, 'R');

                $pdf->SetFont($arial, '', 7);

                $pdf->SetXY($xpos['rightslipaccountholderbottomname'], $yAxis + $ypos['rightslipaccountholderbottomname']);
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