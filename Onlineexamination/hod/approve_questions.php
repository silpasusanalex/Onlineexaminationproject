
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
<script src="js/jquery.min.js"></script>
<script>

$(document).ready(function(){
						   
						   $("#sem").change(function(){
											   
											   var id=$(this).val();
											    $("#subject").load("get_subject.php?sem="+id);
											   });
							$("#subject").change(function(){
											   
											   var id=$(this).val();
											    $("#exam").load("getexam.php?subject="+id);
											   });
						   
						   });


</script>
<form id="form1" name="form1" method="post" action="choosesubject.php">
  <table width="259" height="53" border="0">
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td>Choose Semester</td>
      <td><label>
        <select name="sem" id="sem">
        
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
      <td>Choose Subject</td>
      <td><label>
      <select name="subject" id="subject">
        
         </select>
      </label></td>
    </tr>
    
    <tr>
      <td width="130">Choose Exam</td>
      <td width="138"> 
      <select name="exam" id="exam">
        
         </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="OK" /></td>
    </tr>
  </table>
</form><?php  include('hodfooter.php'); ?>