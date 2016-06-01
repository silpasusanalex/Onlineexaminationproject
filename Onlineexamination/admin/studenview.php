<?php include('adminheader.php'); ?>
<?php 

$a=$_POST["p"];
include('../ConnectionClass.php');
$obj=new ConnectionClass();
$qry="select * from student join login on student.admin_num=login.username where admin_num='$a'";
$result=$obj->selectdata($qry);
if(count($result)>0)
{
foreach($result as $r)
	{

?>

<table>
<tr><th>Name</th><td><?php   echo $r["stud_name"]  ?></td></tr>
<tr><th>Semester</th><td><?php   echo $r["semester"]  ?></td></tr>
<tr><th>Address</th><td><?php   echo $r["address"]  ?></td></tr>
<tr><th>Batch</th><td><?php   echo $r["batch"]  ?></td></tr>
<tr><th>Gender</th><td><?php   echo $r["gender"]  ?></td></tr>
<tr><th>Email</th><td><?php   echo $r["email_id"]  ?></td></tr>
<tr><th>Status</th><td><?php   echo $r["status"]  ?></td></tr>
</table>
<?php
}
}
else
{
echo "<script>alert('Invalid Admission Number');location.href='viewstudent.php'</script>";
}
?>

<?php
include('adminfooter.php');
?>