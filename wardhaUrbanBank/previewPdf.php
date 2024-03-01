<?php
require_once 'global.php';
// require 'cellpdf.php';
// require('pdf.php');
$print_datetime = date("d-m-Y H:i:s");
require_once(ROOT_CLASSES.'tcpdf/examples/lang/eng.php');
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');

$selected_requisition = false;
$requisitiononly = false;
$page_name = "print_preview";
authentication_print();
ini_set("max_execution_time", 300000);

		
	global $db, $print_datetime;
	
	// $firstchequedata = [];
	// $secondchequedata = [];
	// $thirdchequedata = [];
	$arrFirstChequeData = array();
	$arrSecondChequeData = array();
	$arrThirdChequeData = array();
	
	// // Positions of some variables
	// $branchX = 51;		// Branch address X position
	// $ifscX = 51;//122		// IFSC Code X position
	// $accnoX = 27;		// A/C no X position
	// $bearerX = 187;		// BEARER X position

	// $x = 11.5;			// Vertical printing X position

	// $chqseriesX = 59.5; //60.7
	// $micr1X = 88;		// 86.7
	// $micr2X = 122.8;	// 121.5
	// $trncodeX = 148.1;	// 146.8


	// Positions of some variables
	$branchX = 30;		// Branch address X position
	$ifscX = 30;//122		// IFSC Code X position
	$accnoX = 34;		// A/C no X position
	$acnoPrefixX = 166;		// Barcode X position
	$bearerX = 193;		// BEARER X position

	$x = 11;			// Vertical printing X position

	$chqseriesX = 59.5; //60.7
	$micr1X = 88;		// 86.7
	$micr2X = 122.8;	// 121.5
	$trncodeX = 148.1;

	// Positions
	$arrPos = array(); 
	// $arrPos[0] = array("BankAddrY" => 11, "AcnoY" => 49.5, "Name" => 42, "VUniqReq" => 76, "MICRY" => 86.7, "bearer" => 23);
	// $arrPos[1] = array("BankAddrY" => 105.5, "AcnoY" => 144, "Name" => 135, "VUniqReq" => 169, "MICRY" => 180.5, "bearer" => 116.5);
	// $arrPos[2] = array("BankAddrY" => 199, "AcnoY" => 237.5, "Name" => 229, "VUniqReq" => 262, "MICRY" => 265.5, "bearer" => 210);
	
	$arrPos[0] = ["BankAddrY" => 10, "AcnoY" => 47, "AcnoPrefix" => 28, "IfscY" => 15.3, "Name" => 47, "VUniqReq" => 75, "MICRY" => 82.8, "bearer" => 21];
	$arrPos[1] = ["BankAddrY" => 102.5, "AcnoY" => 140, "AcnoPrefix" => 120.4, "IfscY" => 107.8 , "Name" => 139, "VUniqReq" => 170, "MICRY" => 176.2, "bearer" => 114];
	$arrPos[2] = ["BankAddrY" => 196.5, "AcnoY" => 233, "AcnoPrefix" => 213.8, "IfscY" => 201.8 , "Name" => 233, "VUniqReq" => 264, "MICRY" => 267, "bearer" => 206.5];

	//print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
	// echo "cheque<br/>";

	$pdf = new TCPDF();

	$pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

	$pdf->AddPage();

	$arrChqData = array();
	$arrChqData[0] = $arrFirstChequeData;
	$arrChqData[1] = $arrSecondChequeData;
	$arrChqData[2] = $arrThirdChequeData;
	
	$pdf->AddFont('E-13B_0','','E-13B_0.php');
	$arial = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial.ttf", 'TrueTypeUnicode', '', 96);
    $arialb = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial_B.ttf", 'TrueTypeUnicode', '', 96);
	$micrFont = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\MICR.ttf", 'TrueTypeUnicode', '', 96);
	$MICRE13B_MatchFont = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\MICRE13B_Match.ttf", 'TrueTypeUnicode', '', 96);
	$MICRE13BFont = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\MICRE13B.ttf", 'TrueTypeUnicode', '', 96);
	
	$micr_e13b = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\micr-e13b.ttf", 'TrueTypeUnicode', '', 96);

	

	//$pdf->SetFont('E-13B_0','',12);
	$noofCheque = 3;
	for ($i = 0; $i < $noofCheque; $i++) { 
		if(1 == 0)
			break;
			/*print_r($arrChqData[$i]);
			exit;*/
		$pdf->SetFont($arial, '', 8);
		$branchDetails = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '001' ");	
		// echo "SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrChqData[$i][23]."' AND branch_sub_code='".$arrChqData[$i][26]."'";
		// echo "<br>";
		

		$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.",");
		$y = $arrPos[$i]["BankAddrY"] + 2.8;

		$addressLine2="";
		if(!empty($branchDetails->branch_address2)){
			$addressLine2 .=$branchDetails->branch_address2.", ";
		}

		if(!empty($branchDetails->branch_address3)){
			$addressLine2 .=$branchDetails->branch_address3.", ";
		}
		if(!empty($branchDetails->city_place)){
			$addressLine2 .=$branchDetails->city_place;
		}
		if(!empty($branchDetails->branch_pin)){
			
			$addressLine2 .="-".$branchDetails->branch_pin;

		}
		$pdf->Text($branchX, $y, $addressLine2);

		$pdf->SetFont($arial,'',8);
		$pdf->Text($ifscX, $arrPos[$i]["IfscY"],'IFSC CODE : TEST0001145');

		
		// if($arrChqData[$i][6]==12||$arrChqData[$i][6]=="12"){
		// 	$pdf->SetFont($arialb,'B',8);
		// 	$pdf->Text(10, $y-7,'__________');
		// 	$pdf->Text(10, $y-4,'A/C. PAYEE');
		// 	$pdf->Text(10, $y-3.7,'__________');
		// 	$pdf->SetFont($arialb,'B',10);
		// 	$pdf->Text($branchX+77, $y-5,'PAY ORDER');

		// 	$pdf->SetFont($arialb,'B',8);
		// 	$pdf->Text($bearerX,$arrPos[$i]['bearer'],'Order');
		// }else{

		// 	$pdf->SetFont($arialb,'B',8);
		// 	$pdf->Text($bearerX,$arrPos[$i]['bearer'],'Bearer');
		// 	// $pdf->Text($bearerX,$arrPos[$i]['bearer'],'OR BEARER');
		// }

		if($arrChqData[$i][6]==10){
			$acctPrefix="SAVINGS ACCOUNT"; 
		}else if($arrChqData[$i][6]==11){
			$acctPrefix="CURRENT ACCOUNT"; 
		}else{
			$acctPrefix="Not Over RS.: ";
		}
		
		
		
		$pdf->SetFont($arialb,'B',10.5);
		$pdf->Text($accnoX, $arrPos[$i]["AcnoY"], '1234567890'); // account no
		
		$acctPrefix="SAVINGS ACCOUNT"; 
		$pdf->SetFont($arialb,'B',9.5);
		$pdf->Text($acnoPrefixX, $arrPos[$i]["AcnoPrefix"], $acctPrefix); // account prefix

		

        

		$pdf->SetFont($arialb,'B',9.5);
		/*print_r($arrChqData[$i]);
		exit;*/
		// $arrChqData[$i][6]=(int)trim($arrChqData[$i][6]);
		// $arrChqData[$i][7]=(string)trim($arrChqData[$i][7]);
		// $arrChqData[$i][11]=(string)trim($arrChqData[$i][11]);
		// $arrChqData[$i][12]=(string)trim($arrChqData[$i][12]);
		// $arrChqData[$i][21]=(string)trim($arrChqData[$i][21]);

		//bhavin end 1
		//--------> print vertically start
		 
		$pdf->SetFont($arial,'',5);
		$pdf->SetXY($x, $arrPos[$i]["VUniqReq"]);
		$pdf->StartTransform();
		$pdf->Rotate(90);
		$pdf->Cell(17, 5,"REP " . '000000');  // unique request no
		$pdf->Rotate(0);
		$pdf->StopTransform();

		$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 20);
		$pdf->StartTransform();
		$pdf->Rotate(90);
		$pdf->Cell(17, 5, 'admin');  //  operator id
		$pdf->Rotate(0);
		$pdf->StopTransform();

		$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 46);
		$pdf->StartTransform();
		$pdf->Rotate(90);
		$pdf->Cell(17, 5, $print_datetime);  //  date time
		$pdf->Rotate(0);
		$pdf->StopTransform();
		// -------> print vertically end

		// Print MICR
		$chqseries = "C" . '000001' . "C "; 
		$micr1 = '442804001' . "A ";
		$micr2 = '000000' ."C ";

		$pdf->SetFont('micre13b','',12,true);

		$y = $arrPos[$i]["MICRY"];
		$pdf->Text($chqseriesX, $y, $chqseries);
		$pdf->Text($micr1X, $y, $micr1);
		$pdf->Text($micr2X, $y, $micr2);
		$pdf->Text($trncodeX, $y, '10');
	}

	// $pdf->Output(dirname(__FILE__)."\Cheque.pdf", 'F');

	$pdf->Output("Cheque.pdf", 'I');
	// $imagePath = dirname(__FILE__)."\Cheque.pdf";


		

?>