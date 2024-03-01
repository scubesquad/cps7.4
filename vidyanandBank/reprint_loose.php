<?php
require_once('global.php');
require('cellpdf.php');
require('pdf.php');

$print_datetime = date("d-m-Y H:i:s");
$page_name = "print_preview";
authentication_print();
ini_set("max_execution_time",300000);

$selected_requisition = false;
$requisitiononly      = false;
$selective            = false;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('includes.php'); ?>
</head>
<body>
<?php require_once('header.php');	?>
<div id="formdiv">
	<div id="formheading">Print Cheques</div>
	<div id="formfields">

		<?php
		//bhavin start
		if(isset($_GET['selective_pages_no']) && $_GET['selective_pages_no']!=""){
			$selective = true;
			$selective_page_array = explode(",", $_GET['selective_pages_no']);
		}
		if(isset($_GET['requisition']) && $_GET['requisition']!="" && isset($_GET['selective_pages_no']) && $_GET['selective_pages_no']!="")
		{
			$selective = true;
			$selected_requisition = true;
			$selective_page_array = explode(",", $_GET['selective_pages_no']);
		}
		if(isset($_GET['requisitiononly']) && $_GET['requisitiononly']!="")
		{
			$requisitiononly = true;
			$selected_requisition = true;
		}

		if($resultnoofchequeleavestype = $db->get_results("SELECT DISTINCT cps_no_of_books,cps_book_size FROM tb_cps_loose_reprintque where cps_reprint_approved=1"))
		{
			$printersinfo = "";
			
			$printerDetails = $db->get_row("SELECT bank_printers from tb_bankdetails");
			if(!empty($printerDetails->bank_printers)){
				$printersinfo = unserialize($printerDetails->bank_printers);
			}
			else
			{
				echo "Please enter printer details in branch master";
				exit;
			}
			
			$firstchequerow  = array();
			$secondchequerow = array();
			$thirdchequerow  = array();
			$requestsliprow  = array();

			//bhavin
			$row = $db->get_row("SELECT sum(cps_book_size * cps_no_of_books) as total_leaves, sum(cps_no_of_books) as noofbooks from tb_cps_loose_reprintque where cps_reprint_approved=1");						
			$total_leaves = $row->total_leaves;	
			$total_slips = $row->noofbooks;	
			$no_pages = ceil($total_leaves/3);	
			
			// =============================================== for chk print ==============================================
			
			//bhavin
			// Get Re-Print user who is priting now
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;

			$result = $db->get_results("SELECT * FROM tb_cps_loose_reprintque where cps_reprint_approved=1");
			
			$jump=0;
// ============================================================ FOR CHK SLIP ========================================================
			if(count($result) > 0){
				foreach($result as $rowresultslips)
				{
					$pay_branch_id = $rowresultslips->pay_branch_id;
					$chq_no_from_r = $rowresultslips->cps_chq_no_from;
					$chq_no_to_r   = $rowresultslips->cps_chq_no_to;
						
					for($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++)
					{	
						if($Slips > 0)
						{
							$chq_no_to_r   = (($chq_no_from_r + $rowresultslips->cps_book_size) - 1);	
						}
						$requestsliprow[] = array($pay_branch_id,$chq_no_from_r,$chq_no_to_r);

						$chq_no_from_r = ($chq_no_to_r + 1);
					}
				}
				for($j = 0;$j<count($requestsliprow);$j++)
				{		
					if($requestsliprow[$j] != "")
						$requestslipdata = implode("~",$requestsliprow[$j]);
					else
						$requestslipdata = "";
					
					if(!$selective || $selected_requisition)
						printRequestSlip(2,$requestslipdata,1,$printersinfo);
									
				}
				if($requisitiononly)
				{
					echo "<br />Only Requisition Slip printed.";
				}

				foreach($result as $rowresults)
				{
					$pay_branch_id = $rowresults->pay_branch_id;
					$chq_no_from   = $rowresults->cps_chq_no_from;
					$chq_no_to     = $rowresults->cps_chq_no_to;																																																							
					$chkserisediff = (($chq_no_to - $chq_no_from) + 1);

					for($i = 0; $i < $chkserisediff; $i++)
					{									 
						if($i!=0)
						{
							$chq_no_from = $chq_no_from + 1;
						}

						$chq_no_from = str_pad($chq_no_from, 6, "0", STR_PAD_LEFT);	
						
						if($jump < $no_pages)
						{											
							$firstchequerow[] = array($pay_branch_id,$chq_no_from);																
						}
						elseif(($jump < ($no_pages * 2)) && ($jump >= $no_pages))
						{
							$secondchequerow[] = array($pay_branch_id,$chq_no_from);																
						}
						elseif(($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2))
						{	
							$thirdchequerow[] = array($pay_branch_id,$chq_no_from);																
						}		
						$jump++;	
					}
				}
				
				for($j=0, $p=1; $j<count($firstchequerow); $j++, $p++)
				{
					if($firstchequerow[$j] != "")
					{
						$firstchequedata = implode("~",$firstchequerow[$j]);
					}
					else
					{
						$firstchequedata = "";
					}

					if($secondchequerow[$j] != "")
					{
						$secondchequedata = implode("~",$secondchequerow[$j]);
					}
					else
					{
						$secondchequedata = "";
					}
					
					if($thirdchequerow[$j] != "")
					{
						$thirdchequedata = implode("~",$thirdchequerow[$j]);
					}
					else
					{
						$thirdchequedata = "";
					}
					if(!$requisitiononly)
					{
						//bhavin start
						if($selective)
						{						
							if(in_array($p, $selective_page_array))
								printCheques(3,$firstchequedata,$secondchequedata,$thirdchequedata,3,$printersinfo);
						}
						else
							printCheques(3,$firstchequedata,$secondchequedata,$thirdchequedata,3,$printersinfo);
					}
				}
											
				$resultInsert = $db->get_results("SELECT * FROM tb_cps_loose_reprintque where cps_reprint_approved=1");
				foreach($resultInsert as $rowresultsInsert)
				{	
					insertIntoPrintCollection($rowresultsInsert);
				}
			}else{
				echo "Error in mapping branch details.";
			}					
		}
		else
		{
			echo "No Records Left For Printing";
		}

		function insertIntoPrintCollection($results)
		{
			global $db;
			
			//Insert data into print collection (Successfully printed records)
			
			$sqlinsertquery = "INSERT INTO tb_loose_reprint_req_collection 
				(pay_branch_id,cps_chq_no_from,cps_chq_no_to,cps_no_of_books,cps_book_size,cps_date,cps_process_user_id)
				VALUES
				('".$results->pay_branch_id ."','".$results->cps_chq_no_from ."','".$results->cps_chq_no_to ."','".$results->cps_no_of_books ."','".$results->cps_book_size ."','".$results->cps_date ."','". $_SESSION["admin_id"] ."')";
			$db->query($sqlinsertquery);		
			
			$deletefromprintque = "DELETE FROM tb_cps_loose_reprintque WHERE id='".$results->id ."'";
			$db->query($deletefromprintque);	 
		}
					
		function printRequestSlip($type,$chequedata,$noOfRequestSlip,$printersinfo)
		{
			global $db, $print_datetime, $print_str;
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;			

			$arrRequestSlip = explode("~",$chequedata);
			
			$print_str .=  "<br/> From :- ".$arrRequestSlip[1]." "." To :- ".str_pad($arrRequestSlip[2], 6, "0", STR_PAD_LEFT)."<br/>";
			
			$branchDetailsF = $db->get_row("SELECT branch_name FROM tb_branchdetails where branch_id = '".$arrRequestSlip[0]."' ");
			
			$pdf = new PDF();
			$pdf->AddPage();

			$ny = 91;	

			$pdf->SetFont('Arial','B',8);
			$pdf->Rotate(0);
			$pdf->SetXY(92, $ny);
			$pdf->Rotate(90);
			$pdf->Cell(100, 5, $branchDetailsF->branch_name, '', 0, 'L');

			$pdf->Rotate(0);
			$pdf->SetXY(99, $ny);
			$pdf->Rotate(90);
			$pdf->Cell(100, 5, str_pad($arrRequestSlip[1], 6, "0", STR_PAD_LEFT)." "." To "." ".str_pad($arrRequestSlip[2], 6, "0", STR_PAD_LEFT), '', 0, 'L');
			
			$pdf->Rotate(0);
			$pdf->SetXY(106, $ny);
			$pdf->Rotate(90);
			$pdf->Cell(100, 5, "PAY ORDER", '', 0, 'L');
			
			$pdf->Rotate(0);
			$pdf->SetXY(100, 215.5);
			$pdf->Rotate(180);
			$pdf->SetFont('Arial','',5);
			$pdf->Cell(100, 5, $print_datetime, '', 0, 'L');

			$pdf->Rotate(0);
			$pdf->SetXY(120, 215.5);
			$pdf->Rotate(180);
			$pdf->SetFont('Arial','',5);
			$pdf->Cell(100, 5, $print_user, '', 0, 'L');
			
			$pdf->Output("loose_Slip.pdf",'F'); 
			
			//echo "gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\loose_Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1";
			//exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\loose_Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
			//sleep(3);
		}
		function printCheques($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
		{
			global $db, $print_datetime, $print_str;
			
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;

			$tresult = $db->get_row("SELECT transactioncode from tb_cps_transactioncodes WHERE transactioncodedescription = 'PAY ORDER' ");
			$trcode = $tresult->transactioncode;

			$bankdetails = $db->get_row("SELECT bank_code from tb_bankdetails");

			$arrFirstChequeData  = explode("~",$firstchequedata);
			$arrSecondChequeData = explode("~",$secondchequedata);
			$arrThirdChequeData  = explode("~",$thirdchequedata);

			$branchX = 30;		// Branch address X position
			$ifscX = 30;		// IFSC Code X position
			$looseX = 180;	// PAY ORDER X position
			$x = 11;

			$chqseriesX = 59.5; //60.7
			$micr1X = 88.2;		// 86.7
			$micr2X = 123;	// 121.5
			$trncodeX = 148.3;	// 146.8

			// Positions
			$arrPos    = array(); 
			$arrPos[0] = array("BankAddrY" => 10, "ifscY" => 12.3, "PayOrderY" => 28, "VUniqReq" => 76, "MICRY" => 82.8);
			$arrPos[1] = array("BankAddrY" => 102.5, "ifscY" => 104.8, "PayOrderY" => 120.4, "VUniqReq" => 169, "MICRY" => 176.2);
			$arrPos[2] = array("BankAddrY" => 196.5, "ifscY" => 198.8, "PayOrderY" => 213.8, "VUniqReq" => 262, "MICRY" => 267);

			// print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			// echo "<br/>";
			if(strlen($print_str) == 0)
				$print_str = "<br /><br />";
			$print_str .= "{$arrFirstChequeData[1]} {$arrSecondChequeData[1]} {$arrThirdChequeData[1]} cheque <br/>";

			$pdf = new PDF();
			$pdf->AddPage();

			$arrChqData    = array();
			$arrChqData[0] = $arrFirstChequeData;
			$arrChqData[1] = $arrSecondChequeData;
			$arrChqData[2] = $arrThirdChequeData;
			
			$pdf->AddFont('E-13B_0','','E-13B_0.php');

			for ($i = 0; $i < $noofCheque; $i++) 
			{ 
				if($arrChqData[$i][1] == "")
					break; 

				$branchDetails = $db->get_row("SELECT b.branch_code,b.branch_City_Code,b.branch_name,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$arrChqData[$i][0]."'");

				$micr_code = $branchDetails->branch_City_Code.$bankdetails->bank_code.$branchDetails->branch_code;

				$pdf->SetFont('Arial', '', 6);
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
				//$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.",");
				//$y = $arrPos[$i]["BankAddrY"] + 2;
				//$pdf->Text($branchX, $y, $branchDetails->branch_address2.", ".$branchDetails->branch_address3.", ".$branchDetails->city_place."-".$branchDetails->branch_pin."");
				$pdf->Text($ifscX, $arrPos[$i]["ifscY"],'IFSC : '.$branchDetails->branch_neftifsccode);

				$pdf->SetFont('Arial','B',10);
				$pdf->Text($looseX,$arrPos[$i]["PayOrderY"],'PAY ORDER');

				//--------> print vertically start
				$pdf->SetFont('Arial', '', 6);	
				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 20);
				$pdf->Rotate(90);
				$pdf->Cell(16, 5, $print_user);  //  operator id
				$pdf->Rotate(0);

				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 44);
				$pdf->Rotate(90);
				$pdf->Cell(16, 5, $print_datetime);  //  date time
				$pdf->Rotate(0);
				// -------> print vertically end

				// Print MICR
				$chqseries = "C" . $arrChqData[$i][1] . "C "; 
				$micr1 = $micr_code . "A ";
				// $micr1 = "000836000" . "A ";
				$micr2 = "000001";
				// $micr2 = " ";

				$pdf->SetFont('E-13B_0','',12);

				$y = $arrPos[$i]["MICRY"];
				$pdf->Text($chqseriesX, $y, $chqseries);
				$pdf->Text($micr1X, $y, $micr1);
				$pdf->Text($micr2X, $y, $micr2);
				$pdf->Text($trncodeX, $y, $trcode);
			}
			$pdf->Output("loose_cheque.pdf",'F');

			//exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\loose_cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
		}			
		$db->closeDb();
	?>
	<div><?php echo $print_str; ?></div>
	</div>
</div>
</body>
</html>
