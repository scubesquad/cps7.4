<?php
require_once('global.php');
// require('cellpdf.php');
// require('pdf.php');
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');
$print_datetime = date("d-m-Y H:i:s");
$selected_requisition = false;
$requisitiononly = false;
$page_name = "print_preview";
authentication_print();
ini_set("max_execution_time",300000);

$trn_string_array =  array(10 => 'Saving', 11 => 'Current', 12=> 'Pay Order', 13 => 'Cash Credit', 14 => 'Dividend', 15 => '', 16 => 'DD', 18 => 'MT', 29 => 'Current', 31 => 'Saving');


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
			$selective=true;
			$selective_page_array = explode(",", $_GET['selective_pages_no']);
		}
		if(isset($_GET['requisition']) && $_GET['selective_pages_no']!="")
		{
			$selected_requisition = true;
		}
		if(isset($_GET['requisitiononly']) && $_GET['requisitiononly']!="")
		{
			$requisitiononly = true;
			$selected_requisition = true;
		}

		//bhavin end

		// Vinod Sharma Coding Starts
		//bhavin
		if($resultnoofchequeleavestype = $db->get_results("SELECT DISTINCT cps_no_of_books,cps_book_size FROM tb_cps_reprintque WHERE cps_reprint_approved=1"))
		{


			$branchDetails = $db->get_row("SELECT branch.branch_name,branch.branch_address1,branch.branch_address2,suburb_name,city_place,suburb_postal_code,branch.branch_neftifsccode,branch.branch_printers FROM tb_branchdetails branch LEFT JOIN tb_suburbmaster suburb ON branch.branch_suburb_id = suburb.suburb_id LEFT JOIN tb_citymaster city ON branch.branch_city_id = city.city_id");
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


			
			$firstchequerow = array();
			$secondchequerow = array();
			$thirdchequerow = array();
			
			$firstrequestsliprow = array();
			$secondrequestsliprow = array();
			$thirdrequestsliprow = array();
						
			$singlefirstchequerow = array();
			$singlesecondchequerow = array();
			$singlethirdchequerow = array();
			//bhavin
			$row = $db->get_row("SELECT sum(cps_book_size * cps_no_of_books) as total_leaves, sum(cps_no_of_books) as noofbooks from tb_cps_reprintque where cps_reprint_approved=1 ");						
			$total_leaves = $row->total_leaves;	
			$total_slips = $row->noofbooks;	
			$no_pages = ceil($total_leaves/3);
			
			
			// =============================================== for chk print ==============================================
			
			//$result = $db->get_results("SELECT * FROM tb_cps_reprintque");
			//bhavin
			
			// Get Re-Print user who is priting now
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;

			$result = $db->get_results("SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code AND p.branch_sub_code =b.branch_sub_code where cps_reprint_approved=1");			
			$jump=0;


			//echo "SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code";
// ============================================================ FOR CHK SLIP ========================================================
			if(count($result) > 0){
				$slipCounter = 1;			
				foreach($result as $rowresultslips)
				{				
					$chkFrom = $rowresultslips->cps_chq_no_from;
					$chkTo = $rowresultslips->cps_chq_no_to;
					
					for($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++)
					{						
						if($rowresultslips->cps_no_of_books > 1)
						{
							$chkTo = $chkFrom + $rowresultslips->cps_book_size;							 
						}
												
						if($slipCounter % 3 == 1) 
						{							//                     		0								1									2									3							4								5							6									7									8										9									10								11							12								13			14		15						16									17								18							19								20									21								22								23								24									25 						26 					27							28
							$firstrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
						}
						elseif($slipCounter % 3 == 2) 
						{						
							$secondrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
						}
						elseif($slipCounter % 3 == 0) 
						{						
							$thirdrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
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
			
	//================================================================ END =============================================================
				//print_r($result);
				//exit;			
				foreach($result as $rowresults)
				{
					$chequeno = $rowresults->cps_chq_no_from; 
					$citycode = $rowresults->cps_city_code;
					if(trim($rowresults->cps_act_jointname1)!="")
					{
						$name1 = $rowresults->cps_act_jointname1;
						$name2 = $rowresults->cps_act_jointname2;
						$name3 = "";
					}
					else
					{
						$name1 = $rowresults->cps_auth_sign1;
						$name2 = $rowresults->cps_auth_sign2;
						$name3 = $rowresults->cps_auth_sign3;
					}
					if($rowresults->cps_atpar == 1)
					{
						$citycode = "000";
					}	
					
					$chkserisediff = (($rowresults->cps_chq_no_to - $rowresults->cps_chq_no_from) + 1);
					for($i = 0; $i < $chkserisediff; $i++)
					{									 
						if($i!=0)
							$chequeno = $chequeno + 1;								
						$chequeno = str_pad($chequeno, 6, "0", STR_PAD_LEFT);	
						
						if($jump < $no_pages)
						{		
							//							0			1				2							3								4								5							6							7					8								9							10			  11	12      13				14									15								16							17							18									19								20							21									22									23 							24 						25		26
							$firstchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);																
						}
						elseif(($jump < ($no_pages * 2)) && ($jump >= $no_pages))
						{
							$secondchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);																
						}
						elseif(($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2))
						{	
							$thirdchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);																
						}	
							
						$jump++;	
					}								
				}

				
				
				//bhavin
				for($j=0, $p=1; $j<count($firstchequerow); $j++, $p++)
				{
					if($firstchequerow[$j] != "")
						$firstchequedata = implode("~",$firstchequerow[$j]);
	
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
					//bhavin end
				}
												
				$firstchequerow = array();
				$secondchequerow = array();
				$thirdchequerow = array();
											
				$resultInsert = $db->get_results("SELECT * FROM tb_cps_reprintque where cps_reprint_approved=1");
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
			
			$sqlinsertquery = "INSERT INTO tb_reprint_req_collection 
				(cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code, cps_product_code,branch_sub_code)
				VALUES
				('".$results->cps_unique_req ."','".$results->cps_micr_code ."','".$results->cps_branchmicr_code ."','".$results->cps_account_no ."','".$results->cps_act_name ."','".$results->cps_no_of_books ."','".$results->cps_dly_bearer_order ."','".$results->cps_book_size ."','".$results->cps_tr_code ."','".$results->cps_atpar ."','".$results->cps_act_jointname1 ."','".$results->cps_act_jointname2 ."','".$results->cps_auth_sign1 ."','".$results->cps_auth_sign2 ."','".$results->cps_auth_sign3 ."','".$results->cps_act_address1 ."','".$results->cps_act_address2 ."','".$results->cps_act_address3 ."','".$results->cps_act_address4 ."','".$results->cps_act_address5 ."','".$results->cps_act_city ."','".$results->cps_state ."','".$results->cps_country ."','".$results->cps_emailid ."','".$results->cps_act_pin ."','".$results->cps_act_telephone_res ."','".$results->cps_act_telephone_off ."','".$results->cps_act_mobile ."','".$results->cps_ifsc_code ."','".$results->cps_chq_no_from ."','".$results->cps_chq_no_to ."','".$results->cps_micr_account_no ."','".$results->cps_date ."','". $_SESSION["admin_id"] ."','".$results->cps_bsr_code."','".$results->cps_pr_code. "','".$results->cps_product_code."','" . $results->branch_sub_code . "')";
			$db->query($sqlinsertquery);		
			
			$deletefromprintque = "DELETE FROM tb_cps_reprintque WHERE id='".$results->id ."'";
			$db->query($deletefromprintque);	 
		}
					
		function OldprintRequestSlip($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noOfRequestSlip,$noofbooks,$printersinfo)
		{
			global $db, $print_datetime, $trn_string_array;			
			$numberofbooks = $noofbooks;
			$bankDetails = $db->get_row("SELECT bank_name,bank_website FROM tb_bankdetails");			
			$arrFirstRequestSlip = explode("~",$firstchequedata);
			$arrSecondRequestSlip = explode("~",$secondchequedata);
			$arrThirdRequestSlip = explode("~",$thirdchequedata);
			
			if($noofbooks==1)
			{
				$firstslipfrom = $arrFirstRequestSlip[14];
				$firstslipto = $arrFirstRequestSlip[14] + $arrFirstRequestSlip[13] - 1;
			}
			else
			{
				$noofbooks = $noofbooks - 1;
				$firstslipfrom = $arrFirstRequestSlip[14] + ($noofbooks * $arrFirstRequestSlip[13]);
				$firstslipto = $firstslipfrom + $arrFirstRequestSlip[13] - 1;
			}
			echo "<br/> From :- ".$firstslipfrom. "    To :- ". $firstslipto . "<br/>";
			
			
			//First request slip
			// First Part

			/*print_r($arrFirstRequestSlip);
			exit;*/
			
			$branchDetailsF = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[28]."'");
			$branchweakdays = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[28]."')");
			$branchhalfdays = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[28]."')");
			
			//$pdf = new FTCPDF();
			$pdf = new TCPDF();
			$pdf->AddPage();

			$pdf->SetFont($arial,'B',5.5);
			$pdf->Text(13,7,$bankDetails->bank_name);//19
			$pdf->SetFont($arial,'B',4.5);
			$pdf->Text(13,10,$branchDetailsF->branch_name . " : ". $branchDetailsF->branch_address1 .',');

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
			$pdf->Text(13,13,$addressLine2);			

			$trn_str = $trn_string_array[$arrFirstRequestSlip[25]];
			$pdf->SetFont($arial,'B',8);
			$pdf->Text(24,18,$trn_str . ' A/c. No.:  '.$arrFirstRequestSlip[11]);	
			
			$pdf->SetFont($arial,'',7);
			$pdf->Text(24,22,trim($arrFirstRequestSlip[0]));
			$pdf->Text(24,25,trim($arrFirstRequestSlip[1]));
			$pdf->Text(24,28,trim($arrFirstRequestSlip[2]));
			$pdf->Text(24,31,trim($arrFirstRequestSlip[3]));
			$pdf->Text(24,34,trim($arrFirstRequestSlip[6])); 
			$pdf->Text(24,37,trim($arrFirstRequestSlip[7]));
			$pdf->Text(24,40,$arrFirstRequestSlip[4]."-".$arrFirstRequestSlip[5]);		

			//--------> print vertically start
			$x = 11.5;
			$pdf->SetFont($arial,'',5);
			$pdf->SetXY($x, 76);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no 
			$pdf->Rotate(0);

			$pdf->SetXY($x, 56);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[27]);  //  operator id
			$pdf->Rotate(0);

			$pdf->SetXY($x, 37);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			// -------> print vertically end

			//--------> print vertically start for second
			$x1 = 90;
			$pdf->SetFont($arial,'',5);
			$pdf->SetXY($x1, 76);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no
			$pdf->Rotate(0);

			$pdf->SetXY($x1, 56);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[27]);  //  operator id
			$pdf->Rotate(0);

			$pdf->SetXY($x1, 37);
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			// -------> print vertically end


			$pdf->SetFont($arial,'B',8);
			$pdf->Text(22,54,'Cheque No. From :     ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->Text(35,58,"Branch Information");
			
			$firstno = $arrFirstRequestSlip[8] > 0 ? $arrFirstRequestSlip[8] : "";
			$secondno = $arrFirstRequestSlip[9] > 0 ? $arrFirstRequestSlip[9] : "";
			$thirdno = $arrFirstRequestSlip[10] > 0 ? $arrFirstRequestSlip[10] : "";
			
			// coordinates for printing in small box ----------------------
			$smx = 19; $smy = 60; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

			$pdf->SetFont($arial,'',6);
			$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_reg_busi_hrs);
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_half_busi_hrs);
			$smy += $smdy;
			
			$pdf->Text($smx,$smy,'Sunday Working');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_sunday_working);
			$smy += $smdy;

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

			$pdf->Text($smx,$smy,'Toll Free No.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_tollfree_no); 
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Branch Service');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_Services); 
			// printing small box ends ----------------------------------

			// second part
			$secondPartX = 100;

			$pdf->SetFont($arial,'B',8);
			$pdf->Text(105,7,'Cheque Book Request (Bank Copy)                    Date:________________');
			$pdf->SetFont($arial,'B',8);
			$pdf->SetFont($arial,'B',7);
			$pdf->Text($secondPartX,11,'The Manager');
			$pdf->Text($secondPartX,14,$bankDetails->bank_name);
			$pdf->SetFont($arial,'B',6);
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
			
			$pdf->SetFont($arial,'',8);
			//$pdf->Text(140,23,$firstslipfrom);
			//$pdf->Text(187,23,$firstslipto);
			
			$pdf->Text($secondPartX,24,'Cheque No. From :  ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->Text($secondPartX,28,'Please Issue _______ Cheque Books Containing _______ Leaves');
			$pdf->SetFont($arial,'B',8);
			$pdf->Text($secondPartX,32,'Characteristics :     Bearer        Order');
			$pdf->Text($secondPartX,36,'Cheque Book    :      Normal         Payable At Par');
			$pdf->Text($secondPartX,40,$trn_str . ' A/c No.: ' . $arrFirstRequestSlip[11]);
			
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,30);
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,30);
			
			$pdf->Text(162,54,"Signature Verified / Authorised");
			$pdf->SetFont($arial,'',8);
			$pdf->Text($secondPartX,44, trim($arrFirstRequestSlip[0]));
			$pdf->Text($secondPartX,48,trim($arrFirstRequestSlip[1]));
			$pdf->Text($secondPartX,51,trim($arrFirstRequestSlip[2]));
			$pdf->Text($secondPartX,54,trim($arrFirstRequestSlip[3])); 
			$pdf->Text($secondPartX,57,trim($arrFirstRequestSlip[6]));
			$pdf->Text($secondPartX,60,trim($arrFirstRequestSlip[7]));

			$pdf->Text($secondPartX,63,$arrFirstRequestSlip[4]."-".$arrFirstRequestSlip[5]);
			$pdf->Text($secondPartX,67,'Contact No.: '.$arrFirstRequestSlip[8].'    '.$arrFirstRequestSlip[9].'    '.$arrFirstRequestSlip[10]);				
			$pdf->SetFont($arial,'B',8);			
			$pdf->SetXY($secondPartX, 67);
			$pdf->Cell(100,5,"For " . $arrFirstRequestSlip[0], 0, 0,'R');		
			$pdf->Text($secondPartX,88,'Signature of Bearer');
						
			$pdf->SetFont($arial,'',7);
			$pdf->SetXY(162, 84);
			if($arrFirstRequestSlip[23] == '')
				$pdf->Cell(40, 5, "Self", 0, 0, 'R');
			else 
				$pdf->Cell(40, 5, $arrFirstRequestSlip[23], 0, 0, 'R');
			
			if($noOfRequestSlip>1)
			{
				if($numberofbooks==1)
				{
					$secondslipfrom = $arrSecondRequestSlip[14];
					$secondslipto = $arrSecondRequestSlip[14] + $arrSecondRequestSlip[13] - 1;
					
					$thirdslipfrom = $arrThirdRequestSlip[14]; 
					$thirdslipto = $arrThirdRequestSlip[14] + $arrThirdRequestSlip[13] - 1;
				}
				else
				{
					$noofbooks = $numberofbooks - 1;
					$secondslipfrom = $arrSecondRequestSlip[14] + ($noofbooks * $arrSecondRequestSlip[13]);
					$secondslipto = $secondslipfrom + $arrSecondRequestSlip[13];
					$thirdslipfrom = $arrThirdRequestSlip[14] + ($noofbooks * $arrThirdRequestSlip[13]);
					$thirdslipto = $thirdslipfrom + $arrThirdRequestSlip[13];
				}
				
				echo "<br/> From :- ".$secondslipfrom. "    To :- ". $secondslipto . "<br/>";
				echo "<br/> From :- ".$thirdslipfrom. "    To :- ". $thirdslipto . "<br/>";
					
				if($arrSecondRequestSlip[14] != "" && $arrSecondRequestSlip[15] != ""){
				
					$branchDetailsS = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[28]."'");
					$branchweakdaysSec = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[28]."')");
					$branchhalfdaysSec = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[28]."')");
					
					$pdf->SetFont($arial,'B',5.5);
					$pdf->Text(13,100,$bankDetails->bank_name);
					$pdf->SetFont($arial,'B',4.5);
					$pdf->Text(13,103,$branchDetailsS->branch_name . ": ". $branchDetailsS->branch_address1 .',');
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
					$pdf->Text(13,106,$addressLine2);												
					//$pdf->SetFont($arial,'B',8);

					//$pdf->Text(24,111, 'Cheque No. From  '.str_pad($arrSecondRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrSecondRequestSlip[15], 6, "0", STR_PAD_LEFT));
					
					$trn_str = $trn_string_array[$arrSecondRequestSlip[25]];
					$pdf->SetFont($arial,'B',8);
					$pdf->Text(24,111,$trn_str . ' A/c. No. :  '.$arrSecondRequestSlip[11]);
					
					$pdf->SetFont($arial,'',7);
					$pdf->Text(24,115,trim($arrSecondRequestSlip[0]));
					$pdf->Text(24,118,trim($arrSecondRequestSlip[1]));
					$pdf->Text(24,121,trim($arrSecondRequestSlip[2]));
					$pdf->Text(24,124,trim($arrSecondRequestSlip[3]));
					$pdf->Text(24,127,trim($arrSecondRequestSlip[6])); 
					$pdf->Text(24,130,trim($arrSecondRequestSlip[7]));
					$pdf->Text(24,133,$arrSecondRequestSlip[4]."  ".$arrSecondRequestSlip[5]);

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->SetXY($x, 169);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x, 149);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x, 130);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->SetXY($x1, 169);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 149);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 130);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					$pdf->SetFont($arial,'B',8);
					$pdf->Text(22,147,'Cheque No. From :     ' . str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,151,"Branch Information");
					
					$firstno = $arrSecondRequestSlip[8] > 0 ? $arrSecondRequestSlip[8] : "";
					$secondno = $arrSecondRequestSlip[9] > 0 ? $arrSecondRequestSlip[9] : "";
					$thirdno = $arrSecondRequestSlip[10] > 0 ? $arrSecondRequestSlip[10] : "";
					
					// coordinates for printing in small box ----------------------
					$smx = 19; $smy = 158; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

					$pdf->SetFont($arial,'',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_half_busi_hrs);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Sunday Working');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_sunday_working);
					$smy += $smdy;

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

					$pdf->Text($smx,$smy,'Toll Free No.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_tollfree_no); 
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Branch Service');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_Services); 
					// printing small box ends ----------------------------------
					
					//Second Part
					
					$pdf->SetFont($arial,'B',8);
					$pdf->Text(105,100,'Cheque Book Request (Bank Copy)                    Date:________________');
					$pdf->SetFont($arial,'B',7);
					$pdf->Text($secondPartX,104,'The Manager');
					$pdf->Text($secondPartX,107,$bankDetails->bank_name);
					$pdf->SetFont($arial,'B',6);
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
					$pdf->SetFont($arial,'',8);
					//$pdf->Text(140,116,$arrSecondRequestSlip[14]);
					//$pdf->Text(187,116,$arrSecondRequestSlip[15]);
					$pdf->Text($secondPartX,117,'Cheque No. From  '.str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text($secondPartX,121,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont($arial,'B',8);
					$pdf->Text($secondPartX,125,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,129,'Cheque Book    :      Normal         Payable At Par');
					//$pdf->Text(115,137, 'Cheque No. From  '.$arrSecondRequestSlip[14].'       To  '.$arrSecondRequestSlip[15]);
					$pdf->Text($secondPartX,133,$trn_str . ' A/c No.:  '.$arrSecondRequestSlip[11]);
					
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,123);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,123);
					
					$pdf->Text(162,147,"Signature Verified / Authorised");
					$pdf->SetFont($arial,'',8);
					$pdf->Text($secondPartX,137,trim($arrSecondRequestSlip[0]));
					$pdf->Text($secondPartX,141,trim($arrSecondRequestSlip[1])); 
					$pdf->Text($secondPartX,144,trim($arrSecondRequestSlip[2]));
					$pdf->Text($secondPartX,147,trim($arrSecondRequestSlip[3])); 
					$pdf->Text($secondPartX,150,trim($arrSecondRequestSlip[6])); 
					$pdf->Text($secondPartX,153,trim($arrSecondRequestSlip[7])); 
					$pdf->Text($secondPartX,156,$arrSecondRequestSlip[4]."-".$arrSecondRequestSlip[5]);				
					$pdf->Text($secondPartX,159,'Contact No.:'.$arrSecondRequestSlip[8].'    '.$arrSecondRequestSlip[9].'    '.$arrSecondRequestSlip[10]);					
					$pdf->SetFont($arial,'B',8);					
					$pdf->SetXY($secondPartX, 159);
					$pdf->Cell(100,5,"For " . $arrSecondRequestSlip[0], 0, 0,'R');		
					$pdf->Text($secondPartX,181,'Signature of Bearer');
										
					$pdf->SetFont($arial,'',7);
					$pdf->SetXY(162, 177);
					if($arrSecondRequestSlip[23] == '')
						$pdf->Cell(40, 5, "Self", 0, 0, 'R');
					else
						$pdf->Cell(40, 5, $arrSecondRequestSlip[23], 0, 0, 'R');
				}
				
				if($arrThirdRequestSlip[14] != "" && $arrThirdRequestSlip[15] != ""){
				
					$branchDetailsT = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[28]."'");
					$branchweakdaysThi = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[28]."')");
					$branchhalfdaysThi = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[28]."')");
					$pdf->SetFont($arial,'B',5.5);
					$pdf->Text(13,193,$bankDetails->bank_name);
					$pdf->SetFont($arial,'B',4.5);
					$pdf->Text(13,196,$branchDetailsT->branch_name ." : " . $branchDetailsT->branch_address1 .',');
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
					$pdf->Text(13,199,$addressLine2);
																	
					$pdf->SetFont($arial,'B',8);
					//$pdf->Text(45,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(85,209,$arrThirdRequestSlip[15]);	
					
					//$pdf->Text(24,204, 'Cheque No. From  '.str_pad($arrThirdRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrThirdRequestSlip[15], 6, "0", STR_PAD_LEFT));
					//$pdf->SetFont($arial,'B',8);
					$trn_str = $trn_string_array[$arrThirdRequestSlip[25]];
					$pdf->Text(24,204,$trn_str . ' A/c. No. :  '.$arrThirdRequestSlip[11]);
					
					$pdf->SetFont($arial,'',7);
					$pdf->Text(24,208,trim($arrThirdRequestSlip[0]));
					$pdf->Text(24,211,trim($arrThirdRequestSlip[1]));
					$pdf->Text(24,214,trim($arrThirdRequestSlip[2]));
					$pdf->Text(24,217,trim($arrThirdRequestSlip[3]));
					$pdf->Text(24,220,trim($arrThirdRequestSlip[6])); 
					$pdf->Text(24,223,trim($arrThirdRequestSlip[7]));
					$pdf->Text(24,226,$arrThirdRequestSlip[4]."  ".$arrThirdRequestSlip[5]);

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->SetXY($x, 262);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x, 242);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x, 223);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->SetXY($x1, 262);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 242);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);

					$pdf->SetXY($x1, 223);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					// -------> print vertically end

					$pdf->SetFont($arial,'B',8);
					$pdf->Text(22,240, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,244,"Branch Information");
					
					$firstno = $arrThirdRequestSlip[8] > 0 ? $arrThirdRequestSlip[8] : "";
					$secondno = $arrThirdRequestSlip[9] > 0 ? $arrThirdRequestSlip[9] : "";
					$thirdno = $arrThirdRequestSlip[10] > 0 ? $arrThirdRequestSlip[10] : "";
					
					// coordinates for printing in small box ----------------------
					$smx = 19; $smy = 251; $smdy = 2.5; $smdotx = $smx + 18; $sminfx = $smdotx + 2;

					$pdf->SetFont($arial,'',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_half_busi_hrs);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Sunday Working');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_sunday_working);
					$smy += $smdy;

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

					$pdf->Text($smx,$smy,'Toll Free No.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_tollfree_no); 
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Branch Service');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_Services); 

					// printing small box ends ----------------------------------					
					//Second Part
					
					$pdf->SetFont($arial,'B',8);
					$pdf->Text(105,193,'Cheque Book Request (Bank Copy)                    Date:________________');
					$pdf->SetFont($arial,'B',8);
					$pdf->SetFont($arial,'B',7);
					$pdf->Text($secondPartX,196,'The Manager');
					$pdf->Text($secondPartX,199,$bankDetails->bank_name);
					$pdf->SetFont($arial,'B',6);
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

					$pdf->SetFont($arial,'',8);
					//$pdf->Text(140,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(187,209,$arrThirdRequestSlip[15]);
					$pdf->Text($secondPartX,209, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text($secondPartX,213,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont($arial,'B',8);
					$pdf->Text($secondPartX,217,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,221,'Cheque Book    :      Normal         Payable At Par');
					$pdf->Text($secondPartX,225,$trn_str . ' A/c No.: ' . $arrThirdRequestSlip[11]);
					//$pdf->Text(115,229, 'Cheque No. From  '.$arrThirdRequestSlip[14].'       To  '.$arrThirdRequestSlip[15]);
					
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,215);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,215);
					
					$pdf->Text(162,239,"Signature Verified / Authorised");
					$pdf->SetFont($arial,'',8);
					$pdf->Text($secondPartX,229,trim($arrThirdRequestSlip[0]));
					$pdf->Text($secondPartX,233,trim($arrThirdRequestSlip[1]));
					$pdf->Text($secondPartX,236,trim($arrThirdRequestSlip[2]));
					$pdf->Text($secondPartX,239,trim($arrThirdRequestSlip[3])); 
					$pdf->Text($secondPartX,242,trim($arrThirdRequestSlip[6])); 
					$pdf->Text($secondPartX,245,trim($arrThirdRequestSlip[7])); 
					$pdf->Text($secondPartX,248,$arrThirdRequestSlip[4]."-".$arrThirdRequestSlip[5]);		
					$pdf->Text($secondPartX,251,'Contact No.:'.$arrThirdRequestSlip[8].'    '.$arrThirdRequestSlip[9].'    '.$arrThirdRequestSlip[10]);					
					$pdf->SetFont($arial,'B',8);
					$pdf->SetXY($secondPartX, 251);
					$pdf->Cell(100,5,"For " . $arrThirdRequestSlip[0], 0, 0,'R');		
					$pdf->Text($secondPartX,273,'Signature of Bearer');
					
					$pdf->SetFont($arial,'',7);
					$pdf->SetXY(162, 269);
					if($arrThirdRequestSlip[23] == '')
						$pdf->Cell(40, 5, "Self", 0, 0, 'R');
					else
						$pdf->Cell(40, 5, $arrThirdRequestSlip[23], 0, 0, 'R');
				}
			}
			
			$pdf->Output("Slip.pdf",'F'); 
			
			//echo $printersinfo[0][0];
			// exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
			//sleep(3);
		}

		function printRequestSlip($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noOfRequestSlip,$noofbooks,$printersinfo)
		{
			global $db, $print_datetime, $trn_string_array;			
			$numberofbooks = $noofbooks;
			$bankDetails = $db->get_row("SELECT bank_name,bank_website FROM tb_bankdetails");			
			$arrFirstRequestSlip = explode("~",$firstchequedata);
			$arrSecondRequestSlip = explode("~",$secondchequedata);
			$arrThirdRequestSlip = explode("~",$thirdchequedata);
			
			if($noofbooks==1)
			{
				$firstslipfrom = $arrFirstRequestSlip[14];
				$firstslipto = $arrFirstRequestSlip[14] + $arrFirstRequestSlip[13] - 1;
			}
			else
			{
				$noofbooks = $noofbooks - 1;
				$firstslipfrom = $arrFirstRequestSlip[14] + ($noofbooks * $arrFirstRequestSlip[13]);
				$firstslipto = $firstslipfrom + $arrFirstRequestSlip[13] - 1;
			}
			echo "<br/> From :- ".$firstslipfrom. "    To :- ". $firstslipto . "<br/>";
			
			
			//First request slip
			// First Part
			/*print_r($arrFirstRequestSlip);
			exit;*/
			$branchDetailsF = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[30]."'");
			$branchweakdays = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[30]."')");
			$branchhalfdays = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."' AND branch_sub_code='".$arrFirstRequestSlip[30]."')");
			
			//$pdf = new FTCPDF();
			$pdf = new TCPDF();
			$pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
			$pdf->AddPage();

			$arial = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial.ttf", 'TrueTypeUnicode', '', 96);
	        $arialb = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial_B.ttf", 'TrueTypeUnicode', '', 96);
	        
	        $arialN = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\ARIALN.TTF", 'TrueTypeUnicode', '', 96);
	        $arialNarrow = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\ArialNarrow.TTF", 'TrueTypeUnicode', '', 96);
	        $arialNB = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\ARIALNB.TTF", 'TrueTypeUnicode', '', 96);

	        



			$pdf->SetFont($arialNB,'B',7.5);
			$pdf->Text(14,7,$bankDetails->bank_name);//19
			$pdf->SetFont($arialNB,'B',6.5);
			$pdf->Text(14,10,$branchDetailsF->branch_name . " : ". $branchDetailsF->branch_address1 .',');

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
			$pdf->Text(14,13,$addressLine2);			

			$trn_str = $trn_string_array[$arrFirstRequestSlip[25]];
			if($arrFirstRequestSlip[25]!=12){
				$pdf->SetFont($arialNB,'B',10);
				if($arrFirstRequestSlip[25]==13 && $arrFirstRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
					$pdf->Text(24,21,'FDCC A/c. No.:  '.$arrFirstRequestSlip[11]);
				} else {
					$pdf->Text(24,21,$trn_str . ' A/c. No.:  '.$arrFirstRequestSlip[11]);
				}
					
				
				$pdf->SetFont($arialNB,'B',7);
				$pdf->Text(24,25,trim($arrFirstRequestSlip[0]));
				$pdf->Text(24,28,trim($arrFirstRequestSlip[1]));
				$pdf->Text(24,31,trim($arrFirstRequestSlip[2]));
				$pdf->Text(24,34,trim($arrFirstRequestSlip[3]));
				$pdf->Text(24,37,trim($arrFirstRequestSlip[6])); 
				$pdf->Text(24,40,trim($arrFirstRequestSlip[7]));
				$pdf->Text(24,43,$arrFirstRequestSlip[4]);	
				// $pdf->Text(24,43,$arrFirstRequestSlip[4]."-".$arrFirstRequestSlip[5]);	
			}else{
				$pdf->SetFont($arialNB,'B',7);
				$pdf->Text(24,22,trim($arrFirstRequestSlip[0]));
				$pdf->SetFont($arial,'',7);
				$pdf->Text(24,25,trim($arrFirstRequestSlip[2])." BR. ".$arrFirstRequestSlip[4]);
				$pdf->Text(24,40,$arrFirstRequestSlip[4]."-".$arrFirstRequestSlip[5]);
			}		

			//--------> print vertically start
			$x = 10;
			$pdf->SetFont($arial,'',4);
			$pdf->SetXY($x, 76);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no 
			$pdf->Rotate(0);
			$pdf->StopTransform();

			$pdf->SetXY($x, 56);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[27]);  //  operator id
			$pdf->Rotate(0);
			$pdf->StopTransform();

			$pdf->SetXY($x, 37);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			$pdf->StopTransform();
			// -------> print vertically end

			//--------> print vertically start for second
			$x1 = 89;
			$pdf->SetFont($arial,'',5);
			$pdf->SetXY($x1, 76);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5,"REP " . $arrFirstRequestSlip[26]);  // unique request no
			$pdf->Rotate(0);
			$pdf->StopTransform();

			$pdf->SetXY($x1, 56);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $arrFirstRequestSlip[27]);  //  operator id
			$pdf->Rotate(0);
			$pdf->StopTransform();

			$pdf->SetXY($x1, 37);
			$pdf->StartTransform();
			$pdf->Rotate(90);
			$pdf->Cell(16, 5, $print_datetime);  //  date time
			$pdf->Rotate(0);
			$pdf->StopTransform();
			// -------> print vertically end


			$pdf->SetFont($arialNB,'B',8.5);
			$pdf->Text(17,54,'Cheque No. From :     ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->Text(35,57,"BRANCH INFORMATION");
			
			$firstno = $arrFirstRequestSlip[8] > 0 ? $arrFirstRequestSlip[8] : "";
			$secondno = $arrFirstRequestSlip[9] > 0 ? $arrFirstRequestSlip[9] : "";
			$thirdno = $arrFirstRequestSlip[10] > 0 ? $arrFirstRequestSlip[10] : "";
			
			// coordinates for printing in small box ----------------------
			$smx = 24; $smy = 62; $smdy = 2.5; $smdotx = $smx + 18.1; $sminfx = $smdotx + 2;

			$pdf->SetFont($arialNB,'B',6);
			$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_reg_busi_hrs);
			$smy += $smdy;

			$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,$branchDetailsF->branch_half_busi_hrs);
			$smy += $smdy;
			
			$pdf->Text($smx,$smy,'Weekly Holiday');
			$pdf->Text($smdotx,$smy,':');
			$pdf->Text($sminfx,$smy,'2ND,4TH,SAT AND SUN');
			$smy += $smdy;

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
			// $smy += $smdy;

			// $pdf->Text($smx,$smy,'Toll Free No.');
			// $pdf->Text($smdotx,$smy,':');
			// $pdf->Text($sminfx,$smy,$branchDetailsF->branch_tollfree_no); 
			// $smy += $smdy;

			// $pdf->Text($smx,$smy,'Branch Service');
			// $pdf->Text($smdotx,$smy,':');
			// $pdf->Text($sminfx,$smy,$branchDetailsF->branch_Services); 
			// printing small box ends ----------------------------------

			// second part
			$secondPartX = 96;

			$pdf->SetFont($arialNB,'B',9);
			// $pdf->Text(105,7,'CHEQUE BOOK REQUEST (BANK COPY)                    DATE:________________');
			$pdf->Text(120,7,'CHEQUE BOOK REQUEST (BANK COPY)');
			$pdf->SetFont($arialNB,'B',8);
			$pdf->Text($secondPartX-2,11,'THE MANAGER');
			$pdf->Text($secondPartX-2,14,$bankDetails->bank_name);
			$pdf->SetFont($arialNB,'B',7.5);
			$pdf->Text($secondPartX-2,17,$branchDetailsF->branch_name . ": ". $branchDetailsF->branch_address1 .',');
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
			$pdf->Text($secondPartX-2,20,$addressLine2);
			
			$pdf->SetFont($arialNB,'B',8.5);
			//$pdf->Text(140,23,$firstslipfrom);
			//$pdf->Text(187,23,$firstslipto);
			
			$pdf->Text($secondPartX+50,23,'Cheque No. From :  ' . str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->SetFont($arialNB,'B',8);
			$pdf->Text($secondPartX,28,'Please Issue _______ Cheque Books Containing _______ Leaves');
			$pdf->SetFont($arialNB,'B',8);
			$pdf->Text($secondPartX,32,'Characteristics :     Bearer        Order');
			$pdf->Text($secondPartX,36,'Cheque Book    :     Normal        Payable At Par');
			// if($arrFirstRequestSlip[25]!=12){
				
			// 	if($arrFirstRequestSlip[25]==13 && $arrFirstRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
			// 		$pdf->Text($secondPartX,40,'FDCC A/c. No.:  '.$arrFirstRequestSlip[11]);
			// 	} else {
			// 		$pdf->Text($secondPartX,40,$trn_str . ' A/c No.: ' . $arrFirstRequestSlip[11]);
			// 	}
				
			// 	// $pdf->Text($secondPartX,40,$trn_str . ' A/c No.: ' . $arrFirstRequestSlip[11]);
			// }
			$pdf->SetFont($arialNB,'B',10.5);
			$pdf->Text($secondPartX,41, $trn_str . ' A/c No.: ' . $arrFirstRequestSlip[11]);
			
			// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,30);
			// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,30);
			
			$pdf->SetFont($arialNB,'B',7.5);
			$pdf->Text(164,60,"Signature Verified / Authorised");//54
			if($arrFirstRequestSlip[25]!=12){
				$pdf->SetFont($arialNB,'B',8);
				$pdf->Text($secondPartX,46, trim($arrFirstRequestSlip[0]));
				$pdf->Text($secondPartX,49,trim($arrFirstRequestSlip[1]));
				$pdf->Text($secondPartX,52,trim($arrFirstRequestSlip[2]));
				$pdf->Text($secondPartX,55,trim($arrFirstRequestSlip[3])); 
				$pdf->Text($secondPartX,58,trim($arrFirstRequestSlip[6]));
				$pdf->Text($secondPartX,61,trim($arrFirstRequestSlip[7]));
				$pdf->Text($secondPartX,64,$arrFirstRequestSlip[4]);
				// $pdf->Text($secondPartX,63,$arrFirstRequestSlip[4]."-".$arrFirstRequestSlip[5]);

			}else{
				
				$pdf->SetFont($arialNB,'B',8);
				$pdf->Text($secondPartX,46, trim($arrFirstRequestSlip[0]));
				$pdf->Text($secondPartX,50,trim($arrFirstRequestSlip[2])." BR. ".$arrFirstRequestSlip[4]);
						
					
			}
			// $pdf->Text($secondPartX,67,'Contact No.: '.$arrFirstRequestSlip[8].'    '.$arrFirstRequestSlip[9].'    '.$arrFirstRequestSlip[10]);				
			$pdf->Text($secondPartX,68,'Contact No.: '.$arrFirstRequestSlip[10]);				
			$pdf->SetFont($arialNB,'B',8);			
			$pdf->SetXY($secondPartX+4, 72);//67

			/*print_r($arrFirstRequestSlip);
			exit;*/
			if($arrFirstRequestSlip[25]!=10){
				$prefix="For ";
			}else{
				$prefix="";
			}
			$pdf->Cell(100,5,$prefix . $arrFirstRequestSlip[0], 0, 0,'R');		

			$pdf->Text($secondPartX,80,'Signature of Bearer');
						
			$pdf->SetFont($arialNB,'B',7);
			
			//if($arrFirstRequestSlip[25]==12){

				$pdf->SetXY($secondPartX+4, 84);//78
				if ($arrFirstRequestSlip[28] == "") {
					$pdf->Cell(100, 5, $arrFirstRequestSlip[23], '', 0, 'R');
				} else if ($arrFirstRequestSlip[29] == "") {
					$pdf->Cell(100, 5, $arrFirstRequestSlip[23] . ' / ' . $arrFirstRequestSlip[28], '', 0, 'R');
				} else {

					$pdf->Cell(100, 5, $arrFirstRequestSlip[23] . ' / ' . $arrFirstRequestSlip[28], '', 0, 'R');
					$pdf->SetXY($secondPartX+4, 87);
					$pdf->Cell(100, 5, $arrFirstRequestSlip[29], '', 0, 'R');
				}

			/*}else{

				$pdf->SetXY(162, 84);
				if($arrFirstRequestSlip[23] == '')
					$pdf->Cell(40, 5, "Self", 0, 0, 'R');
				else 
					$pdf->Cell(40, 5, $arrFirstRequestSlip[23], 0, 0, 'R');

			}*/
			
			if($noOfRequestSlip>1)
			{
				if($numberofbooks==1)
				{
					$secondslipfrom = $arrSecondRequestSlip[14];
					$secondslipto = $arrSecondRequestSlip[14] + $arrSecondRequestSlip[13] - 1;
					
					$thirdslipfrom = $arrThirdRequestSlip[14]; 
					$thirdslipto = $arrThirdRequestSlip[14] + $arrThirdRequestSlip[13] - 1;
				}
				else
				{
					$noofbooks = $numberofbooks - 1;
					$secondslipfrom = $arrSecondRequestSlip[14] + ($noofbooks * $arrSecondRequestSlip[13]);
					$secondslipto = $secondslipfrom + $arrSecondRequestSlip[13];
					$thirdslipfrom = $arrThirdRequestSlip[14] + ($noofbooks * $arrThirdRequestSlip[13]);
					$thirdslipto = $thirdslipfrom + $arrThirdRequestSlip[13];
				}
				
				echo "<br/> From :- ".$secondslipfrom. "    To :- ". $secondslipto . "<br/>";
				echo "<br/> From :- ".$thirdslipfrom. "    To :- ". $thirdslipto . "<br/>";
					
				if($arrSecondRequestSlip[14] != "" && $arrSecondRequestSlip[15] != ""){
				
					$branchDetailsS = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[30]."'");
					$branchweakdaysSec = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[30]."')");
					$branchhalfdaysSec = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."' AND branch_sub_code='".$arrSecondRequestSlip[30]."')");
					
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text(14,100,$bankDetails->bank_name);
					$pdf->SetFont($arialNB,'B',6.5);
					$pdf->Text(14,103,$branchDetailsS->branch_name . ": ". $branchDetailsS->branch_address1 .',');
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
					$pdf->Text(14,106,$addressLine2);												
					//$pdf->SetFont($arialb,'B',8);

					//$pdf->Text(24,111, 'Cheque No. From  '.str_pad($arrSecondRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrSecondRequestSlip[15], 6, "0", STR_PAD_LEFT));
					
					$trn_str = $trn_string_array[$arrSecondRequestSlip[25]];

					if($arrSecondRequestSlip[25]!=12){
						$pdf->SetFont($arialNB,'B',10);

						if($arrSecondRequestSlip[25]==13 && $arrSecondRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
							$pdf->Text(24,114,'FDCC A/c. No.:  '.$arrSecondRequestSlip[11]);
						} else {
							$pdf->Text(24,114,$trn_str . ' A/c. No.:  '.$arrSecondRequestSlip[11]);
						}
						//$pdf->Text(24,114,$trn_str . ' A/c. No. :  '.$arrSecondRequestSlip[11]);
						
						
						$pdf->SetFont($arialNB,'B',7);
						$pdf->Text(24,118,trim($arrSecondRequestSlip[0]));
						$pdf->Text(24,121,trim($arrSecondRequestSlip[1]));
						$pdf->Text(24,124,trim($arrSecondRequestSlip[2]));
						$pdf->Text(24,127,trim($arrSecondRequestSlip[3]));
						$pdf->Text(24,130,trim($arrSecondRequestSlip[6])); 
						$pdf->Text(24,133,trim($arrSecondRequestSlip[7]));
						// $pdf->Text(24,136,$arrSecondRequestSlip[4]."  ".$arrSecondRequestSlip[5]);
						$pdf->Text(24,136,$arrSecondRequestSlip[4]);

					}else{
						$pdf->SetFont($arialNB,'B',7);
						$pdf->Text(24,115,trim($arrSecondRequestSlip[0]));
						$pdf->SetFont($arial,'',7);
						$pdf->Text(24,118,trim($arrSecondRequestSlip[2])." BR. ".$arrSecondRequestSlip[4]);
						$pdf->Text(24,133,$arrSecondRequestSlip[4]."-".$arrSecondRequestSlip[5]);
					}

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->SetXY($x, 169);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x, 149);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x, 138);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					$pdf->StopTransform();
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont($arial,'',5);
					$pdf->StartTransform();
					$pdf->SetXY($x1, 169);
					$pdf->Rotate(90);
					$pdf->Cell(16, 5,"REP " . $arrSecondRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x1, 149);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrSecondRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x1, 138);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					$pdf->StopTransform();
					// -------> print vertically end

					$pdf->SetFont($arialNB,'B',8.5);
					$pdf->Text(17,147,'Cheque No. From :     ' . str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT) . '     To      ' . str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,158,"BRANCH INFORMATION");
					
					$firstno = $arrSecondRequestSlip[8] > 0 ? $arrSecondRequestSlip[8] : "";
					$secondno = $arrSecondRequestSlip[9] > 0 ? $arrSecondRequestSlip[9] : "";
					$thirdno = $arrSecondRequestSlip[10] > 0 ? $arrSecondRequestSlip[10] : "";
					
					// coordinates for printing in small box ----------------------
					$smx = 24; $smy = 155; $smdy = 2.5; $smdotx = $smx + 18.1; $sminfx = $smdotx + 2;

					$pdf->SetFont($arialNB,'B',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsS->branch_half_busi_hrs);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Weekly Holiday');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,'2ND,4TH,SAT AND SUN');
					$smy += $smdy;

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
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Toll Free No.');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsS->branch_tollfree_no); 
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Branch Service');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsS->branch_Services); 
					// printing small box ends ----------------------------------
					
					//Second Part
					
					$pdf->SetFont($arialNB,'B',9);
					$pdf->Text(120,100,'CHEQUE BOOK REQUEST (BANK COPY)');
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX-2,104,'THE MANAGER');
					$pdf->Text($secondPartX-2,107,$bankDetails->bank_name);
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text($secondPartX-2,110,$branchDetailsS->branch_name . ": ". $branchDetailsS->branch_address1 .',');
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
					$pdf->Text($secondPartX-2,113,$addressLine2);
					//$pdf->Text($secondPartX,113,$branchDetailsS->branch_address2 .", ". $branchDetailsS->branch_address3 .', '.$branchDetailsS->city_place. '-'. $branchDetailsS->branch_pin);
					$pdf->SetFont($arialNB,'B',8.5);
					//$pdf->Text(140,116,$arrSecondRequestSlip[14]);
					//$pdf->Text(187,116,$arrSecondRequestSlip[15]);
					$pdf->Text($secondPartX+50,116,'Cheque No. From  '.str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($secondslipto, 6, "0", STR_PAD_LEFT));
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX,121,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX,125,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,129,'Cheque Book    :      Normal         Payable At Par');
					//$pdf->Text(115,137, 'Cheque No. From  '.$arrSecondRequestSlip[14].'       To  '.$arrSecondRequestSlip[15]);
					// if($arrSecondRequestSlip[25]!=12){
					// 	if($arrFirstRequestSlip[25]==13 && $arrFirstRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
					// 		$pdf->Text($secondPartX,133,'FDCC A/c. No.:  '.$arrFirstRequestSlip[11]);
					// 	} else {
					// 		$pdf->Text($secondPartX,133,$trn_str . ' A/c. No.:  '.$arrFirstRequestSlip[11]);
					// 	}

					// 	//$pdf->Text($secondPartX,133,$trn_str . ' A/c No.:  '.$arrSecondRequestSlip[11]);
					// }
					$pdf->SetFont($arialNB,'B',10.5);
					$pdf->Text($secondPartX,134, $trn_str . ' A/c No.: ' . $arrSecondRequestSlip[11]);

					
					// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,123);
					// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,123);
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text(164,156,"Signature Verified / Authorised");//147
					if($arrSecondRequestSlip[25]!=12){
						$pdf->SetFont($arialNB,'B',8);
						$pdf->Text($secondPartX,139,trim($arrSecondRequestSlip[0]));
						$pdf->Text($secondPartX,142,trim($arrSecondRequestSlip[1])); 
						$pdf->Text($secondPartX,145,trim($arrSecondRequestSlip[2]));
						$pdf->Text($secondPartX,148,trim($arrSecondRequestSlip[3])); 
						$pdf->Text($secondPartX,151,trim($arrSecondRequestSlip[6])); 
						$pdf->Text($secondPartX,154,trim($arrSecondRequestSlip[7])); 
						// $pdf->Text($secondPartX,157,$arrSecondRequestSlip[4]."-".$arrSecondRequestSlip[5]);	
						$pdf->Text($secondPartX,157,$arrSecondRequestSlip[4]);	
					}else{
						$pdf->SetFont($arialb,'B',8);
						$pdf->Text($secondPartX,139, trim($arrSecondRequestSlip[0]));
						$pdf->Text($secondPartX,142,trim($arrSecondRequestSlip[2])." BR. ".$arrSecondRequestSlip[4]);
					}			
					$pdf->Text($secondPartX,159,'Contact No.:'.$arrSecondRequestSlip[10]);					
					$pdf->SetFont($arialNB,'B',8);					
					$pdf->SetXY($secondPartX+4, 163);//159
					if($arrSecondRequestSlip[25]!=10){
						$prefix="For ";
					}else{
						$prefix="";
					}
					$pdf->Cell(100,5,$prefix . $arrSecondRequestSlip[0], 0, 0,'R');		
					$pdf->Text($secondPartX,170,'Signature of Bearer');
										
					$pdf->SetFont($arialNB,'B',7);

					//if($arrSecondRequestSlip[25]==12){
							$pdf->SetXY($secondPartX+4, 175);//171
							if ($arrSecondRequestSlip[28] == "") {
								$pdf->Cell(100, 5, $arrSecondRequestSlip[23], '', 0, 'R');
							} else if ($arrSecondRequestSlip[29] == "") {
								$pdf->Cell(100, 5, $arrSecondRequestSlip[23] . ' / ' . $arrSecondRequestSlip[28], '', 0, 'R');
							} else {

								$pdf->Cell(100, 5, $arrSecondRequestSlip[23] . ' / ' . $arrSecondRequestSlip[28], '', 0, 'R');
								$pdf->SetXY($secondPartX+4, 180);
								$pdf->Cell(100, 5, $arrSecondRequestSlip[29], '', 0, 'R');
							}
				/*	}else{

						$pdf->SetXY(162, 177);
						if($arrSecondRequestSlip[23] == '')
							$pdf->Cell(40, 5, "Self", 0, 0, 'R');
						else
							$pdf->Cell(40, 5, $arrSecondRequestSlip[23], 0, 0, 'R');
					}*/

				}
				
				if($arrThirdRequestSlip[14] != "" && $arrThirdRequestSlip[15] != ""){
				
					$branchDetailsT = $db->get_row("SELECT b.*,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[30]."'");

					$branchweakdaysThi = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[30]."')");
					$branchhalfdaysThi = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."' AND branch_sub_code='".$arrThirdRequestSlip[30]."')");
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text(14,193,$bankDetails->bank_name);
					$pdf->SetFont($arialNB,'B',6.5);
					$pdf->Text(14,196,$branchDetailsT->branch_name ." : " . $branchDetailsT->branch_address1 .',');
					// $pdf->Text(19,199,$branchDetailsT->branch_address2 . ", " .$branchDetailsT->branch_address3 .', '.$branchDetailsT->city_place. '-'. $branchDetailsT->branch_pin);
													
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
					$pdf->Text(14,199,$addressLine2);
																	
					$pdf->SetFont($arialNB,'B',10);
					//$pdf->Text(45,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(85,209,$arrThirdRequestSlip[15]);	
					
					//$pdf->Text(24,204, 'Cheque No. From  '.str_pad($arrThirdRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrThirdRequestSlip[15], 6, "0", STR_PAD_LEFT));
					//$pdf->SetFont($arialb,'B',8);
					$trn_str = $trn_string_array[$arrThirdRequestSlip[25]];
					if($arrThirdRequestSlip[25]!=12){

						if($arrThirdRequestSlip[25]==13 && $arrThirdRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
							$pdf->Text(24,207,'FDCC A/c. No.:  '.$arrThirdRequestSlip[11]);
						} else {
							$pdf->Text(24,207,$trn_str . ' A/c. No.:  '.$arrThirdRequestSlip[11]);
						}

						//$pdf->Text(24,207,$trn_str . ' A/c. No. :  '.$arrThirdRequestSlip[11]);
						
						
						$pdf->SetFont($arialNB,'B',7);
						$pdf->Text(24,211,trim($arrThirdRequestSlip[0]));
						$pdf->Text(24,214,trim($arrThirdRequestSlip[1]));
						$pdf->Text(24,217,trim($arrThirdRequestSlip[2]));
						$pdf->Text(24,220,trim($arrThirdRequestSlip[3]));
						$pdf->Text(24,223,trim($arrThirdRequestSlip[6])); 
						$pdf->Text(24,226,trim($arrThirdRequestSlip[7]));
						$pdf->Text(24,229,$arrThirdRequestSlip[4]);
						// $pdf->Text(24,229,$arrThirdRequestSlip[4]."  ".$arrThirdRequestSlip[5]);
					}else{
						$pdf->SetFont($arialNB,'B',7);
						$pdf->Text(24,208,trim($arrThirdRequestSlip[0]));
						$pdf->SetFont($arialb,'B',7);
						$pdf->Text(24,211,trim($arrThirdRequestSlip[2])." BR. ".$arrThirdRequestSlip[4]);
						$pdf->Text(24,226,$arrThirdRequestSlip[4]."-".$arrThirdRequestSlip[5]);
					}

					//--------> print vertically start
					$pdf->SetFont($arial,'',4);
					$pdf->SetXY($x, 262);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x, 242);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x, 227);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					$pdf->StopTransform();
					// -------> print vertically end

					//--------> print vertically start
					$pdf->SetFont($arial,'',4);
					$pdf->SetXY($x1, 262);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, "REP " .$arrThirdRequestSlip[26]);  // unique request no
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x1, 242);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $arrThirdRequestSlip[27]);  //  operator id
					$pdf->Rotate(0);
					$pdf->StopTransform();

					$pdf->SetXY($x1, 227);
					$pdf->StartTransform();
					$pdf->Rotate(90);
					$pdf->Cell(16, 5, $print_datetime);  //  date time
					$pdf->Rotate(0);
					$pdf->StopTransform();
					// -------> print vertically end

					$pdf->SetFont($arialNB,'B',8.5);
					$pdf->Text(17,235, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));
					$pdf->Text(35,238,"BRANCH INFORMATION");
					
					$firstno = $arrThirdRequestSlip[8] > 0 ? $arrThirdRequestSlip[8] : "";
					$secondno = $arrThirdRequestSlip[9] > 0 ? $arrThirdRequestSlip[9] : "";
					$thirdno = $arrThirdRequestSlip[10] > 0 ? $arrThirdRequestSlip[10] : "";
					
					// coordinates for printing in small box ----------------------
					$smx = 24; $smy = 243; $smdy = 2.5; $smdotx = $smx + 18.1; $sminfx = $smdotx + 2;

					$pdf->SetFont($arialNB,'B',6);
					$pdf->Text($smx,$smy,'Regu. Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_reg_busi_hrs);
					$smy += $smdy;

					$pdf->Text($smx,$smy,'Half Day Busi. Hrs.');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,$branchDetailsT->branch_half_busi_hrs);
					$smy += $smdy;
					
					$pdf->Text($smx,$smy,'Weekly Holiday');
					$pdf->Text($smdotx,$smy,':');
					$pdf->Text($sminfx,$smy,'2ND,4TH,SAT AND SUN');
					$smy += $smdy;

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
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Toll Free No.');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsT->branch_tollfree_no); 
					// $smy += $smdy;

					// $pdf->Text($smx,$smy,'Branch Service');
					// $pdf->Text($smdotx,$smy,':');
					// $pdf->Text($sminfx,$smy,$branchDetailsT->branch_Services); 

					// printing small box ends ----------------------------------					
					//Second Part
					
					$pdf->SetFont($arialNB,'B',9);
					$pdf->Text(120,193,'CHEQUE BOOK REQUEST (BANK COPY)');
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX-2,196,'THE MANAGER');
					$pdf->Text($secondPartX-2,199,$bankDetails->bank_name);
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text($secondPartX-2,202,$branchDetailsT->branch_name . ": ". $branchDetailsT->branch_address1 .',');
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
					$pdf->Text($secondPartX-2,205,$addressLine2);

					$pdf->SetFont($arialNB,'B',8.5);
					//$pdf->Text(140,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(187,209,$arrThirdRequestSlip[15]);
					$pdf->Text($secondPartX+50,208, 'Cheque No. From  '.str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT).'     To      '.str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX,213,'Please Issue _______ Cheque Books Containing _______ Leaves');
					$pdf->SetFont($arialNB,'B',8);
					$pdf->Text($secondPartX,217,'Characteristics :     Bearer        Order');
					$pdf->Text($secondPartX,221,'Cheque Book    :      Normal         Payable At Par');
					$pdf->SetFont($arialNB,'B',10.5);
					if($arrThirdRequestSlip[25]!=12){
						if($arrThirdRequestSlip[25]==13 && $arrThirdRequestSlip[31] =='FIXED DEPOSIT CASH CREDIT' ) {
							$pdf->Text($secondPartX,226,'FDCC A/c. No.:  '.$arrThirdRequestSlip[11]);
						} else {
							$pdf->Text($secondPartX,226,$trn_str . ' A/c. No.:  '.$arrThirdRequestSlip[11]);
						}

						//$pdf->Text($secondPartX,225,$trn_str . ' A/c No.: ' . $arrThirdRequestSlip[11]);
					}
					//$pdf->Text(115,229, 'Cheque No. From  '.$arrThirdRequestSlip[14].'       To  '.$arrThirdRequestSlip[15]);
					
					// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",137,215);
					// $pdf->Image(dirname(__FILE__)."\images\checkbox.png",150,215);
					
					$pdf->SetFont($arialNB,'B',7.5);
					$pdf->Text(164,246,"Signature Verified / Authorised");//239
					if($arrThirdRequestSlip[25]!=12){
						$pdf->SetFont($arialNB,'B',8);
						$pdf->Text($secondPartX,231,trim($arrThirdRequestSlip[0]));
						$pdf->Text($secondPartX,234,trim($arrThirdRequestSlip[1]));
						$pdf->Text($secondPartX,237,trim($arrThirdRequestSlip[2]));
						$pdf->Text($secondPartX,240,trim($arrThirdRequestSlip[3])); 
						$pdf->Text($secondPartX,243,trim($arrThirdRequestSlip[6])); 
						$pdf->Text($secondPartX,246,trim($arrThirdRequestSlip[7])); 
						$pdf->Text($secondPartX,249,$arrThirdRequestSlip[4]);
						// $pdf->Text($secondPartX,248,$arrThirdRequestSlip[4]."-".$arrThirdRequestSlip[5]);
					}else{
						$pdf->SetFont($arialNB,'B',8);
						$pdf->Text($secondPartX,231, trim($arrThirdRequestSlip[0]));
						$pdf->Text($secondPartX,234,trim($arrThirdRequestSlip[2])." BR. ".$arrThirdRequestSlip[4]);
					}		
					$pdf->Text($secondPartX,253,'Contact No.:'.$arrThirdRequestSlip[8].'    '.$arrThirdRequestSlip[9].'    '.$arrThirdRequestSlip[10]);					
					$pdf->SetFont($arialNB,'B',8);
					$pdf->SetXY($secondPartX+4, 255);//251
					if($arrThirdRequestSlip[25]!=10){
						$prefix="For ";
					}else{
						$prefix="";
					}
					$pdf->Cell(100,5,$prefix . $arrThirdRequestSlip[0], 0, 0,'R');		
					$pdf->Text($secondPartX,261,'Signature of Bearer');
					
					$pdf->SetFont($arialNB,'B',7);

					//if($arrThirdRequestSlip[25]==12){
						$pdf->SetXY($secondPartX+4, 266);
							if ($arrThirdRequestSlip[28] == "") {
								$pdf->Cell(100, 5, $arrThirdRequestSlip[23], '', 0, 'R');
							} else if ($arrThirdRequestSlip[29] == "") {
								$pdf->Cell(100, 5, $arrThirdRequestSlip[23] . ' / ' . $arrThirdRequestSlip[28], '', 0, 'R');
							} else {

								$pdf->Cell(100, 5, $arrThirdRequestSlip[23] . ' / ' . $arrThirdRequestSlip[28], '', 0, 'R');
								$pdf->SetXY($secondPartX+4, 269);
								$pdf->Cell(100, 5, $arrThirdRequestSlip[29], '', 0, 'R');
							}
					/*}else{	
						$pdf->SetXY(162, 269);
						if($arrThirdRequestSlip[23] == '')
							$pdf->Cell(40, 5, "Self", 0, 0, 'R');
						else
							$pdf->Cell(40, 5, $arrThirdRequestSlip[23], 0, 0, 'R');

					}*/
				}
			}
			
			// $pdf->Output("Slip.pdf",'F'); 
			
			$pdf->Output(dirname(__FILE__)."\Slip.pdf", 'F');
			// $imagePath = dirname(__FILE__)."\Cheque.pdf";

			//echo $printersinfo[0][0];
			// exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
			//sleep(3);
		}

		
		function printCheques($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
		{
			global $db, $print_datetime;
			
			$arrFirstChequeData = explode("~",$firstchequedata);
			$arrSecondChequeData = explode("~",$secondchequedata);
			$arrThirdChequeData = explode("~",$thirdchequedata);
			
			// Positions of some variables
			$branchX = 52;		// Branch address X position
			$ifscX = 26;//122		// IFSC Code X position
			$accnoX = 26;		// A/C no X position
			$barcodeX = 23;		// Barcode X position
			$revAccnoX = 90;		// Barcode X position
			$bearerX = 193;		// BEARER X position

			$x = 10;			// Vertical printing X position

			$chqseriesX = 59.5; //60.7
			$micr1X = 88;		// 86.7
			$micr2X = 122.8;	// 121.5
			$trncodeX = 148.1;	// 146.8

			// Positions
			$arrPos = array(); 
			$arrPos[0] = array("BankAddrY" => 12, "AcnoY" => 48, "barcodeY" => 53, "revAccnoY" => 55, "IfscY" => 71, "Name" => 47, "VUniqReq" => 70, "MICRY" => 82.5, "bearer" => 21);
			$arrPos[1] = array("BankAddrY" => 104.5, "AcnoY" => 140, "barcodeY" => 146, "revAccnoY" => 147, "IfscY" => 164 , "Name" => 139, "VUniqReq" => 160, "MICRY" => 175, "bearer" => 114);
			$arrPos[2] = array("BankAddrY" => 197.5, "AcnoY" => 233, "barcodeY" => 239, "revAccnoY" => 240, "IfscY" => 258 , "Name" => 233, "VUniqReq" => 260, "MICRY" => 267.5, "bearer" => 206.5);
		
			print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			echo "cheque<br/>";


			//set fonts
			// echo dirname(__FILE__) . "\\font\Arial.ttf";
	        // $arial = $pdf->addTTFfont(dirname(__FILE__) . "\\font\Arial.ttf", 'TrueTypeUnicode', '', 96);
	        // $arialb = $pdf->addTTFfont(dirname(__FILE__) . "\\font\Arial_B.ttf", 'TrueTypeUnicode', '', 96);
	        
	        $arial = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial.ttf", 'TrueTypeUnicode', '', 96);
	        $arialb = TCPDF_FONTS::addTTFfont(dirname(__FILE__) . "\\font\Arial_B.ttf", 'TrueTypeUnicode', '', 96);

			$pdf = new TCPDF();
			$pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
			$pdf->AddPage();

			$arrChqData = array();
			$arrChqData[0] = $arrFirstChequeData;
			$arrChqData[1] = $arrSecondChequeData;
			$arrChqData[2] = $arrThirdChequeData;
			
			$pdf->AddFont('E-13B_0','','E-13B_0.php');
			//$pdf->SetFont('E-13B_0','',12);

			for ($i = 0; $i < $noofCheque; $i++) {
				if($arrChqData[$i][5] == "")
					break;
				$pdf->SetFont($arialb, 'B', 6);
				$branchDetails = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrChqData[$i][23]."' AND branch_sub_code='".$arrChqData[$i][26]."'");				

				
				$pdf->Text($branchX, $arrPos[$i]["BankAddrY"], $branchDetails->branch_name.": ".$branchDetails->branch_address1.",");
				$y = $arrPos[$i]["BankAddrY"] + 2;

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
				
				if($arrChqData[$i][6]==12||$arrChqData[$i][6]=="12"){
					$pdf->SetFont($arialb,'B',8);
					$pdf->Text(10, $y-7,'__________');
					$pdf->Text(10, $y-4,'A/C. PAYEE');
					$pdf->Text(10, $y-3.7,'__________');
					$pdf->SetFont($arialb,'B',10);
					$pdf->Text($branchX+77, $y-5,'PAY ORDER');

					$pdf->SetFont($arialb,'B',8);
					$pdf->Text($bearerX,$arrPos[$i]['bearer'],'Order');
				}else{

					$pdf->SetFont($arialb,'B',8);
					$pdf->Text($bearerX,$arrPos[$i]['bearer'],'Bearer');
					// $pdf->Text($bearerX,$arrPos[$i]['bearer'],'OR BEARER');
				}


				if($arrChqData[$i][6]==10){
					$acctPrefix="Savings A/c. No.: "; 
				}else if($arrChqData[$i][6]==11){
					$acctPrefix="Current A/c. No.: "; 
				}else{
					$acctPrefix="Not Over RS.: ";
				}

				$pdf->SetFont($arialb,'B',10.5);
				$pdf->Text($accnoX, $arrPos[$i]["AcnoY"], $acctPrefix.$arrChqData[$i][5]); // account no

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
	                'fontsize' => 7,
	                'stretchtext' => 4
	            );

	            $pdf->write1DBarcode($arrChqData[$i][5], 'C39', $barcodeX, $arrPos[$i]["barcodeY"], 50, 6, '', $style1D, 'N');




	            // reversre string background
	            $tempY = 0;
	            $template_img_generate = dirname(__FILE__) . "\images\Cheque Wave.png";

	            $pdf->Image($template_img_generate, $revAccnoX, $arrPos[$i]["revAccnoY"], 33.5, '3', "PNG", '', 'R', false);
	            // $pdf->Image($template_img_generate, $x = $revAccnoX, $y = $arrPos[$i]["revAccnoY"], $w = 30, $h = 3, $type = 'PNG', $link = '', $align = '', $resize = false, $dpi = 300, $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false );

	            $numberOffset=array(0=>1,1=>1,2=>1.4,3=>1.5,4=>1.6,5=>1.2,6=>1.5,7=>1.2,8=>1.5,9=>1.5);
        		$numberToWord=array(0=>"ZERO",1=>"ONE",2=>"TWO",3=>"THREE",4=>"FOUR",5=>"FIVE",6=>"SIX",7=>"SEVEN",8=>"EIGHT",9=>"NINE");

	            $value = strrev($arrChqData[$i][5]);
	            $microlinestr=$value;

	            $pdf->SetFont($arialb, 'B', 10.5, '', false);
	            // $pdf->setFontSpacing(0.5);
	            $pdf->SetTextColor(0,0,0);
	            $pdf->SetXY($revAccnoX-0.8, $arrPos[$i]["revAccnoY"]-0.7);
	            $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.1, 'depth_h'=>0.1, 'color'=>array(0,0,0), 'opacity'=>5, 'blend_mode'=>'Normal'));
	            $pdf->Cell(0, 0, $microlinestr, 0, false, 'L');   
	            $pdf->setTextShadow(array('enabled'=>false, 'depth_w'=>0.1, 'depth_h'=>0.1, 'color'=>array(0,0,0), 'opacity'=>5, 'blend_mode'=>'Normal'));
	        

	            $pdf->SetFont($arialb, '', 1.5, '', false);
	            $pdf->SetTextColor(0, 0, 0);
	            $pdf->setFontSpacing(0);
	            //Bottom Characters Section 
	            $yCharacter=$arrPos[$i]["revAccnoY"] + $tempY;      
	            

	            $numericArr="".$value;

	            $yWordNumber=$arrPos[$i]["revAccnoY"]+3;      
	            if($numericArr[0]==1){
	                $xBottom=$revAccnoX-2.3;
	            }else{
	                $xBottom=$revAccnoX-2.3;
	            }
	            $spacing=0.6;
	        
	            for($p=0;$p<strlen($numericArr);$p++){
	                // //$arr[] = $numericArr[$i];
	                // if($p==0){
	                //     $xBottom = $xBottom+$spacing;
	                // }else{

	                //     if($numberOffset[$numericArr[$p-1]]>2&&$numberOffset[$numericArr[$p]]>2){
	                //         $xBottom = $xBottom+$spacing+$numberOffset[$numericArr[$p]]+($numberOffset[$numericArr[$p-1]]/6);    
	                //     }else if($numberOffset[$numericArr[$p-1]]>2&&$numberOffset[$numericArr[$p]]!=1.6){
	                //         $xBottom = $xBottom+$spacing+$numberOffset[$numericArr[$p]]+($numberOffset[$numericArr[$p-1]]/8);    
	                //     }else{

	                //         if($numericArr[$p-1]==1){
	                //             $xBottom = $xBottom+$spacing+$numberOffset[$numericArr[$p]]+($numberOffset[$numericArr[$p-1]]/8);
	                //         }else{    
	                //             $xBottom = $xBottom+$spacing+$numberOffset[$numericArr[$p]]+($numberOffset[$numericArr[$p-1]]/3);
	                //         }
	                //     }    
	                    
	                // }

	                $pdf->SetXY($xBottom = $xBottom +2, $yWordNumber);
	                $pdf->Cell(0, 0, $numberToWord[$numericArr[$p]], 0, false, 'L');
	            }
	            // reversre string background

				$pdf->SetFont($arialb,'B',8);
				$pdf->Text($ifscX, $arrPos[$i]["IfscY"],'IFSC CODE : '.$branchDetails->branch_neftifsccode);

				$pdf->SetFont($arial,'',7);
				/*print_r($arrChqData[$i]);
				exit;*/
				$arrChqData[$i][6]=(int)trim($arrChqData[$i][6]);
				$arrChqData[$i][7]=(string)trim($arrChqData[$i][7]);
				$arrChqData[$i][11]=(string)trim($arrChqData[$i][11]);
				$arrChqData[$i][12]=(string)trim($arrChqData[$i][12]);
				$arrChqData[$i][21]=(string)trim($arrChqData[$i][21]);

				if ($arrChqData[$i][6] == 10) // auth_sign1
				{
					$pdf->SetXY(0, $arrPos[$i]["Name"]+ 15);
					if ($arrChqData[$i][11] == "SELF" || $arrChqData[$i][11] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7], '', 0, 'R');
					} else if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12], '', 0, 'R');
					}

				}else if($arrChqData[$i][6] == 12)
				{
					$pdf->SetXY(0, $arrPos[$i]["Name"]);
					$pdf->Cell(204,10,"For " . $arrChqData[$i][7],'',0,'R');
									
					$pdf->SetXY(0, $arrPos[$i]["Name"]+ 15);
					if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][11], '', 0, 'R');
					} else if ($arrChqData[$i][13] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12] . ' / ' . $arrChqData[$i][13], '', 0, 'R');
					}

					$pdf->SetFont($arial,'IB',10);
					$pdf->Text(20,$arrPos[$i]["AcnoY"]+25,'on account of ________________________________');

				}else if($arrChqData[$i][21] != "")
				{
					
					
					if( strlen($arrChqData[$i][7]) > 45 ) {
					
						$nameString = str_split($arrChqData[$i][7], 40);
						
						$pdf->SetXY(0, $arrPos[$i]["Name"]);
						$pdf->Cell(204,10,"For " . $nameString[0],'',0,'R');
						
						$pdf->SetXY(0, $arrPos[$i]["Name"] +3);
						$pdf->Cell(204,10,$nameString[1],'',0,'R');
					} else {
						$pdf->SetXY(0, $arrPos[$i]["Name"]);
						$pdf->Cell(204,10,"For " . $arrChqData[$i][7],'',0,'R');
					}

					//$pdf->SetXY(0, $arrPos[$i]["Name"]);
					//$pdf->Cell(204,10,"For " . $arrChqData[$i][7],'',0,'R');
									
					$pdf->SetXY(0, $arrPos[$i]["Name"] + 15);
					//$pdf->Cell(204,10,$arrChqData[$i][21],'',0,'R');
					
					if($arrChqData[$i][27] == "" && $arrChqData[$i][28] == "")
					{
						$pdf->Cell(204,10,$arrChqData[$i][21],'',0,'R');
					}
					else if($arrChqData[$i][28] == "")
					{
						$pdf->Cell(204,10,$arrChqData[$i][21].'/'.$arrChqData[$i][27],'',0,'R');
					}
					else
					{
						$pdf->Cell(204,10,$arrChqData[$i][21].'/'.$arrChqData[$i][27].'/'.$arrChqData[$i][28],'',0,'R');
					}
				}
				//bhavin start 1
				else
				{
					if($arrChqData[$i][21] == "1")
					{
						$pdf->SetXY(0,$arrPos[$i]["Name"] + 20);
						$pdf->Cell(204,10,'AUTHORISED SIGNATORIES','',0,'R');
						$pdf->SetXY(0, $arrPos[$i]["Name"]);
						if($arrChqData[$i][11] == "" && $arrChqData[$i][12] == "")
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7],'',0,'R');
						}
						else if($arrChqData[$i][12] == "")
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7].' / '.$arrChqData[$i][11],'',0,'R');		
						}
						else
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7].' / '.$arrChqData[$i][11].' / '.$arrChqData[$i][12],'',0,'R');		
						}
					}
					else
					{
						$pdf->SetXY(0, $arrPos[$i]["Name"]);
						if($arrChqData[$i][11] == "" && $arrChqData[$i][12] == "")
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7],'',0,'R');
						}
						else if($arrChqData[$i][12] == "")
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7].' / '.$arrChqData[$i][11],'',0,'R');		
						}
						else
						{
							$pdf->Cell(204,10,"For " . $arrChqData[$i][7].' / '.$arrChqData[$i][11].' / '.$arrChqData[$i][12],'',0,'R');		
						}
					}
				}


				

				//bhavin end 1
				//--------> print vertically start
				$pdf->SetFont($arial,'',5);
				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"]);
				$pdf->StartTransform();
				$pdf->Rotate(90);
				$pdf->Cell(17, 5,"REP " . $arrChqData[$i][24]);  // unique request no
				$pdf->Rotate(0);
				$pdf->StopTransform();
				
				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 15);
				$pdf->StartTransform();
				$pdf->Rotate(90);
				$pdf->Cell(17, 5, $arrChqData[$i][25]);  //  operator id
				$pdf->Rotate(0);
				$pdf->StopTransform();

				$pdf->SetXY($x, $arrPos[$i]["VUniqReq"] - 38);
				$pdf->StartTransform();
				$pdf->Rotate(90);
				$pdf->Cell(17, 5, $print_datetime);  //  date time
				$pdf->Rotate(0);
				$pdf->StopTransform();
				// -------> print vertically end

				// Print MICR
				$chqseries = "C" . $arrChqData[$i][0] . "C "; 
				$micr1 = $arrChqData[$i][2] . "A ";
				$micr2 = $arrChqData[$i][4] ."C ";

				$pdf->SetFont('E-13B_0','',12);

				$y = $arrPos[$i]["MICRY"];
				$pdf->Text($chqseriesX, $y, $chqseries);
				$pdf->Text($micr1X, $y, $micr1);
				$pdf->Text($micr2X, $y, $micr2);
				$pdf->Text($trncodeX, $y, $arrChqData[$i][6]);



			}

			
			$pdf->Output(dirname(__FILE__)."\Cheque.pdf", 'F');
			$imagePath = dirname(__FILE__)."\Cheque.pdf";
			

			
			// exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");	
			//	echo "gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1";
		}				
	$db->closeDb();
	?>
	
	</div>
</div>
</body>
</html>
