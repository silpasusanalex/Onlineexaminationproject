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

$sem=$_POST["sem"];
include('../ConnectionClass.php');
$obj1=new ConnectionClass();

 $q="select * from subject where semester='$sem'";
$data=$obj1->selectdata($q);
?>
<form id="form1" name="form1" method="post" action="code/addexam_exe.php">
<input type="hidden" id="hid" name="hid" value="<?php echo $sem; ?>" /> 
  <table width="443" height="186" border="0">
    <tr>
      <td colspan="2"><div align="center"><h4>Add Exam</h4></div></td>
    </tr>
    <tr>
      <td>Choose Suject</td>
      <td><label>
        <select name="sub" id="sub" class="required">
         <option value="select">select</option>
         <?php
		foreach($data as $r)
	{		
	?>
    ?>
        <option value="<?php echo $r["sub_id"];?>"><?php echo $r["sub_name"];?></option>
        <?php
	}
		?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Title</td>
      <td><input type="text" name="etitle" id="etitle" class="required " /></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><label>
        <input type="date" name="edate" id="edate" class="required datep" placeholder="yyyy-mm-dd"  />
      </label></td>
    </tr>
  
    <tr>
      <td>Duration</td>
      <td><label>
        <input type="text" name="dd" id="dd" value="15mins" readonly="readonly"/>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="OK" />
      </label></td>
    </tr>
  </table>
</form>

<?php 

$obj11=new ConnectionClass();
 $q1="select * from subject join exam on subject.sub_id=exam.subject_code and subject.semester='$sem'";
$res1=$obj1->selectdata($q1);
if((count($res1))>0)
{
?>
<table border="1">
<tr><th>Title</th><th>Date</th><th>Subject</th><th>duration</th><th>Action</th></tr>
	 <?php
	foreach($res1 as $row)
	{
		?>
        <tr><td><?php echo $row["exam_title"];?></td><td><?php echo $row["exam_date"];?></td><td><?php echo $row["sub_name"];?></td><td><?php echo $row["duration"];?></td><td><a href="code/delexam.php?id=<?php echo $row["exam_id"];?>" onClick="return(confirm('Are you sure want to delete it?'));">Delete</a></td></tr>
  
      <?php
	  }
	  ?>
      </table>
      <?php
}
?>



<?php  include('hodfooter.php'); ?>