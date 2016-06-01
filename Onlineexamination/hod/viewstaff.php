<?php  include('hodheader.php'); ?>
<?php
$aa=$_POST["txtadmn"];

include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from faculty where staff_id='$aa'";
$result=$obj1->selectdata($q);
if(count($result)>0)
{
foreach($result as $t)
{
?>
<form name="form1" method="post" action="">
  <table>
    <tr>
      <th width="94">first name</th>
      <td width="79"><label>
        <input type="text" name="textfield" id="textfield" value=" <?php   echo $t["f_name"]  ?>">
       
      </label></td>
    </tr>
    <tr>
      <th>last name</th>
      <td><?php   echo $t["l_name"]  ?></td>
    </tr>
    <tr>
      <th>qualification</th>
      <td><?php   echo $t["qualification"]  ?></td>
    </tr>
    <tr>
      <th>designation</th>
      <td><?php   echo $t["designation"]  ?></td>
    </tr>
    <tr>
      <th>date of joining</th>
      <td><?php   echo $t["date_joining"]  ?></td>
    </tr>
    <tr>
      <th>address</th>
      <td><?php   echo $t["address"]  ?></td>
    </tr>
    <tr>
      <th>type</th>
      <td><?php   echo $t["type"]  ?></td>
    </tr>
    <tr>
      <th>email id</th>
      <td><?php   echo $t["email_id"]  ?></td>
    </tr>
  </table>
</form>
<?php
}
}
else
{
echo "<script>alert('Invalid admn no');location.href='viewstaff.php'</script>";
}
?>
<?php  include('hodfooter.php'); ?>
