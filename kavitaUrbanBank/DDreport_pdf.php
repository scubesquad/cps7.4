<?php 
require_once 'global.php';
authentication_print();
require_once(ROOT_CLASSES.'tcpdf/config/lang/eng.php');
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');

$condition = ' 1=1 ';
	if(isset($_REQUEST['branchid']) && !empty($_REQUEST['branchid'])){
		$condition .= ' AND tb_cps_dd.dd_branch_id = "'.$_REQUEST['branchid'].'"';
	}
	if(isset($_GET['cps_book_size']) && !empty($_GET['cps_book_size'])){
		$condation .= ' AND tb_cps_dd.cps_book_size	 = "'.$_GET['cps_book_size'].'"';
	}
	if(isset($_GET['frm']) && !empty($_GET['frm']) && isset($_GET['to']) && !empty($_GET['to'])){
		$condition .= ' AND (tb_cps_dd.cps_date between "'.date('Y-m-d',strtotime($_REQUEST['frm'])).'" and "'.date('Y-m-d', strtotime($_REQUEST['to'])).'")';
	}	
	$sql = "select tb_cps_dd.*, b.branch_name, p.userid from tb_cps_dd inner join tb_printadmin p on tb_cps_dd.cps_process_user_id = p.adminid LEFT OUTER JOIN tb_branchdetails b ON b.branch_id = tb_cps_dd.dd_branch_id where ".$condition;

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Check Printing');
$pdf->SetTitle('Sucessfully Demand Draft Reports');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');	

// set default header data
$pdf->SetHeaderData('', '', 'Sucessfully Demand Draft Report', '');

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
	$data .='&nbsp;&nbsp;&nbsp;<label><b>Transaction type</b> : DEMAND DRAFT</label>';
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