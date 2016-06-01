<?php
session_start();

$name=$_POST["txtname"];
$sem=$_POST["txtsem"];

$adrs=$_POST["txtadrs"];
include('../../ConnectionClass.php');

$obj1=new ConnectionClass();
$username=$_SESSION["username"];
 $qry="update student set stud_name='$name',semester='$sem',address='$adrs' where admin_num='$username'";
$res=$obj1->operation($qry);

echo "<script>alert('Successfully Changed'); location.href='../myprofile.php';</script>";
?>