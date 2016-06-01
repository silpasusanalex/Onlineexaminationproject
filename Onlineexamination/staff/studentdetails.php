
<?php include('staffheader.php');
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
<form action="viewstud.php" method="post" id="form1">
<table width="400px" border="0">
  <tr>
    <td>Enter Admission number</td>
    <td><label>
      <input type="text" name="txtadmn" id="txtadmn" class="required">
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="Submit" name="button" id="button" value="Submit">
    </label></td>
  </tr>

</table>




</form><?php
include('stafffooter.php');
?>