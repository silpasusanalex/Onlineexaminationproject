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
           </script>
<?php
include('../ConnectionClass.php');
$obj1=new ConnectionClass();
 $q="select * from subject group by semester";
$data=$obj1->selectdata($q);



?>
<form id="form1" name="form1" method="post" action="addexam.php">
  <table width="290" border="0">
    <tr>
      <td colspan="2"><div align="center">EXAM SCHEDULING</div></td>
    </tr>
    <tr>
      <td width="131">Choose Semester</td>
      <td width="149"><label>
        <select name="sem" id="sem" class="required">
         <option value="select">select</option>
        <?php
		foreach($data as $r)
	{		
	
		?>
        <option value="<?php echo $r["semester"];?>"><?php echo $r["semester"];?></option>
        <?php
	}
		?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="OK" />
        </label></td>
    </tr>
  </table>
</form><?php  include('hodfooter.php'); ?>