<?php
include('staffheader.php');
$aa=$_POST["txtadmn"];

include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from student join login on student.admin_num=login.username where admin_num='$aa'";
$result=$obj1->selectdata($q);
if(count($result)>0)
{
foreach($result as $t)
{
?>
<table>
<tr><th>Name</th><td><?php   echo $t["stud_name"]  ?></td></tr>
<tr><th>Semester</th><td><?php   echo $t["semester"]  ?></td></tr>
<tr><th>Address</th><td><?php   echo $t["address"]  ?></td></tr>
<tr><th>Batch</th><td><?php   echo $t["batch"]  ?></td></tr>
<tr><th>Gender</th><td><?php   echo $t["gender"]  ?></td></tr>
<tr><th>Email</th><td><?php   echo $t["email_id"]  ?></td></tr>
<tr><th>Status</th><td><?php   echo $t["status"]  ?></td></tr>
</table>
<?php
}
}
else
{
echo "<script>alert('Invalid admn no');location.href='studentdetails.php'</script>";
}
include('stafffooter.php');
?>