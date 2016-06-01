<?php include('staffheader.php');
 ?>
<?php
$admn=$_REQUEST["id"];

include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from student join login on student.admin_num='$admn' and login.username=student.admin_num";
$result=$obj1->selectdata($q);
if(count($result)>0)
{foreach($result as $t)
{
?>
<form action="code/upstatus.php" method="post">
<table>
<tr><th>Name</th><td><input type="text" readonly="readonly" id="sname" name="sname" value="<?php   echo $t["stud_name"]  ?>" /></td></tr>
<tr><th>Semester</th><td><input type="text" id="sem" name="sem" value="<?php   echo $t["semester"]  ?>"></td></tr>
<tr><th>Address</th><td><input type="text" readonly="readonly" id="adrs" name="adrs" value="<?php   echo $t["address"]  ?>" /></td></tr>
<tr><th>Batch</th><td><input type="text"  id="b" name="b" value="<?php   echo $t["batch"]  ?>" /></td></tr>
<tr><th>Gender</th><td><input type="text" readonly="readonly" id="gen" name="gen" value="<?php   echo $t["gender"]  ?>" /></td></tr>
<tr><th>Email</th><td><input type="text" readonly="readonly" id="em" name="em" value="<?php   echo $t["email_id"]  ?>" /></td></tr>
<input type="hidden" id="hid" name="hid" value="<?php   echo $admn;  ?>">
<tr><th>Status</th>
  <td><label>
    <select name="st" id="st">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
    </select>
  </label></td>
</tr>

<tr><td colspan="2"><input type="submit" value="save" /></td></tr>
</table>
</form>

<?php
}
}
else
{
echo "<script>alert('No data');location.href='studentdetails.php'</script>";
}
?>
<?php
include('stafffooter.php');
?>