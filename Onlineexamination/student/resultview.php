
<?php
include('studheader.php');
?>



<?php 
//session_start();
$a=$_POST["p"];
$adm=$_SESSION["username"];
include('../ConnectionClass.php');
$obj=new ConnectionClass();
 $qry="select * from student join ans_sheet on ans_sheet.exam_id='$a' and ans_sheet.admn_no='$adm' and ans_sheet.admn_no=student.admin_num join exam on exam.exam_id=ans_sheet.exam_id";
$result=$obj->selectdata($qry);
if(count($result)>0)
{
foreach($result as $r)
	{

?>

<table>
<tr><th colspan="2" align="center">Online Exam Result </th></tr>

<tr><th>Exam id</th><td><?php   echo $r["exam_id"]  ?></td></tr>
<tr><th>Exam Name</th><td><?php   echo $r["exam_title"]  ?></td></tr>
<tr><th>Date</th><td><?php   echo $r["exam_date"]  ?></td></tr>
<tr><th>Marks Obtailed</th><td><?php   echo $r["mark_obtained"]  ?></td></tr><!--
<tr><th>Total Mark</th><td><?php   echo $r["total_marks"]  ?></td></tr>-->
</table>
<?php
}
}
else
{
echo "<script>alert('Not available..Please Try again..');location.href='viewresult.php'</script>";
}
?>
<?php
include('studfooter.php');
?>