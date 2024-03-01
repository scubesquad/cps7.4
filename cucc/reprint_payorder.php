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

		if($resultnoofchequeleavestype = $db->get_results("SELECT DISTINCT cps_no_of_books,cps_book_size FROM tb_cps_payorder_reprintque where cps_reprint_approved=1"))
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
			$row = $db->get_row("SELECT sum(cps_book_size * cps_no_of_books) as total_leaves, sum(cps_no_of_books) as noofbooks from tb_cps_payorder_reprintque where cps_reprint_approved=1");						
			$total_leaves = $row->total_leaves;	
			$total_slips = $row->noofbooks;	
			$no_pages = ceil($total_leaves/3);	
			
			// =============================================== for chk print ==============================================
			
			//bhavin
			// Get Re-Print user who is priting now
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;

			$result = $db->get_results("SELECT * FROM tb_cps_payorder_reprintque where cps_reprint_approved=1");
			
			$jump=0;
// ============================================================ FOR CHK SLIP ========================================================
			if(count($result) > 0){
				$slipCounter = 1;
				foreach($result as $rowresultslips)
				{
					$pay_branch_id = $rowresultslips->pay_branch_id;
					$chkFrom = $rowresultslips->cps_chq_no_from;
					$chkTo   = $rowresultslips->cps_chq_no_to;
						
					for($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++)
					{						
						if($rowresultslips->cps_no_of_books > 1)
						{
							$chkTo = $chkFrom + $rowresultslips->cps_book_size;							 
						}
												
						if($slipCounter % 3 == 1) 
						{	
							$firstrequestsliprow[] = array($rowresultslips->pay_branch_id,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$print_user);
						}
						elseif($slipCounter % 3 == 2) 
						{						
							$secondrequestsliprow[] = array($rowresultslips->pay_branch_id,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$print_user);
						}
						elseif($slipCounter % 3 == 0) 
						{						
							$thirdrequestsliprow[] = array($rowresultslips->pay_branch_id,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$print_user);
						}
						
						$chkFrom = $chkTo;
						$slipCounter++;
					}
				}
				$noofbooks = 1;
				for($j = 0;$j<count($firstrequestsliprow);$j++)
				{		
					if($firstrequestsliprow[$j] != "")
						$firstrequestslipdata = implode("~",$firstrequestsliprow[$j]);
					else
						$firstrequestslipdata = "";
						
					if($secondrequestsliprow[$j] != "")
						$secondrequestslipdata = implode("~",$secondrequestsliprow[$j]);
					else	
						$secondrequestslipdata = "";
					
					if($thirdrequestsliprow[$j] != "")
						$thirdrequestslipdata = implode("~",$thirdrequestsliprow[$j]);
					else
						$thirdrequestslipdata = "";
	
					//bhavin
					if(!$selective || $selected_requisition)
					printRequestSlip(2,$firstrequestslipdata,$secondrequestslipdata,$thirdrequestslipdata,3,$noofbooks,$printersinfo);												
					//$noofbooks++;
				}
				if($requisitiononly)
				{
					echo "<br />Only Requisition Slip printed.";
				}
				$firstrequestsliprow = array();
				$secondrequestsliprow = array();
				$thirdrequestsliprow = array();


				// cheque query
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
											
				$resultInsert = $db->get_results("SELECT * FROM tb_cps_payorder_reprintque where cps_reprint_approved=1");
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
			
			$sqlinsertquery = "INSERT INTO tb_payorder_reprint_req_collection 
				(pay_branch_id,cps_chq_no_from,cps_chq_no_to,cps_no_of_books,cps_book_size,cps_date,cps_process_user_id)
				VALUES
				('".$results->pay_branch_id ."','".$results->cps_chq_no_from ."','".$results->cps_chq_no_to ."','".$results->cps_no_of_books ."','".$results->cps_book_size ."','".$results->cps_date ."','". $_SESSION["admin_id"] ."')";
			$db->query($sqlinsertquery);		
			
			$deletefromprintque = "DELETE FROM tb_cps_payorder_reprintque WHERE id='".$results->id ."'";
			$db->query($deletefromprintque);	 
		}
					
		function printRequestSlip($type,$firstrequestslipdata,$secondrequestslipdata,$thirdrequestslipdata,$noOfRequestSlip,$noofbooks,$printersinfo)
		{
			global $db, $print_datetime, $trn_string_array;			
			$numberofbooks = $noofbooks;
			$bankDetails = $db->get_row("SELECT bank_name,bank_website FROM tb_bankdetails");			
			$arrFirstRequestSlip = explode("~",$firstrequestslipdata);
			$arrSecondRequestSlip = explode("~",$secondrequestslipdata);
			$arrThirdRequestSlip = explode("~",$thirdrequestslipdata);
			
			if($noofbooks==1)
			{
				$firstslipfrom = $arrFirstRequestSlip[2];
				$firstslipto = $arrFirstRequestSlip[2] + $arrFirstRequestSlip[1] - 1;
			}
			else
			{
				$noofbooks = $noofbooks - 1;
				$firstslipfrom = $arrFirstRequestSlip[2] + ($noofbooks * $arrFirstRequestSlip[1]);
				$firstslipto = $firstslipfrom + $arrFirstRequestSlip[1] - 1;
			}
			echo "<br/> From :- ".$firstslipfrom. "    To :- ". $firstslipto . "<br/>";
			
			
			//First request slip
			// First Part
			
			$branchDetailsF = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$arrFirstRequestSlip[0]."'");
			$branchweakdays = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = '".$arrFirstRequestSlip[0]."'");
			$branchhalfdays = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = '".$arrFirstRequestSlip[0]."'");
			
			//$pdf = new FPDF();
			$pdf = new PDF();
			$pdf->AddPage();

			$pdf->SetFont('Arial','B',7.5);
			$pdf->Text(17,7,$bankDetails->bank_name);//19
			$pdf->SetFont('Arial','B',6.5);
			$pdf->Text(17,10,$branchDetailsF->branch_name . " : ". $branchDetailsF->branch_address1 .',');

			$addressLine2="";
				if(!empty($branchDetailsF->branch_address2)){
					$addressLine2 .=$branchDetailsF->branch_address2." ";
				}

				if(!empty($branchDetailsF->branch_address3)){
					$addressLine2 .=$branchDetailsF->branch_address3." ";
				}
				if(!empty($branchDetailsF->city_place)){
					$addressLine2 .=$branchDetailsF->city_place;
				}
				if(!empty($branchDetailsF->branch_pin)){
					
					$addressLine2 .="-".$branchDetailsF->branch_pin;

				}
			$pdf->Text(17,13,$addressLine2);			


			//--------> print vertically start
			$x = 9.5;
			$pdf->SetFont('Arial','',5);
			$pdf->SetXY($x, 76);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no 
			$pdf->Rotate(0);

			$pdf->SetXY($x, 56);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[4]);  //  operator id
			$pdf->Rotate(0);

			$pdf->SetXY($x, 37);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			// -------> print vertically end

			//--------> print vertically start for second
			$x1 = 90;
			$pdf->SetFont('Arial','',5);
			$pdf->SetXY($x1, 76);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no
			$pdf->Rotate(0);

			$pdf->SetXY($x1, 56);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[4]);  //  operator id
			$pdf->Rotate(0);

			$pdf->SetXY($x1, 37);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			// -------> print vertically end


			$pdf->SetFont('Arial','B',8);
			$pdf->Text(22,54,'Cheque No. From :     ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->Text(35,58,"Branch Information");
			
			
			// coordinates for printing in small box ----------------------
			$smx = 19; $smy = 62; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

			$pdf->SetFont('Arial','',6);
			$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_reg_busi_hrs);
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_half_busi_hrs);
			$smy += $smdy+2;
			
			// $pdf->Text($smx,$smy,'Sunday Working');
			// $pdf->Text($smdotx,$smy,':');
			// $pdf->Text($sminfx,$smy,$branchDetailsF->branch_sunday_working);
			// $smy += $smdy;

			$pdf->Text($smx,$smy,'Branch E-Mail-1');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_email1);
			$smy += $smdy;
			
			$pdf->Text($smx,$smy,'Branch E-Mail-2');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_email2);
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Web Address');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$bankDetails->bank_website); //bank_website
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Contact No.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_telephone1); 
			$smy += $smdy;

			// $pdf->Text($smx,$smy,'Toll Free No.');
			// $pdf->Text($smdotx,$smy,':');
			// $pdf->Text($sminfx,$smy,$branchDetailsF->branch_tollfree_no); 
			// $smy += $smdy;

			// $pdf->Text($smx,$smy,'Branch Service');
			// $pdf->Text($smdotx,$smy,':');
			// $pdf->Text($sminfx,$smy,$branchDetailsF->branch_Services); 
			// printing small box ends ----------------------------------

			// second part
			$secondPartX = 100;

			$pdf->SetFont('Arial','B',8);
			$pdf->Text(125,7,'CHEQUE BOOK REQUEST ( BANK COPY )');
			// $pdf->Text(105,7,'Cheque Book Request (Bank Copy)                    Date:________________');
			$pdf->SetFont('Arial','B',8);
			$pdf->SetFont('Arial','B',7.5);
			$pdf->Text($secondPartX,11,'The Manager');
			$pdf->Text($secondPartX,14,$bankDetails->bank_name);
			$pdf->SetFont('Arial','B',6.5);
			$pdf->Text($secondPartX,17,$branchDetailsF->branch_name . ": ". $branchDetailsF->branch_address1 .',');
			$addressLine2="";
				if(!empty($branchDetailsF->branch_address2)){
					$addressLine2 .=$branchDetailsF->branch_address2." ";
				}

				if(!empty($branchDetailsF->branch_address3)){
					$addressLine2 .=$branchDetailsF->branch_address3." ";
				}
				if(!empty($branchDetailsF->city_place)){
					$addressLine2 .=$branchDetailsF->city_place;
				}
				if(!empty($branchDetailsF->branch_pin)){
					
					$addressLine2 .="-".$branchDetailsF->branch_pin;

				}
			$pdf->Text($secondPartX,20,$addressLine2);
			
			$pdf->SetFont('Arial','B',8);
			//$pdf->Text(140,23,$firstslipfrom);
			//$pdf->Text(187,23,$firstslipto);
			
			$pdf->Text(147,24,'Cheque No. From :  ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT),'R');
			$pdf->Text($secondPartX,28,'Please Issue _______ Cheque Books Containing _______ Leaves');
			$pdf->SetFont('Arial','B',8);
			$pdf->Text($secondPartX,32,'Characteristics :     Bearer        Order');
			$pdf->Text($secondPartX,36,'Cheque Book   :      Normal       Payable At Par');
			if($arrFirstRequestSlip[25]!=12){
				$pdf->Text($secondPartX,42,'THE KARAD URBAN BANK CO-OP BANK LTD');
			}
			
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,30);
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,30);

			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,34);
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",162,34);

			$pdf->Text(162,63,"Signature Verified / Authorised         ");

			
			// $pdf->Text($secondPartX,71,'Contact No.: '.$arrFirstRequestSlip[8].'    '.$arrFirstRequestSlip[9]);
			$pdf->Text($secondPartX,71,'Contact No.: ');

			$pdf->Text($secondPartX+65,71,$arrFirstRequestSlip[10]);

				

			$pdf->Text($secondPartX,81,'Signature of Bearer');
						
			$pdf->SetFont('Arial','B',8);			
			$pdf->SetXY($secondPartX+4, 72.5);
			$pdf->Cell(100,5,"For THE KARAD URBAN CO-OP BANK LTD:KARAD", 0, 0,'R');

			$pdf->SetXY($secondPartX+4, 82);
			$pdf->Cell(100,5,"Authorised Sign                Authorised Sign", 0, 0,'R');
			

			

			
			if($noOfRequestSlip>1)
			{
				if($numberofbooks==1)
				{
					$secondslipfrom = $arrSecondRequestSlip[2];
					$secondslipto = $arrSecondRequestSlip[2] + $arrSecondRequestSlip[1] - 1;
					
					$thirdslipfrom = $arrThirdRequestSlip[2]; 
					$thirdslipto = $arrThirdRequestSlip[2] + $arrThirdRequestSlip[1] - 1;
				}
				else
				{
					$noofbooks = $numberofbooks - 1;
					$secondslipfrom = $arrSecondRequestSlip[2] + ($noofbooks * $arrSecondRequestSlip[1]);
					$secondslipto = $secondslipfrom + $arrSecondRequestSlip[1];
					$thirdslipfrom = $arrThirdRequestSlip[2] + ($noofbooks * $arrThirdRequestSlip[1]);
					$thirdslipto = $thirdslipfrom + $arrThirdRequestSlip[1];
				}
				
				echo "<br/> From :- ".$secondslipfrom. "    To :- ". $secondslipto . "<br/>";
				echo "<br/> From :- ".$thirdslipfrom. "    To :- ". $thirdslipto . "<br/>";
					
				if($arrSecondRequestSlip[2] != "" && $arrSecondRequestSlip[3] != ""){
				
					$branchDetailsS = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$arrSecondRequestSlip[0]."'");
					$branchweakdaysSec = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = '".$arrSecondRequestSlip[0]."'");
					$branchhalfdaysSec = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = '".$arrSecondRequestSlip[0]."'");
					
					$pdf->SetFont('Arial','B',7.5);
					$pdf->Text(17,100,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6.5);
					$pdf->Text(17,103,$branchDetailsS->branch_name . ": ". $branchDetailsS->branch_address1 .',');
					//$pdf->Text(19,106,$branchDetailsS->branch_address2.', '. $branchDetailsS->branch_address3 .', '.$branchDetailsS->city_place. '-'. $branchDetailsS->branch_pin);
					$addressLine2="";
					if(!empty($branchDetailsS->branch_address2)){
						$addressLine2 .=$branchDetailsS->branch_address2." ";
					}

					if(!empty($branchDetailsS->branch_address3)){
						$addressLine2 .=$branchDetailsS->branch_address3." ";
					}
					if(!empty($branchDetailsS->city_place)){
						$addressLine2 .=$branchDetailsS->city_place;
					}
					if(!empty($branchDetailsS->branch_pin)){
						
						$addressLine2 .="-".$branchDetailsS->branch_pin;

					}
					$pdf->Text(17,106,$addressLine2);												
					//$pdf->SetFont('Arial','B',8);

				
					

					//--------> print vertically start
					$pdf->SetFont('Arial','',5);
					$pdf->SetXY($x, 169);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x, 149);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[4]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x, 130);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont('Arial','',5);
					$pdf->SetXY($x1, 169);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 149);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[4]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 130);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					$pdf->SetFont('Arial','B',8);
					$pdf->Text(22,147,'Cheque No. From :     ' . str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,151,"Branch Information");
					
				
					
					// coordinates for printing in small box ----------------------
					$smx = 19; $smy = 155; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

					$pdf->SetFont('Arial','',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_half_busi_hrs);
					$smy += $smdy+2;
					
					// $pdf->Text($smx,$smy,'Sunday Working');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsS->branch_sunday_working);
					// $smy += $smdy;

					$pdf->Text($smx,$smy,'Branch E-Mail-1');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_email1);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Branch E-Mail-2');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_email2);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Web Address');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$bankDetails->bank_website); //bank_website
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Contact No.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_telephone1); 
					$smy += $smdy;

					// $pdf->Text($smx,$smy,'Toll Free No.');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsS->branch_tollfree_no); 
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Branch Service');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsS->branch_Services); 
					// printing small box ends ----------------------------------
					
					//Second Part
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(125,100,'CHEQUE BOOK REQUEST ( BANK COPY )');
					//$pdf->Text(105,100,'Cheque Book Request (Bank Copy)                    Date:________________');
					$pdf->SetFont('Arial','B',7.5);
					$pdf->Text($secondPartX,104,'The Manager');
					$pdf->Text($secondPartX,107,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6.5);
					$pdf->Text($secondPartX,110,$branchDetailsS->branch_name . ": ". $branchDetailsS->branch_address1 .',');
					$addressLine2="";
					if(!empty($branchDetailsS->branch_address2)){
						$addressLine2 .=$branchDetailsS->branch_address2." ";
					}

					if(!empty($branchDetailsS->branch_address3)){
						$addressLine2 .=$branchDetailsS->branch_address3." ";
					}
					if(!empty($branchDetailsS->city_place)){
						$addressLine2 .=$branchDetailsS->city_place;
					}
					if(!empty($branchDetailsS->branch_pin)){
						
						$addressLine2 .="-".$branchDetailsS->branch_pin;

					}
					$pdf->Text($secondPartX,113,$addressLine2);
					//$pdf->Text($secondPartX,113,$branchDetailsS->branch_address2 .", ". $branchDetailsS->branch_address3 .', '.$branchDetailsS->city_place. '-'. $branchDetailsS->branch_pin);
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(140,116,$arrSecondRequestSlip[2]);
					//$pdf->Text(187,116,$arrSecondRequestSlip[3]);
					$pdf->Text(147,117,'Cheque No. From  '.str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text($secondPartX,121,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont('Arial','B',8);
					$pdf->Text($secondPartX,125,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,129,'Cheque Book    :     Normal       Payable At Par');
					//$pdf->Text(115,137, 'Cheque No. From  '.$arrSecondRequestSlip[2].'       To  '.$arrSecondRequestSlip[3]);
					
					
					$pdf->Text($secondPartX,135,'THE KARAD URBAN BANK CO-OP BANK LTD:KARAD');
					
					
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,123);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,123);

					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,127);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",162,127);
					
					$pdf->Text(162,154,"Signature Verified / Authorised        ");
							
					$pdf->Text($secondPartX,161,'Contact No.:');	
					

					// $pdf->SetFont('Arial','B',8);					
					// $pdf->SetXY($secondPartX+4, 173);
					// if($arrSecondRequestSlip[25]!=10){
					// 	$prefix="For ";
					// }else{
					// 	$prefix="";
					// }
					// $pdf->Cell(100,5,$arrSecondRequestSlip[0], 0, 0,'R');		
					// $pdf->Cell(100,5,$prefix . $arrSecondRequestSlip[0], 0, 0,'R');		
					$pdf->Text($secondPartX,172,'Signature of Bearer');
										
					$pdf->SetFont('Arial','',7);

				
					$pdf->SetFont('Arial','B',8);			
					$pdf->SetXY($secondPartX+4, 163.5);
					$pdf->Cell(100,5,"For THE KARAD URBAN BANK CO-OP BANK LTD:KARAD", 0, 0,'R');

					$pdf->SetXY($secondPartX+4, 173);
					$pdf->Cell(100,5,"Authorised Sign                Authorised Sign", 0, 0,'R');
					

					

				}
				
				if($arrThirdRequestSlip[2] != "" && $arrThirdRequestSlip[3] != ""){
				
					$branchDetailsT = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$arrThirdRequestSlip[0]."'");
					$branchweakdaysThi = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = '".$arrThirdRequestSlip[0]."'");
					$branchhalfdaysThi = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = '".$arrThirdRequestSlip[0]."'");
					$pdf->SetFont('Arial','B',7.5);
					$pdf->Text(17,193,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6.5);
					$pdf->Text(17,196,$branchDetailsT->branch_name ." : " . $branchDetailsT->branch_address1 .',');
					//$pdf->Text(19,199,$branchDetailsT->branch_address2 . ", " .$branchDetailsT->branch_address3 .', '.$branchDetailsT->city_place. '-'. $branchDetailsT->branch_pin);
													
					$addressLine2="";
					if(!empty($branchDetailsT->branch_address2)){
						$addressLine2 .=$branchDetailsT->branch_address2." ";
					}

					if(!empty($branchDetailsT->branch_address3)){
						$addressLine2 .=$branchDetailsT->branch_address3." ";
					}
					if(!empty($branchDetailsT->city_place)){
						$addressLine2 .=$branchDetailsT->city_place;
					}
					if(!empty($branchDetailsT->branch_pin)){
						
						$addressLine2 .="-".$branchDetailsT->branch_pin;

					}
					$pdf->Text(17,199,$addressLine2);
																	
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(45,209,$arrThirdRequestSlip[2]);
					//$pdf->Text(85,209,$arrThirdRequestSlip[3]);	
					
					//$pdf->Text(24,204, 'Cheque No. From  '.str_pad($arrThirdRequestSlip[2], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrThirdRequestSlip[3], 6, "0", STR_PAD_LEFT));
					//$pdf->SetFont('Arial','B',8);
					
					$pdf->Text(24,204,$trn_str . 'THE KARAD URBAN BANK CO-OP BANK LTD:KARAD');
					
					

					//--------> print vertically start
					$pdf->SetFont('Arial','',5);
					$pdf->SetXY($x, 262);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x, 242);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[4]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x, 223);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont('Arial','',5);
					$pdf->SetXY($x1, 262);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 242);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[4]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 223);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					$pdf->SetFont('Arial','B',8);
					$pdf->Text(22,240, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,244,"Branch Information");
					
					
					
					// coordinates for printing in small box ----------------------
					$smx = 19; $smy = 251; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

					$pdf->SetFont('Arial','',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_half_busi_hrs);
					$smy += $smdy+2;
					
					// $pdf->Text($smx,$smy,'Sunday Working');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsT->branch_sunday_working);
					// $smy += $smdy;

					$pdf->Text($smx,$smy,'Branch E-Mail-1');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_email1);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Branch E-Mail-2');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_email2);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Web Address');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$bankDetails->bank_website); //bank_website
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Contact No.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_telephone1); 
					$smy += $smdy;

					// $pdf->Text($smx,$smy,'Toll Free No.');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsT->branch_tollfree_no); 
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Branch Service');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsT->branch_Services);

					// printing small box ends ----------------------------------					
					//Second Part
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(125,193,'CHEQUE BOOK REQUEST ( BANK COPY )');
					// $pdf->Text(105,193,'Cheque Book Request (Bank Copy)                    Date:________________');
					$pdf->SetFont('Arial','B',8);
					$pdf->SetFont('Arial','B',7.5);
					$pdf->Text($secondPartX,196,'The Manager');
					$pdf->Text($secondPartX,199,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6.5);
					$pdf->Text($secondPartX,202,$branchDetailsT->branch_name . ": ". $branchDetailsT->branch_address1 .',');
					//$pdf->Text($secondPartX,205,$branchDetailsT->branch_address2.', '.$branchDetailsT->branch_address3 .', '.$branchDetailsT->city_place. '-'. $branchDetailsT->branch_pin);
					$addressLine2="";
					if(!empty($branchDetailsT->branch_address2)){
						$addressLine2 .=$branchDetailsT->branch_address2." ";
					}

					if(!empty($branchDetailsT->branch_address3)){
						$addressLine2 .=$branchDetailsT->branch_address3." ";
					}
					if(!empty($branchDetailsT->city_place)){
						$addressLine2 .=$branchDetailsT->city_place;
					}
					if(!empty($branchDetailsT->branch_pin)){
						
						$addressLine2 .="-".$branchDetailsT->branch_pin;

					}
					$pdf->Text($secondPartX,205,$addressLine2);

					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(140,209,$arrThirdRequestSlip[2]);
					//$pdf->Text(187,209,$arrThirdRequestSlip[3]);
					$pdf->Text(147,209, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT),'R');
					$pdf->Text($secondPartX,213,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont('Arial','B',8);
					$pdf->Text($secondPartX,217,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,221,'Cheque Book    :     Normal       Payable At Par');
					
					$pdf->Text($secondPartX,226,'THE KARAD URBAN BANK CO-OP BANK LTD:KARAD');
					
					//$pdf->Text(115,229, 'Cheque No. From  '.$arrThirdRequestSlip[2].'       To  '.$arrThirdRequestSlip[3]);
					
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,215);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,215);

					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,219);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",162,219);
					
					$pdf->Text(162,244,"Signature Verified / Authorised        ");
							
								
					$pdf->Text($secondPartX,251,'Contact No.:');	
					
					$pdf->SetFont('Arial','B',8);
						
					$pdf->Text($secondPartX,267,'Signature of Bearer');
					
					$pdf->SetFont('Arial','',7);

					

					$pdf->SetFont('Arial','B',8);			
					$pdf->SetXY($secondPartX+4, 258.5);
					$pdf->Cell(100,5,"For THE KARAD URBAN BANK CO-OP BANK LTD:KARAD", 0, 0,'R');

					$pdf->SetXY($secondPartX+4, 268);
					$pdf->Cell(100,5,"Authorised Sign                Authorised Sign", 0, 0,'R');
					
 
				}
			}
			
			$pdf->Output("payorder_Slip.pdf",'F'); 
			
			//echo $printersinfo[0][0];
			 // exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
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

			$branchX = 34.3;		// Branch address X position
			$ifscX = 34.3;		// IFSC Code X position
			$payorderX = 180;		// PAY ORDER X position
			$x = 11.8;

			$chqseriesX = 59.5; //60.7
			$micr1X = 88.2;		// 86.7
			$micr2X = 123;	// 121.5
			$trncodeX = 148.3;	// 146.8

			// Positions
			$arrPos    = array(); 
			$arrPos[0] = array("BankAddrY" => 12, "ifscY" => 14.5, "PayOrderY" => 28.3, "VUniqReq" => 76, "MICRY" => 82.5);
			$arrPos[1] = array("BankAddrY" => 105, "ifscY" => 107.5, "PayOrderY" => 121, "VUniqReq" => 169, "MICRY" => 175);
			$arrPos[2] = array("BankAddrY" => 198.5, "ifscY" => 201, "PayOrderY" => 214, "VUniqReq" => 262, "MICRY" => 267);

			// print_r($arrFirstChequeData[1]);
			// die();
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

				$branchDetails = $db->get_row("SELECT b.branch_code,b.branch_City_Code,b.branch_name,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$arrChqData[$i][0]."'");

				$micr_code = $branchDetails->branch_City_Code.$bankdetails->bank_code.$branchDetails->branch_code;

				if($arrChqData[$i][0] == "")
					break; 
				$pdf->SetFont('Arial', '', 7);
			
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
				// $pdf->Text($branchX, $y, $addressLine2);
				$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.", ".$addressLine2);


				$pdf->SetFont($arial,'',8);
				$pdf->Text($ifscX, $arrPos[$i]["IfscY"],'IFSC CODE : '.$branchDetails->branch_neftifsccode);
				
				$pdf->Text($ifscX, $arrPos[$i]["ifscY"],'IFSC : '.$branchDetails->branch_neftifsccode);

				$pdf->SetFont('Arial','B',10);
				$pdf->Text($payorderX,$arrPos[$i]["PayOrderY"],'PAY ORDER');

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
				$micr2 = "";

				$pdf->SetFont('E-13B_0','',12);

				$y = $arrPos[$i]["MICRY"];
				$pdf->Text($chqseriesX, $y, $chqseries);
				$pdf->Text($micr1X, $y, $micr1);
				$pdf->Text($micr2X, $y, $micr2);
				$pdf->Text($trncodeX, $y, $trcode);
			}
			$pdf->Output("Payorder_cheque.pdf",'F');

			//exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Payorder_cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
		}

		function printChequesOld($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
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
			$payorderX = 180;	// PAY ORDER X position
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

			print_r($arrFirstChequeData);
			die();
			// print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			// echo "<br/>";
			if(strlen($print_str) == 0)
				$print_str = "<br /><br />";
			$print_str .= "{$arrFirstChequeData[0]} {$arrSecondChequeData[1]} {$arrThirdChequeData[2]} cheque <br/>";

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
				$pdf->Text($payorderX,$arrPos[$i]["PayOrderY"],'PAY ORDER');

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
			$pdf->Output("Payorder_cheque.pdf",'F');

			//exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Payorder_cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
		}			
		$db->closeDb();
	?>
	<div><?php echo $print_str; ?></div>
	</div>
</div>
</body>
</html>
