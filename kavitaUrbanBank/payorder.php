<?php 
require_once('global.php');	
$rowbank = $db->get_row("select bank_code,bank_name from tb_bankdetails");
$row = $db->get_row("select * from tb_branchdetails where branch_id = 0");
$page_name = "branch_master";
authentication_print();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include('includes.php'); ?>

<script type="text/javascript" src="<?php echo ROOT_SCRIPTS; ?>jquery.timepicker.js"></script>
<link rel="stylesheet" href="<?php echo ROOT_STYLES;  ?>jquery.timepicker.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_STYLES; ?>timePicker.css" />
<style>
 .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
 .ui-timepicker-div dl { text-align: left; }
 .ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
 .ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
 .ui-timepicker-div td { font-size: 90%; }
 .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
</style>
<script type="text/javascript">
	var vRules = {
			ddlBranchName: { required:true },
			pay: { required:true },
			amount: { required:true },
			date: { required:true },
			
            amountinword:{required:true},
			IssuingBranch:{required:true},
			paybleAt:{required:true},
			
	};
	var vMessages = { 
			ddlBranchName: {required: "<br/>Please select branch name" }, 
			pay: { required: "<br/>Please enter pay."}, 
			amount: { required: "<br/>Please enter amount."}, 
			date: { required: "<br/>Please enter date" }, 
		
            amountinword:{required: "<br/>Please enter anount in word"},
			IssuingBranch:{required: "<br/>Please enter branch"},
			paybleAt:{required: "<br/>Please enter payble at"}
	};
	$(document).ready(function() {			
		$('#response,#ajax_loading,.loading').hide();
		$('#submit').button();				
		$('#manualentry').validate({
			rules: vRules,
			messages: vMessages,
			submitHandler: function(form) {
				$('#manualentry').ajaxSubmit({target: '#response', beforeSubmit: function (formData, jqForm, options) {
						formData.push({ "name": "type", "value": "json" });
						$('.loading').show();
						$('#submitdiv').hide();
					}, clearForm: false, dataType: 'json', success: function (resObj, statusText) {
						if (resObj.status) {
							alert("Pay Order details are added sucessfully.");
								window.location = "payorder_post.php";
								//window.location = '<?php echo $_SERVER['PHP_SELF']; ?>';
						} else {	
							$('.loading').hide();
							$('#submitdiv').show();					
							$('#response').html('<div style="color:red" class="errormsg_boundary">'+resObj.htmlcontent+'<div>').show();
						}
					}
				});
			}
		});
		
	});
	


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
	  
	  $(function() {
    $("#date").datepicker();
  });
		

	
	

</script>
</head>
<body>

<?php require_once('header.php');	?>              
<div id="formdiv">
	<div id="formheading">Payorder For <?php echo $rowbank->bank_name; ?></div>
	<div id="formfields">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  <td align="center" valign="top" style="border:1px solid; border-color:#cccccc;">
			<form id="manualentry" name="manualentry" method="post" action="payorder_post.php" >
			<table width="880" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td align="left" valign="top"></td>
			  </tr>
			  <tr>
				<td align="left" valign="top">
				<input type="hidden" name="branchid" id="branchid" value="<?php echo stripslashes($row-> branch_id); ?>" style="width:373px;" />
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
				  <tr>
					<td align="left" valign="top" width="100%">
				    <table width="100%" border="0" cellspacing="0" cellpadding="0">
					  
                        <!-- <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Bank Name</label>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <label>
                                    <input type="text" name="bankname" id="bankname" readonly value="<?php echo "".$rowbank->bank_name.""; ?>" style="width:379px;" />
                                </label>
                            </td>
                        </tr> -->
                        <tr>
                                <td height="35" align="left" valign="top" width="20%"><label>Branch Name</label><span class="red">*</span></td>
                                <td align="left" valign="top" width="80%">
                                    <label>
                                        <select name="ddlBranchName" id="ddlBranchName" style="width:198px; height:26px;" >
                                                <option value=""> Select Branch </option>
                                                <?php 
                                                    $rowgetbranch =  $db->get_results("select branch_id,branch_name from tb_branchdetails");
                                                    foreach($rowgetbranch as $eachbranch){
                                                ?>
                                                    <option value="<?php echo $eachbranch->branch_id; ?>"><?php echo $eachbranch->branch_name; ?></option>
                                                <?php 
                                                    } 
                                                ?>
                                        </select>
                                    </label>
                                </td>
                        </tr>					
                                            
                        <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Pay</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <label>
                                    <input type="text"  value=""  name="pay" id="bankCode" style="width:190px;" />
                                </label>
                            </td>
                        </tr>
                        
                        <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Amount</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <div id="divamount" >
                                    <label>
                                        <input type="text"  value=""  name="amount" id="amount" style="width:190px;" onkeypress="return isNumberKey(event)"/>
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Amount In Word</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <div id="divamount" >
                                    <label>
                                    <input type="text"  value=""  name="amountinword" id="amountinword" style="width:190px;" />
                                    </label>
                                </div>
                            </td>
                        </tr> -->
                        
                        <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Date</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <div id="divdate" >
                                    <label>
                                        <input type="text"  value=""  name="date" id="date" style="width:190px;" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                        <td height="35" align="left" valign="top" width="20%"><label>IFSC Code</label>
                        </td>
                        <td align="left" valign="top" width="80%">
                            <label>
                            <input type="text" value="<?php echo stripslashes($row->branch_neftifsccode); ?>" name="branchNEFT" id="branchNEFT" maxlength="11" style="width:190px;" onKeyUp="javascript:this.value=this.value.toUpperCase();" />
                            </label>
                        </td>
                        </tr> -->
                        <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Issuing Branch</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <div id="divpayblrat" >
                                    <label>
                                        <input type="text" value=""  name="IssuingBranch" id="IssuingBranch" style="width:190px;" />
                                    </label>
                                </div>
                            </td>
                        </tr>	
                        <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Payble At</label><span class="red">*</span>
                            </td>
                            <td align="left" valign="top" width="80%">
                                <div id="divpayblrat" >
                                    <label>
                                        <input type="text" value=""  name="paybleAt" id="paybleAt" style="width:190px;" />
                                    </label>
                                </div>
                            </td>
                        </tr>			  
                        
                        <!-- <tr>
                            <td>						
                                <?php
                                    $row = $db->get_row("SELECT chk_taken_from FROM tb_cps_settings");
                                    if($row->chk_taken_from == "0"){
                                ?>
                                    <div id="divchkno"> 
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" valign="top" width="50%" height="35px">
                                                    <label>Cheque No. From</label><span class="red">*</span>
                                                </td>
                                                <td align="left" valign="top" width="83%">
                                                    <input type="text" name="txtchqnofrom" id="txtchqnofrom" value="" style="width: 220px;" maxlength="10" onkeypress="return isNumberKey(event)"  />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top" width="17%" height="35px">
                                                    <label>Cheque No. To</label><span class="red">*</span>
                                                </td>
                                                <td align="left" valign="top" width="83%">
                                                    <input type="text" name="txtchqnoto" id="txtchqnoto" value="" style="width: 220px;" maxlength="10" onkeypress="return isNumberKey(event)" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                <?php 
                                    }
                                ?>
                            </td>
                        </tr>					
                         -->
                    
                        
                    
                
                        
                        <!-- <tr>
                            <td height="35" align="left" valign="top" width="20%"><label>Bearer/Order</label><span class="red">*</span></td>
                            <td align="left" valign="top" width="80%">
                                <label>
                                    <select name="Bearer_Order" id="Bearer_Order" style="width:198px; height:26px;">
                                        <option value="">== Select ==</option>
                                        <option value="0">Bearer</option>
                                        <option value="1">Order</option>
                                    </select>
                                </label>
                            </td>
                        </tr> -->
                           
					</table>
					</td>
					<td width="270" align="left" valign="top"></td>
				  </tr>
				  
				</table></td>
			  </tr>			
<!--				<tr>-->
<!--					<td width="22%" height="35" align="left" valign="top"><label>PR Code</label></td>-->
<!--					<td width="78%" align="left" valign="top">-->
<!--						<label>-->
<!--							<input type="text" name="PRCOde" id="PRCOde" value="" style="width:190px;" />-->
<!--						</label>-->
<!--					</td>-->
<!--				</tr> -->
<!--				-->
				
				<tr>
					
					<td  valign="top">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="100%"  valign="top">
								<?php if(authentication_groups_pemissions($page_name,"","Y","","Y")):?>
								<input name="submit" type="submit" id="submit" value="Save Details"  style="height:30px; width:150px" />
								<input type="submit" name="submit1" id="submit1" value="Save and Close" class="submitbutton" />
								<?php endif;?>
								<input type="button" name="submit2" id="submit2" value="Discard" class="submitbutton" onClick="window.location.href='home.php'" />
								<input type="button" name="submit3" id="submit3" value="Go to home" class="submitbutton" onClick="window.location.href='home.php'" />
								<div class="loading"><img src="<?php echo ADMIN_IMAGES; ?>ajax-loader.gif" /></div>
							</td>
							<td width="35%"  valign="top"></td>
						</tr>
						</table>
					</td>
				</tr>
				
				</table>
				</td>
				</tr>
				<tr>
				<td align="left" valign="top">&nbsp;</td>
				</tr>
				</table>
			 </form>
			</td>
		</tr>
	  </table>
	</div>
</div>
</div>
</div>
</div>	
<?php require_once('footer.php');	?> 	
</body>
</html>
