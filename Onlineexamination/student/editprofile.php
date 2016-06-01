
<?php
//session_start();
include('studheader.php');
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

include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$username=$_SESSION["username"];
$q="select * from student where admin_num='$username'";
$data=$obj1->selectdata($q);
foreach($data as $r)
	{
?>



<form id="form1" name="form1" method="post" action="code/profile_exe.php">
<table width="356" height="388" border="0">
    <tr>
      <td width="113">Name</td>
      <td width="11">&nbsp;</td>
      <td width="62"><label>
      <input type="text" name="txtname" id="txtname" value="<?php  echo $r["stud_name"] ?>" class="required char"/>
      </label></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtsem" id="txtsem" value="<?php  echo $r["semester"] ?>" class="required number"/>
      </label></td>
    </tr>
    <tr>
      <td>Roll number</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtrno" id="txtrno" readonly="readonly" value="<?php  echo $r["rollnum"] ?>" class="required number" />
      </label></td>
    </tr>
    <tr>
      <td>Admission Number</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtadmnno" id="txtadmnno" readonly="readonly" class="required" value="<?php  echo $r["admin_num"] ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>&nbsp;</td>
      <td><label>
        <textarea name="txtadrs" id="txtadrs" class="required"><?php  echo $r["address"] ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>&nbsp;</td>
      <td><p>
       
       <input type="text" id="gender" readonly="readonly" value="<?php  echo $r["gender"] ?>" class="required" name="gender" />
        <br />
      </p></td>
    </tr>
    <tr>
      <td>Batch</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtbatch" id="txtbatch" readonly="readonly" value="<?php  echo $r["batch"] ?>" class="required"/>
      </label></td>
    </tr>
    <tr>
      <td>Email id</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtemail" readonly="readonly" id="txtemail" class="required email" value="<?php  echo $r["email_id"] ?>" />
      </label></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit" />
      </label></td>
    </tr>
  </table>
  </form>
  <?php
  
  }
  ?>
<?php
include('studfooter.php');
?>