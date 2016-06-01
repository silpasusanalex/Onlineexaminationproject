<?php  include('hodheader.php');
$ad=$_POST["txtad"];
include('../ConnectionClass.php');
$obj1=new ConnectionClass();
 $q="select * from student join login on student.admin_num=login.username where stud_name like '%$ad%'";
$result=$obj1->selectdata($q);
if(count($result)>0)
{
?>
<div style="width:600px;overflow:auto">
<table width="600px">
<tr><th>Admission Number</th><th>Name</th><th>Semester</th><th>Address</th><th>Batch</th><th>Gender</th><th>Email</th><th>Status</th></tr>
<?php
foreach($result as $t)
{
?><tr>
<td><?php   echo $t["admin_num"]  ?></td>
<td><?php   echo $t["stud_name"]  ?></td>
<td><?php   echo $t["semester"]  ?></td>
<td><?php   echo $t["address"]  ?></td>
<td><?php   echo $t["batch"]  ?></td>
<td><?php   echo $t["gender"]  ?></td>
<td><?php   echo $t["email_id"]  ?></td>
<td><?php   echo $t["status"]  ?></td></tr>


<?php
}
?>
</table></div>
<?php
}
else
{
echo "<script>alert('Invalid admn no');location.href='Student_Search.php'</script>";
}
include('hodfooter.php');?>