
<?php
include('staffheader.php');
?>
<script type="text/javascript" src="../js/jquery.validate.js"></script> 
	<script>
	$(document).ready(function(){ 
	
	$("#form1").validate({
	
	});
	});
	</script>
<script src="../js_datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <link href="../js_datepicker/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="../js_datepicker/bootstrap.css" rel="stylesheet" type="text/css" />

 
       <script type="text/javascript" >
           $(document).ready(function () {

               var FromEndDate = new Date();

               var myDate = new Date();
               myDate.setDate(myDate.getDate() + 30);

               $(".datep").datepicker(
               {

                   format: 'yyyy/mm/dd',
                   autoclose: true,
                   pickerPosition: "left",
                   onRender: function (date) {

                       return (date.valueOf() <= FromEndDate.valueOf()) ? 'disabled' : '';
                   }

               });

           });
           </script>
<?php 
//session_start(); 


include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$username=$_SESSION["username"];
 $q="select * from faculty where staff_id='$username'";
$data=$obj1->selectdata($q);
foreach($data as $r)
	{


?>
<form id="form1" name="form1" method="post" action="editprofile.php">
  <table width="638" height="439" border="0" cellpadding="5" cellspacing="1">
    <tr>
      <td height="96" colspan="2" align="center"><h2>My Profile</h2></td>
      </tr>
    <tr>
      <td width="169">First Name</td>
      <td width="150"><label>
        <input type="text" name="fname" id="fname" readonly="readonly" value="<?php  echo $r["f_name"] ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="lname" id="lname" readonly="readonly" value="<?php  echo $r["l_name"] ?>" /></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input type="text" name="desig" id="desig" readonly="readonly" value="<?php  echo $r["designation"] ?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="em" id="em" readonly="readonly" value="<?php  echo $r["email_id"] ?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="adrs" id="adrs" readonly="readonly"><?php  echo $r["address"] ?></textarea></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><input type="text" name="quali" id="quali" readonly="readonly" value="<?php  echo $r["qualification"] ?>" /></td>
    </tr>
   
    <tr>
      <td>Type</td>
      <td><label>
        <input type="text" id="type" name="type" readonly="readonly" value="<?php  echo $r["type"] ?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Edit" />
      </label></td>
    </tr>
  </table>
</form>

<?php
	}
include('stafffooter.php');
?>
