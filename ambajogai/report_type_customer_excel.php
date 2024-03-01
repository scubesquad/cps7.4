<?php 
require_once 'global.php';
//authentication_print();
require_once(ROOT_CLASSES.'PHPExcel.php');

$title = 'Customer Report';
if(isset($_REQUEST['type']) && !empty($_REQUEST['type']) && $_REQUEST['type'] == 'search'  && 
	 isset($_REQUEST['cust']) && !empty($_REQUEST['cust']) ) {
		$sql = "SELECT tb_print_req_collection.*, tb_printadmin.`userid` FROM tb_print_req_collection LEFT OUTER JOIN tb_printadmin ON cps_process_user_id = adminid where cps_act_name LIKE '%".$_REQUEST['cust']."%' ";
		$title .= ': '.$_REQUEST['cust'];
}else{
	echo "Invalid Location!!!!!";
	die();
}

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
	$date = date("Y-m-d");
	$filename = 'CustomerReport_'.$date;
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename=\"".$filename.".xlsx\"");
	header("Cache-Control: max-age=0");
	$objWriter->save("php://output"); 

}
?>