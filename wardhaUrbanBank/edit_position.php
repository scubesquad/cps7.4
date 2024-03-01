<?php  require_once('global.php');
$page_name = "city_master";
authentication_print();
if(!authentication_groups_pemissions($page_name,"","","","Y"))
	header("Location: ".SITE_ROOT."home.php");
if(isset($_REQUEST['cid']) && !empty($_REQUEST['cid'])){
$row = $db->get_row("Select * from tb_positions where id=".$_REQUEST['cid']."");	

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Cheque Processing ::</title>
<link rel="stylesheet" href="css/stylecss.css" type="text/css" />
<script type="text/javascript" src="scripts/dropdowntabs.js"></script>
<?php include('includes.php'); ?>
<script type="text/javascript">
		var vRules = { txttype: { required:true }};
		var vMessages = { txttype: {required: "<br/>Please enter type" }};
		$(document).ready(function() {
			$('#response,#ajax_loading,.loading').hide();
			$('#submit').button();		
		
			$('#addcountry').validate({
				rules: vRules,
				messages: vMessages,
				submitHandler: function(form) {
					$('#addcountry').ajaxSubmit({target: '#response', beforeSubmit: function (formData, jqForm, options) {
							formData.push({ "name": "type", "value": "json" });
							$('.loading').show();
						}, clearForm: false, dataType: 'json', success: function (resObj, statusText) {
							if (resObj.status) {
								//window.location = 'manage_position.php';
								window.location = resObj.loc;	
							} else {
								$('.loading').hide();					
								$('#response').html('<div class="errormsg_boundary">'+resObj.htmlcontent+'<div>').show();
							}
						}
					});
				}
			});
			
		});
	</script>
	<script type="text/javascript">
		function showUser(str)
		{
			//if (str=="")
			//{
				//document.getElementById("divstatelist").innerHTML="";
				//return;
			//}
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("divstatelist").innerHTML="";
					document.getElementById("divstatelist").innerHTML=xmlhttp.responseText;
					//alert(xmlhttp.responseText);
				}
			}
			xmlhttp.open("GET","post_position.php?contid="+str,true);
			xmlhttp.send();
		}
	</script>
	<SCRIPT language=Javascript>
      <!--
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
	  
	  function isNumberKey1(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
        if (charCode > 31 && (charCode < 48 || charCode > 57) || charCode == 08)
		{
			return true;
		}
		else
		{
			alert("Only Characters allowed");
			return false;
		}
      }
      //-->
   </SCRIPT>
</head>

<body>

<?php require_once('header.php');	?>
                <div id="formdiv">
					<div id="formheading">Add City</div>
					<div id="formfields">
						<form name="addcountry" id="addcountry" action="post_position.php?do=edit&cid=<?php echo $_REQUEST['cid'] ?>" method="post">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid; border-color:#cccccc;">
								<tr>
									<td align="left" valign="top" style="padding-left:16px; padding-top:16px; padding-bottom:16px">											
										<!-- <?php echo $row->type; ?> -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											
											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<h2>X Position</h2>
												</td>
											</tr>
											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter type</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="txttype" id="txttype" value="<?php echo $row->type; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter branchX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="branchX" id="branchX" value="<?php echo $row->branchX; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter ifscX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="ifscX" id="ifscX" value="<?php echo $row->ifscX; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter accnoX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="accnoX" id="accnoX" value="<?php echo $row->accnoX; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter acnoPrefixX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="acnoPrefixX" id="acnoPrefixX" value="<?php echo $row->acnoPrefixX; ?>" style="width:183px" >										
												</td>
											</tr>


											

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter bearerX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="bearerX" id="bearerX" value="<?php echo $row->bearerX; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter chqseriesX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="chqseriesX" id="chqseriesX" value="<?php echo $row->chqseriesX; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter micr1X</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="micr1X" id="micr1X" value="<?php echo $row->micr1X; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter micr2X</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="micr2X" id="micr2X" value="<?php echo $row->micr2X; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter trncodeX</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="trncodeX" id="trncodeX" value="<?php echo $row->trncodeX; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<br>
													<h2>Y Position</h2>
												</td>
											</tr>



											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter BankAddrY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="BankAddrY" id="BankAddrY" value="<?php echo $row->BankAddrY; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter AcnoY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="AcnoY" id="AcnoY" value="<?php echo $row->AcnoY; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter AcnoPrefixY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="AcnoPrefixY" id="AcnoPrefixY" value="<?php echo $row->AcnoPrefixY; ?>" style="width:183px" >										
												</td>
											</tr>



											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter IfscY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="IfscY" id="IfscY" value="<?php echo $row->IfscY; ?>" style="width:183px" >										
												</td>
											</tr>



											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter NameY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="NameY" id="NameY" value="<?php echo $row->NameY; ?>" style="width:183px" >										
												</td>
											</tr>

											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter VUniqReqY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="VUniqReqY" id="VUniqReqY" value="<?php echo $row->VUniqReqY; ?>" style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter MICRY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="MICRY" id="MICRY" value="<?php echo $row->MICRY; ?>"  style="width:183px" >										
												</td>
											</tr>


											<tr>
												<td width="15%" height="35" align="left" valign="top">
													<label>Enter bearerY</label><span class="red">*</span>
												</td>
												<td width="85%" align="left" valign="top">
													<input type="text" name="bearerY" id="bearerY" value="<?php echo $row->bearerY; ?>" style="width:183px" >										
												</td>
											</tr>

											
											<tr>
												<td>
													&nbsp;
												</td>
												<td colspan="2" align="left">
													<div class="loading"><img src="<?php echo ROOT_IMAGES; ?>ajax-loader.gif" /></div>
													<label><div id="response"></div></label>
												</td>
											</tr>
																						
											<tr>
												<td></td>
												<td>
													<input type="submit" name="submit" id="submit" value="Update" />
													<input type="submit" name="submit1" id="submit1" value="Update and Close" class="submitbutton" />
													<input type="button" name="submit2" id="submit2" value="Discard" class="submitbutton" onClick="window.location.href='home.php'" />
													<input type="button" name="submit3" id="submit3" value="Go to home" class="submitbutton" onClick="window.location.href='home.php'" />
												</td>	
												<td></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>			
						</form>
					</div>
                </div>              
            </div>
        </div>
    </div>	
<?php require_once('footer.php');	?>		
</body>
</html>
