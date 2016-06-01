
<?php

include('siteheader.php');


?>
<script type="text/javascript" src="js/jquery.validate.js"></script> 
	<script>
	$(document).ready(function(){ 
	
	$("#form1").validate({
	
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

<form id="form1" name="form1" method="post" action="code/login_exe.php">
  <table width="200" border="0">
    <tr>
      <td width="118">Username</td>
      <td width="10">&nbsp;</td>
      <td width="62"><label>
        <input type="text" name="txtuname" id="txtuname" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="password" name="txtpwd" id="txtpwd" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="button" id="button" value="Save" />
     </td>
     </tr>
  </table>
</form>
<?php

include('sitefooter.php');
?>
