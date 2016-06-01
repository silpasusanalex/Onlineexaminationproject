
<?php  include('adminheader.php'); ?>
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
<form id="form1" name="form1" method="post" action="code/addfaculty_exe.php">
  <table width="638" height="373" border="0" cellpadding="5" cellspacing="1">
    <tr>
      <td width="169">First Name</td>
      <td width="150"><label>
        <input type="text" name="fname" id="fname" class="required char" />
      </label></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="lname" id="lname" class="required char" /></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input type="text" name="desig" id="desig" class="required char" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="em" id="em" class="required email" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="adrs" id="adrs" class="required"></textarea></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><input type="text" name="quali" class="required" id="quali" /></td>
    </tr>
    <tr>
      <td>Type</td>
      <td><label>
        <select name="type" id="type" class="required">
        <option value="select">select</option>
          <option value="hod">HOD</option>
          <option value="staff">Staff</option>
          </select>
        </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Save" />
      </label></td>
    </tr>
  </table>
</form>
<?php  include('adminfooter.php'); ?>
