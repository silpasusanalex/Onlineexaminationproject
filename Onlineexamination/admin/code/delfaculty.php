<?php
$sid=$_REQUEST["id"];

include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="delete from faculty where staff_id='$sid'";
$count=$obj->operation($qq);

$obj1=new ConnectionClass();
$qq1="delete from login where username='$sid'";
$count1=$obj1->operation($qq1);


echo "<script>alert('Success..'); location.href='../viewfaculty.php';</script>";
?>