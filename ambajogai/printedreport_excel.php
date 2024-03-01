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
	if(isset($_GET['frm']) && !empty($_GET['frm']) && isset($_GET['to']) && !empty($_GET['to'])){
		$condation .= ' AND (prc.cps_date between "'.date('Y-m-d',strtotime($_REQUEST['frm'])).'" and "'.date('Y-m-d', strtotime($_REQUEST['to'])).'")';
		$title .= 'Printed Report for the period : '.date('Y-m-d',strtotime($_REQUEST['frm'])).' To '.date('Y-m-d',strtotime($_REQUEST['to']));
	}else{
		$condation .= " and prc.cps_date between '".date('d-m-Y', strtotime('last month'))."' and '".date('Y-m-d')."' ";
	}
	
	$condation .= ' AND prc.cps_is_reprint=0';
	
	$sql = "select prc.*,p.userid from tb_print_req_collection prc inner join tb_printadmin p on prc.cps_process_user_id = p.adminid where ".$condation." ORDER BY ABS(cps_chq_no_from) ASC";
	
	
	
	//if(isset($_REQUEST['type']) && !empty($_REQUEST['type']) && $_REQUEST['type'] == 'search'  && isset($_REQUEST['frm']) && !empty($_REQUEST['frm']) && isset($_REQUEST['to']) && !empty($_REQUEST['to']) && isset($_REQUEST['branchid']) && empty($_REQUEST['branchid'])) 
	//{
		//$sql = "select prc.*,p.userid from tb_print_req_collection prc inner join tb_printadmin p on prc.cps_process_user_id = p.adminid where prc.cps_date between '".date('Y-m-d',strtotime($_REQUEST['frm']))."' and '".date('Y-m-d', strtotime($_REQUEST['to']))."'  AND cps_is_reprint=0";
		//$title = 'Sucessfully Printed Reports for the period : '.date('d/m/Y',strtotime($_REQUEST['frm'])) . ' to ' . date('d/m/Y',strtotime($_REQUEST['to']));
	//}		
	//echo "<-->".$sql; 
	//die();


// ---------------------------------------------------------
$branch = "";
if(isset($_GET['branchid']) && !empty($_GET['branchid']))
{
	$sql1 = "select branch_name from  tb_branchdetails where branch_sub_code = ".$_GET['branchid'];
	$result1 = $db->get_results($sql1);
	foreach($result1 as $row1) 
	{
		$branch = $row1->branch_name;
	}
}

$trn_type = "";
if(isset($_GET['cps_atpar']) && !empty($_GET['cps_atpar']))
{
	$sql2 = "select transactioncodedescription from tb_cps_transactioncodes where transactioncode = ".$_GET['cps_atpar'];
	$result2 = $db->get_results($sql2);
	foreach($result2 as $row2) 
	{
		$trn_type = $row2->transactioncodedescription;
	}
}

// -----------------------------------------------------------------------------
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
	$wrsheet->SetCellValueByColumnAndRow(0, 1, $data);
	$wrsheet->getStyle('A1')->getAlignment()->setWrapText(true);
	$wrsheet->mergeCells('A1:G1');
	$wrsheet->getRowDimension(1)->setRowHeight(45);
	$wrsheet->SetCellValueByColumnAndRow(0, 2, 'Sr. No.');
	$wrsheet->SetCellValueByColumnAndRow(1, 2, 'Operator');
	$wrsheet->SetCellValueByColumnAndRow(2, 2, 'Acc. No');
	$wrsheet->SetCellValueByColumnAndRow(3, 2, 'Name');
	$wrsheet->SetCellValueByColumnAndRow(4, 2, 'Chq From');
	$wrsheet->SetCellValueByColumnAndRow(5, 2, 'Chq To');
	$wrsheet->SetCellValueByColumnAndRow(6, 2, 'Date Of Issue');	
	$i = 3;
	foreach($result as $row) 
	{
		$wrsheet->SetCellValueByColumnAndRow(0, $i, $i-2);
		$wrsheet->SetCellValueByColumnAndRow(1, $i, $row->userid);
		$wrsheet->SetCellValueByColumnAndRow(2, $i, $row->cps_account_no);
		$wrsheet->SetCellValueByColumnAndRow(3, $i, $row->cps_act_name);
		$wrsheet->SetCellValueByColumnAndRow(4, $i, $row->cps_chq_no_from);
		$wrsheet->SetCellValueByColumnAndRow(5, $i, $row->cps_chq_no_to);
		$wrsheet->SetCellValueByColumnAndRow(6, $i, date('d-m-Y', strtotime($row->cps_date)));
		$i++;
	}
	//$wrobjPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(-1);
	// adjust auto column width
	foreach(range('A','G') as $columnID) {
		$wrobjPHPExcel->getActiveSheet()->getColumnDimension($columnID)
			->setAutoSize(true);
			
	}
	//heading bold
	$wrsheet->getStyle("A1:G1")->getFont()->setBold(true);
	$wrsheet->getStyle("A2:G2")->getFont()->setBold(true);
    $styleMerge = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $wrsheet->getStyle("A1:G1")->applyFromArray($styleMerge);	
	//creating table structure
	/*$styleArray = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => '000000'),
		),
	),
	);
	
	$wrsheet->getStyle('A0:H'.($i-1))->applyFromArray($styleArray);
	
	//header colour
	$wrsheet->getStyle('A1:H1')->applyFromArray(
		array(
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => 'cdcdcd')
			)
		)
	);*/
	
	$date = date("Y-m-d");
	$filename = 'SelectedPeriodReport_'.$date;
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename=\"".$filename.".xlsx\"");
	header("Cache-Control: max-age=0");
	$objWriter->save("php://output"); 	
//	echo $data;
//	die();

}
?>