<?php  
require_once('global.php');
require('cellpdf.php');
require('pdf.php');
ini_set('max_execution_time', 1800);

$print_datetime = date("d-m-Y H:i:s");
$page_name = "payorder_print";
authentication_print();
if(!authentication_groups_pemissions($page_name,"","","Y"))
	header("Location: ".SITE_ROOT."home.php");		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Cheque Processing ::</title>
<link rel="stylesheet" href="css/stylecss.css" type="text/css" />
<script type="text/javascript" src="scripts/dropdowntabs.js"></script>

<?php 
include('includes.php'); 
$print_str = "";
if(isset($_POST['submit']))
{
	if(isset($_POST['ddlBranch']) && $_POST['ddlBranch'] != "" && isset($_POST['txtbook']) && $_POST['txtbook'] != "" && isset($_POST['txtbooksize']) && $_POST['txtbooksize'] != "")
	{
		$printersinfo = "";
		$printerDetails = $db->get_row("SELECT bank_printers from tb_bankdetails");
		if(!empty($printerDetails->bank_printers))
		{
			$printersinfo = unserialize($printerDetails->bank_printers);

			$total_leaves = $_POST['txtbooksize']*$_POST['txtbook'];	
			$no_pages = ceil($total_leaves/3);

			$payorderseries = $db->get_row("SELECT series_lastno from tb_cps_payorderseries WHERE series_branch_id = '".$_POST['ddlBranch']."' ");

			if(!empty($payorderseries))
			{
				$firstchequerow  = array();
				$secondchequerow = array();
				$thirdchequerow  = array();
				$requestsliprow  = array();

				$chq_no_from_r = $payorderseries->series_lastno;
				$chq_no_to_r   = (($chq_no_from_r + $_POST['txtbooksize']) - 1);
					
				for($Slips = 0; $Slips < $_POST['txtbook']; $Slips++)
				{	
					if($Slips > 0)
					{
						$chq_no_to_r   = (($chq_no_from_r + $_POST['txtbooksize']) - 1);	
					}
					$requestsliprow[] = array($chq_no_from_r,$chq_no_to_r);

					$sqlinsertquery = 'INSERT INTO tb_cps_payorder 
							(pay_branch_id,cps_chq_no_from,cps_chq_no_to,cps_no_of_books,cps_book_size,cps_date,cps_process_user_id)
							VALUES
							("'.$_POST['ddlBranch'].'","'.$chq_no_from_r.'","'.$chq_no_to_r.'","1","'.$_POST['txtbooksize'].'","'.date('Y-m-d').'","'.$_SESSION['admin_id'].'")';
					$db->query($sqlinsertquery);

					$chq_no_from_r = ($chq_no_to_r + 1);
				}
				
				for($j = 0;$j<count($requestsliprow);$j++)
				{		
					if($requestsliprow[$j] != "")
						$requestslipdata = implode("~",$requestsliprow[$j]);
					else
						$requestslipdata = "";
						
					printRequestSlip(2,$requestslipdata,1,$printersinfo);
									
				}
				
				$chq_no_from = $payorderseries->series_lastno;
				$chq_no_to   = (($chq_no_from + $total_leaves) - 1);
				
				$chkserisediff = (($chq_no_to - $chq_no_from) + 1);

				$jump = 0;
				for($i = 0; $i < $chkserisediff; $i++)
				{									 
					if($i!=0)
					{
						$chq_no_from = $chq_no_from + 1;
					}

					$chq_no_from = str_pad($chq_no_from, 6, "0", STR_PAD_LEFT);	
					
					if($jump < $no_pages)
					{											
						$firstchequerow[] = array($chq_no_from);																
					}
					elseif(($jump < ($no_pages * 2)) && ($jump >= $no_pages))
					{
						$secondchequerow[] = array($chq_no_from);																
					}
					elseif(($jump < ($no_pages * 3)) && ($jump >= $no_pages * 2))
					{	
						$thirdchequerow[] = array($chq_no_from);																
					}	
						
					$jump++;	
				}

				for($j = 0;$j<count($firstchequerow);$j++)
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
					
					printCheques(3,$firstchequedata,$secondchequedata,$thirdchequedata,3,$printersinfo);
				}

				$series_lastno = $chq_no_to + 1;
				$db->query("UPDATE tb_cps_payorderseries SET series_lastno = '".$series_lastno."' WHERE series_branch_id = '".$_POST['ddlBranch']."' ");
			}
			else
			{
				$err_msg =  "This branch Do Not Contain Cheque Serise in pay order. Please Create Cheque Serise For Branch.";	
				
			}
		}
		else
		{
			$err_msg =  "Please enter printer details in branch master";
		}	
	}
}
function printRequestSlip($type,$chequedata,$noOfRequestSlip,$printersinfo)
{
	global $db, $print_datetime, $print_str;
	$id = $_SESSION['admin_id'];
	$uresult = $db->get_row("SELECT userid from tb_printadmin WHERE adminid = '$id'");
	$print_user = $uresult->userid;			

	$arrRequestSlip = explode("~",$chequedata);

	$print_str .=  "<br/> From :- ".$arrRequestSlip[0]." "." To :- ".str_pad($arrRequestSlip[1], 6, "0", STR_PAD_LEFT)."<br/>";
	
	$branchDetailsF = $db->get_row("SELECT branch_name FROM tb_branchdetails where branch_id = '".$_POST['ddlBranch']."' ");
	
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
	$pdf->Cell(100, 5, str_pad($arrRequestSlip[0], 6, "0", STR_PAD_LEFT)." "." To "." ".str_pad($arrRequestSlip[1], 6, "0", STR_PAD_LEFT), '', 0, 'L');
	
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
	
	$pdf->Output("payorder_Slip.pdf",'F'); 
	
	//echo "gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\payorder_Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1";
	//exec("gsbatchprint\gsbatchprintc -P \"".$printersinfo[0][0]."\" -F \"".dirname(__FILE__)."\payorder_Slip.pdf\" -I \"".$printersinfo[0][1]."\" -N 1 2>&1");
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

	$branchDetails = $db->get_row("SELECT b.branch_code,b.branch_City_Code,b.branch_name,b.branch_address1,b.branch_address2,b.branch_address3,b.branch_pin,b.branch_neftifsccode,c.city_place FROM tb_branchdetails b inner join tb_citymaster c on b.branch_city_id = c.city_id where b.branch_id = '".$_POST['ddlBranch']."'");

	$micr_code = $branchDetails->branch_City_Code.$bankdetails->bank_code.$branchDetails->branch_code;

	$arrFirstChequeData  = explode("~",$firstchequedata);
	$arrSecondChequeData = explode("~",$secondchequedata);
	$arrThirdChequeData  = explode("~",$thirdchequedata);

	$branchX = 30;		// Branch address X position
	$ifscX = 30;		// IFSC Code X position
	$payorderX = 180;		// PAY ORDER X position
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
	$print_str .= "{$arrFirstChequeData[0]} {$arrSecondChequeData[0]} {$arrThirdChequeData[0]} cheque <br/>";

	$pdf = new PDF();
	$pdf->AddPage();

	$arrChqData    = array();
	$arrChqData[0] = $arrFirstChequeData;
	$arrChqData[1] = $arrSecondChequeData;
	$arrChqData[2] = $arrThirdChequeData;

	$pdf->AddFont('E-13B_0','','E-13B_0.php');

	for ($i = 0; $i < $noofCheque; $i++) 
	{ 
		if($arrChqData[$i][0] == "")
			break; 
		$pdf->SetFont('Arial', '', 7);
	
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
		$chqseries = "C" . $arrChqData[$i][0] . "C "; 
		$micr1 = $micr_code . "A ";
		// $micr1 = "000836000" . "A ";
		$micr2 = "000001";

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

?>
	<script type="text/javascript">
		var vRules = { ddlBranch: { required:true },txtbooksize: { required:true }, txtbook: { required:true }};
		var vMessages = { ddlBranch: {required: "<br/>Please select branch" },txtbooksize: {required: "<br/>Please enter book size" },txtbook: {required: "<br/>Please enter no. of books" }};

		$(document).ready(function() {
			$('#frm_payorder').validate({
				rules: vRules,
				messages: vMessages,
			});
		});
	</script>
	
	<SCRIPT language=Javascript>
	    function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
			{
				if(charCode != 08)
				{
					alert("Only numbers allowed");
					return false;
				}
				else
				{
					return true;
				}
			}
			else
			{
				return true;
			}
		}
   </SCRIPT>
</head>

<body>
<?php require_once('header.php'); ?>
<div id="formdiv">
	<div id="formheading">Pay order print</div>
		<div id="formfields">
			<?php if(isset($err_msg)) { ?>
				<div class="red"><?php echo $err_msg; ?></div>	
			<?php } ?>
			
			<form name="frm_payorder" id="frm_payorder" action="" method="post">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid; border-color:#cccccc;">
					<tr>
						<td align="left" valign="top" style="padding-left:16px; padding-top:16px; padding-bottom:16px">												
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td align="left" valign="top" colspan="2"><div id="response"></div></td>
								</tr>
								<tr>
						    		<td style="height: 35px; text-align: left" width="15%" align="left">
						    			<label>Branch</label><span class="red">*</span>
						    		</td>
						    		<td width="50%" align="left">
						    			<select name="ddlBranch" id="ddlBranch" style="width:190px; height:26px;">
											<option value=""> Select Branch</option><span class="red">*</span>
											<?php 
												$arrayBranch =  $db->get_results("SELECT branch_id, branch_name FROM tb_branchdetails ");
												foreach($arrayBranch as $branch):
											?>
												<option value="<?php echo $branch->branch_id; ?>" ><?php echo $branch->branch_name; ?></option>
											<?php ENDFOREACH; ?>
										</select>
						    		</td>
					    		</tr>
								<tr>
									<td width="15%" height="35" align="left" valign="top">
										<label>Enter no. of books</label><span class="red">*</span>
									</td>
									<td width="85%" align="left" valign="top">
										<input type="text" name="txtbook" id="txtbook" style="width:183px" onKeyPress = "return isNumberKey(event);">										
									</td>
								</tr>
								<tr>
									<td width="15%" height="35" align="left" valign="top">
										<label>Enter book size</label><span class="red">*</span>
									</td>
									<td width="85%" align="left" valign="top">
										<input type="text" name="txtbooksize" id="txtbooksize" onKeyPress = "return isNumberKey(event);" style="width:183px">										
									</td>
								</tr>																				
								<tr>
									<td></td>
									<td>
										<input type="submit" name="submit" id="submit" class="submitbutton" value="Print" />
										<input type="button" name="submit2" id="submit2" value="Discard" class="submitbutton" onClick="window.location.href='home.php'" />
										<input type="button" name="submit3" id="submit3" value="Go to home" class="submitbutton" onClick="window.location.href='home.php'" />
									</td>	
									<td></td>
								</tr>	
								<tr>
									<td align="left" valign="top" colspan="2"><div id="response"><?php echo $print_str; ?></div></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>			
			</form>
		</div>
	</div>              
</div>
<?php require_once('footer.php');	?>	
</body>
</html>
