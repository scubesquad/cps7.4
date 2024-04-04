<?php

namespace App\Services;

use App\Services\PrintQueryService;
use TCPDF_FONTS;
class PrintChequeService{
    protected $printQueryService;

    public function __construct(PrintQueryService $printQueryService){
        $this->printQueryService = $printQueryService;
    }

	function printCheques($pdf, $type, $firstchequedata, $secondchequedata, $thirdchequedata, $noofCheque, $printersinfo, $bankDetails, $xpos, $ypos) {
        $html = "";
        // array value off cheque position of x-axis
        $arrXaxisPos = ["branchX" => 32, "ifscX" => 117, "accnoX" => 38, "rotateDateTime" => 14.5, "chqseriesX" => 60.2, "micr1X" => 88.7, "micr2X" => 123.5, "trncodeX" => 148.8];

        // array value of cheque position of y-axis
        $arrYaxisPos = ["BankAddrY" => 11, "AcnoY" => 42, "Name" => 42, "VUniqReq" => 74, "MICRY" => 83.2, "bearer" => 23];

        //$pdf->AddFont('E-13B_0','','E-13B_0.php');
        $arial = TCPDF_FONTS::addTTFfont(public_path().'\font\Arial.TTF', 'TrueTypeUnicode', '', 96);
        $arialb = TCPDF_FONTS::addTTFfont(public_path().'\font\ArialB.TTF', 'TrueTypeUnicode', '', 96);

        // $micrFont = TCPDF_FONTS::addTTFfont(public_path() . "\font\MICR.ttf", 'TrueTypeUnicode', '', 96);
        // $MICRE13B_MatchFont = TCPDF_FONTS::addTTFfont(public_path() . "\font\MICRE13B_Match.ttf", 'TrueTypeUnicode', '', 96);
        // $MICRE13BFont = TCPDF_FONTS::addTTFfont(public_path() . "\font\MICRE13B.ttf", 'TrueTypeUnicode', '', 96);
        
        // $micr_e13b = TCPDF_FONTS::addTTFfont(public_path() . "\font\micr-e13b.ttf", 'TrueTypeUnicode', '', 96);

        $pdf->AddPage();
        $arrChqData = [];
        $arrChqData[0] = $firstchequedata;
        $arrChqData[1] = $secondchequedata;
        $arrChqData[2] = $thirdchequedata;
        
        for ($i = 0; $i < $noofCheque; $i++) { 
            if(!isset($arrChqData[$i]['cps_micr_code']))
            {
                 break;
            }

            // assign position of first secode and third cheque of y-axis
            if($i == 1){
                $yAxis = $ypos['chequeleaf2']; 
            }elseif($i == 2){
                $yAxis = $ypos['chequeleaf3'];
            }else{
                $yAxis = $ypos['chequeleaf1'];
            }
            // end of assign position of first secode and third cheque of y-axis

            $html .= $arrChqData[$i]['chequeno'] . " ";

            $pdf->SetFont($arial, 'B', 7);

            // Query to  get the branch details by branch_code and sub_code
            $branchDetails = $this->printQueryService->getBranchDetailByBranchCode($bankDetails, $arrChqData[$i]['cps_branchmicr_code'], $arrChqData[$i]['branch_sub_code']);
            
            // to print address
            $pdf->SetXY($xpos['address1'], $yAxis+$ypos['address1']);
            $pdf->Cell(120, 0, $branchDetails->branch_name.": ".$branchDetails->branch_address1, '', 0, 'L');

            
            $addressLine2="";
            if(!empty($branchDetails->branch_address2)){
                $addressLine2 .=$branchDetails->branch_address2." ";
            }

            if(!empty($branchDetails->branch_neftifsccode)){
                $addressLine2 .=" IFSC CODE: ".$branchDetails->branch_neftifsccode;
            }
            $pdf->SetXY($xpos['address2'], $yAxis+$ypos['address2']);
            $pdf->Cell(120, 0, $addressLine2, '', 0, 'L');
            // End of address

            
            // to print account number 
            $pdf->SetFont($arial,'B',10);
            $pdf->SetXY($xpos['accountlabel'], $yAxis+$ypos['accountlabel']);
            $pdf->Cell(100, 0, 'A/C No.', '', 0, 'L');
            
            $pdf->SetXY($xpos['accountno'], $yAxis+$ypos['accountno']);
            $pdf->Cell(100, 0, $arrChqData[$i]['cps_account_no'], '', 0, 'L');     // account no
            // end of account number
            
            
            


            // $pdf->SetFont($arial,'B',8);
            // $pdf->SetXY(0, $arrYaxisPos["Name"]- 19);
            // $pdf->Cell(201, 10, $arrChqData[$i][28], '', 0, 'R');



            // Code Logic to print the name of user
            $pdf->SetFont($arial,'B',7); 
            $arrChqData[$i]['cps_tr_code']=(int)trim($arrChqData[$i]['cps_tr_code']);
            $arrChqData[$i]['cps_act_name']=(string)trim($arrChqData[$i]['cps_act_name']);
            $arrChqData[$i]['name1']=(string)trim($arrChqData[$i]['name1']);
            $arrChqData[$i]['name2']=(string)trim($arrChqData[$i]['name2']);
            $arrChqData[$i]['cps_auth_sign1']=(string)trim($arrChqData[$i]['cps_auth_sign1']);
            
            if ($arrChqData[$i]['cps_tr_code'] == 10) // auth_sign1
            {
                $pdf->SetXY($xpos['accountholderbottomname'], $yAxis+$ypos['accountholderbottomname']);
                if ($arrChqData[$i]['name1'] == "SELF" || $arrChqData[$i]['name2'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['cps_act_name'], '', 0, 'R');
                } else if ($arrChqData[$i]['name2'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['cps_act_name'] . ' / ' . $arrChqData[$i]['name1'], '', 0, 'R');
                } else {
                    $pdf->Cell(204, 10, $arrChqData[$i]['cps_act_name'] . ' / ' . $arrChqData[$i]['name1'] . ' / ' . $arrChqData[$i]['name2'], '', 0, 'R');
                }

            }else if($arrChqData[$i]['cps_tr_code'] == 12)
            {
                $pdf->SetXY($xpos['acountholdertopname'], $yAxis+$ypos['acountholdertopname']);
                $pdf->Cell(204,10,"For " . $arrChqData[$i]['cps_act_name'],'',0,'R');
                                
                $pdf->SetXY($xpos['accountholderbottomname'], $yAxis+$ypos['accountholderbottomname']);
                if ($arrChqData[$i]['name2'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'], '', 0, 'R');
                } else if ($arrChqData[$i]['name3'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'] . ' / ' . $arrChqData[$i]['name2'], '', 0, 'R');
                } else {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'] . ' / ' . $arrChqData[$i]['name2'] . ' / ' . $arrChqData[$i]['name3'], '', 0, 'R');
                }

                $pdf->SetFont($arial,'B',10);
                $pdf->SetXY($arrXaxisPos['branchX'] + 77,$yAxis-7);
                $pdf->Cell(120, 0, 'PAY ORDER', '', 0, 'L');

                $pdf->SetFont($arial,'IB',10);
                $pdf->SetXY(20, $yAxis+$arrYaxisPos["AcnoY"]+23);
                $pdf->Cell(120, 0, 'on account of ________________________________', '', 0, 'L');

                $pdf->SetFont($arial,'B',11);
                $pdf->SetXY($arrXaxisPos['ifscX']+5, $yAxis+$arrYaxisPos["AcnoY"]+10);
                $pdf->Cell(120, 0, 'Not Over RS. : ', '', 0, 'L');

            }else if($arrChqData[$i]['cps_auth_sign1'] != "")
            {
                $pdf->SetXY($xpos['acountholdertopname'], $yAxis+$ypos['acountholdertopname']);
                $pdf->Cell(204,10,"For " . $arrChqData[$i]['cps_act_name'],'',0,'R');
                                
                $pdf->SetXY($xpos['accountholderbottomname'], $yAxis+$ypos['accountholderbottomname']);
                
                if ($arrChqData[$i]['name2'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'], '', 0, 'R');
                } else if ($arrChqData[$i]['name3'] == "") {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'] . ' / ' . $arrChqData[$i]['name2'], '', 0, 'R');
                } else {
                    $pdf->Cell(204, 10, $arrChqData[$i]['name1'] . ' / ' . $arrChqData[$i]['name2'] . ' / ' . $arrChqData[$i]['name3'], '', 0, 'R');
                }
            }
            else
            {
                if($arrChqData[$i]['cps_auth_sign1'] == "1")
                {
                    $pdf->SetXY($xpos['accountholderbottomname'],$yAxis+$ypos['accountholderbottomname']);
                    $pdf->Cell(204,10,'AUTHORISED SIGNATORIES','',0,'R');
                    $pdf->SetXY($xpos['acountholdertopname'], $yAxis+$ypos['acountholdertopname']);
                    if($arrChqData[$i]['name1'] == "" && $arrChqData[$i]['name2'] == "")
                    {
                        $pdf->Cell(204,10,"For " . $arrChqData[$i]['cps_act_name'],'',0,'R');
                    }
                    else if($arrChqData[$i]['name2'] == "")
                    {
                        $pdf->Cell(204,10,"For " . $arrChqData[$i]['cps_act_name'].' / '.$arrChqData[$i]['name1'],'',0,'R');		
                    }
                    else
                    {
                        $pdf->Cell(204,10,"For " . $arrChqData[$i]['cps_act_name'].' / '.$arrChqData[$i]['name1'].' / '.$arrChqData[$i]['name2'],'',0,'R');		
                    }
                }
                else
                {	
                    $pdf->SetXY($xpos['accountholderbottomname'],$yAxis+$ypos['accountholderbottomname']);
                    if($arrChqData[$i]['name1'] == "" && $arrChqData[$i]['name2'] == "")
                    {
                        $pdf->Cell(204,10, $arrChqData[$i]['cps_act_name'],'',0,'R');
                    }
                    else if($arrChqData[$i]['name2'] == "")
                    {
                        $pdf->Cell(204,10, $arrChqData[$i]['cps_act_name'].' / '.$arrChqData[$i]['name1'],'',0,'R');		
                    }
                    else
                    {
                        $pdf->Cell(204,10, $arrChqData[$i]['cps_act_name'].' / '.$arrChqData[$i]['name1'].' / '.$arrChqData[$i]['name2'],'',0,'R');		
                    }
                }
            }
            // end of the print client name
            

            // to print rotate date and time
            $pdf->SetFont($arial,'',5);
            $pdf->SetXY($xpos['rotateuniqueno'], $yAxis+$ypos['rotateuniqueno']);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, $arrChqData[$i]['cps_unique_req']);  
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($xpos['rotateusername'], $yAxis+$ypos['rotateusername']);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, $arrChqData[$i]['print_user']);  
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($xpos['rotatedatetime'], $yAxis+$ypos['rotatedatetime']);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(16, 5, date("d-m-Y H:i:s"));  
            $pdf->Rotate(0);
            $pdf->StopTransform();
            // end of rotate date and time


            // to print MICR code
            // Print MICR
            $chqseries = "C" . $arrChqData[$i]['chequeno'] . "C "; 
            $micr1 = $arrChqData[$i]['cps_micr_code'] . "A ";
            $micr2 = $arrChqData[$i]['cps_micr_account_no'] ."C ";

            //$pdf->SetFont($MICRE13BFont,'',12);

            $pdf->SetXY($xpos['micrchequeseries'], $yAxis+$ypos['micrchequeseries']);
            $pdf->Cell(150, 0, $chqseries, '', 0, 'L');

            $pdf->SetXY($xpos['micrcode'], $yAxis+$ypos['micrcode']);
            $pdf->Cell(150, 0, $micr1, '', 0, 'L');

            if($arrChqData[$i]['cps_tr_code'] != 12){
                $pdf->SetXY($xpos['micraccountno'], $yAxis+$ypos['micraccountno']);
                $pdf->Cell(150, 0, $micr2, '', 0, 'L');
            }
            $pdf->SetXY($xpos['micrtrcode'], $yAxis+$ypos['micrtrcode']);
            $pdf->Cell(150, 0, $arrChqData[$i]['cps_tr_code'], '', 0, 'L');
            // End of print MICR code




            // repeat account number border
            /*
            $pdf->SetFont($arial,'',1.5);
            $pdf->SetXY($arrXaxisPos['branchX']-12, $yAxis+$arrYaxisPos["AcnoY"]-3);
            $pdf->Cell(63, 0, $this->printQueryService->microLine($arrChqData[$i]['cps_account_no'],188,1.5), '', 0, 'L', 0, '', 2);

            $pdf->SetXY($arrXaxisPos['branchX']-12, $yAxis+$arrYaxisPos["AcnoY"]+6);
            $pdf->Cell(63, 0, $this->printQueryService->microLine($arrChqData[$i]['cps_account_no'],188,1.5), '', 0, 'L', 0, '', 2);

            $pdf->SetXY($arrXaxisPos['branchX']-11.1, $yAxis+$arrYaxisPos["AcnoY"]+7.1);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(10.5, 0, $this->printQueryService->microLine($arrChqData[$i]['cps_account_no'],25,1.5), '', 0, 'L', 0, '', 2);
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($arrXaxisPos['branchX'] + 4, $yAxis+$arrYaxisPos["AcnoY"]+7.1);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(10.5, 0, $this->printQueryService->microLine($arrChqData[$i]['cps_account_no'],25,1.5), '', 0, 'L', 0, '', 2);
            $pdf->Rotate(0);
            $pdf->StopTransform();

            $pdf->SetXY($arrXaxisPos['branchX']+49.5, $yAxis+$arrYaxisPos["AcnoY"]+7.1);
            $pdf->StartTransform();
            $pdf->Rotate(90);
            $pdf->Cell(10.5, 0, $this->printQueryService->microLine($arrChqData[$i]['cps_account_no'],25,1.5), '', 0, 'L', 0, '', 2);
            $pdf->Rotate(0);
            $pdf->StopTransform();*/
            // end of repeat account number border            

            // Code for barcode and qrcode
            $style1D = array(
                'position' => '',
                'align' => 'C',
                'stretch' => false,
                'fitwidth' => true,
                'cellfitalign' => '',
                'border' => false,
                'hpadding' => 'auto',
                'vpadding' => 'auto',
                'fgcolor' => array(0,0,0),
                'bgcolor' => false, //array(255,255,255),
                'text' => false,
                'font' => 'helvetica',
                'fontsize' => 8,
                'stretchtext' => 4
            );

            $pdf->write2DBarcode($arrChqData[$i]['cps_account_no']."\n".$arrChqData[$i]['chequeno'], 'DATAMATRIX', 6, $yAxis+$arrYaxisPos["AcnoY"]+23, 5, 5, $style1D, 'N');

            $pdf->write2DBarcode($arrChqData[$i]['cps_account_no']."\n".$arrChqData[$i]['chequeno'], 'QRCODE,Q', $arrXaxisPos['accnoX']-10, $yAxis+$arrYaxisPos["AcnoY"]+23, 5, 5, $style1D, 'N');

            $pdf->write1DBarcode(trim($arrChqData[$i]['cps_account_no']), 'C39', $arrXaxisPos['accnoX']+15, $yAxis+$arrYaxisPos["AcnoY"]+23, 50, 8, 0.4, $style1D, 'N');

            $pdf->SetFont($arial, 'B', 7);
            $this->CircularText($pdf, 140, $yAxis+$arrYaxisPos["AcnoY"]+8, 10.7, $arrChqData[$i]['cps_account_no'].$arrChqData[$i]['chequeno'], $kerning=232, $fontwidth=100);

            $this->CustomCircularText($pdf, 88.2, $yAxis, $arrChqData[$i]['cps_account_no'].$arrChqData[$i]['chequeno']);

            $pdf->Image('images/thane logo.jpg', 93.6, $yAxis+$arrYaxisPos["AcnoY"]+4.3, 10, 10, 'JPG', '', '', false, 300, '', false, false, 0, false, false, false);
            $pdf->Image('images/thane logo.jpg', 135, $yAxis+$arrYaxisPos["AcnoY"]+2.9, 10, 10, 'JPG', '', '', false, 300, '', false, false, 0, false, false, false);

            // End off barcode  and qrcode
        }
        




        
        
        $html .=  "cheque<br/>";
        
        // function for toner
        $this->printQueryService->tonerSetting();
        
        return $html;
        
    }

    // generate circle of custom potision
    function CustomCircularText($pdf, $xAxis, $yAxis, $text){
        $x = $xAxis + 0.3; // 99
        $y = $yAxis + 40;
        for($i=0; $i<strlen($text); $i++){
            if($i == 1){
                $x = $xAxis + 3; $y = $yAxis + 40.3;
            }elseif($i == 2){
                $x = $xAxis + 5.5; $y = $yAxis + 41.5;
            }elseif($i == 3){
                $x = $xAxis + 7.6; $y = $yAxis + 43.25;
            }elseif($i == 4){
                $x = $xAxis + 8.8; $y = $yAxis + 45.6;
            }elseif($i == 5){
                $x = $xAxis + 9.4; $y = $yAxis + 48.2;
            }elseif($i == 6){
                $x = $xAxis + 9.2; $y = $yAxis + 50.9;
            }elseif($i == 7){
                $x = $xAxis + 8.3; $y = $yAxis + 53.8;
            }elseif($i == 8){
                $x = $xAxis + 6.5; $y = $yAxis + 55.5;
            }elseif($i == 9){
                $x = $xAxis + 4.4; $y = $yAxis + 57.1;
            }elseif($i == 10){
                $x = $xAxis + 1.8; $y = $yAxis + 57.7;
            }elseif($i == 11){
                $x = $xAxis - 1; $y = $yAxis + 57.6;
            }elseif($i == 12){
                $x = $xAxis - 3.5; $y = $yAxis + 57;
            }elseif($i == 13){
                $x = $xAxis - 6; $y = $yAxis + 55.4;
            }elseif($i == 14){
                $x = $xAxis - 7.9; $y = $yAxis + 53.3;
            }elseif($i == 15){
                $x = $xAxis - 8.7; $y = $yAxis + 50.7;
            }elseif($i == 16){
                $x = $xAxis - 8.8; $y = $yAxis + 47.8;
            }elseif($i == 17){
                $x = $xAxis - 8.4; $y = $yAxis + 45.2;
            }elseif($i == 18){
                $x = $xAxis - 6.8; $y = $yAxis + 42.7;
            }elseif($i == 19){
                $x = $xAxis - 4.7; $y = $yAxis + 41.6;
            }elseif($i == 20){
                $x = $xAxis - 2.2; $y = $yAxis + 40.3;
            }
            $pdf->SetXY($x, $y);
            $pdf->Cell(20,5,$text[$i],0,0,'C');
        }
    }



    // gnerate the circle text of dynamix potision
    function CircularText($pdf, $x, $y, $r, $text, $kerning=120, $fontwidth=100)
    {
        $kerning/=100;
        $fontwidth/=100;        
        if($kerning==0) $pdf->Error('Please use values unequal to zero for kerning');
        if($fontwidth==0) $pdf->Error('Please use values unequal to zero for font width');        
        //get width of every letter
        $t=0;
        for($i=0; $i<strlen($text); $i++){
            $w[$i]=$pdf->GetStringWidth($text[$i]);
            $w[$i]*=$kerning*$fontwidth;
            //total width of string
            $t+=$w[$i];
        }
        //circumference
        $u=($r*2)*M_PI;
        //total width of string in degrees
        $d=($t/$u)*360;
        $pdf->StartTransform();
        // rotate matrix for the first letter to center the text
        // (half of total degrees)
        
        $pdf->Rotate($d/2, $x, $y);
        //run through the string
        for($i=0; $i<strlen($text); $i++){
            // echo  "Width ".(-(($w[$i]/2+$w[$i-1]/2)/$u)*360)."<br>";
            //rotate matrix half of the width of current letter + half of the width of preceding letter
            if($i==0){
                $pdf->Rotate(-(($w[$i]/2)/$u)*360, $x, $y);
            }
            else{
                $pdf->Rotate(-(($w[$i]/2+$w[$i-1]/2)/$u)*360, $x, $y);
            }
            if($fontwidth!=1){
                $pdf->StartTransform();
                $pdf->ScaleX($fontwidth*100, $x, $y);
            }
            $pdf->SetXY($x-$w[$i]/2, $y-$r);
            
            $pdf->Cell($w[$i],8,$text[$i],0,0,'C');
            if($fontwidth!=1){
                 $pdf->StopTransform();
            }
        }
        $pdf->StopTransform();
    }

}