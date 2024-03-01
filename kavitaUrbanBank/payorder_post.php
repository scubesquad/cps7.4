<?php require_once('global.php');


function convertAmountToIndianWords($amount) {
    $numberWords = array(
        "", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", 
        "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"
    );

    $tensWords = array(
        "", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"
    );

    $amountInWords = "";

    if ($amount < 20) {
        $amountInWords .= $numberWords[$amount];
    } elseif ($amount < 100) {
        $amountInWords .= $tensWords[floor($amount / 10)];
        if ($amount % 10 > 0) {
            $amountInWords .= "-" . $numberWords[$amount % 10];
        }
    } elseif ($amount < 1000) {
        $amountInWords .= $numberWords[floor($amount / 100)] . " hundred";
        if ($amount % 100 > 0) {
            $amountInWords .= " and " . convertAmountToIndianWords($amount % 100);
        }
    } elseif ($amount < 100000) {
        $amountInWords .= convertAmountToIndianWords(floor($amount / 1000)) . " thousand";
        if ($amount % 1000 > 0) {
            $amountInWords .= " " . convertAmountToIndianWords($amount % 1000);
        }
    } elseif ($amount < 10000000) {
        $amountInWords .= convertAmountToIndianWords(floor($amount / 100000)) . " lakh";
        if ($amount % 100000 > 0) {
            $amountInWords .= " " . convertAmountToIndianWords($amount % 100000);
        }
    } else {
        $amountInWords = "Number is too large to convert";
    }

    return $amountInWords;
}



if(isset($_POST['amount']) && $_POST['amount']!=null)
{

    $amountInWords = convertAmountToIndianWords($_POST['amount']) . " Only";
$inputDate = $_POST['date'];
$formattedDate = date('Y-m-d', strtotime($inputDate));
$db->query("INSERT INTO tb_payorder (`branch_name`, `pay`, `amount`, `date`, `amount_in_word`, `issuing_branch`, `payble_at`)values('".$_POST['ddlBranchName']."','".$_POST['pay']."','".$_POST['amount']."','".$formattedDate."',
'".$amountInWords."','".$_POST['IssuingBranch']."','".$_POST['paybleAt']."')");
echo '{"status":"true"}';
$db->closeDb();
exit();
}
if(isset($_REQUEST['do']) && ($_REQUEST['do'] == 'delete') && !empty($_REQUEST['pid']) && isset($_REQUEST['pid']) ){
	$db->query("delete from tb_payorder where id IN (".$_REQUEST['pid'].")");
	header('Location: payorder_post.php');	
}
?>

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
<script type="text/javascript">
    var selected_ids_array = [];
		var vRules = { uploadedfile: { required:true }};
		var vMessages = { uploadedfile: { required: "<br/>Please select file to upload." }};
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
                window.location = 'printpayorder.php?do=print&pid='+selected_ids_array;		
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
                window.location = 'payorder_post.php?do=delete&pid='+selected_ids_array;		
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
 </script>
 </head>   
<body>
<?php require_once('header.php');?>
<div id="formdiv">
    <div id="formheading">Upload Pay Order</div>
        <div id="formfields"> 

           <?php 
        //    $result = $db->get_results("SELECT * FROM tb_payorder");
        $query = "SELECT tb_payorder.*, tb_branchdetails.branch_name
        FROM tb_payorder
        JOIN tb_branchdetails ON tb_payorder.branch_name = tb_branchdetails.branch_id
        WHERE tb_payorder.status IS NULL";
        $result = $db->get_results($query);
         if($result>0){

           ?>
            <table cellpadding="0" cellspacing="0" border="0" width="100%" id="categorytable">
                <tr>
                    <th style="background-color: #EDEDED; width:15px"></th>
                    <th class="thwidthth">Branch Name</th>
                    <th class="thwidthth">Pay</th>
                    <th class="thwidthth">Amount</th>
                    <th class="thwidthth">Date</th>
                    <th class="thwidthth">Amount in Word</th>
                    <th class="thwidthth">issuing Branch</th>
                    <th class="thwidthth">payable At</th>
                    
                </tr>
                <?php foreach($result as $row) {?>
                <tr>
                    <td><input type='checkbox' name='action[]' id="<?php echo $row->id; ?>" class='class_chkbox'  /></td>
                    <td class='thwidthtd'><?php echo $row->branch_name; ?></td>
                    <td class='thwidthtd'><?php echo $row->pay; ?></td>
                    <td class='thwidthtd'><?php echo $row->amount; ?></td>
                    <td class='thwidthtd'><?php echo $row->date; ?></td>
                    <td class='thwidthtd'><?php echo $row->amount_in_word; ?></td>
                    <td class='thwidthtd'><?php echo $row->issuing_branch; ?></td>
                    <td class='thwidthtd'><?php echo $row->payble_at; ?></td>
                   
                </tr>
                <?php }?>
                <tr>
                    <td colspan="24" valign="middle" class="thwidthth" style="text-align:left; padding-left:10px">
                        <a id="mark_all" style="margin-right:20px;" class="pointer"  onclick="MarkAll();" >Select all</a>
                        <a id="unmark_all" style="margin-right:20px;" class="pointer"  onclick="Unmark_all();">Deselect all</a>
                        <a id="print_selected" style="margin-right:20px;" class="pointer" onclick="Print_selected();">Print Selected</a>
                        <a id="delete_selected" style="margin-right:20px;" class="pointer" onclick="Delete_selected();">Delete Selected</a>
                    </td>
                </tr>
                <tr>
                    <td style="height:30px;">&nbsp;</td>
                </tr>
            
            </table>
            <?php } ?>
            <div id="dialog-confirm" title="Confirmation">
										<p style="float:left;"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>The selected records will proceed for print.<br/>Are you sure?</p>
									</div>
									<div id="confirm-delete" title="Confirmation">
										<p style="float:left;"><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Are you sure? you want to delete selected records.</p>
									</div>
</div>
</div> 
</div>      
<?php require_once('footer.php');	?> 	
</body>
</html>

