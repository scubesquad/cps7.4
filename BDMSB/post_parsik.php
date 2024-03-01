<?php
require_once 'global.php';
//  Include PHPExcel_IOFactory
// require 'classes/PHPExcel.php';
// include_once "classes/PHPExcel/IOFactory.php";
include_once "classes/PHPExcel.php";
include 'classes/PHPExcel/IOFactory.php';

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

error_reporting(E_ALL ^ E_NOTICE);
	if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'delete') ){

		// to insert user print req collection code log
		$logData = array();
		$count = 0;
		$data = explode(',', $_REQUEST['pid']);
		for($i=0;$i<count($data);$i++){
			$sql = "SELECT * FROM `tb_uploadingdata` where `id` =". $data[$i];
			$row = $db->get_row($sql);

			$logData[] = array(
				"cps_unique_req" => $row->cps_unique_req, 
				"cps_micr_code" => $row->cps_micr_code,
				"cps_branchmicr_code" => $row->cps_branchmicr_code,
				"cps_tr_code" => $row->cps_tr_code,
				"cps_account_no" => $row->cps_account_no,
				"cps_act_name" => $row->cps_act_name,
				"cps_act_jointname1" => $row->cps_act_jointname1,
				"cps_act_jointname2" => $row->cps_act_jointname2,
				"cps_act_address1" => $row->cps_act_address1,
				"cps_act_address2" => $row->cps_act_address2,
				"cps_act_address3" => $row->cps_act_address3,
				"cps_act_address4" => $row->cps_act_address4,
				"cps_act_address5" => $row->cps_act_address5,
				"cps_act_city" => $row->cps_act_city,
				"cps_act_pin" => $row->cps_act_pin,
				"cps_no_of_books" => $row->cps_no_of_books,
				"cps_book_size" => $row->cps_book_size,
				"cps_dly_bearer_order" => $row->cps_dly_bearer_order,
				"cps_chq_no_from" => $row->cps_chq_no_from,
				"cps_chq_no_to" => $row->cps_chq_no_to,
				"cps_issue_date" => $row->cps_issue_date,
				"cps_date" => $row->cps_date,
				"cps_micr_account_no" => $row->cps_micr_account_no,
				"cps_process_user_id" => $row->cps_process_user_id,
				"cps_product_code" => $row->cps_product_code,
				"cps_auth_sign1" => $row->cps_auth_sign1,
				"cps_auth_sign2" => $row->cps_auth_sign2,
				"cps_auth_sign3" => $row->cps_auth_sign3,
				"cps_act_mobile" => $row->cps_act_mobile,
				"cps_act_telephone_res" => $row->cps_act_telephone_res,
				"cps_act_telephone_off" => $row->cps_act_telephone_off,
				"cps_bsr_code" => $row->cps_bsr_code
			);
			$count = $count + 1;
		}
		$sql = "SELECT count(cps_unique_req) as total FROM `tb_uploadingdata`";
		$row = $db->get_row($sql);
		// print_r($logData);
		// $db->deleteLog('tb_uploadingdata', 'Upload & Print With File', $_REQUEST['pid'], $_SESSION['admin_id'], 'delete', $logData, "Total $row->total/$count record deleted");
		// end of insert user print req collection code log

		$delete="delete from tb_uploadingdata where id IN (".$_REQUEST['pid'].")";
		$db->query($delete) ;
		header('Location:parsikupload.php');
	}
	else if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'print') && !empty($_REQUEST['pid']) && isset($_REQUEST['pid']) ) {
		// $insert="Insert Into tb_pending_print_req (cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code,cps_short_name, cps_product_code) SELECT cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code,cps_short_name,cps_product_code from tb_uploadingdata WHERE id IN (".$_REQUEST['pid'].")";	
		$insert="Insert Into tb_pending_print_req (cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code,cps_short_name, cps_product_code,branch_sub_code) SELECT cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_account_no,cps_act_name,cps_no_of_books,cps_dly_bearer_order,cps_book_size,cps_tr_code,cps_atpar,cps_act_jointname1,cps_act_jointname2,cps_auth_sign1,cps_auth_sign2,cps_auth_sign3,cps_act_address1,cps_act_address2,cps_act_address3,cps_act_address4,cps_act_address5,cps_act_city,cps_state,cps_country,cps_emailid,cps_act_pin,cps_act_telephone_res,cps_act_telephone_off,cps_act_mobile,cps_ifsc_code,cps_chq_no_from,cps_chq_no_to,cps_micr_account_no,cps_date,cps_process_user_id,cps_bsr_code,cps_pr_code,cps_short_name,cps_product_code, branch_sub_code from tb_uploadingdata WHERE id IN (".$_REQUEST['pid'].")";	
		$db->query($insert) ;

		$update="update tb_pending_print_req set cps_isprint = 1";
		$delete="delete from tb_uploadingdata where id IN (".$_REQUEST['pid'].")";

		$db->query($update) ;
		$db->query($delete) ;
	
		//$updates=mysqli_query($conn,$update) or die(mysqli_error($conn));
		//$deleteinserts=mysqli_query($conn,$delete) or die(mysqli_error($conn));
		if(isset($_REQUEST['bunch']) && $_REQUEST['bunch'] == 'yes')
			header('Location: confirmprintreq.php?file=text&bunch=yes');	
		else			
			header('Location: confirmprintreq.php?file=text');	
	}
	
	if(@$_FILES['uploadedfile']['name']!='')
	{
		$InputFile=$_FILES['uploadedfile'];
		$FileName=$InputFile["name"];
		$target_path = "uploads/".$FileName;
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
		$fh = fopen("$target_path","r");
		$data = array();
		$entries_found = false;

		$inputFileName = __DIR__.'/uploads/'.$FileName;
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($inputFileName);

		$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
		
		
		
		$sheet = $objPHPExcel->getSheet(0); 
		
	
		// 'B'=>'Sr No : ',
		// 'C'=>'Cheque Book date : ',
		// 'D'=>'New A/C Number : ',
		// 'E'=>'Sub Ac/ No. : ',
		// 'F'=>'Account Name : ',
		// 'G'=>'Number Of Chequebook : ',
		// 'H'=>'Chequebook Leaves : ',
		// 'I'=>'Start Cheque : ',
		// 'J'=>'End Cheque : ',
		// 'K'=>'empty'		
		$lastRow = $sheet->getHighestRow();
		
		
		$i = 0;
		$branchName = '';
		$trnType = '';
		for ($row = 9; $row <= $lastRow; $row++) {

			$rowData = $allDataInSheet[$row];
			// echo "<pre>";
			// print_r($rowData);
			// echo "<pre>";
			if(trim($rowData['B']) =="Sr." || trim($rowData['B']) =="No.") {
				continue;
			}

			if(stripos(trim($rowData['B']), 'branch') !== FALSE) {
				$branchName = $rowData['B'];
				continue;
			}
			if(stripos(trim($rowData['B']), 'Gl -') !== FALSE) {
				$trnType = $rowData['B'];
				continue;
			} 

			if(trim($rowData['B']) == '' && trim($rowData['F']) != '' ) {
				//check here for joint name
				// update query here
				$db->query("update test_upload set joint_account_name".$jointAccountCounter." = '".trim($rowData['F'])."' where id = ".$insertLastId."");
				// $db->query($updateSQl);
				$jointAccountCounter++;
				// $insertLastId
				continue;
			}
			if(trim($rowData['B']) == '' && trim($rowData['F']) == '' ) {
			
				continue;
			}
			

		
			
			
			$sql = "insert into test_upload(branch,transcation_type,sr_no,date,account_number,sub_acc_no,account_name,chequebook_number,chequebook_leaves,start_cheque,end_cheque)values('".$branchName."','".$trnType."','".$rowData['B']."','".$rowData['C']."','".$rowData['D']."','".$rowData['E']."','".$rowData['F']."','".$rowData['G']."','".$rowData['H']."','".$rowData['I']."','".$rowData['J']."') ";
			
			
			$insertLastId = $db->query($sql);
			$jointAccountCounter = 1;
			


		}
		
		$cpsprocess_user_id = $_SESSION["admin_id"];
		$result = $db->get_results("Select * from test_upload where status = '1'");
//echo "'retur";
		//die();
		foreach($result as $row){

			// echo $row->branch;
			preg_match("/([0-9]+)/", $row->branch, $branchSubCode);
			// $BraNew =substr(strrchr($row->branch, '-'), 1);
			
			// echo "SELECT branch_code,branch_sub_code,branch_micr,branch_sub_code FROM tb_branchdetails where branch_sub_code = '".$branchSubCode[1]."' limit 1 ";
			// echo "<br>";
			// echo "<br>";
			
			$row1 = $db->get_row("SELECT branch_code,branch_sub_code,branch_micr,branch_sub_code FROM tb_branchdetails where branch_sub_code = '".$branchSubCode[1]."' limit 1 ");
			if($row1) {
				$branCode = $row1->branch_code;
				$branMICRCode = $row1->branch_micr;
				$branSubCode = $row1->branch_sub_code;
			} else {
				$branCode = '';
				$branMICRCode = '';
				$branSubCode = '';
			}

			$trnTypeNew =substr(strrchr($row->transcation_type, '-'), 1);
			$row2 = $db->get_row("SELECT * FROM tb_cps_transactioncodes where transactioncodedescription like '%".$trnTypeNew."%' ");
			if($row2) {
				$TrCode = $row2->transactioncode;
			} else {
				$TrCode = '';
			}

			if($result = $db->get_results("select cps_unique_req from tb_print_req_collection where cps_account_no = '".$row->account_number."' and cps_chq_no_from = '".$row->start_cheque."' "))
			{
				// echo "<p style='color:red'>This file has records which are already printed</p>";
				echo "<p class='error-p'>Error: This file has records which are already printed. | A/c No : ".$row->account_number." | Series : ".$row->start_cheque." to ".$row->end_cheque."</p>";
				$entries_found = true;
				$db->query("delete from test_upload");
				$db->query("delete from tb_uploadingdata");
				break;
			}
			else if($result = $db->get_results("select cps_unique_req from tb_uploadingdata where cps_account_no = '".$row->account_number."' and cps_chq_no_from = '".$row->start_cheque."' "))
			{
				echo "select cps_unique_req from tb_uploadingdata where cps_account_no = '".$row->account_number."' and cps_chq_no_from = '".$row->start_cheque."' ";
				echo "<br>";
				// echo "<p style='color:red'>This file has records which are already uploaded for printing </p>";
				echo "<p class='error-p'>Error: This file has records which are already uploaded for printing. | A/c No : ".$row->account_number." | Series : ".$row->start_cheque." to ".$row->end_cheque."</p>";
				$entries_found = true;
				$db->query("delete from test_upload");
				$db->query("delete from tb_uploadingdata");
				break;
			}
			
			if(!$entries_found) {
				$uniqueResu = $db->get_row("select cps_unique_req from tb_uploadingdata ORDER BY id DESC LIMIT 1");
				if($uniqueResu) {
					$unique = $uniqueResu->cps_unique_req +1 ;

				} else {
					$unique = '00000001';
				}
				$acoutMICR = substr($row->account_number, -7);
				$sql="insert into tb_uploadingdata(cps_unique_req,cps_micr_code,cps_branchmicr_code,cps_tr_code,cps_account_no,
				cps_act_name, cps_act_jointname1, cps_act_jointname2,cps_no_of_books,cps_book_size,
				cps_dly_bearer_order,cps_chq_no_from,cps_chq_no_to,
				cps_issue_date,cps_date, cps_process_user_id,branch_sub_code, cps_micr_account_no 
				)values(
				'".$unique."','".$branMICRCode."','".$branCode."','".$TrCode."','".$row->account_number."',
				'".$row->account_name."','".$row->joint_account_name1."','".$row->joint_account_name2."','".$row->chequebook_number."','".$row->chequebook_leaves."',
				'Y','".$row->start_cheque."','".$row->end_cheque."',
				'".$row->date."','".date('Y-m-d H:i:s')."','".$cpsprocess_user_id."','".$branSubCode."','".$acoutMICR."') ";				  
				$LastId = $db->query($sql) ;
				$db->query("delete from test_upload where id = ".$row->id."");
			}

			

		}		

		
		FetchUploadedFiles();
	}
	else if(isset($_GET['getfunc']) && $_GET['getfunc'] != '')
	{
		$func = $_GET['getfunc'];
		if($func == 'getBranches')
			getBranches();
		else if($func == 'getTransactions')
			getTransactions();
	}
	else
	{
		FetchUploadedFiles();
	}
	$add_url = '';
	if(isset($_GET['ddlBranchName']) && $_GET['ddlBranchName'])
	{
		$add_url = "?ddlBranchName=" . $_GET['ddlBranchName'];
	}
	if(strlen($add_url) > 0)
		$add_url = "?" . $add_url;


//=======================new function=========================

function getDataFetch($BraNew){
	global $db;
	$row = $db->get_row("SELECT branch_code FROM tb_branchdetails where branch_name like '%".$BraNew."%' ");
	return $row->branch_code;
}

//=======================Function for show uploaded data=========================
function FetchUploadedFiles(){

	global $db;
	$id = 0;
	$queryStr = "SELECT * FROM tb_uploadingdata where cps_unique_req not in (0) ";

	$branch1 = "";
	$trn_code = "";
	if(isset($_REQUEST['ddlBranchName']) && $_REQUEST['ddlBranchName'] != '')
		$branch1 = $_REQUEST['ddlBranchName'];

	if(isset($_REQUEST['ddlTranType']) && $_REQUEST['ddlTranType'] != '')
		$trn_code = $_REQUEST['ddlTranType'];

	if($branch1)
	{
		$queryStr .= " and  cps_branchmicr_code = '$branch1'";
	}
	if($trn_code)
	{
		$queryStr .= " and  cps_tr_code = '$trn_code'";
	}

	if($result = $db->get_results($queryStr) ){
		$tableinner = '';
		$tableheader = '<tr>
							<th style="background-color: #EDEDED; width:15px"></th>
							<th class="thwidthth">Unique Request No</th>
							<th class="thwidthth">Micr Code</th>							
							<th class="thwidthth">Account No</th>
							<th class="thwidthth">Customer Name</th>
							<th class="thwidthth">No Of Books</th>
							<th class="thwidthth">Book Size</th>
							<th class="thwidthth">Tr Code</th>
							<th class="thwidthth">At Par</th>								
							<th class="thwidthth">Chk No. From</th>
							<th class="thwidthth">Chk No. To</th>							
							<th class="thwidthth">Address 1</th>
							<th class="thwidthth">Address 2</th>
							<th class="thwidthth">Address 3</th>
							<th class="thwidthth">Address 4</th>
							<th class="thwidthth">Address 5</th>
							<th class="thwidthth">City</th>														
							<th class="thwidthth">PIN</th>							
							<th class="thwidthth">Mobile</th></tr>';
		$tablefooter = '<tr><td colspan="19" valign="middle" class="thwidthth" style="text-align:left; padding-left:10px">
          <a id="mark_all" style="margin-right:20px;" class="pointer"  onclick="MarkAll();" >Select all</a>
          <a id="unmark_all" style="margin-right:20px;" class="pointer"  onclick="Unmark_all();">Deselect all</a>
          <a id="print_selected" style="margin-right:20px;" class="pointer" onclick="Print_selected();">Print Selected</a>
          <a id="print_selected3" style="margin-right:20px;" class="pointer" onclick="Print_selected3();">Print Selected in bunch</a>
		  <a id="delete_selected" style="margin-right:20px;" class="pointer" onclick="Delete_selected();">Delete Selected</a>
          </td></tr><tr><td style="height:30px;">&nbsp;</td></tr>';
		
		foreach($result as $row) {
			$tableinner .= DivPattern(1,$id++,$row);
		}
		
		echo "<table cellpadding='0' cellspacing='0' border='0' width='3000' id='categorytable'>".$tableheader.$tableinner.$tablefooter."</table>";
	}
}

function DivPattern($pattern = 1,$id,$objprintdata){
	$class = ($id%2) ? 'alt-row' : 'even-row';
	switch($pattern){
		case 1:
			$tableinner = "<tr class='$class'>
				<td><input type='checkbox' name='action[]' id='".$objprintdata->id."' class='class_chkbox'  />  <button type='button' class='openModal' data-id='" . $objprintdata->id . "' style='margin-left: 10px; value='edit' >Edit</button> </td>
				<td class='thwidthtd'>".$objprintdata->cps_unique_req."</td>
				<td class='thwidthtd'>".$objprintdata->cps_micr_code."</td>								
				<td class='thwidthtd'>".$objprintdata->cps_account_no."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_name."</td>
				<td class='thwidthtd'>".$objprintdata->cps_no_of_books."</td>
				<td class='thwidthtd'>".$objprintdata->cps_book_size."</td>
				<td class='thwidthtd'>".$objprintdata->cps_tr_code."</td>";
				
				if($objprintdata->cps_atpar == 0){
						$tableinner .="<td class='thwidthtd'>N</td>";
				}else{
						$tableinner .="<td class='thwidthtd'></td>";
				}
				
			$tableinner .="<td class='thwidthtd'>".$objprintdata->cps_chq_no_from."</td>
				<td class='thwidthtd'>".$objprintdata->cps_chq_no_to."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_address1."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_address2."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_address3."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_address4."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_address5."</td>
				<td class='thwidthtd'>".$objprintdata->cps_act_city."</td>															
				<td class='thwidthtd'>".$objprintdata->cps_act_pin."</td>							
				<td class='thwidthtd'>".$objprintdata->cps_act_mobile."</td>
			</tr>"; 
			break;
		case 2: 
			break;
	}
	return $tableinner;
}

	function getBranches()
	{
		global $db;

		$rowgetbranch =  $db->get_results("SELECT distinct(b.branch_code), b.branch_id, b.branch_name FROM tb_branchdetails b INNER JOIN tb_uploadingdata prc ON b.branch_code = prc.cps_branchmicr_code");
		foreach($rowgetbranch as $eachbranch){
			echo '<option class="brn" value="' . $eachbranch->branch_code . '">' . $eachbranch->branch_name . '</option>';
		} 
	}

	function getTransactions()
	{
		global $db;

		$rowgetbranch =  $db->get_results("SELECT distinct(transactioncode),b.transactioncode, b.transactioncodedescription FROM tb_cps_transactioncodes b INNER JOIN  tb_uploadingdata prc ON b.transactioncode = prc.cps_tr_code");
		 foreach($rowgetbranch as $eachbranch){
		 	echo '<option class="trn" value="' . $eachbranch->transactioncode . '">' . $eachbranch->transactioncodedescription . '</option>';
		 } 
	}

	
	// ------auth segnatories-----


 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM tb_uploadingdata WHERE id = $id";
	
    
    $result = $db->query($sql);

    if ($result) {
        // Fetch data here (assuming $row is the fetched row)

        $row = $result->fetch_assoc();
        echo json_encode($row); // Send fetched data as JSON response
    } else {
        echo json_encode(['error' => 'Failed to fetch data']);
    }
}

// Check if it's a POST request and 'auth_id' is set for update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['auth_id'])) {
    $authId = $_POST['auth_id'];
    $authName = $_POST['auth_name'];
 
    
    $sql = "UPDATE tb_uploadingdata SET cps_auth_sign1 = '$authName' WHERE id = $authId";

    if ($db->query($sql) === TRUE) {
       
        echo json_encode(['success' => 'Data updated successfully']);

    } else {
       echo json_encode(['error' => 'Failed to update data']);
    }
}


/*  "0-Unique request no","1-City Code","2-Bank Code","3-Branch Code"
	"6-017010100000359","8-Customer Name","9-Joint Name 1"
	"14-Address1","15-Address2","16-Address3","19-City"
	"20-Pin Code","24-No Of Books","25-No Of Pages--nt in table"
	"26-Bearer"
	"29-Cheques From"
	"30-Cheques To"
	"31-CPS Issue date"
    "32-CPS Issue date"

*/
?>
