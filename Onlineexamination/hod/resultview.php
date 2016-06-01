<?php include('hodheader.php'); ?>
<?php 

$a=$_POST["p"];
$adm=$_POST["ano"];
include('../ConnectionClass.php');
$obj=new ConnectionClass();
echo $qry="select * from student join ans_sheet on ans_sheet.exam_id='$a' and ans_sheet.admn_no='$adm' and ans_sheet.admn_no=student.admin_num join exam on exam.exam_id=ans_sheet.exam_id";
$result=$obj->selectdata($qry);
if(count($result)>0)
{
foreach($result as $r)
	{

?>

<table>
<tr><th colspan="2" align="center">Personal Details </th></tr>
<tr><th>Name</th><td><?php   echo $r["stud_name"]  ?></td></tr>
<tr><th>Semester</th><td><?php   echo $r["semester"]  ?></td></tr>
<tr><th>Address</th><td><?php   echo $r["address"]  ?></td></tr>
<tr><th>Batch</th><td><?php   echo $r["batch"]  ?></td></tr>
<tr><th>Gender</th><td><?php   echo $r["gender"]  ?></td></tr>
<tr><th>Email</th><td><?php   echo $r["email_id"]  ?></td></tr>
<tr><th colspan="2" align="center">Accademic Details </th></tr>

<tr><th>Exam id</th><td><?php   echo $r["exam_id"]  ?></td></tr>
<tr><th>Exam Name</th><td><?php   echo $r["exam_title"]  ?></td></tr>
<tr><th>Date</th><td><?php   echo $r["exam_date"]  ?></td></tr>
<tr><th>Marks Obtailed</th><td><?php   echo $r["mark_obtained"]  ?></td></tr>
</table>
<?php
}
}
else
{
echo "<script>alert('Not available..Please Try again..');location.href='result.php'</script>";
}
?>

<?php
include('hodfooter.php');
?>