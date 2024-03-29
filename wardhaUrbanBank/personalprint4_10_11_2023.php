<?php
require_once('global.php');
require('cellpdf.php');
$page_name = "print_preview";
authentication_print();
ini_set("max_execution_time",300000);
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
		
		// Vinod Sharma Coding Starts
		
		if($resultnoofchequeleavestype = $db->get_results("SELECT DISTINCT cps_no_of_books,cps_book_size FROM tb_printque"))
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
			
			$row = $db->get_row("SELECT sum(cps_book_size * cps_no_of_books) as total_leaves, sum(cps_no_of_books) as noofbooks from tb_printque ");						
			$total_leaves = $row->total_leaves;	
			$total_slips = $row->noofbooks;	
			$no_pages = ceil($total_leaves/3);
			
			
			// =============================================== for chk print ==============================================
			
			//$result = $db->get_results("SELECT * FROM tb_printque");
			$result = $db->get_results("SELECT p.*,b.branch_neftifsccode FROM tb_printque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code");			
			$jump=0;
			//echo "SELECT p.*,b.branch_neftifsccode FROM tb_printque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code";
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
						{							//                     		0								1									2									3							4								5							6									7									8										9									10								11							12								13			14		15						16									17								18							19								20									21								22								23								24									25
							$firstrequestsliprow[] = array($rowresultslips->cps_act_name,$rowresultslips->cps_act_address1,$rowresultslips->cps_act_address2,$rowresultslips->cps_act_address3,$rowresultslips->cps_act_city,$rowresultslips->cps_act_pin,$rowresultslips->cps_act_address4,$rowresultslips->cps_act_address5,$rowresultslips->cps_act_telephone_res,$rowresultslips->cps_act_telephone_off,$rowresultslips->cps_act_mobile,$rowresultslips->cps_account_no,$rowresultslips->cps_emailid,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$rowresultslips->branch_address1,$rowresultslips->branch_address2,$rowresultslips->suburb_name,$rowresultslips->city_place,$rowresultslips->suburb_postal_code,$rowresultslips->branch_neftifsccode,$rowresultslips->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->cps_branchmicr_code,$rowresultslips->cps_tr_code);
						}
						elseif($slipCounter % 3 == 2) 
						{						
							$secondrequestsliprow[] = array($rowresultslips->cps_act_name,$rowresultslips->cps_act_address1,$rowresultslips->cps_act_address2,$rowresultslips->cps_act_address3,$rowresultslips->cps_act_city,$rowresultslips->cps_act_pin,$rowresultslips->cps_act_address4,$rowresultslips->cps_act_address5,$rowresultslips->cps_act_telephone_res,$rowresultslips->cps_act_telephone_off,$rowresultslips->cps_act_mobile,$rowresultslips->cps_account_no,$rowresultslips->cps_emailid,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$rowresultslips->branch_address1,$rowresultslips->branch_address2,$rowresultslips->suburb_name,$rowresultslips->city_place,$rowresultslips->suburb_postal_code,$rowresultslips->branch_neftifsccode,$rowresultslips->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->cps_branchmicr_code,$rowresultslips->cps_tr_code);
						}
						elseif($slipCounter % 3 == 0) 
						{						
							$thirdrequestsliprow[] = array($rowresultslips->cps_act_name,$rowresultslips->cps_act_address1,$rowresultslips->cps_act_address2,$rowresultslips->cps_act_address3,$rowresultslips->cps_act_city,$rowresultslips->cps_act_pin,$rowresultslips->cps_act_address4,$rowresultslips->cps_act_address5,$rowresultslips->cps_act_telephone_res,$rowresultslips->cps_act_telephone_off,$rowresultslips->cps_act_mobile,$rowresultslips->cps_account_no,$rowresultslips->cps_emailid,$rowresultslips->cps_book_size,$chkFrom,$chkTo,$rowresultslips->branch_address1,$rowresultslips->branch_address2,$rowresultslips->suburb_name,$rowresultslips->city_place,$rowresultslips->suburb_postal_code,$rowresultslips->branch_neftifsccode,$rowresultslips->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->cps_branchmicr_code,$rowresultslips->cps_tr_code);
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
	
					
					printRequestSlip(2,$firstrequestslipdata,$secondrequestslipdata,$thirdrequestslipdata,3,$noofbooks,$printersinfo);												
					//$noofbooks++;
				}
														
				$firstrequestsliprow = array();
				$secondrequestsliprow = array();
				$thirdrequestsliprow = array();	
				
				
	//================================================================ END =============================================================
							
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
							//							0			1				2							3								4								5							6							7					8								9							10			  11	12      13				14									15								16							17							18									19								20							21									22									23
							$firstchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->branch_neftifsccode,$rowresults->cps_branchmicr_code);																
						}
						elseif(($jump < ($no_pages * 2)) && ($jump >= $no_pages))
						{
							$secondchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->branch_neftifsccode,$rowresults->cps_branchmicr_code);																
						}
						elseif(($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2))
						{	
							$thirdchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresultslips->cps_auth_sign1,$rowresultslips->branch_neftifsccode,$rowresults->cps_branchmicr_code);																
						}	
							
						$jump++;	
					}								
				}
				
				for($j = 0;$j<count($firstchequerow);$j++)
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
					
					printCheques(3,$firstchequedata,$secondchequedata,$thirdchequedata,3,$printersinfo);
				}
												
				$firstchequerow = array();
				$secondchequerow = array();
				$thirdchequerow = array();
											
				$resultInsert = $db->get_results("SELECT * FROM tb_printque");
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
			
			$sqlinsertquery = "INSERT INTO tb_print_req_collection 
				(cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code)
				VALUES
				('".$results->cps_unique_req ."','".$results->cps_micr_code ."','".$results->cps_branchmicr_code ."','".$results->cps_account_no ."','".$results->cps_act_name ."','".$results->cps_no_of_books ."','".$results->cps_dly_bearer_order ."','".$results->cps_book_size ."','".$results->cps_tr_code ."','".$results->cps_atpar ."','".$results->cps_act_jointname1 ."','".$results->cps_act_jointname2 ."','".$results->cps_auth_sign1 ."','".$results->cps_auth_sign2 ."','".$results->cps_auth_sign3 ."','".$results->cps_act_address1 ."','".$results->cps_act_address2 ."','".$results->cps_act_address3 ."','".$results->cps_act_address4 ."','".$results->cps_act_address5 ."','".$results->cps_act_city ."','".$results->cps_state ."','".$results->cps_country ."','".$results->cps_emailid ."','".$results->cps_act_pin ."','".$results->cps_act_telephone_res ."','".$results->cps_act_telephone_off ."','".$results->cps_act_mobile ."','".$results->cps_ifsc_code ."','".$results->cps_chq_no_from ."','".$results->cps_chq_no_to ."','".$results->cps_micr_account_no ."','".$results->cps_date ."','".$results->cps_process_user_id ."','".$results->cps_bsr_code."','".$results->cps_pr_code."')";
			$db->query($sqlinsertquery);		
			
			$deletefromprintque = "DELETE FROM tb_printque WHERE id=".$results->id ."";
			$db->query($deletefromprintque);	
		}
					
		function printRequestSlip($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noOfRequestSlip,$noofbooks,$printersinfo)
		{
			global $db;			
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
			
			$branchDetailsF = $db->get_row("SELECT b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrFirstRequestSlip[24]."'");
			$branchweakdays = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."')");
			$branchhalfdays = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."')");
			
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',7);
			$pdf->Text(12,7,$bankDetails->bank_name);			
			$pdf->SetFont('Arial','B',6);
			$pdf->Text(12,10,$branchDetailsF->branch_address1 .','.$branchDetailsF->branch_address2);
			$pdf->Text(12,13,$branchDetailsF->branch_address3 .','.$branchDetailsF->city_place. '-'. $branchDetailsF->branch_pin);			
			$pdf->SetFont('Arial','B',8);
			//$pdf->Text(45,23,$firstslipfrom);
			//$pdf->Text(85,23,$firstslipto);
			$pdf->Text(24,18, 'Cheque No. From  '.str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT).'       To  '.str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			$pdf->SetFont('Arial','B',8);
			$pdf->Text(24,23,'A/c. No.:  '.$arrFirstRequestSlip[11]);	
			
			
			$pdf->SetFont('Arial','B',8);
			$pdf->Text(24,28,$arrFirstRequestSlip[0]);
			$pdf->SetFont('Arial','',7);
			$pdf->Text(24,31,$arrFirstRequestSlip[1]);
			$pdf->Text(24,34,$arrFirstRequestSlip[2]);
			$pdf->Text(24,37,$arrFirstRequestSlip[3]);
			$pdf->Text(24,40,$arrFirstRequestSlip[6]); 
			$pdf->Text(24,43,$arrFirstRequestSlip[7]);
			$pdf->Text(24,46,$arrFirstRequestSlip[4]."  ".$arrFirstRequestSlip[5]);					
			$pdf->SetFont('Arial','B',9);
			$pdf->Text(12,62,"BRANCH INFORMATION");
			
			$firstno = $arrFirstRequestSlip[8] > 0 ? $arrFirstRequestSlip[8] : "";
			$secondno = $arrFirstRequestSlip[9] > 0 ? $arrFirstRequestSlip[9] : "";
			$thirdno = $arrFirstRequestSlip[10] > 0 ? $arrFirstRequestSlip[10] : "";
			
			$pdf->SetFont('Arial','',7);
			$pdf->Text(12,65,'Contact Person');
			$pdf->Text(35,65,':');
			$pdf->Text(38,65,$branchDetailsF->branch_contactperson1.'   '.$branchDetailsF->branch_contactperson2);
			
			$pdf->Text(12,68,'Contact No.');
			$pdf->Text(35,68,':');
			$pdf->Text(38,68,$branchDetailsF->branch_telephone1.'   '.$branchDetailsF->branch_telephone2.'   '.$branchDetailsF->branch_contactpersonmobile1.'   '.$branchDetailsF->branch_contactpersonmobile2);
			
			$pdf->Text(12,71,'E-Mail');
			$pdf->Text(35,71,':');
			$pdf->Text(38,71,$branchDetailsF->branch_email1.'   '.$branchDetailsF->branch_email2);
			
			$pdf->Text(12,74,'Web Address');$pdf->Text(35,74,':');$pdf->Text(38,74,$bankDetails->bank_website);//bank_website
			
			// second part
			
			$pdf->SetFont('Arial','B',8);
			$pdf->Text(105,7,'CHEQUE BOOK REQUISITION FORM                    DATE:________________');
			$pdf->SetFont('Arial','B',8);
			$pdf->SetFont('Arial','B',7);
			$pdf->Text(115,11,'THE MANAGER');
			$pdf->Text(115,14,$bankDetails->bank_name);
			$pdf->SetFont('Arial','B',6);
			$pdf->Text(115,17,$branchDetailsF->branch_address1 .','.$branchDetailsF->branch_address2);
			$pdf->Text(115,20,$branchDetailsF->branch_address3 .','.$branchDetailsF->city_place. '-'. $branchDetailsF->branch_pin);			
			$pdf->SetFont('Arial','B',8);
			//$pdf->Text(140,23,$firstslipfrom);
			//$pdf->Text(187,23,$firstslipto);
			
			$pdf->Text(115,24,'Please issue a cheque book ');
			$pdf->Text(115,28,'Collection of Cheque Book');
			$pdf->Text(120,32,'In person                 bearer authorised hereunder ');
			$pdf->Text(120,38,'Registered Post/Courier at my/our cost ');
			//$pdf->Text(115,44, 'Cheque No. From  '.$firstslipfrom.'       To  '.$firstslipto);
			$pdf->Text(115,44, 'Cheque No. From  '.str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT).'       To  '.str_pad($firstslipto, 6, "0", STR_PAD_LEFT));
			
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,30);
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",140,30);
			$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,36);
			
			$pdf->Text(115,54,'A/c No.:  '.$arrFirstRequestSlip[11]);			
			$pdf->SetFont('Arial','B',8);
			$pdf->Text(115,58,$arrFirstRequestSlip[0]);
			$pdf->SetFont('Arial','',7);
			$pdf->Text(115,61,$arrFirstRequestSlip[1]);
			$pdf->Text(115,64,$arrFirstRequestSlip[2].", ".$arrFirstRequestSlip[3]);
			$pdf->Text(115,67,$arrFirstRequestSlip[6].", ".$arrFirstRequestSlip[7]);
			$pdf->Text(115,70,$arrFirstRequestSlip[4]."  ".$arrFirstRequestSlip[5]);			
			$pdf->Text(115,73,'Contact No.: '.$arrFirstRequestSlip[8].'    '.$arrFirstRequestSlip[9].'    '.$arrFirstRequestSlip[10]);				
			$pdf->SetFont('Arial','B',7);			
			$pdf->Text(115,88,'Signature of A/c. Holder                                  Signature of bearer');
			
			/*
			$pdf->Text(115,49,'A/c No.:  '.$arrFirstRequestSlip[11]);			
			$pdf->SetFont('Arial','B',8);
			$pdf->Text(115,54,$arrFirstRequestSlip[0]);
			$pdf->SetFont('Arial','',7);
			$pdf->Text(115,58,$arrFirstRequestSlip[1]);
			$pdf->Text(115,61,$arrFirstRequestSlip[2].", ".$arrFirstRequestSlip[3]);
			$pdf->Text(115,64,$arrFirstRequestSlip[6].", ".$arrFirstRequestSlip[7]);
			$pdf->Text(115,67,$arrFirstRequestSlip[4]."  ".$arrFirstRequestSlip[5]);			
			$pdf->Text(115,70,'Contact No.: '.$arrFirstRequestSlip[8].'    '.$arrFirstRequestSlip[9].'    '.$arrFirstRequestSlip[10]);				
			$pdf->SetFont('Arial','B',7);			
			$pdf->Text(115,85,'Signature of A/c. Holder                                  Signature of bearer');
			*/
			
			$pdf->SetFont('Arial','',7);
			if($arrFirstRequestSlip[25] != "10")
			{
				if($arrFirstRequestSlip[23] == ""){
					$pdf->Text(115,90,'');
				}
				else{
					$pdf->Text(115,90,$arrFirstRequestSlip[23]);
				}
			}
			
			
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
				
					$branchDetailsS = $db->get_row("SELECT b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrSecondRequestSlip[24]."'");
					$branchweakdaysSec = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."')");
					$branchhalfdaysSec = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."')");
							
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(12,100,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6);
					$pdf->Text(12,103,$branchDetailsS->branch_address1 .','.$branchDetailsS->branch_address2);
					$pdf->Text(12,107,$branchDetailsS->branch_address3 .','.$branchDetailsS->city_place. '-'. $branchDetailsS->branch_pin);
																	
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(45,116,$arrSecondRequestSlip[14]);
					//$pdf->Text(85,116,$arrSecondRequestSlip[15]);	

					$pdf->Text(24,111, 'Cheque No. From  '.str_pad($arrSecondRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrSecondRequestSlip[15], 6, "0", STR_PAD_LEFT));
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(24,116,'A/c. No. :  '.$arrSecondRequestSlip[11]);
					/*if($arrSecondRequestSlip[25] == "10"){
						$pdf->Text(12,125,'Savings A/c. No.: '.$arrSecondRequestSlip[11]);
					}
					else if($arrSecondRequestSlip[25] == "11"){
						$pdf->Text(12,125,'Current A/c. No.: '.$arrSecondRequestSlip[11]);
					}
					else if($arrSecondRequestSlip[25] == "13"){
						$pdf->Text(12,125,'Cash Credit A/c. No.: '.$arrSecondRequestSlip[11]);
					}
					else if($arrSecondRequestSlip[25] == "14"){
						$pdf->Text(12,125,'Dividend A/c. No.: '.$arrSecondRequestSlip[11]);
					}*/


					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(24,121,$arrSecondRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(24,124,$arrSecondRequestSlip[1]);
					$pdf->Text(24,127,$arrSecondRequestSlip[2]);
					$pdf->Text(24,130,$arrSecondRequestSlip[3]);
					$pdf->Text(24,133,$arrSecondRequestSlip[6]); 
					$pdf->Text(24,136,$arrSecondRequestSlip[7]);
					$pdf->Text(24,139,$arrSecondRequestSlip[4]."  ".$arrSecondRequestSlip[5]);					
					$pdf->SetFont('Arial','B',9);
					$pdf->Text(12,160,"BRANCH INFORMATION");
					
					$firstno = $arrSecondRequestSlip[8] > 0 ? $arrSecondRequestSlip[8] : "";
					$secondno = $arrSecondRequestSlip[9] > 0 ? $arrSecondRequestSlip[9] : "";
					$thirdno = $arrSecondRequestSlip[10] > 0 ? $arrSecondRequestSlip[10] : "";
					
					$pdf->SetFont('Arial','',7);
					
					$pdf->Text(12,163,'Contact Person');$pdf->Text(35,163,':');$pdf->Text(38,163,$branchDetailsS->branch_contactperson1.'   '.$branchDetailsS->branch_contactperson2);
					$pdf->Text(12,166,'Contact No.');$pdf->Text(35,166,':');$pdf->Text(38,166,$branchDetailsS->branch_telephone1.'	'.$branchDetailsS->branch_telephone2.'   '.$branchDetailsS->branch_contactpersonmobile1.'   '.$branchDetailsS->branch_contactpersonmobile2);
					$pdf->Text(12,169,'E-Mail');
					$pdf->Text(35,167,':');
					$pdf->Text(38,169,$branchDetailsS->branch_email1.'   '.$branchDetailsS->branch_email2);
					$pdf->Text(12,172,'Web Address');$pdf->Text(35,172,':');$pdf->Text(38,172,$bankDetails->bank_website);
					
					//Second Part
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(105,100,'CHEQUE BOOK REQUISITION FORM                    DATE:________________');
					$pdf->SetFont('Arial','B',8);
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(115,104,'THE MANAGER');
					$pdf->Text(115,107,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6);
					$pdf->Text(115,110,$branchDetailsS->branch_address1 .','.$branchDetailsS->branch_address2);
					$pdf->Text(115,113,$branchDetailsS->branch_address3 .','.$branchDetailsS->city_place. '-'. $branchDetailsS->branch_pin);			
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(140,116,$arrSecondRequestSlip[14]);
					//$pdf->Text(187,116,$arrSecondRequestSlip[15]);
					$pdf->Text(115,117,'Please issue a cheque book ');
					$pdf->Text(115,121,'Collection of Cheque Book');
					$pdf->Text(120,125,'In person                 bearer authorised hereunder ');
					$pdf->Text(120,131,'Registered Post/Courier at my/our cost ');
					//$pdf->Text(115,137, 'Cheque No. From  '.$arrSecondRequestSlip[14].'       To  '.$arrSecondRequestSlip[15]);
					$pdf->Text(115,137, 'Cheque No. From  '.str_pad($arrSecondRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrSecondRequestSlip[15], 6, "0", STR_PAD_LEFT));
					
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,123);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",140,123);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,129);
					
					$pdf->Text(115,147,'A/c No.:  '.$arrSecondRequestSlip[11]);
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(115,151,$arrSecondRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(115,154,$arrSecondRequestSlip[1]);
					$pdf->Text(115,157,$arrSecondRequestSlip[2]."  ".$arrSecondRequestSlip[3]);
					$pdf->Text(115,160,$arrSecondRequestSlip[6]."  ".$arrSecondRequestSlip[7]); 
					$pdf->Text(115,163,$arrSecondRequestSlip[4]."  ".$arrSecondRequestSlip[5]);				
					$pdf->Text(115,166,'Contact No.:'.$arrSecondRequestSlip[8].'    '.$arrSecondRequestSlip[9].'    '.$arrSecondRequestSlip[10]);					
					$pdf->SetFont('Arial','B',7);					
					$pdf->Text(115,181,'Signature of A/c. Holder                                  Signature of bearer');
					
					/*
					$pdf->Text(115,142,'A/c No.:  '.$arrSecondRequestSlip[11]);
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(115,147,$arrSecondRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(115,151,$arrSecondRequestSlip[1]);
					$pdf->Text(115,154,$arrSecondRequestSlip[2]."  ".$arrSecondRequestSlip[3]);
					$pdf->Text(115,157,$arrSecondRequestSlip[6]."  ".$arrSecondRequestSlip[7]); 
					$pdf->Text(115,160,$arrSecondRequestSlip[4]."  ".$arrSecondRequestSlip[5]);				
					$pdf->Text(115,163,'Contact No.:'.$arrSecondRequestSlip[8].'    '.$arrSecondRequestSlip[9].'    '.$arrSecondRequestSlip[10]);
					
					$pdf->SetFont('Arial','B',7);					
					$pdf->Text(115,178,'Signature of A/c. Holder                                  Signature of bearer');
					*/
					
					$pdf->SetFont('Arial','',7);
					if($arrSecondRequestSlip[25] != "10")
					{
						if($arrSecondRequestSlip[23] == ""){
							$pdf->Text(115,188,'');
						}
						else{
							$pdf->Text(115,188,$arrSecondRequestSlip[23]);
						}
					}
				}
				
				if($arrThirdRequestSlip[14] != "" && $arrThirdRequestSlip[15] != ""){
				
					$branchDetailsT = $db->get_row("SELECT b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrThirdRequestSlip[24]."'");
					$branchweakdaysThi = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."')");
					$branchhalfdaysThi = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."')");
							
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(12,193,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6);
					$pdf->Text(12,196,$branchDetailsT->branch_address1 .','.$branchDetailsT->branch_address2);
					$pdf->Text(12,199,$branchDetailsT->branch_address3 .','.$branchDetailsT->city_place. '-'. $branchDetailsT->branch_pin);
																	
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(45,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(85,209,$arrThirdRequestSlip[15]);	
					
					$pdf->Text(24,204, 'Cheque No. From  '.str_pad($arrThirdRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrThirdRequestSlip[15], 6, "0", STR_PAD_LEFT));
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(24,209,'A/c. No. :  '.$arrThirdRequestSlip[11]);
					/*if($arrThirdRequestSlip[25] == "10"){
						$pdf->Text(12,219,'Savings A/c. No.: '.$arrThirdRequestSlip[11]);
					}
					else if($arrThirdRequestSlip[25] == "11"){
						$pdf->Text(12,219,'Current A/c. No.: '.$arrThirdRequestSlip[11]);
					}
					else if($arrThirdRequestSlip[25] == "13"){
						$pdf->Text(12,219,'Cash Credit A/c. No.: '.$arrThirdRequestSlip[11]);
					}
					else if($arrThirdRequestSlip[25] == "14"){
						$pdf->Text(12,219,'Dividend A/c. No.: '.$arrThirdRequestSlip[11]);
					}*/

					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(24,214,$arrThirdRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(24,217,$arrThirdRequestSlip[1]);
					$pdf->Text(24,220,$arrThirdRequestSlip[2]);
					$pdf->Text(24,223,$arrThirdRequestSlip[3]);
					$pdf->Text(24,226,$arrThirdRequestSlip[6]); 
					$pdf->Text(24,229,$arrThirdRequestSlip[7]);
					$pdf->Text(24,232,$arrThirdRequestSlip[4]."  ".$arrThirdRequestSlip[5]);					
					$pdf->SetFont('Arial','B',9);
					$pdf->Text(12,259,"BRANCH INFORMATION");
					
					$firstno = $arrThirdRequestSlip[8] > 0 ? $arrThirdRequestSlip[8] : "";
					$secondno = $arrThirdRequestSlip[9] > 0 ? $arrThirdRequestSlip[9] : "";
					$thirdno = $arrThirdRequestSlip[10] > 0 ? $arrThirdRequestSlip[10] : "";
					
					$pdf->SetFont('Arial','',7);																			
					
					$pdf->Text(12,262,'Contact Person');
					$pdf->Text(35,262,':');
					$pdf->Text(38,262,$branchDetailsT->branch_contactperson1.'	'.$branchDetailsT->branch_contactperson2);
					$pdf->Text(12,265,'Contact No.');
					$pdf->Text(35,265,':');
					$pdf->Text(38,265,$branchDetailsT->branch_telephone1.'	'.$branchDetailsT->branch_telephone2.'   '.$branchDetailsT->branch_contactpersonmobile1.'   '.$branchDetailsT->branch_contactpersonmobile2);
					$pdf->Text(12,268,'E-Mail');
					$pdf->Text(35,268,':');
					$pdf->Text(38,268,$branchDetailsT->branch_email1.'	'.$branchDetailsT->branch_email2);
					$pdf->Text(12,271,'Web Address');
					$pdf->Text(35,271,':');
					$pdf->Text(38,271,$bankDetails->bank_website);
					
					//Second Part
					
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(105,193,'CHEQUE BOOK REQUISITION FORM                    DATE:________________');
					$pdf->SetFont('Arial','B',8);
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(115,196,'THE MANAGER');
					$pdf->Text(115,199,$bankDetails->bank_name);
					$pdf->SetFont('Arial','B',6);
					$pdf->Text(115,202,$branchDetailsT->branch_address1 .','.$branchDetailsT->branch_address2);
					$pdf->Text(115,205,$branchDetailsT->branch_address3 .','.$branchDetailsT->city_place. '-'. $branchDetailsT->branch_pin);			
					$pdf->SetFont('Arial','B',8);
					//$pdf->Text(140,209,$arrThirdRequestSlip[14]);
					//$pdf->Text(187,209,$arrThirdRequestSlip[15]);
					
					$pdf->Text(115,209,'Please issue a cheque book ');
					$pdf->Text(115,213,'Collection of Cheque Book');
					$pdf->Text(120,217,'In person                 bearer authorised hereunder ');
					$pdf->Text(120,223,'Registered Post/Courier at my/our cost ');
					//$pdf->Text(115,229, 'Cheque No. From  '.$arrThirdRequestSlip[14].'       To  '.$arrThirdRequestSlip[15]);				
					$pdf->Text(115,229, 'Cheque No. From  '.str_pad($arrThirdRequestSlip[14], 6, "0", STR_PAD_LEFT).'       To  '.str_pad($arrThirdRequestSlip[15], 6, "0", STR_PAD_LEFT));
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,215);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",140,215);
					$pdf->Image(dirname(__FILE__)."\images\checkbox.png",115,221);	
					
					$pdf->Text(115,239,'A/c No.:  '.$arrThirdRequestSlip[11]);	
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(115,243,$arrThirdRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(115,246,$arrThirdRequestSlip[1]);
					$pdf->Text(115,249,$arrThirdRequestSlip[2]."  ".$arrThirdRequestSlip[3]);
					$pdf->Text(115,252,$arrThirdRequestSlip[6]."  ".$arrThirdRequestSlip[7]); 
					$pdf->Text(115,255,$arrThirdRequestSlip[4]."  ".$arrThirdRequestSlip[5]);		
					$pdf->Text(115,258,'Contact No.:'.$arrThirdRequestSlip[8].'    '.$arrThirdRequestSlip[9].'    '.$arrThirdRequestSlip[10]);					
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(115,273,'Signature of A/c. Holder                                  Signature of bearer');
					/*			
					$pdf->Text(115,234,'A/c No.:  '.$arrThirdRequestSlip[11]);	
					$pdf->SetFont('Arial','B',8);
					$pdf->Text(115,239,$arrThirdRequestSlip[0]);
					$pdf->SetFont('Arial','',7);
					$pdf->Text(115,243,$arrThirdRequestSlip[1]);
					$pdf->Text(115,245,$arrThirdRequestSlip[2]."  ".$arrThirdRequestSlip[3]);
					$pdf->Text(115,249,$arrThirdRequestSlip[6]."  ".$arrThirdRequestSlip[7]); 
					$pdf->Text(115,252,$arrThirdRequestSlip[4]."  ".$arrThirdRequestSlip[5]);		
					$pdf->Text(115,255,'Contact No.:'.$arrThirdRequestSlip[8].'    '.$arrThirdRequestSlip[9].'    '.$arrThirdRequestSlip[10]);					
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(115,270,'Signature of A/c. Holder                                  Signature of bearer');
					*/
					
					$pdf->SetFont('Arial','',7);
					if($arrThirdRequestSlip[25] != "10")
					{
						if($arrThirdRequestSlip[23] == ""){
							$pdf->Text(115,287,'');
						}
						else{
							$pdf->Text(115,287,$arrThirdRequestSlip[23]);
						}
					}
				}
			}
			
			$pdf->Output("Slip.pdf",'F'); 
			
			//echo $printersinfo[0][0];
			exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
			//sleep(3);
		}
		
		function printCheques($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
		{
			global $db;
			
			$arrFirstChequeData = explode("~",$firstchequedata);
			$arrSecondChequeData = explode("~",$secondchequedata);
			$arrThirdChequeData = explode("~",$thirdchequedata);
			$micrcode = "C" . $arrFirstChequeData[0] . "C ". $arrFirstChequeData[2] . "A ". $arrFirstChequeData[4] ."C ".$arrFirstChequeData[6];
			
			print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			echo "cheque<br/>";
			
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',7);
			
			$branchDetailsFC = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrFirstChequeData[23]."'");					
			$pdf->Text(48,13, $branchDetailsFC->branch_name.", ".$branchDetailsFC->branch_address1.", ".$branchDetailsFC->branch_address2);
			$pdf->Text(48,16,"".$branchDetailsFC->branch_address3.", ".$branchDetailsFC->city_place."-".$branchDetailsFC->branch_pin."");
			$pdf->SetFont('Arial','B',7);
			$pdf->Text(126,16,'IFS Code : '.$branchDetailsFC->branch_neftifsccode);
			
			$pdf->SetFont('Arial','',10);
			$pdf->SetXY(0,19);
			//$pdf->Cell(198,10,"or Bearer",'',0,'R');		
			
			$pdf->SetFont('Arial','B',14);
			$pdf->Text(40,51,$arrFirstChequeData[5]);
			
			$pdf->SetFont('Arial','B',8);
			//$pdf->Text(151,50,$arrFirstChequeData[7]);
			
			
			if($arrFirstChequeData[6] != "10")
			{
				$pdf->SetXY(0,44);
				$pdf->Cell(200,10,$arrFirstChequeData[7],'',0,'R');
								
				if($arrFirstChequeData[21] == ""){
					$pdf->SetXY(0,64);
					$pdf->Cell(200,10,'AUTHORISED SIGNATORIES','',0,'R');
				}
				else{
					$pdf->SetXY(0,64);
					$pdf->Cell(200,10,$arrFirstChequeData[21],'',0,'R');
				}
			}
			else
			{
				if($arrFirstChequeData[11] == "" && $arrFirstChequeData[12] == "")
				{
					$pdf->SetXY(0,64);
					$pdf->Cell(200,10,$arrFirstChequeData[7],'',0,'R');
				}
				else if($arrFirstChequeData[12] == "")
				{
					$pdf->SetXY(0,64);
					$pdf->Cell(200,10,$arrFirstChequeData[7].' / '.$arrFirstChequeData[11],'',0,'R');		
				}
				else
				{
					$pdf->SetXY(0,64);					
					$pdf->Cell(200,10,$arrFirstChequeData[7].' / '.$arrFirstChequeData[11].' / '.$arrFirstChequeData[12],'',0,'R');		
				}
			}
				
			//$pdf->Text(70,68,'IFSC Code : '.$arrFirstChequeData[22]);
			
			$pdf->AddFont('E-13B_0','','E-13B_0.php');
			$pdf->SetFont('E-13B_0','',12);
			$pdf->Text(60.2,86,$micrcode);
	
			if ($noofCheque > 1)
			{
				$micrcode = "C" . $arrSecondChequeData[0] . "C ". $arrSecondChequeData[2] . "A ". $arrSecondChequeData[4] ."C ".$arrSecondChequeData[6];
				
				if($arrSecondChequeData[5] != ""){
				
					$pdf->SetFont('Arial','B',7);					
					$branchDetailsSC = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrSecondChequeData[23]."'");					
					$pdf->Text(48,106,$branchDetailsSC->branch_name.", ".$branchDetailsSC->branch_address1.", ".$branchDetailsSC->branch_address2);
					$pdf->Text(48,109,"".$branchDetailsSC->branch_address3.", ".$branchDetailsSC->city_place."-".$branchDetailsSC->branch_pin."");
					
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(126,109,'IFS Code : '.$branchDetailsSC->branch_neftifsccode);
					
					$pdf->SetFont('Arial','',10);
					$pdf->SetXY(0,112);
					//$pdf->Cell(198,10,"or Bearer",'',0,'R');
					
					$pdf->SetFont('Arial','B',14);
					$pdf->Text(40,144,$arrSecondChequeData[5]);
					
					$pdf->SetFont('Arial','B',8);					
					if($arrSecondChequeData[6] != "10")
					{
						$pdf->SetXY(0,137);
						$pdf->Cell(200,10,$arrSecondChequeData[7],'',0,'R');
										
						if($arrSecondChequeData[21] == ""){
							$pdf->SetXY(0,157);
							$pdf->Cell(200,10,'AUTHORISED SIGNATORIES','',0,'R');
						}
						else{
							$pdf->SetXY(0,157);
							$pdf->Cell(200,10,$arrSecondChequeData[21],'',0,'R');
						}
					}
					else
					{
						if($arrSecondChequeData[11] == "" && $arrSecondChequeData[12] == "")
						{
							$pdf->SetXY(0,157);
							$pdf->Cell(200,10,$arrSecondChequeData[7],'',0,'R');
						}
						else if($arrSecondChequeData[12] == "")
						{
							
							$pdf->SetXY(0,157);
							$pdf->Cell(200,10,$arrSecondChequeData[7].' / '.$arrSecondChequeData[11],'',0,'R');		
						}
						else
						{	
							$pdf->SetXY(0,157);
							$pdf->Cell(200,10,$arrSecondChequeData[7].' / '.$arrSecondChequeData[11].' / '.$arrSecondChequeData[12],'',0,'R');									
						}
					}
					
					//$pdf->Text(70,161,'IFSC Code : '.$arrSecondChequeData[22]);					
					$pdf->AddFont('E-13B_0','','E-13B_0.php');
					$pdf->SetFont('E-13B_0','',12);
					$pdf->Text(60.2,179,$micrcode);
				}
			}
			
			if ($noofCheque > 2)
			{
				$micrcode = "C" . $arrThirdChequeData[0] . "C ". $arrThirdChequeData[2] . "A ". $arrThirdChequeData[4] ."C ".$arrThirdChequeData[6];
				if($arrThirdChequeData[5] != "")
				{
					$pdf->SetFont('Arial','B',7);
					
					$branchDetailsTC = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrThirdChequeData[23]."'");					
					$pdf->Text(48,199, $branchDetailsTC->branch_name.", ".$branchDetailsTC->branch_address1.", ".$branchDetailsTC->branch_address2);
					$pdf->Text(48,202,"".$branchDetailsTC->branch_address3.", ".$branchDetailsTC->city_place."-".$branchDetailsTC->branch_pin."");
					
					$pdf->SetFont('Arial','B',7);
					$pdf->Text(126,202,'IFS Code : '.$branchDetailsTC->branch_neftifsccode);		
					
					//$pdf->Text(43,197,$arrThirdChequeData[20].", ".$arrThirdChequeData[14]);
					//$pdf->Text(43,199,"".$arrThirdChequeData[15].", ".$arrThirdChequeData[16].", ".$arrThirdChequeData[17]." - ".$arrThirdChequeData[18]."");
					
					
					$pdf->SetFont('Arial','',10);
					$pdf->SetXY(0,215);
					//$pdf->Cell(198,10,"or Bearer",'',0,'R');
					
					$pdf->SetFont('Arial','B',14);
					$pdf->Text(40,237,$arrThirdChequeData[5]);
					
					
					$pdf->SetFont('Arial','B',8);
					if($arrThirdChequeData[6] != "10")
					{
						$pdf->SetXY(0,231);
						$pdf->Cell(200,10,$arrThirdChequeData[7],'',0,'R');
										
						if($arrThirdChequeData[21] == ""){
							$pdf->SetXY(0,251);
							$pdf->Cell(200,10,'AUTHORISED SIGNATORIES','',0,'R');
						}
						else{
							$pdf->SetXY(0,251);
							$pdf->Cell(200,10,$arrThirdChequeData[21],'',0,'R');
						}
					}
					else
					{
						if($arrThirdChequeData[11] == "" && $arrThirdChequeData[12] == "")
						{
							$pdf->SetXY(0,251);
							$pdf->Cell(200,10,$arrThirdChequeData[7],'',0,'R');
						}
						else if($arrThirdChequeData[12] == "")
						{
							$pdf->SetXY(0,251);
							$pdf->Cell(200,10,$arrThirdChequeData[7].' / '.$arrThirdChequeData[11],'',0,'R');
						}
						else
						{						
							$pdf->SetXY(0,251);
							$pdf->Cell(200,10,$arrThirdChequeData[7].' / '.$arrThirdChequeData[11].' / '.$arrThirdChequeData[12],'',0,'R');		
						}	
							
						//$pdf->Text(70,255,'IFSC Code : '.$arrThirdChequeData[22]);					
						
					}
					
					$pdf->AddFont('E-13B_0','','E-13B_0.php');
					$pdf->SetFont('E-13B_0','',12);
					$pdf->Text(60.2,272,$micrcode);
			}
			$pdf->Output("Cheque.pdf",'F');
			$imagePath = dirname(__FILE__)."\Cheque.pdf";
			
			
			exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
			
		}		
	}	
	$db->closeDb();
	?>
	
	</div>
</div>
</body>
</html>
