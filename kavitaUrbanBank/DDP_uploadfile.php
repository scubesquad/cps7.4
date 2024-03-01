<?php 
require_once('global.php');
error_reporting(E_ALL ^ E_NOTICE);
$page_name = "upload_file";
authentication_print();
if(!authentication_groups_pemissions($page_name,"","Y"))
	header("Location: ".SITE_ROOT."home.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include('includes.php'); ?>
<script type="text/javascript" src="scripts/dropdowntabs.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.js"></script>
	<script type="text/javascript">
		var vRules = { uploadedfile: { required:true }};
		var vMessages = { uploadedfile: { required: "<br/>Please select file to upload." }};
		$(document).ready(function() {
			$('#response,#ajax_loading,.loading').hide();
			$('#submit1').button();		
			$('#frmuploadfile').validate({
				rules: vRules,
				messages: vMessages,
				submitHandler: function(form) {
					$('#frmuploadfile').ajaxSubmit({
						target: '#response', 
						beforeSubmit: function (formData, jqForm, options) {
							formData.push({ "name": "type", "value": "json" });
							$('.loading').show();
							if(document.getElementById("hiddtotaluploaddata").value != "0"){
								$('.loading').hide();
								return confirm('There are pending cheques to be printed. Are you sure you want to continue?');
							}
						}, 
						clearForm: false,
						success: function (resObj) {
						var	response = resObj.split('#');
							if (response[0]=='0') {
								$('.loading').hide();					
								$('#response').html('<div class="errormsg_boundary">'+response[1]+'<div>').show();
							} else {	
								$('#response').html('');
								$('#uploaded_files').html(resObj);
								$('.loading').hide();
								//window.location = '<?php echo $_SERVER['PHP_SELF']; ?>';								
							}
						}
					});
				}
			});
		});
		
		//function totaldatatoupload(){
			//if(document.getElementById("hiddtotaluploaddata").value != "0"){
				//return confirm('There are pending cheques to be printed. Are you sure you want to continue?');
			//}
		//}
		
	</script>
	
<script type="text/javascript">
var selected_ids_array = [];
$(document).ready(function(){		

	$( "#dialog-confirm" ).dialog({
			autoOpen: false,			
			modal: true,
			buttons: {
				Cancel: function() {
					$( this ).dialog( "close" );
					return false;
				},
				Ok: function() {
					//window.location = 'confirmprintreq.php?do=print&pid='+selected_ids_array;
					window.location = 'print_DDPSingle.php?do=print&pid='+selected_ids_array;		
				}
			}
	});
	
	$( "#confirm-delete" ).dialog({
			autoOpen: false,			
			modal: true,
			buttons: {
				Cancel: function() {
					$( this ).dialog( "close" );
					return false;
				},
				Ok: function() {
					window.location = 'post_upload_ddp_file.php?do=delete&pid='+selected_ids_array;		
				}
			}
	});
	$( "#dialog" ).dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
				}
			}
	});

	MarkAll = function(){
		selected_ids_array.length = 0;
	  $('#categorytable').find(':checkbox').attr('checked', true);
	  $(':checkbox:checked').each(function(i){		  
		  selected_ids_array.push($(this).attr("id"));
	  });
	};
	
	
	Unmark_all = function(){
		$('#categorytable').find(':checkbox').attr('checked', false);	  
	  selected_ids_array.length = 0;	  
	};
	
	Print_selected = function(){
		if(selected_ids_array.length <= 0 ) {
			$( "#dialog" ).dialog( "open" );
			return false;
		}
		$( "#dialog-confirm" ).dialog( "open" );		
	};
	
	Delete_selected = function(){
		
		if(selected_ids_array.length <= 0 ) {
			$( "#dialog" ).dialog( "open" );
			return false;
		}
		$( "#confirm-delete" ).dialog( "open" );		
	};
	
	$(".class_chkbox").live("click", function(){
		if($(this).attr('checked')) {
			selected_ids_array.push($(this).attr("id"));					
		  } else {			 
			  removeByValue(selected_ids_array, $(this).attr("id"));
		  }
	});
	
});
	
	

function removeByValue(arr, val) {
	for(var i=0; i<arr.length; i++) {
		if(arr[i] == val) {
			arr.splice(i, 1);
			break;
		}
	}	
}

</script>
</head>

<body>

<?php require_once('header.php');
$countnumber = 0;
if($totaldatainupload = $db->get_row("SELECT count(*) as total FROM tb_ddp_uploadingdata") ){
$countnumber = $totaldatainupload->total;
}
//$countpendingrequest = 0;
//if($totaldatainupload = $db->get_row("SELECT count(*) as total FROM tb_pending_print_req where ") ){
//$countpendingrequest = $totaldatainupload->total;
//}
?>
	<div id="formdiv">
		<div id="formheading">DD Personalized Upload File</div>
		<div id="formfields">
	   
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top" style="border:1px solid; border-color:#cccccc;">						 
				 <table width="800" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					  <td>&nbsp;</td>
					  </tr>
					  <tr>
						<td align="left" valign="top">	
							<form id="frmuploadfile" name="frmuploadfile" enctype="multipart/form-data" action="post_upload_ddp_file.php" method="POST">
								<table>
									<tr>
										<td align="left" valign="top"><div id="response"></div></td>
									</tr>
									<tr>
										<td>
											<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
											<label>Choose a file to upload:</label><span class="red">*</span> <input id="uploadedfile" name="uploadedfile" type="file" />
										</td>
										<td valign="top">													
											<input name="submit1" type="submit" id="submit1" value="Upload File" />
											<div class="loading"><img src="<?php echo ADMIN_IMAGES; ?>ajax-loader.gif" /></div>	
										</td>
									</tr>
								</table>
							</form>	
						</td>
					  </tr>
						<tr>
					  <td>&nbsp;</td>
					  </tr>
				</table>
				</td>
			</tr>
			  
			<tr>
				<td>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td align="left" valign="top">
					<div id='uploaded_files' style="width:1000px; overflow-x:scroll;overflow-y:hidden ;margin:0px; padding:0px;">
						<?php 
							if(isset($_REQUEST['searchterm']) && isset($_REQUEST['ddlAccountType'])){

							}
							else
							{
								include_once 'post_upload_ddp_file.php';
							}
												
						?>
					</div>
					<div class="clearboth"></div>
					<div id="dialog" title="Error">
					<p style="float:left;"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Please select rows!</p>
					</div>
					<div id="dialog-confirm" title="Confirmation">
						<p style="float:left;"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>The selected records will proceed for print.<br/>Are you sure?</p>
					</div>
					<div id="confirm-delete" title="Confirmation">
						<p style="float:left;"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Are you sure? you want to delete selected records.</p>
					</div>
					<input type="hidden" value="<?php echo $countnumber; ?>" id="hiddtotaluploaddata" />
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
