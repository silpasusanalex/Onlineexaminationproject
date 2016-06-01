<?php
session_start();
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$des=$_POST["desig"];
$adrs=$_POST["adrs"];
$quali=$_POST["quali"];

include('../../ConnectionClass.php');

$obj1=new ConnectionClass();
$username=$_SESSION["username"];
 $qry="update faculty set f_name='$fname',l_name='$lname',designation='$des',address='$adrs',qualification='$quali' where staff_id='$username'";
$res=$obj1->operation($qry);

echo "<script>alert('Successfully Changed'); location.href='../my_profile.php';</script>";
?>