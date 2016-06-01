
<?php
include('staffheader.php');
?>
<script type="text/javascript" src="../js/jquery.validate.js"></script> 
	<script>
	$(document).ready(function(){ 
	
	$("#form1").validate({
	 rules: {

                 cp3: {
                     required: true,
                     equalTo: "cp2"
                 }
             }
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


<form id="form1" name="form1" method="post" action="code/changepassword_exe.php">
  <table width="351" border="0">
    <tr>
      <td colspan="2"><div align="center">CHANGE PASSWORD</div></td>
    </tr>
    <tr>
      <td width="153">Old password</td>
      <td width="188"><label>
        <input type="password" name="cp1" id="cp1" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>New password</td>
      <td><label>
        <input type="password" name="cp2" id="cp2" class="required" minlength="6" />
      </label></td>
    </tr>
    <tr>
      <td>Re-enter new password</td>
      <td><label>
        <input type="password" name="cp3" id="cp3" class="required" minlength="6" />
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
<?php
include('stafffooter.php');
?>