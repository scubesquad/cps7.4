<?php
require_once 'global.php';
// require 'cellpdf.php';
// require 'pdf.php';
$print_datetime = date("d-m-Y H:i:s");
//// require_once(ROOT_CLASSES.'tcpdf/config/lang/eng.php');
require_once(ROOT_CLASSES.'tcpdf/examples/lang/eng.php');
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');

$page_name = "print_preview";
authentication_print();
ini_set("max_execution_time", 300000);

$trn_string_array = array(10 => 'Saving', 11 => 'Current', 12 => 'Pay Order', 13 => 'Cash Credit', 14 => 'Dividend', 15 => '', 16 => 'DD', 18 => 'MT', 29 => 'Current', 31 => 'Saving');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'includes.php';?>
</head>
<body>
<?php require_once 'header.php';?>
<div id="formdiv">
	<div id="formheading">Print Cheques</div>
	    <div id="formfields">

        <?php
          if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'print') && !empty($_REQUEST['pid']) && isset($_REQUEST['pid']) ) {
			
			$data=$db->get_results("select * from tb_payorder where id IN (".$_REQUEST['pid'].")");
			$result = $db->get_results($query);
            $count=count($result);
			$branchDetails = $db->get_row("SELECT branch.branch_name,branch.branch_address1,branch.branch_address2,suburb_name,city_place,suburb_postal_code,branch.branch_neftifsccode,branch.branch_printers,branch.branch_city_code,branch.branch_code FROM tb_branchdetails branch LEFT JOIN tb_suburbmaster suburb ON branch.branch_suburb_id = suburb.suburb_id LEFT JOIN tb_citymaster city ON branch.branch_city_id = city.city_id");
			// print_r($branchDetails );
			$printersinfo = "";
			 $printerDetails = $db->get_row("SELECT bank_printers,bank_code,bank_name from tb_bankdetails");
		    //  print($printerDetails->bank_code);
			if (!empty($printerDetails->bank_printers)) {
				$printersinfo = unserialize($printerDetails->bank_printers);
			} else {
				echo "Please enter printer details in branch master";
				exit;
			}

	
			$firstchequerow = array();
			$secondchequerow = array();
			$thirdchequerow = array();
			// $i=0;
			$jump = 0;
			$no_pages = ceil($count / 3);

		    $bankmicr=$branchDetails->branch_city_code .$printerDetails->bank_code .$branchDetails->branch_code;
			foreach ($result  as $cheque) {
				$branchName = $cheque->branch_name;
				$checkseries = $db->get_row("SELECT series_lastno FROM tb_cps_payorderseries WHERE series_branch_id = $branchName");
              

                if ($jump < $no_pages) {
					
					$firstchequerow[]=array($cheque->pay, '**' . str_pad($cheque->amount,  '0', STR_PAD_LEFT) . '**',$cheque->date,$cheque->amount_in_word,$cheque->issuing_branch,$cheque->payble_at,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$branchDetails->branch_code, str_pad($checkseries->series_lastno + 1, 6, '0', STR_PAD_LEFT),$bankmicr,'000001',12,$printerDetails->bank_name);
				}
				elseif (($jump < ($no_pages * 2)) && ($jump >= $no_pages)) {
					$secondchequerow[]=array($cheque->pay,'**'.$cheque->amount.'**',$cheque->date,$cheque->amount_in_word,$cheque->issuing_branch,$cheque->payble_at,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$branchDetails->branch_code, str_pad($checkseries->series_lastno + 1,  '0', STR_PAD_LEFT),$bankmicr,'000001',12,$printerDetails->bank_name);

				}
				 elseif (($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2)) {
					$thirdchequerow	[]=array($cheque->pay,'**'.$cheque->amount.'**',$cheque->date,$cheque->amount_in_word,$cheque->issuing_branch,$cheque->payble_at,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$branchDetails->branch_code, str_pad($checkseries->series_lastno + 1,  '0', STR_PAD_LEFT),$bankmicr,'000001',12,$printerDetails->bank_name);

				}
				

				
			

				$result= $db->query("UPDATE tb_cps_payorderseries SET series_lastno = series_lastno + 1 WHERE series_branch_id = $branchName");
				$jump++;
			}
			// echo"<pre>";
			// print_r($firstchequerow);
            
			


			for ($j = 0; $j < count($firstchequerow); $j++) {
				if ($firstchequerow[$j] != "") {
					$firstchequedata = implode("~", $firstchequerow[$j]);
				}

				if ($secondchequerow[$j] != "") {
					$secondchequedata = implode("~", $secondchequerow[$j]);
				} else {
					$secondchequedata = "";
				}

				if ($thirdchequerow[$j] != "") {
					$thirdchequedata = implode("~", $thirdchequerow[$j]);
				} else {
					$thirdchequedata = "";
				}

				printCheques(3, $firstchequedata, $secondchequedata, $thirdchequedata, 1, $printersinfo);
			}

            $deletedata = $db->query("update tb_payorder set status='print' WHERE id IN (" . $_REQUEST['pid'] . ")");

			$result = $db->get_results($deletedata);
		
		
			
		}
        function printCheques($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
		{
			global $db, $print_datetime;
			
			$arrFirstChequeData = explode("~",$firstchequedata);
			$arrSecondChequeData = explode("~",$secondchequedata);
			$arrThirdChequeData = explode("~",$thirdchequedata);
          


			// Positions of some variables
			$branchX = 19;		// Branch address X position
			$ifscX = 19;//122		// IFSC Code X position
			$accnoX = 21;		// A/C no X position
			$acnoPrefixX = 166;		// Barcode X position
			$bearerX = 187;		// BEARER X position
            $barcodeX = 19;	
			$x = 2;			// Vertical printing X position

			$chqseriesX = 55.5; //60.7
			$micr1X = 84;		// 86.7
			$micr2X = 118.8;	// 121.5
			$trncodeX = 144.1;

		
			$arrPos = array(); 
			
			$arrPos[0] = array("BankAddrY" => 15, "AcnoY" => 51.5, "AcnoPrefix" => 33.8, "IfscY" => 17.3, "Name" => 40, "VUniqReq" => 70, "MICRY" => 85.4, "bearer" => 26, "barcodeY" => 63, "date" => 13);
			$arrPos[1] = array("BankAddrY" => 102.5, "AcnoY" => 140, "AcnoPrefix" => 122.4, "IfscY" => 109.8, "Name" => 139, "VUniqReq" => 170, "MICRY" => 176.2, "bearer" => 114, "barcodeY" => 156, "date" => 101.5);
			$arrPos[2] = array("BankAddrY" => 196.5, "AcnoY" => 233, "AcnoPrefix" => 215.8, "IfscY" => 203.8, "Name" => 233, "VUniqReq" => 264, "MICRY" => 267, "bearer" => 208, "barcodeY" => 249, "date" => 195.5);
			

			// print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			// echo "cheque<br/>";

			$pdf = new TCPDF();

			$pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

			$pdf->AddPage();

			$pdf->SetFont('Arial', '', 8);
			$pdf->SetXY(75, 85);
			$pdf->StartTransform();
			$pdf->Rotate(-90);

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

			

			for ($i = 0; $i < $noofCheque; $i++) { 
				if($arrChqData[$i][5] == "")
					break;
					/*print_r($arrChqData[$i]);
					exit;*/
				$pdf->SetFont($arial, '', 7.5);
				$branchDetails = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrChqData[$i][13]."' ");	
				

	
				if(!empty($branchDetails->branch_address1) && !empty($branchDetails->branch_address2) && !empty($branchDetails->branch_address3))
				{
					$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.", ".$branchDetails->branch_address2.", ".$branchDetails->branch_address3.", ".$branchDetails->city_place." - ".$branchDetails->branch_pin.".");
				}
				else
				{
					if(!empty($branchDetails->branch_address2))
					{
						$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.", ".$branchDetails->branch_address2.", ".$branchDetails->city_place." - ".$branchDetails->branch_pin.".");
					}
					else
					{
						$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.", ".$branchDetails->city_place." - ".$branchDetails->branch_pin.".");
					}
				}
		
				$pdf->SetFont($arial,'',7.5);
				// $pdf->Text($ifscX, $arrPos[$i]["IfscY"],'IFSC CODE :'. $arrChqData[$i][11]);
				$pdf->Text($ifscX, $arrPos[$i]["IfscY"]+1,'IFSC CODE : '.$branchDetails->branch_neftifsccode);

				if($arrChqData[$i][17]==12){
					$acctPrefix="PAY ORDER"; 
				}else{
					$acctPrefix="Not Over RS.: ";
				}
                $originalDate = $arrChqData[$i][2];
                $parsedDate = DateTime::createFromFormat('Y-m-d', $originalDate);
                
                if ($parsedDate) {
                    $formattedDate = implode('      ', str_split(sprintf('%02d%02d%04d', $parsedDate->format('d'), $parsedDate->format('m'), $parsedDate->format('Y'))));
                
                    $pdf->Text($acnoPrefixX-15, $arrPos[$i]["date"], $formattedDate);
                } 
                
				
				$pdf->SetFont($arialb,'B',10);
				$pdf->Text($accnoX+10, $arrPos[$i]["AcnoPrefix"], mb_convert_case($arrChqData[$i][3], MB_CASE_TITLE)); // amount in word
                $pdf->Text($accnoX, $arrPos[$i]["bearer"], strtoupper($arrChqData[$i][0])); //pay


                $pdf->Text($accnoX+22.5, $arrPos[$i]["AcnoY"], $arrChqData[$i][4]);//issuing branch
                $pdf->Text($accnoX+79, $arrPos[$i]["AcnoY"], $arrChqData[$i][5]);//payablr at
				
				$pdf->SetFont($arialb,'B',10);
				$pdf->Text($acnoPrefixX, $arrPos[$i]["AcnoPrefix"], $acctPrefix); // account prefix

                $pdf->Text($acnoPrefixX-4, $arrPos[$i]["AcnoPrefix"]+7, $arrChqData[$i][1]); // amount

				

	            

				$pdf->SetFont($arialb,'B',8.5);
               
				$pdf->Text($accnoX+70, $arrPos[$i]["AcnoY"]+21, $arrChqData[$i][1]);
                
          

				//--------> print vertically start
				 
				$pdf->SetFont($arial,'',5);
				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"]);
				$pdf->StartTransform();
				$pdf->Rotate(90);
				$pdf->Cell(17, 5,"REP " . $arrChqData[$i][24]);  // unique request no
				$pdf->Rotate(0);
				$pdf->StopTransform();

				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 20);
				$pdf->StartTransform();
				$pdf->Rotate(90);
				$pdf->Cell(17, 5, $arrChqData[$i][27]);  //  operator id
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
				$chqseries = "C" . $arrChqData[$i][14] . "C "; 
				$micr1 = $arrChqData[$i][15] . "A ";
				$micr2 = $arrChqData[$i][16] ."C ";

				$pdf->SetFont('micre13b','',12,true);

				$y = $arrPos[$i]["MICRY"];
				$pdf->Text($chqseriesX, $y, $chqseries);
				$pdf->Text($micr1X, $y, $micr1);
				$pdf->Text($micr2X, $y, $micr2);
				$pdf->Text($trncodeX, $y, $arrChqData[$i][17]);
			}
			$pdf->StopTransform();
			$pdf->Output(dirname(__FILE__)."\Payorder_cheque.pdf", 'F');
			$imagePath = dirname(__FILE__)."\Payorder_cheque.pdf";

			// $pdf->Output("Cheque.pdf",'F');
			// $imagePath = dirname(__FILE__)."\Cheque.pdf";
			
			exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Payorder_cheque.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
		}		


        ?>
        </div>   
    </div> 
</div> 
</body>
<head>