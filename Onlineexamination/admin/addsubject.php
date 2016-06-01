
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
<form id="form1" name="form1" method="post" action="code/addsubject_exe.php">
  <table width="638" height="230" border="0">
    <tr>
      <td colspan="3" align="center">Add Subject</td>
    </tr>
    <tr>
      <td width="308">Choose Semester</td>
      <td width="9">&nbsp;</td>
      <td width="307"><label>
        <select name="sem" id="sem">
        <option value="select">select</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Enter Subject</td>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="sub" id="sub" class="required char" />
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

include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from subject";
$res=$obj1->selectdata($q);
if((count($res))>0)
{
?>
<table border="1">
<tr><th>Semester</th><th>Name</th><th>Action</th></tr>
	 <?php
	foreach($res as $row)
	{
		?>
        <tr><td><?php echo $row["semester"];?></td><td><?php echo $row["sub_name"];?></td><td><a href="code/delsubject.php?id=<?php echo $row["sub_id"];?>" onclick="return(confirm('Are you sure want to delete it?'));">Delete</a></td></tr>
  
      <?php
	  }
	  ?>
      </table>
      <?php
}?>
<?php  include('adminfooter.php'); ?>