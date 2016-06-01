<?php
session_start();
$cp=$_POST["cp1"];
$np=$_POST["cp2"];
$renp=$_POST["cp3"];

include('../../ConnectionClass.php');

$obj1=new ConnectionClass();
$username=$_SESSION["username"];
 $qry="select password from login where username='$username'";
$res=$obj1->GetSingleData($qry);
if($res==$cp)
{
 $oj=new ConnectionClass();
 $qry1="update login set password='$np' where username='$username' ";
 $t1=$oj->operation($qry1);
echo "<script>alert('Successfully Changed'); location.href='../hod_home.php';</script>";
}
else
{
echo "<script>alert('Please enter the correct password');location.href='../change_password.php';</script>";
}

?>