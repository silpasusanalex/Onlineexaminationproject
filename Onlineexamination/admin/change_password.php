<?php  include('adminheader.php');  ?>
<script type="text/javascript" src="../js/jquery.validate.js"></script> 
	<script>
	$(document).ready(function(){ 
	
	$("#form1").validate({
	 rules: {

                 txtcop: {
                     required: true,
                     equalTo: "txtnp"
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
<form id="form1" name="form1" method="post" action="code/changepw_exe.php">
  <table width="413" height="218" border="0" cellpadding="5" cellspacing="1">
    <tr>
      <td width="169">Old password</td>
      <td width="150"><label>
        <input name="txtcp" type="password" id="txtcp" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>New password</td>
      <td><label>
        <input type="password" name="txtnp" id="txtnp" class="required" minlength="6" />
      </label></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label>
        <input type="password" name="txtcop" id="txtcop" class="required" minlength="6" />
      </label></td>
    </tr>
    <tr>
      <td height="34" colspan="2"><label>
        <div align="center">
          <input type="submit" name="txtsave" id="txtsave" value="Save" />
          </div>
      </label></td>
    </tr>
  </table>
</form>
<?php  include('adminfooter.php'); ?>