<?php 
require_once 'global.php';
authentication_print();
require_once(ROOT_CLASSES.'tcpdf/examples/lang/eng.php');
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');

/*$Branch_id_map = array(
	// Branch_uniq => CPS branch_id
	3 => 2, 	// Sindhanur
	4 => 3,		// Gangavathi
	5 => 4, 	// Raichur
	6 => 5, 	// Koppal
	7 => 6,		// Bellary
	8 => 7,		// Hospet
	9 => 8,		// Hubli
	10 => 10,	// Siruguppa
	11 => 11,	// Royal Cirle
	12 => 12,	// Vasavi Nagar
	13 => 13,	// Lingasugur
	14 => 14,	// Yadgir
	15 => 15,	// Keshwapur
	16 => 16 	// Chitradurga
	17 => 17 	// CHALLAKERE
	);*/
//print_r($_REQUEST);
$condation = ' 1=1 ';
	if(isset($_REQUEST['branchid']) && !empty($_REQUEST['branchid'])){
		$condation .= ' AND tb_cps_payorder.pay_branch_id = "'.$_REQUEST['branchid'].'"';
	}
	if(isset($_GET['cps_book_size']) && !empty($_GET['cps_book_size'])){
		$condation .= ' AND tb_cps_payorder.cps_book_size = "'.$_GET['cps_book_size'].'"';
	}
	if(isset($_GET['frm']) && !empty($_GET['frm']) && isset($_GET['to']) && !empty($_GET['to'])){
		$condation .= ' AND (tb_cps_payorder.cps_date between "'.date('Y-m-d',strtotime($_REQUEST['frm'])).'" and "'.date('Y-m-d', strtotime($_REQUEST['to'])).'")';
	}
	
	$sql = "select tb_cps_payorder.*,b.branch_name, p.userid from tb_cps_payorder inner join tb_printadmin p on tb_cps_payorder.cps_process_user_id = p.adminid LEFT OUTER JOIN tb_branchdetails b ON b.branch_id = tb_cps_payorder.pay_branch_id where ".$condation."";

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Check Printing');
$pdf->SetTitle('Sucessfully Payorder Reports');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');	

// set default header data
$pdf->SetHeaderData('', '', 'Sucessfully Payorder Report', '');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 2, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------
$branch = "";
if(isset($_GET['branchid']) && !empty($_GET['branchid']))
{
	$sql1 = "select branch_name from tb_branchdetails where branch_id = ".$_GET['branchid'];
	$result1 = $db->get_row($sql1);

	$branch = $result1->branch_name;
}

if(isset($_GET['cps_book_size']) && !empty($_GET['cps_book_size']))
{
	$cps_book_size = $_GET['cps_book_size'];
}
// add a page
$pdf->AddPage();

//$pdf->Write(0, 'Sucessfully Printed Reports', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 10);

// -----------------------------------------------------------------------------
$data = "";
if($result = $db->get_results($sql)){

	$data .='<div style="border-bottom-color: #4487A9;border-bottom-style: solid;height: 87px;margin-bottom: 0;margin-left: 0;margin-right: 0;margin-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;padding-top: 0;width: 100%;"><div id="titlediv" style="font-size: 60px;text-align:left;"><b>Sucessfully Payorder Reports.</b><div style="font-size: 40px; float: left;">';
	$data .='&nbsp;&nbsp;&nbsp;<label><b>Transaction type</b> : PAY ORDER</label>';
	if($branch != "")
	{
		$data .='&nbsp;&nbsp;&nbsp;<label><b>Branch Name</b> : '.$branch.'</label>';
	}
	if($cps_book_size != "")
	{
		$data .='&nbsp;&nbsp;&nbsp;<label><b>Book size</b> : '.$cps_book_size.'</label>';
	}
	$data .='</div></div></div>';	
						$data .= '<table cellpadding="3" cellspacing="0" border="1" width="100%">
                            <tr style="font-weight:bold; border:1px #cccccc">
								<td width="16%" height="40px" align="center">Operator</td>								
								<td width="12%" class="thwidthth" align="center">Branch Name</td>							
								<td width="12%" class="thwidthth" align="center">Chq From</td>
								<td width="12%" class="thwidthth" align="center">Chq To</td>								
								<td width="12%" class="thwidthth" align="center">No of Books</td>
								<td width="12%" class="thwidthth" align="center">Book Size</td>								
								<td width="14%" class="thwidthth" align="center">Date Of Issue</td>
								<td width="10%" class="thwidthth" align="center">Sign</td>
                            </tr>' ;
	foreach($result as $row) {

							$data .= '<tr>
								<td class="thwidthtd" align="center">'.$row->userid.'</td>
								<td class="thwidthtd" align="center">'.$row->branch_name.'</td>							
								<td class="thwidthtd" align="center">'.$row->cps_chq_no_from.'</td>
								<td class="thwidthtd" align="center">'.$row->cps_chq_no_to.'</td>
								<td class="thwidthtd" align="center">'.$row->cps_no_of_books.'</td>
								<td class="thwidthtd" align="center">'.$row->cps_book_size.'</td>
								<td class="thwidthtd" align="center">'.date('d-m-Y', strtotime($row->cps_date)).'</td>								
								<td class="thwidthtd" align="center"></td>								
                            </tr>' ;

	}
	$data .= '</table>';
	//echo $data;
$pdf->writeHTML($data, true, false, false, false, '');
$pdf->Output('report-'.time().'.pdf', 'I');
}
?>