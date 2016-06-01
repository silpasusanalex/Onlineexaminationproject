<?php
session_start();

include('../ConnectionClass.php');
$username=$_POST["txtuname"];
$pwd=$_POST["txtpwd"];
$obj1=new ConnectionClass();
$_SESSION["username"]=$username;
 $q="select count(*) from login where username='$username' and password='$pwd' and status='active'";
 $count=$obj1->GetSingleData($q);
if($count==0)
{

echo "<script>alert('Invalid');location.href='../login.php'</script>";
}
else
{
$obj21=new ConnectionClass();
$q11="select password from login where username='$username' and password='$pwd'";
$pass=$obj21->GetSingleData($q11);
	if($pass==$pwd)
	{
$obj2=new ConnectionClass();
$q1="select usertype from login where username='$username' and password='$pwd'";
$utype=$obj2->GetSingleData($q1);
	if($utype=="admin")
	{
	header('location:../admin/admin_home.php');
	}
	else if($utype=="hod")
	{
	header('location:../hod/hod_home.php');
	}
	else if($utype=="staff")
	{
	header('location:../staff/staff_home.php');
	}
	else if($utype=="student")
	{
	header('location:../student/student_home.php');
	}
	else
	{
	echo "<script>alert('Invalid');location.href='../login.php';</script>";
	}
	}
	else
	{
	echo "<script>alert('password incorrect');location.href='../login.php';</script>";
	}
	
	



}



