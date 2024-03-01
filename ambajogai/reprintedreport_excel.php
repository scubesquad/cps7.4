<?php 
require_once 'global.php';
//authentication_print();
require_once(ROOT_CLASSES.'PHPExcel.php');
$title = "";
	
	$condation = ' 1=1 ';
	if(isset($_REQUEST['branchid']) && !empty($_REQUEST['branchid'])){
		$condation .= ' AND prc.branch_sub_code = "'.$_REQUEST['branchid'].'"';
	}
	if(isset($_GET['cps_atpar']) && !empty($_GET['cps_atpar'])){
		$condation .= ' AND prc.cps_tr_code = "'.$_GET['cps_atpar'].'"';
	}
	if(isset($_GET['cps_book_size']) && !empty($_GET['cps_book_size'])){
		$condation .= ' AND prc.cps_book_size = "'.$_GET['cps_book_size'].'"';
	}
	if(isset($_GET['frm']) && !empty($_GET['frm']) && isset($_GET['to']) && !empty($_GET['to'])){
		$condation .= ' AND (prc.cps_date between "'.date('Y-m-d',strtotime($_REQUEST['frm'])).'" and "'.date('Y-m-d', strtotime($_REQUEST['to'])).'")';
	}
	
	$condation .= ' AND prc.cps_is_reprint=0';
	
	$sql = "select prc.*,p.userid from tb_reprint_req_collection prc inner join tb_printadmin p on prc.cps_process_user_id = p.adminid where ".$condation."";
	
	if(isset($_GET['frm']) && !empty($_GET['frm']) && isset($_GET['to']) && !empty($_GET['to'])){
	$title .= 'Printed Report for the period : '.date('Y-m-d',strtotime($_REQUEST['frm'])).' To '.date('Y-m-d',strtotime($_REQUEST['to']));
	}

//print_r($_REQUEST);
/*if(isset($_REQUEST['type']) && !empty($_REQUEST['type']) && $_REQUEST['type'] == 'search'  && 
	 isset($_REQUEST['frm']) && !empty($_REQUEST['frm']) &&  
	 isset($_REQUEST['to']) && !empty($_REQUEST['to']) ) {*/
		//$sql = "select * from tb_reprint_req_collection where cps_date between '".date('Y-m-d',strtotime($_REQUEST['frm']))."' and '".date('Y-m-d', strtotime($_REQUEST['to']))."'";
		/*$sql = "SELECT tb_reprint_req_collection.*, tb_printadmin.`userid` FROM tb_reprint_req_collection LEFT OUTER JOIN tb_printadmin ON cps_process_user_id = adminid where cps_date between '".date('Y-m-d',strtotime($_REQUEST['frm']))."' and '".date('Y-m-d', strtotime($_REQUEST['to']))."'";
} else {*/
	//$sql = "select * from tb_reprint_req_collection";
	/*$sql = "SELECT tb_reprint_req_collection.*, tb_printadmin.`userid` FROM tb_reprint_req_collection LEFT OUTER JOIN tb_printadmin ON cps_process_user_id = adminid";
}*/


$branch = "";
if(isset($_GET['branchid']) && !empty($_GET['branchid']))
{
	$sql1 = "select branch_name from  tb_branchdetails where branch_sub_code = ".$_GET['branchid'];
	$result1 = $db->get_row($sql1);
	$branch = $result1->branch_name;
}

$trn_type = "";
if(isset($_GET['cps_atpar']) && !empty($_GET['cps_atpar']))
{
	$sql2 = "select transactioncodedescription from tb_cps_transactioncodes where transactioncode = ".$_GET['cps_atpar'];
	$result2 = $db->get_row($sql2);
	$trn_type = $result2->transactioncodedescription;
}

$cps_book_size = "";
if(isset($_GET['cps_book_size']) && !empty($_GET['cps_book_size']))
{
		$cps_book_size = $_GET['cps_book_size'];
}

$data = "";
if($result = $db->get_results($sql)){
	$inputFileType = 'Excel2007';
	$wrobjPHPExcel = new PHPExcel();
	$objWriter     = PHPExcel_IOFactory::createWriter($wrobjPHPExcel, $inputFileType);	
	ob_end_clean();
	$wrsheet = $wrobjPHPExcel->getSheet(0); 
	//header
	$data .=$title."\n";
	if($branch != "")
	{
		$data .="Branch Name: ".$branch."\n";
	}
	if($trn_type != "")
	{
		$data .="Transaction Type: ".$trn_type;
	}
	if($cps_book_size != "")
	{
		$data .="Book size: ".$cps_book_size;
	}
	$wrsheet->SetCellValueByColumnAndRow(0, 1, $data);
	$wrsheet->getStyle('A1')->getAlignment()->setWrapText(true);
	$wrsheet->mergeCells('A1:K1');
	$wrsheet->getRowDimension(1)->setRowHeight(45);
	$wrsheet->SetCellValueByColumnAndRow(0, 2, 'Sr. No.');
	$wrsheet->SetCellValueByColumnAndRow(1, 2, 'Operator');
	$wrsheet->SetCellValueByColumnAndRow(2, 2, 'Unique Req');
	$wrsheet->SetCellValueByColumnAndRow(3, 2, 'Acc. No');
	$wrsheet->SetCellValueByColumnAndRow(4, 2, 'Branch Code');
	$wrsheet->SetCellValueByColumnAndRow(5, 2, 'Name');
	$wrsheet->SetCellValueByColumnAndRow(6, 2, 'Chq From');	
	$wrsheet->SetCellValueByColumnAndRow(7, 2, 'Chq To');	
	$wrsheet->SetCellValueByColumnAndRow(8, 2, 'No of Books');	
	$wrsheet->SetCellValueByColumnAndRow(9, 2, 'Book Size');	
	$wrsheet->SetCellValueByColumnAndRow(10, 2, 'Date Of Issue');
	$i = 3;
	foreach($result as $row) 
	{
		$wrsheet->SetCellValueByColumnAndRow(0, $i, $i-2);
		$wrsheet->SetCellValueByColumnAndRow(1, $i, $row->userid);
		$wrsheet->SetCellValueByColumnAndRow(2, $i, $row->cps_unique_req);
		$wrsheet->SetCellValueByColumnAndRow(3, $i, $row->cps_account_no);
		$wrsheet->SetCellValueByColumnAndRow(4, $i, $row->cps_branchmicr_code);
		$wrsheet->SetCellValueByColumnAndRow(5, $i, $row->cps_act_name);
		$wrsheet->SetCellValueByColumnAndRow(6, $i, $row->cps_chq_no_from);
		$wrsheet->SetCellValueByColumnAndRow(7, $i, $row->cps_chq_no_to);
		$wrsheet->SetCellValueByColumnAndRow(8, $i, $row->cps_no_of_books);
		$wrsheet->SetCellValueByColumnAndRow(9, $i, $row->cps_book_size);		
		$wrsheet->SetCellValueByColumnAndRow(10, $i, date('d-m-Y', strtotime($row->cps_date)));
		$i++;
	}
	// adjust auto column width
	foreach(range('A','K') as $columnID) {
		$wrobjPHPExcel->getActiveSheet()->getColumnDimension($columnID)
			->setAutoSize(true);
	}
	//heading bold
	$wrsheet->getStyle("A1:K1")->getFont()->setBold(true);
	$wrsheet->getStyle("A2:K2")->getFont()->setBold(true);
    $styleMerge = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $wrsheet->getStyle("A1:K1")->applyFromArray($styleMerge);	
	
	$date = date("Y-m-d");
	$filename = 'RePrintedReport_'.$date;
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename=\"".$filename.".xlsx\"");
	header("Cache-Control: max-age=0");
	$objWriter->save("php://output");	

}
?>