<?php
session_start();
include('../../ConnectionClass.php');
$cp=$_POST["txtcp"];
$np=$_POST["txtnp"];
$cnp=$_POST["txtcop"];
$obj1=new ConnectionClass();
$username=$_SESSION["username"];
 $qry="select password from login where username='$username'";
$res=$obj1->GetSingleData($qry);
if($res==$cp)
{
 $oj=new ConnectionClass();
 $qry1="update login set password='$np' where username='$username' ";
 $t1=$oj->operation($qry1);
echo "<script>alert('Successfully Changed'); location.href='../student_home.php';</script>";
}
else
{
echo "<script>alert('Please enter the correct password');location.href='../changepassword.php';</script>";
}

?>