<?php  include('hodheader.php'); ?>

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
           </script><div align="center" >
<form id="form1" name="form1" method="post" action="resultview.php">
  <table width="400" border="0">
    <tr>
      <td>Enter exam id</td>
      <td><label>
        <input type="text" name="p" id="p" />
      </label></td>
    </tr>
        <tr>
      <td>Enter Admission Number</td>
      <td><label>
        <input type="text" name="ano" id="ano" />
      </label></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit" />
      </label></td>
    </tr>
  </table>
</form></div>
<?php
 include('hodfooter.php');
  ?>