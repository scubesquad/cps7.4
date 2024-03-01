<?php require_once('global.php');
		
	if(isset($_REQUEST['todo']) && $_REQUEST['todo']=='edit' && isset($_REQUEST['id']) && !empty($_REQUEST['id']))
	{
		$row_series = $db->get_row("SELECT series_branch_code FROM tb_cps_looseseries WHERE series_branch_id = '".GetSQLValueString($_POST['ddlBranch'],'int')."' && series_id != ".GetSQLValueString($_REQUEST['id'],'int')."");
		if($row_series)
		{
			echo '{"error":"true", "htmlcontent":"Cheque series for this branch is already exists"}';
			$db->closeDb();
			exit();
		}
		else
		{
			$row_series_branch_code = $db->get_row("SELECT branch_code FROM tb_branchdetails WHERE branch_id = '".GetSQLValueString($_POST['ddlBranch'],'int')."' ");
			$sql = "UPDATE tb_cps_looseseries SET series_bank_id = '".GetSQLValueString($_POST['ddlBank'],'int')."',series_branch_id = '".GetSQLValueString($_POST['ddlBranch'],'int')."',series_branch_code = '".GetSQLValueString($_POST['ddlbranchcode'],'int')."',series_from = '".GetSQLValueString($_POST['txtFROM'],'int')."',series_to = '".GetSQLValueString($_POST['txtTo'],'int')."',series_lastno = '".GetSQLValueString($_POST['txtlastno'],'int')."' WHERE series_id = ".GetSQLValueString($_REQUEST['id'],'int')."";
			$db->query($sql);	
			echo '{"status":"true"}';
			exit();
		}
	}
	else if(isset($_POST['txtlastno']) && !empty($_POST['txtlastno']) && $_POST['txtlastno'] != "") 
	{
		if(strlen($_POST['txtlastno']) != 6)
		{
			echo '{"error":"true", "htmlcontent":"<span> Last Cheque Series No should be 6 digit</span>"}';
			$db->closeDb();
			exit();
		}
		else
		{		
			$row_series = $db->get_row("SELECT series_branch_code FROM tb_cps_looseseries WHERE series_branch_id = '".GetSQLValueString($_POST['ddlBranch'],'int')."' ");
			if($row_series)
			{
				echo '{"error":"true", "htmlcontent":"Cheque series for this branch is already exists"}';
				$db->closeDb();
				exit();
			}
			else
			{
				$sql = "INSERT INTO tb_cps_looseseries (series_bank_id,series_branch_id,series_branch_code,series_from,series_to,series_lastno) VALUES ('".GetSQLValueString($_POST['ddlBank'],'int')."','".GetSQLValueString($_POST['ddlBranch'],'int')."','".GetSQLValueString($_POST['ddlbranchcode'],'int')."','".GetSQLValueString($_POST['txtFROM'],'int')."','".GetSQLValueString($_POST['txtTo'],'int')."','".GetSQLValueString($_POST['txtlastno'],'int')."')";
				$db->query($sql);	
				echo '{"status":"true"}';
				exit();
			}			
		}		
	}
	
	if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'del') && isset($_REQUEST['id']) && !empty($_REQUEST['id']) ) {
		$db->query("delete from tb_cps_looseseries where series_id  = ".$_REQUEST['id']."");
		echo '{"status":"true"}';
		$db->closeDb();
		exit();
	}	

	if(isset($_GET["branchid"]))
	{
		if($_GET["branchid"] != "")
		{
			$rowgetcountry =  $db->get_row("select branch_code from tb_branchdetails where branch_id = ".$_GET["branchid"]." ");	
			
			echo "<input type='text' name='ddlbranchcode' id='ddlbranchcode' value='".$rowgetcountry->branch_code."' readonly='readonly' />";
		}
		else
		{
			echo "<input type='text' name='ddlbranchcode' id='ddlbranchcode' readonly='readonly' />";
		}
	}
?>

