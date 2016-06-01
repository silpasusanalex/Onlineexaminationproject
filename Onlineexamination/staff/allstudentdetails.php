<?php include('staffheader.php');
 ?>
<?php


include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from student join login on student.admin_num=login.username";
$result=$obj1->selectdata($q);
if(count($result)>0)
{
?>
<table>
<tr><th>Admission Number</th><th>Name</th><th>Semester</th><th>Address</th><th>Batch</th><th>Gender</th><th>Email</th><th>Status</th><th>Action</th></tr>
<?php
foreach($result as $t)
{
?>

<tr><td><?php   echo $t["admin_num"]  ?></td><td><?php   echo $t["stud_name"]  ?></td><td><?php   echo $t["semester"]  ?></td><td><?php   echo $t["address"]  ?></td><td><?php   echo $t["batch"]  ?></td><td><?php   echo $t["gender"]  ?></td><td><?php   echo $t["email_id"]  ?></td><td><?php   echo $t["status"]  ?></td><td><a href="editstud.php?id=<?php   echo $t["admin_num"]  ?>">Edit</a></td></tr>

<?php
}?>
</table>
<?php
}
else
{
echo "<script>alert('No data');location.href='studentdetails.php'</script>";
}
?>
<?php
include('stafffooter.php');
?>