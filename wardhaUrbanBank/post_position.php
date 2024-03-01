<?php
require_once('global.php');

if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'delcity') && isset($_REQUEST['cid']) && !empty($_REQUEST['cid']) ) {
	//$db->query("delete from tb_positions where city_id = ".$_REQUEST['cid']."");
	$db->query("update tb_positions set is_delete = 1 where city_id = ".$_REQUEST['cid']."");
	echo '{"status":"true"}';
	$db->closeDb();
	exit();
}else if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'add')) {
		if(isset($_REQUEST['txttype']) && !empty($_REQUEST['txttype'])) {
			if($result = $db->get_results("Select * from tb_positions where type = '".$_REQUEST['txttype']."' and is_delete = 0")){			
				echo '{"error":"true", "htmlcontent":"Duplicate city place"}';
				$db->closeDb();
				exit();	
			}
			else{
				$sql = "Insert into tb_positions (type,branchX,ifscX,accnoX,acnoPrefixX,bearerX,chqseriesX,micr1X,micr2X,trncodeX,BankAddrY,AcnoY,AcnoPrefixY,IfscY,NameY,VUniqReqY,MICRY,bearerY,is_delete) values('".$_REQUEST['txttype']."','".$_REQUEST['branchX']."','".$_REQUEST['ifscX']."','".$_REQUEST['accnoX']."','".$_REQUEST['acnoPrefixX']."','".$_REQUEST['bearerX']."','".$_REQUEST['chqseriesX']."','".$_REQUEST['micr1X']."','".$_REQUEST['micr2X']."','".$_REQUEST['trncodeX']."','".$_REQUEST['BankAddrY']."','".$_REQUEST['AcnoY']."','".$_REQUEST['AcnoPrefixY']."','".$_REQUEST['IfscY']."','".$_REQUEST['NameY']."','".$_REQUEST['VUniqReqY']."','".$_REQUEST['MICRY']."','".$_REQUEST['bearerY']."',0)";
				$db->query($sql);
				
				$row = $db->get_row("SELECT cast( max( cast( id AS CHAR ) ) AS char ) AS id FROM tb_positions where is_delete = 0");
				$cityid = $row->id;
								
				// $citycode = array();
				// $citycode = placecodemaker("tb_positions","city_name_al",$_REQUEST['txtposition']);
				
				// $db->query("update tb_positions set type = '".$citycode['placecode'].$citycode['cid']."',city_name_al = '".$citycode['placecode']."' where city_id = ".$cityid."");
				
				if($_REQUEST['submit1'] == 'Save and Close') {
				$location = 'home.php';
				} else {
					$location = 'edit_position.php?do=edit&cid='.$cityid;
				}
				
				echo '{"status":"true", "loc":"'.$location.'"}';
				exit();	
			}
		}
		else{
			echo '{"error":"true", "htmlcontent":"Something went wrong please try again."}';
			$db->closeDb();
			exit();
		}
}
else if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'edit') && isset($_REQUEST['cid']) && ($_REQUEST['cid'] != '')) {
		if(isset($_REQUEST['txttype']) && !empty($_REQUEST['txttype'])) {
			if($result = $db->get_results("Select * from tb_positions where type = '".$_REQUEST['txtposition']."' and id not in (".$_REQUEST['cid'].") and is_delete = 0")){	
				echo '{"error":"true", "htmlcontent":"Duplicate city place"}';
				$db->closeDb();
				exit();
			}
			else{
				$cid = $_REQUEST['cid'];
				//$cplace = strtoupper(substr($_REQUEST['txttype'], 0, 3)); 
				//$positioncount = $db->get_row("SELECT SUBSTRING( type, 4, 6 ) as placeid FROM tb_positions where city_id = ".$_REQUEST['cid']." and is_delete = 0");
				//$citycode = $cplace.$positioncount->placeid; 
								
				$sql = "update tb_positions set 
					type = '".$_REQUEST['txttype']."',
					branchX = '".$_REQUEST['branchX']."',
					ifscX=".$_REQUEST['ifscX'].",
					accnoX=".$_REQUEST['accnoX'].",
					acnoPrefixX=".$_REQUEST['acnoPrefixX'].",
					bearerX=".$_REQUEST['bearerX'].",
					chqseriesX=".$_REQUEST['chqseriesX'].",
					micr1X=".$_REQUEST['micr1X'].",
					micr2X=".$_REQUEST['micr2X'].",
					trncodeX=".$_REQUEST['trncodeX'].",
					BankAddrY=".$_REQUEST['BankAddrY'].",
					AcnoY=".$_REQUEST['AcnoY'].",
					AcnoPrefixY=".$_REQUEST['AcnoPrefixY'].",
					IfscY=".$_REQUEST['IfscY'].",
					NameY=".$_REQUEST['NameY'].",
					VUniqReqY=".$_REQUEST['VUniqReqY'].",
					MICRY=".$_REQUEST['MICRY'].",
					bearerY=".$_REQUEST['bearerY']." 
					where id = ".$_REQUEST['cid']."";//
				//echo $sql;
				$db->query($sql);
				
				if($_REQUEST['submit1'] == 'Update and Close') {
					$location = 'home.php';
				} else {
					$location = 'manage_positions.php';
				}
				echo '{"status":"true", "loc":"'.$location.'"}';
				exit();
			}			
		}
		else{
			echo '{"error":"true", "htmlcontent":"Something went wrong please try again."}';
			$db->closeDb();
			exit();
		}
}
if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'activate') && isset($_REQUEST['cid']) && !empty($_REQUEST['cid']) ) {
	$db->query("update tb_positions set is_delete = 0 where id = ".$_REQUEST['cid']."");
	echo '{"status":"true"}';
	$db->closeDb();
	exit();
}
if(isset($_GET["contid"]) && $_GET["contid"] != ""){
	$rowgetcountry =  $db->get_results("select * from tb_statemaster where country_id = ".$_GET["contid"]." and is_delete = 0");
		
	echo "<select name='ddlstate' id='ddlstate' style='width:190px; height:26px;'>
	<option value=''> Select State</option>";
	foreach($rowgetcountry as $eachcountry){
		echo "<option value='". $eachcountry->state_id ."'>".$eachcountry->state_name."</option>";
	}
	echo "</select>";
}
else{
	echo "<select name='ddlstate' id='ddlstate' style='width:190px; height:26px;'>
	<option value=''> Select State </option>";
	echo "</select>";
}

?>