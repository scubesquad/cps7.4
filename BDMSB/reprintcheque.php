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

$trn_string_array =  array(10 => 'SAVINGS ACCOUNT', 11 => 'CURRENT ACCOUNT', 12=> 'PAY ORDER', 13 => 'CASH CREDIT ', 14 => 'Dividend', 15 => '', 16 => 'DD', 18 => 'MT', 29 => 'CURRENT ACCOUNT', 31 => 'SAVINGS ACCOUNT');
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
		//bhavin start
		if (isset($_GET['selective_pages_no']) && $_GET['selective_pages_no'] != "") {
			$selective = true;
			$selective_page_array = explode(",", $_GET['selective_pages_no']);
		}
		//bhavin end
		if (isset($_GET['requisition']) && $_GET['selective_pages_no'] != "") {
			$selected_requisition = true;
		}
		if (isset($_GET['requisitiononly']) && $_GET['requisitiononly'] != "") {
			$requisitiononly = true;
			$selected_requisition = true;
		}

		// Vinod Sharma Coding Starts
		//bhavin
		if ($resultnoofchequeleavestype = $db->get_results("SELECT DISTINCT cps_no_of_books,cps_book_size FROM tb_cps_reprintque WHERE cps_reprint_approved=1")) {
			$branchDetails = $db->get_row("SELECT branch.branch_name,branch.branch_address1,branch.branch_address2,suburb_name,city_place,suburb_postal_code,branch.branch_neftifsccode,branch.branch_printers FROM tb_branchdetails branch LEFT JOIN tb_suburbmaster suburb ON branch.branch_suburb_id = suburb.suburb_id LEFT JOIN tb_citymaster city ON branch.branch_city_id = city.city_id");
			$printersinfo = "";

			$printerDetails = $db->get_row("SELECT bank_printers from tb_bankdetails");
			if (!empty($printerDetails->bank_printers)) {
				$printersinfo = unserialize($printerDetails->bank_printers);
			} else {
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
			$no_pages = ceil($total_leaves / 3);

			// =============================================== for chk print ==============================================

			//$result = $db->get_results("SELECT * FROM tb_cps_reprintque");
			//bhavin
			// $result = $db->get_results("SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code AND p.cps_branch_name=b.branch_name where cps_reprint_approved=1");
			// Get Re-Print user who is priting now
			$id = $_SESSION['admin_id'];
			$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
			$print_user = $uresult->userid;

			//$result = $db->get_results("SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code where cps_reprint_approved=1");
			$result = $db->get_results("SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code AND p.branch_sub_code =b.branch_sub_code where cps_reprint_approved=1");
			$jump = 0;
			//echo "SELECT p.*,b.branch_neftifsccode FROM tb_cps_reprintque p inner join tb_branchdetails b on p.cps_branchmicr_code = b.branch_code";
			// ============================================================ FOR CHK SLIP ========================================================
			if (count($result) > 0) {
				$slipCounter = 1;
				foreach ($result as $rowresultslips) {
					$chkFrom = $rowresultslips->cps_chq_no_from;
					$chkTo = $rowresultslips->cps_chq_no_to;

					for ($Slips = 0; $Slips < $rowresultslips->cps_no_of_books; $Slips++) {
						if ($rowresultslips->cps_no_of_books > 1) {
							$chkTo = $chkFrom + $rowresultslips->cps_book_size;
						}

						if ($slipCounter % 3 == 1) {
							//                     						0								1									2									3							   4								5							6									7									8										9									10								    11							 12								 13			             14		  15					16							     17								18							19								  20									21								22								23								24									25									26						27					28								29								30									31							
							$firstrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
						} elseif ($slipCounter % 3 == 2) {
							$secondrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
						} elseif ($slipCounter % 3 == 0) {
							$thirdrequestsliprow[] = array($rowresultslips->cps_act_name, $rowresultslips->cps_act_address1, $rowresultslips->cps_act_address2, $rowresultslips->cps_act_address3, $rowresultslips->cps_act_city, $rowresultslips->cps_act_pin, $rowresultslips->cps_act_address4, $rowresultslips->cps_act_address5, $rowresultslips->cps_act_telephone_res, $rowresultslips->cps_act_telephone_off, $rowresultslips->cps_act_mobile, $rowresultslips->cps_account_no, $rowresultslips->cps_emailid, $rowresultslips->cps_book_size, $chkFrom, $chkTo, $rowresultslips->branch_address1, $rowresultslips->branch_address2, $rowresultslips->suburb_name, $rowresultslips->city_place, $rowresultslips->suburb_postal_code, $rowresultslips->branch_neftifsccode, $rowresultslips->branch_name, $rowresultslips->cps_auth_sign1, $rowresultslips->cps_branchmicr_code, $rowresultslips->cps_tr_code, $rowresultslips->cps_unique_req, $print_user,$rowresultslips->cps_auth_sign2,$rowresultslips->cps_auth_sign3,$rowresultslips->branch_sub_code,$rowresultslips->cps_product_code);
						}

						$chkFrom = $chkTo;
						$slipCounter++;
					}
				}

				$noofbooks = 1;
				for ($j = 0; $j < count($firstrequestsliprow); $j++) {
					if ($firstrequestsliprow[$j] != "") {
						$firstrequestslipdata = implode("~", $firstrequestsliprow[$j]);
					} else {
						$firstrequestslipdata = "";
					}

					if ($secondrequestsliprow[$j] != "") {
						$secondrequestslipdata = implode("~", $secondrequestsliprow[$j]);
					} else {
						$secondrequestslipdata = "";
					}

					if ($thirdrequestsliprow[$j] != "") {
						$thirdrequestslipdata = implode("~", $thirdrequestsliprow[$j]);
					} else {
						$thirdrequestslipdata = "";
					}

					//bhavin
					if (!$selective || $selected_requisition) {
						printRequestSlip(2, $firstrequestslipdata, $secondrequestslipdata, $thirdrequestslipdata, 3, $noofbooks, $printersinfo);
					}

					//$noofbooks++;
				}
				if ($requisitiononly) {
					echo "<br />Only Requisition Slip printed.";
				}

				$firstrequestsliprow = array();
				$secondrequestsliprow = array();
				$thirdrequestsliprow = array();

				//================================================================ END =============================================================

				foreach ($result as $rowresults) {
					$chequeno = $rowresults->cps_chq_no_from;
					$citycode = $rowresults->cps_city_code;
					// if (trim($rowresults->cps_act_jointname1) != "") {
					// 	$name1 = $rowresults->cps_act_jointname1;
					// 	$name2 = $rowresults->cps_act_jointname2;
					// 	$name3 = "";
					// } else {
					// 	$name1 = $rowresults->cps_auth_sign1;
					// 	$name2 = $rowresults->cps_auth_sign2;
					// 	$name3 = $rowresults->cps_auth_sign3;
					// }
					if ($rowresults->cps_atpar == 1) {
						$citycode = "000";
					}

					$chkserisediff = (($rowresults->cps_chq_no_to - $rowresults->cps_chq_no_from) + 1);
					for ($i = 0; $i < $chkserisediff; $i++) {
						if ($i != 0) {
							$chequeno = $chequeno + 1;
						}

						$chequeno = str_pad($chequeno, 6, "0", STR_PAD_LEFT);

						if ($jump < $no_pages) {
							//							0			1				2							3								4								5							6							7					8								9							10			  11	12      13				14									15								16							17							18									19								20							21									22									23                      24					25					26							27							28						29							
							$firstchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);
						} elseif (($jump < ($no_pages * 2)) && ($jump >= $no_pages)) {
							$secondchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);
						} elseif (($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2)) {
							$thirdchequerow[] = array($chequeno,$citycode,$rowresults->cps_micr_code ,$rowresults->cps_branch_code,$rowresults->cps_micr_account_no,$rowresults->cps_account_no,$rowresults->cps_tr_code,$rowresults->cps_act_name,$rowresults->cps_act_address1,$rowresults->cps_act_city,$rowresults->cps_act_pin,$name1,$name2,$name3,$branchDetails->branch_address1,$branchDetails->branch_address2,$branchDetails->suburb_name,$branchDetails->city_place,$branchDetails->suburb_postal_code,$branchDetails->branch_neftifsccode,$branchDetails->branch_name,$rowresults->cps_auth_sign1,$rowresults->branch_neftifsccode,$rowresults->cps_branchmicr_code, $rowresults->cps_unique_req, $print_user,$rowresults->branch_sub_code,$rowresults->cps_auth_sign2,$rowresults->cps_auth_sign3,$rowresults->cps_product_code);
						}

						$jump++;
					}
				}

				//bhavin
				for ($j = 0, $p = 1; $j < count($firstchequerow); $j++, $p++) {
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
					if (!$requisitiononly) {
						//bhavin start
						if ($selective) {
							if (in_array($p, $selective_page_array)) {
								printCheques(3, $firstchequedata, $secondchequedata, $thirdchequedata, 3, $printersinfo);
							}

						} else {
							printCheques(3, $firstchequedata, $secondchequedata, $thirdchequedata, 3, $printersinfo);
						}

						//bhavin end
					}
				}

				$firstchequerow = array();
				$secondchequerow = array();
				$thirdchequerow = array();

				$resultInsert = $db->get_results("SELECT * FROM tb_cps_reprintque where cps_reprint_approved=1");
				foreach ($resultInsert as $rowresultsInsert) {
					insertIntoPrintCollection($rowresultsInsert);
				}
			} else {
				echo "Error in mapping branch details.";
			}
		} else {
			echo "No Records Left For Printing";
		}

		function insertIntoPrintCollection($results) {
			global $db;

			//Insert data into print collection (Successfully printed records)

			$sqlinsertquery = "INSERT INTO tb_reprint_req_collection
						(cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code)
						VALUES
						('" . $results->cps_unique_req . "','" . $results->cps_micr_code . "','" . $results->cps_branchmicr_code . "','" . $results->cps_account_no . "','" . $results->cps_act_name . "','" . $results->cps_no_of_books . "','" . $results->cps_dly_bearer_order . "','" . $results->cps_book_size . "','" . $results->cps_tr_code . "','" . $results->cps_atpar . "','" . $results->cps_act_jointname1 . "','" . $results->cps_act_jointname2 . "','" . $results->cps_auth_sign1 . "','" . $results->cps_auth_sign2 . "','" . $results->cps_auth_sign3 . "','" . $results->cps_act_address1 . "','" . $results->cps_act_address2 . "','" . $results->cps_act_address3 . "','" . $results->cps_act_address4 . "','" . $results->cps_act_address5 . "','" . $results->cps_act_city . "','" . $results->cps_state . "','" . $results->cps_country . "','" . $results->cps_emailid . "','" . $results->cps_act_pin . "','" . $results->cps_act_telephone_res . "','" . $results->cps_act_telephone_off . "','" . $results->cps_act_mobile . "','" . $results->cps_ifsc_code . "','" . $results->cps_chq_no_from . "','" . $results->cps_chq_no_to . "','" . $results->cps_micr_account_no . "','" . $results->cps_date . "','" . $results->cps_process_user_id . "','" . $results->cps_bsr_code . "','" . $results->cps_pr_code . "')";
			$db->query($sqlinsertquery);

			$deletefromprintque = "DELETE FROM tb_cps_reprintque WHERE id=" . $results->id . "";
			$db->query($deletefromprintque);
		}

		function printRequestSlip($type, $firstrequestslipdata, $secondrequestslipdata, $thirdrequestslipdata, $noOfRequestSlip, $noofbooks, $printersinfo) {
			// global $db;
			global $db, $trn_string_array;		
			$numberofbooks = $noofbooks;
			$bankDetails = $db->get_row("SELECT bank_name,bank_website FROM tb_bankdetails");
			$arrFirstRequestSlip = explode("~", $firstrequestslipdata);
			$arrSecondRequestSlip = explode("~", $secondrequestslipdata);
			$arrThirdRequestSlip = explode("~", $thirdrequestslipdata);

			if ($noofbooks == 1) {
				$firstslipfrom = $arrFirstRequestSlip[14];
				$firstslipto = $arrFirstRequestSlip[14] + $arrFirstRequestSlip[13] - 1;
			} else {
				$noofbooks = $noofbooks - 1;
				$firstslipfrom = $arrFirstRequestSlip[14] + ($noofbooks * $arrFirstRequestSlip[13]);
				$firstslipto = $firstslipfrom + $arrFirstRequestSlip[13] - 1;
			}

			echo "<br/> From :- " . $firstslipfrom . "    To :- " . $firstslipto . "<br/>";

			//First request slip
			// First Part
			//print_r($arrFirstRequestSlip);
			//die;
			$branchDetailsF = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '" . $arrFirstRequestSlip[24] . "' AND branch_sub_code='".$arrFirstRequestSlip[30]."' ");
			/*$branchweakdays = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."')");
					$branchhalfdays = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrFirstRequestSlip[24]."')");*/

			$pdf = new TCPDF();
			$pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
			$pdf->AddPage();
			
			$pdf->SetFont('Arial', '', 8);
			$pdf->SetXY(40, 90);
			$pdf->StartTransform();
			$pdf->Rotate(-90);
			$address = preg_replace("/,+/", ",", $branchDetailsF->branch_name);
			// $address = preg_replace("/,+/", ",", $branchDetailsF->branch_address1 . ',' . $branchDetailsF->branch_address2 . ',' . $branchDetailsF->branch_address3 . ',' . $branchDetailsF->city_place . '-' . $branchDetailsF->branch_pin);
			//$pdf->Text(80, 5.6, $address);
			$lines1 = explode("\n", wordwrap($address, 55, "\n"));
			if (count($lines1) > 1) {
				$pdf->Text(75.5, 2.9, $lines1[0]);
				$pdf->Text(75.5, 5.9, $lines1[1]);
			} else {
				$pdf->Text(75.5, 5.9, $address);
			}

			$trn_str = $trn_string_array[$arrFirstRequestSlip[25]];

			$pdf->SetFont('Arial', 'B', 9);
			// $pdf->Text(78, 9, $trn_str);

			$pdf->Text(80, 12, 'From');
			$pdf->Text(89, 12, str_pad($firstslipfrom, 6, "0", STR_PAD_LEFT));
			$pdf->Text(100, 12, 'TO');
			$pdf->Text(105, 12, str_pad($firstslipto, 6, "0", STR_PAD_LEFT));

			$pdf->SetFont('Arial', '', 8);
			$pdf->Text(87.5, 20, $arrFirstRequestSlip[0]);

			$pdf->SetFont('Arial', '', 8);
			$pdf->Text(90, 28, $arrFirstRequestSlip[11]);
			$pdf->StopTransform();

			$pdf->Output(dirname(__FILE__)."\Slip.pdf", 'F');
			
			//echo $printersinfo[0][0];
			exec("gsbatchprint\gsbatchprintc -P \"" . $printersinfo[0][0] . "\" -F \"" . dirname(__FILE__) . "\Slip.pdf\" -I \"" . $printersinfo[0][1] . "\" -N 1 2>&1");

			if ($noOfRequestSlip > 1) {
				if ($numberofbooks == 1) {
					$secondslipfrom = $arrSecondRequestSlip[14];
					$secondslipto = $arrSecondRequestSlip[14] + $arrSecondRequestSlip[13] - 1;

					$thirdslipfrom = $arrThirdRequestSlip[14];
					$thirdslipto = $arrThirdRequestSlip[14] + $arrThirdRequestSlip[13] - 1;
				} else {
					$noofbooks = $numberofbooks - 1;
					$secondslipfrom = $arrSecondRequestSlip[14] + ($noofbooks * $arrSecondRequestSlip[13]);
					$secondslipto = $secondslipfrom + $arrSecondRequestSlip[13];
					$thirdslipfrom = $arrThirdRequestSlip[14] + ($noofbooks * $arrThirdRequestSlip[13]);
					$thirdslipto = $thirdslipfrom + $arrThirdRequestSlip[13];
				}

				echo "<br/> From :- " . $secondslipfrom . "    To :- " . $secondslipto . "<br/>";
				echo "<br/> From :- " . $thirdslipfrom . "    To :- " . $thirdslipto . "<br/>";

				if ($arrSecondRequestSlip[14] != "" && $arrSecondRequestSlip[15] != "") {

					$branchDetailsS = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '" . $arrSecondRequestSlip[24] . "' AND branch_sub_code='".$arrSecondRequestSlip[30]."' ");
					/*	$branchweakdaysSec = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."')");
							$branchhalfdaysSec = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrSecondRequestSlip[24]."')");*/

					$pdf = new TCPDF();
					$pdf->setPrintHeader(false);
		            $pdf->setPrintFooter(false);
					$pdf->AddPage();

					$pdf->SetFont('Arial', '', 8);
					$pdf->SetXY(40, 90);
					$pdf->StartTransform();
					$pdf->Rotate(-90);
					$address = preg_replace("/,+/", ",", $branchDetailsS->branch_name);
					// $address = preg_replace("/,+/", ",", $branchDetailsS->branch_address1 . ',' . $branchDetailsS->branch_address2 . ',' . $branchDetailsS->branch_address3 . ',' . $branchDetailsS->city_place . '-' . $branchDetailsS->branch_pin);
					//$pdf->Text(80, 5.6, $address);
					$lines1 = explode("\n", wordwrap($address, 55, "\n"));
					if (count($lines1) > 1) {
						$pdf->Text(72.5, 2.9, $lines1[0]);
						$pdf->Text(72.5, 5.9, $lines1[1]);
					} else {
						$pdf->Text(72.5, 5.9, $address);
					}

					$trn_str = $trn_string_array[$arrSecondRequestSlip[25]];

					$pdf->SetFont('Arial', 'B', 9);
					// $pdf->Text(78, 9, $trn_str);

					$pdf->Text(80, 12, 'From');
					$pdf->Text(89, 12, str_pad($secondslipfrom, 6, "0", STR_PAD_LEFT));
					$pdf->Text(100, 12, 'TO');
					$pdf->Text(105, 12, str_pad($secondslipto, 6, "0", STR_PAD_LEFT));

					$pdf->SetFont('Arial', '', 8);
					$pdf->Text(87.5, 20, $arrSecondRequestSlip[0]);

					$pdf->SetFont('Arial', '', 8);
					$pdf->Text(90, 28, $arrSecondRequestSlip[11]);
					$pdf->StopTransform();
					$pdf->Output(dirname(__FILE__)."\Slip1.pdf", 'F');

					//echo $printersinfo[0][0];
					exec("gsbatchprint\gsbatchprintc -P \"" . $printersinfo[0][0] . "\" -F \"" . dirname(__FILE__) . "\Slip1.pdf\" -I \"" . $printersinfo[0][1] . "\" -N 1 2>&1");

				}

				if ($arrThirdRequestSlip[14] != "" && $arrThirdRequestSlip[15] != "") {

					$branchDetailsT = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_contactperson1,b.branch_contactperson2,b.branch_contactpersonmobile1,b.branch_contactpersonmobile2,b.branch_email1,b.branch_email2,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '" . $arrThirdRequestSlip[24] . "' AND branch_sub_code='".$arrThirdRequestSlip[30]."' ");
					/*$branchweakdaysThi = $db->get_row("SELECT * FROM tb_cps_weekdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."')");
							$branchhalfdaysThi = $db->get_row("SELECT * FROM tb_cps_halfdays where branch_id = (select branch_id from tb_branchdetails where branch_code = '".$arrThirdRequestSlip[24]."')");*/

					$pdf = new TCPDF();
					$pdf->setPrintHeader(false);
		            $pdf->setPrintFooter(false);
					$pdf->AddPage();

					$pdf->SetFont('Arial', '', 8);
					$pdf->SetXY(40, 90);
					$pdf->StartTransform();
					$pdf->Rotate(-90);
					$address = preg_replace("/,+/", ",", $branchDetailsT->branch_name);
					// $address = preg_replace("/,+/", ",", $branchDetailsT->branch_address1 . ',' . $branchDetailsT->branch_address2 . ',' . $branchDetailsT->branch_address3 . ',' . $branchDetailsT->city_place . '-' . $branchDetailsT->branch_pin);
					//$pdf->Text(80, 5.6, $address);
					$lines1 = explode("\n", wordwrap($address, 55, "\n"));
					if (count($lines1) > 1) {
						$pdf->Text(75.5, 2.9, $lines1[0]);
						$pdf->Text(75.5, 5.9, $lines1[1]);
					} else {
						$pdf->Text(75.5, 5.9, $address);
					}

					$trn_str = $trn_string_array[$arrThirdRequestSlip[25]];

					$pdf->SetFont('Arial', 'B', 9);
					// $pdf->Text(78, 9, $trn_str);

					$pdf->Text(80, 12, 'From');
					$pdf->Text(89, 12, str_pad($thirdslipfrom, 6, "0", STR_PAD_LEFT));
					$pdf->Text(100, 12, 'TO');
					$pdf->Text(105, 12, str_pad($thirdslipto, 6, "0", STR_PAD_LEFT));

					$pdf->SetFont('Arial', '', 8);
					$pdf->Text(87.5, 20, $arrThirdRequestSlip[0]);

					$pdf->SetFont('Arial', '', 8);
					$pdf->Text(90, 28, $arrThirdRequestSlip[11]);

					$pdf->StopTransform();
					$pdf->Output(dirname(__FILE__)."\Slip2.pdf", 'F');

					//echo $printersinfo[0][0];
					exec("gsbatchprint\gsbatchprintc -P \"" . $printersinfo[0][0] . "\" -F \"" . dirname(__FILE__) . "\Slip2.pdf\" -I \"" . $printersinfo[0][1] . "\" -N 1 2>&1");

				}
			}

			//sleep(3);
		}
		
		function printCheques($type,$firstchequedata,$secondchequedata,$thirdchequedata,$noofCheque,$printersinfo)
		{
			global $db, $print_datetime;
			
			$arrFirstChequeData = explode("~",$firstchequedata);
			$arrSecondChequeData = explode("~",$secondchequedata);
			$arrThirdChequeData = explode("~",$thirdchequedata);
			
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
			$branchX = 34.3;		// Branch address X position
			$ifscX = 34.3;//122		// IFSC Code X position
			$accnoX = 33.2;		// A/C no X position
			$acnoPrefixX = 166;		// Barcode X position
			$bearerX = 193;		// BEARER X position

			$x = 11.8;			// Vertical printing X position

			$chqseriesX = 59.5; //60.7
			$micr1X = 88;		// 86.7
			$micr2X = 122.8;	// 121.5
			$trncodeX = 148.1;

			// Positions
			$arrPos = array(); 
			
			$arrPos[0] = ["BankAddrY" => 12.5, "AcnoY" => 48.5, "AcnoPrefix" => 28.3, "IfscY" => 15, "Name" => 52, "VUniqReq" => 76, "MICRY" => 82.5, "bearer" => 21];
			$arrPos[1] = ["BankAddrY" => 105.5, "AcnoY" => 141.5, "AcnoPrefix" => 121, "IfscY" => 108 , "Name" => 145, "VUniqReq" => 169, "MICRY" => 175, "bearer" => 114];
			$arrPos[2] = ["BankAddrY" => 199, "AcnoY" => 234.5, "AcnoPrefix" => 214, "IfscY" => 201.5 , "Name" => 238, "VUniqReq" => 262, "MICRY" => 267, "bearer" => 206.5];

			print_r($arrFirstChequeData[0]." ".$arrSecondChequeData[0]." ".$arrThirdChequeData[0]);
			echo "cheque<br/>";

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

			for ($i = 0; $i < $noofCheque; $i++) { 
				if($arrChqData[$i][5] == "")
					break;
					/*print_r($arrChqData[$i]);
					exit;*/
				$pdf->SetFont($arial, '', 7);
				$branchDetails = $db->get_row("SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrChqData[$i][23]."' AND branch_sub_code='".$arrChqData[$i][26]."' ");	
				// echo "SELECT b.branch_name,b.branch_telephone1,b.branch_telephone2,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_Services,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_code = '".$arrChqData[$i][23]."' AND branch_sub_code='".$arrChqData[$i][26]."'";
				// echo "<br>";
				

				
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

				if($arrChqData[$i][6]==10){
					$acctPrefix="SAVINGS ACCOUNT"; 
				}else if($arrChqData[$i][6]==11){
					$acctPrefix="CURRENT ACCOUNT"; 
				}else if($arrChqData[$i][6]==13){
					$acctPrefix="CASH CREDIT A/C"; 
				}else if($arrChqData[$i][6]==14){
					$acctPrefix="OVERDRAFT"; 
				}else{
					$acctPrefix="Not Over RS.: ";
				}
				
				
				
				$pdf->SetFont($arialb,'B',10.5);
				$pdf->Text($accnoX, $arrPos[$i]["AcnoY"], $arrChqData[$i][5]); // account no
				
				$pdf->SetFont($arialb,'B',9.5);
				$pdf->Text($acnoPrefixX, $arrPos[$i]["AcnoPrefix"], $acctPrefix); // account prefix

				

	            

				$pdf->SetFont($arialb,'B',9.5);
				/*print_r($arrChqData[$i]);
				exit;*/
				$arrChqData[$i][6]=(int)trim($arrChqData[$i][6]);
				$arrChqData[$i][7]=(string)trim($arrChqData[$i][7]);
				$arrChqData[$i][11]=(string)trim($arrChqData[$i][11]);
				$arrChqData[$i][12]=(string)trim($arrChqData[$i][12]);
				$arrChqData[$i][21]=(string)trim($arrChqData[$i][21]);


				if ($arrChqData[$i][6] == 10) // auth_sign1
				{
					$pdf->SetXY(0, $arrPos[$i]["Name"]);
					if ($arrChqData[$i][11] == "SELF" || $arrChqData[$i][11] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7], '', 0, 'R');
					} else if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12], '', 0, 'R');
					}
					
					$pdf->SetXY(0,$arrPos[$i]["Name"] + 17);
					if ($arrChqData[$i][11] == "SELF" || $arrChqData[$i][11] == "") {
						$pdf->Cell(204,10,'SIGNATURE','',0,'R');
					} else if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204,10,'SIGNATURE      SIGNATURE','',0,'R');
					} else {
						$pdf->Cell(204,10,'SIGNATURE      SIGNATURE      SIGNATURE','',0,'R');
					}
					//signature
				}else if($arrChqData[$i][6] == 11)
				{
					
									
					$pdf->SetXY(0, $arrPos[$i]["Name"]);
					if ($arrChqData[$i][11] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7], '', 0, 'R');
					} else if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12], '', 0, 'R');
					}
					
					// $pdf->SetXY(0,$arrPos[$i]["Name"]+17);
					// if(trim($arrChqData[$i][5]) == '000604000000000339') {
					// 	$pdf->Cell(204,10,'Authorized signatory      Authorized signatory','',0,'R');
					// } else {
					// 	$pdf->Cell(204,10,'PROPRIETOR          ','',0,'R');
					// }
					
					$pdf->SetXY(0, $arrPos[$i]["Name"] + 17);

					if (trim($arrChqData[$i][21]) !== '') {
				 
				  $pdf->Cell(204, 10, $arrChqData[$i][21], '', 0, 'R');
				  } else {
			   
				  $pdf->Cell(204, 10, 'PROPRIETOR', '', 0, 'R');
				 }
					
					//$pdf->Cell(204,10,'PROPRIETOR          ','',0,'R');
						
					// $pdf->SetFont('Arial','IB',10);
					// $pdf->Text(20,$arrPos[$i]["AcnoY"]+25,'on account of ________________________________');

				}else if($arrChqData[$i][6] == 13 || $arrChqData[$i][6] == 14 || $arrChqData[$i][6] == 21)
				{
					
					$pdf->SetXY(0, $arrPos[$i]["Name"]);
					if ($arrChqData[$i][11] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7], '', 0, 'R');
					} else if ($arrChqData[$i][12] == "") {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, $arrChqData[$i][7] . ' / ' . $arrChqData[$i][11] . ' / ' . $arrChqData[$i][12], '', 0, 'R');
					}
					
					
					// $pdf->SetXY(0,$arrPos[$i]["Name"]+17);
					// $pdf->Cell(204,10,'AUTHORISED SIGNATURE','',0,'R');

					$pdf->SetXY(0,$arrPos[$i]["Name"]+17);
					if (trim($arrChqData[$i][21]) !== '') {
						$pdf->Cell(204, 10, $arrChqData[$i][21], '', 0, 'R');
					} else {
						$pdf->Cell(204, 10, 'PROPRIETOR', '', 0, 'R');
					   }
					
					
					// $pdf->SetFont('Arial','IB',10);
					// $pdf->Text(20,$arrPos[$i]["AcnoY"]+25,'on account of ________________________________');

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
									
					$pdf->SetXY(0, $arrPos[$i]["Name"]);
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
						$pdf->SetXY(0,$arrPos[$i]["Name"]);
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
				$chqseries = "C" . $arrChqData[$i][0] . "C "; 
				$micr1 = $arrChqData[$i][2] . "A ";
				$micr2 = $arrChqData[$i][4] ."C ";

				$pdf->SetFont('micre13b','',12,true);

				$y = $arrPos[$i]["MICRY"];
				$pdf->Text($chqseriesX, $y, $chqseries);
				$pdf->Text($micr1X, $y, $micr1);
				$pdf->Text($micr2X, $y, $micr2);
				if($arrChqData[$i][6] == 13 || $arrChqData[$i][6] == 14){
					$pdf->Text($trncodeX, $y, '13');
				} else {
					$pdf->Text($trncodeX, $y, $arrChqData[$i][6]);
				}
			}

			$pdf->Output(dirname(__FILE__)."\Cheque.pdf", 'F');
			$imagePath = dirname(__FILE__)."\Cheque.pdf";

			// $pdf->Output("Cheque.pdf",'F');
			// $imagePath = dirname(__FILE__)."\Cheque.pdf";
			
			 exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\Cheque.pdf\" -I \"".$printersinfo[0][2]."\" -N 1 2>&1");
		}


		$db->closeDb();
	?>

	</div>
</div>
</body>
</html>
