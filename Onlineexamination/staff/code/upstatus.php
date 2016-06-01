<?php


$sem=$_POST["sem"];
$status=$_POST["st"];

$admn=$_POST["hid"];
include('../../ConnectionClass.php');

$obj1=new ConnectionClass();
  $qry="update student set semester='$sem' where admin_num='$admn'";
$res=$obj1->operation($qry);
$obj11=new ConnectionClass();
  $qry1="update login set status='$status' where username='$admn'";
$res1=$obj11->operation($qry1);

echo "<script>alert('Successfully Changed'); location.href='../allstudentdetails.php';</script>";
?>