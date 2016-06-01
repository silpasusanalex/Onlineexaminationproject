
<?php include('siteheader.php');?>
<script type="text/javascript" src="js/jquery.validate.js"></script> 
	<script>
	$(document).ready(function(){ 
	
	$("#ww1").validate({
	
	});
	});
	</script>
<script src="js_datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <link href="js_datepicker/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="js_datepicker/bootstrap.css" rel="stylesheet" type="text/css" />

 
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

<form id="ww1" name="form1" method="post" action="code/stud_reg_exe.php">
  <table width="356" height="388" border="0">
    <tr>
      <td width="113">Name</td>
      <td width="11">&nbsp;</td>
      <td width="62"><label>
        <input type="text" name="txtname" id="txtname" class="required char" />
      </label></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtsem" id="txtsem" class="required number" />
      </label></td>
    </tr>
    <tr>
      <td>Roll number</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtrno" id="txtrno" class="required number" />
      </label></td>
    </tr>
    <tr>
      <td>Admission Number</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtadmnno" id="txtadmnno" class="required number" />
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>&nbsp;</td>
      <td><label>
        <textarea name="txtadrs" id="txtadrs" class="required "></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>&nbsp;</td>
      <td><p>
        <label>
          <input type="radio" name="gender" value="male" id="gender_0" class="required " />
          male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="female" id="gender_1" />
          female</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>Batch</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtbatch" id="txtbatch" class="required " />
      </label></td>
    </tr>
    <tr>
      <td>Email id</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="txtemail" id="txtemail" class="required email" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="password" name="txtpwd" id="txtpwd" class="required " />
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
<?php include('sitefooter.php');?>