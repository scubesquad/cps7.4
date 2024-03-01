<?php
require_once('global.php');
$page_name = "upload_file";
authentication_print();
if (!authentication_groups_pemissions($page_name, "", "Y"))
	header("Location: " . SITE_ROOT . "home.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		/* Modal */
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
		}

		/* Modal content */
		.modal-content {
			background-color: #fefefe;
			margin: 10% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 60%;
			max-width: 500px;
			height: 250px;
		}

		/* Close button */
		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		.frm {
			display: flex;
			justify-content: space-around;
			align-items: center;
		}

		#form {
			margin-top: 53px;

		}

		/* Update Button Styles */
		.update-button {
			padding: 10px 20px;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
			/* Adjust margin as needed */
			/* Add other styles for the update button */
		}

		.update-button:hover {
			background-color: #218838;
			/* Add styles for button hover state */
		}

		.update-button:active {
			background-color: #1e7e34;
			/* Add styles for button active state */
		}

		#name {
			padding: 10px;
			border-radius: 9px;
			width: 192px;
			height: 22px;

		}
	</style>
</head>
<?php include('includes.php'); ?>
<script type="text/javascript" src="scripts/dropdowntabs.js"></script>
<script type="text/javascript">
	var vRules = { uploadedfile: { required: true } };
	var vMessages = { uploadedfile: { required: "<br/>Please select file to upload." } };
	function loadSelect() {
		$('.brn').remove();
		$('.trn').remove();
		data = { getfunc: "getBranches" };
		$.get('post_parsik.php', data, function (resObj) {
			$('#ddlBranchName').append(resObj);
		})
		data = { getfunc: "getTransactions" };
		$.get('post_parsik.php', data, function (resObj) {
			$('#ddlTranType').append(resObj);
		})
	}
	$(document).ready(function () {
		if ($.trim($('#uploaded_files').html()).length > 0)
			$('#SearchBox').show();
		else
			$('#SearchBox').hide();
		$('#response,#ajax_loading,.loading').hide();
		$('#search').click(function (event) {
			event.preventDefault();
			data = { ddlBranchName: $('#ddlBranchName').val(), ddlTranType: $('#ddlTranType').val() };
			$.get('post_parsik.php', data, function (resObj) {
				$('#uploaded_files').html(resObj);
			});
		});
		$('#submit1').button();
		$('#frmuploadfile').validate({
			rules: vRules,
			messages: vMessages,
			submitHandler: function (form) {
				$('#frmuploadfile').ajaxSubmit({
					target: '#response',
					beforeSubmit: function (formData, jqForm, options) {
						formData.push({ "name": "type", "value": "json" });
						$('.loading').show();
						if (document.getElementById("hiddtotaluploaddata").value != "0") {
							$('.loading').hide();
							return confirm('There are pending cheques to be printed. Are you sure you want to continue?');
						}
					},
					clearForm: false,
					success: function (resObj) {
						var response = resObj.split('#');
						if (response[0] == '0') {
							$('.loading').hide();
							$('#response').html('<div class="errormsg_boundary">' + response[1] + '<div>').show();
						} else {
							$('#response').html('');
							$('#uploaded_files').html(resObj);
							$('.loading').hide();
							loadSelect();
							if ($.trim($('#uploaded_files').html()).length > 0)
								$('#SearchBox').show();
							else
								$('#SearchBox').hide();
						}
					}
				});
			}
		});
	});

</script>

<script type="text/javascript">
	var selected_ids_array = [];
	$(document).ready(function () {

		$("#dialog-confirm").dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Cancel: function () {
					$(this).dialog("close");
					return false;
				},
				Ok: function () {
					//window.location = 'confirmprintreq.php?do=print&pid='+selected_ids_array;
					//alert(selected_ids_array);
					if ($('#bunch').val() == '1')
						window.location = 'post_parsik.php?do=print&pid=' + selected_ids_array + '&bunch=yes';
					else
						window.location = 'post_parsik.php?do=print&pid=' + selected_ids_array;
				}

			}
		});

		$("#dialog").dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Ok: function () {
					$(this).dialog("close");
				}
			}
		});

		MarkAll = function () {
			selected_ids_array.length = 0;
			$('#categorytable').find(':checkbox').attr('checked', true);
			$(':checkbox:checked').each(function (i) {
				selected_ids_array.push($(this).attr("id"));
			});
		};


		Unmark_all = function () {
			$('#categorytable').find(':checkbox').attr('checked', false);
			selected_ids_array.length = 0;
		};

		Print_selected = function () {
			$('#bunch').val('0');
			if (selected_ids_array.length <= 0) {
				$("#dialog").dialog("open");
				return false;
			}
			$("#dialog-confirm").dialog("open");
		};

		Print_selected3 = function () {
			$('#bunch').val('1');
			if (selected_ids_array.length <= 0) {
				$("#dialog").dialog("open");
				return false;
			}
			$("#dialog-confirm").dialog("open");
		};

		Delete_selected = function () {

			if (selected_ids_array.length <= 0) {
				$("#dialog").dialog("open");
				return false;
			}
			$("#confirm-delete").dialog("open");
		};

		$(".class_chkbox").live("click", function () {
			if ($(this).attr('checked')) {
				selected_ids_array.push($(this).attr("id"));
			} else {
				removeByValue(selected_ids_array, $(this).attr("id"));
			}
		});

		$("#confirm-delete").dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				Cancel: function () {
					$(this).dialog("close");
					return false;
				},
				Ok: function () {
					window.location = 'post_parsik.php?do=delete&pid=' + selected_ids_array;
				}
			}
		});

	});



	function removeByValue(arr, val) {
		for (var i = 0; i < arr.length; i++) {
			if (arr[i] == val) {
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
	if ($totaldatainupload = $db->get_row("SELECT count(*) as total FROM tb_uploadingdata")) {
		$countnumber = $totaldatainupload->total;
	}

	?>
	<div id="formdiv">
		<div id="formheading">Upload File</div>
		<div id="formfields">
			<form id="frmuploadfile" name="frmuploadfile" enctype="multipart/form-data" action="post_parsik.php"
				method="POST">
				<input type="hidden" id="bunch" name="bunch" value='0' />
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" valign="top" style="border:1px solid; border-color:#cccccc;">
							<table width="800" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td align="left" valign="top">
										<table>
											<tr>
												<td align="left" valign="top">
													<div id="response"></div>
												</td>
											</tr>
											<tr>
												<td>
													<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
													<label>Choose a file to upload:</label><span class="red">*</span>
													<input id="uploadedfile" name="uploadedfile" type="file" />
												</td>
												<td valign="top">
													<input name="submit1" type="submit" id="submit1"
														value="Upload File" />
													<div class="loading"><img
															src="<?php echo ADMIN_IMAGES; ?>ajax-loader.gif" /></div>
												</td>
											</tr>
										</table>
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
							<div style="margin-top: 10px" id="SearchBox">
								<div style="float:left">&nbsp;&nbsp;<label>Select Branch </label>
									<select name="ddlBranchName" id="ddlBranchName" style="width:198px; height:26px;">
										<option value=""> All Branches </option>
										<?php
										$rowgetbranch = $db->get_results("SELECT distinct(b.branch_code),b.branch_id, b.branch_name FROM tb_branchdetails b INNER JOIN tb_uploadingdata prc ON b.branch_code = prc.cps_branchmicr_code");
										if ($rowgetbranch) {
											foreach ($rowgetbranch as $eachbranch) {
												if (isset($_GET['ddlBranchName']) && $_GET['ddlBranchName'] == $eachbranch->branch_code) {
													?>
													<option class="brn" value="<?php echo $eachbranch->branch_code; ?>"
														selected="selected">
														<?php echo $eachbranch->branch_name; ?>
													</option>
													<?php
												} else {
													?>
													<option class="brn" value="<?php echo $eachbranch->branch_code; ?>">
														<?php echo $eachbranch->branch_name; ?>
													</option>
													<?php
												}
											}
										}
										?>
									</select>
								</div>
								<div style="float:left">&nbsp;&nbsp;<label>Transaction Type </label>
									<select name="ddlTranType" id="ddlTranType" style="width:198px; height:26px;">
										<option value=""> All Transactions </option>
										<?php
										$rowgetbranch = $db->get_results("SELECT distinct(transactioncode),b.transactioncode, b.transactioncodedescription FROM tb_cps_transactioncodes b INNER JOIN  tb_uploadingdata prc ON b.transactioncode = prc.cps_tr_code");
										if ($rowgetbranch) {
											foreach ($rowgetbranch as $eachbranch) {
												if (isset($_GET['ddlTranType']) && $_GET['ddlTranType'] == $eachbranch->transactioncode) {
													?>
													<option class="trn" value="<?php echo $eachbranch->transactioncode; ?>"
														selected="selected">
														<?php echo $eachbranch->transactioncodedescription; ?>
													</option>
													<?php
												} else {
													?>
													<option class="trn" value="<?php echo $eachbranch->transactioncode; ?>">
														<?php echo $eachbranch->transactioncodedescription; ?>
													</option>
													<?php
												}
											}
										}
										?>
									</select>
									&nbsp;&nbsp;
									<div style="float:right">
										<a href="parsikupload.php"><img src="images/refresh.png" alt="Refresh"></a>
									</div>
									<div style="float:right">
										<input type="submit" name="search" id="search" value=" Search "
											style="height:25px; width: 90px; border-radius: 5px" />
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td align="left" valign="top">
							<div id='uploaded_files'
								style="width:1000px; overflow-x:scroll;overflow-y:hidden ;margin:0px; padding:0px;">
								<?php include_once 'post_parsik.php'; ?>
							</div>
							<div class="clearboth"></div>
							<div id="dialog" title="Error">
								<p style="float:left;"><span class="ui-icon ui-icon-alert"
										style="float:left; margin:0 7px 20px 0;"></span>Please select rows!</p>
							</div>
							<div id="dialog-confirm" title="Confirmation">
								<p style="float:left;"><span class="ui-icon ui-icon-alert"
										style="float:left; margin:0 7px 20px 0;"></span>The selected records will
									proceed for print.<br />Are you sure?</p>
							</div>
							<input type="hidden" value="<?php echo $countnumber; ?>" id="hiddtotaluploaddata" />
						</td>
					</tr>
				</table>
			</form>
			<div id="confirm-delete" title="Confirmation">
				<p style="float:left;"><span class="ui-icon ui-icon-alert"
						style="float:left; margin:0 7px 20px 0;"></span>Are you sure? you want to delete selected
					records.</p>
			</div>
		</div>
	</div>
	</div>
	</div>

	</div>

	<?php require_once('footer.php'); ?>



	<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Update Auth Signatories:</h2>
        <form id="form" method="POST">
            <div class="frm">
                <label for="name">Enter Auth Signatories Name :</label>
                <input type="text" id="name" name="auth_name" required>
                <input type="hidden" id="id" name="auth_id" required>
               
            </div>
			<div id="authError" style="color: red; display: none;text-align: end;">Please enter the authentication signatory.</div>
			
            <button type="submit" class="update-button" name="updateBtn" id="updateBtn" style="background-color:#115d81">Update</button>
        </form>
    </div>
</div>


<script>
	
   document.addEventListener('DOMContentLoaded', function() {
    var openModalButtons = document.querySelectorAll('.openModal');
    var closeModalButton = document.querySelector('.close');
    var updateButton = document.getElementById('updateBtn');

    openModalButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var dataId = this.getAttribute('data-id');
            document.getElementById('modal').style.display = 'block';
            document.getElementById('id').value = dataId;

            // Fetch existing data for the ID using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
						
                        var response = JSON.parse(xhr.responseText);
                        document.getElementById('name').value = response.auth_name;
                        document.getElementById('id').value = response.auth_id;
                        document.getElementById('modal').style.display = 'block';
                    } else {
                        console.log('Error fetching data');
                    }
                }
            };
            xhr.open('POST', 'post_parsik.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + dataId);
        });
    });

    closeModalButton.addEventListener('click', function() {
        document.getElementById('modal').style.display = 'none';
    });

    updateButton.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent form submission

        var authName = document.getElementById('name').value.trim();

        if (authName === '') {
            document.getElementById('authError').style.display = 'block';
        } else {
            document.getElementById('authError').style.display = 'none';

            var formData = new FormData(document.getElementById('form'));

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        alert('Data updated successfully');
                        document.getElementById('modal').style.display = 'none';
                        // You can perform any other necessary actions after update
						document.getElementById('name').value='';
                    } else {
                        alert('Error updating data');
                    }
                }
            };
            xhr.open('POST', 'post_parsik.php', true);
            xhr.send(formData);
        }
    });
});

</script>



</body>

</html>