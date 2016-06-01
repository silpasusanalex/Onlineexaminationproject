<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$desi=$_POST["desig"];
$em=$_POST["em"];
$quali=$_POST["quali"];
$adrs=$_POST["adrs"];
$type=$_POST["type"];
$staffid=mt_rand();
$pwd=mt_rand();
include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="select count(*) from faculty where email_id='$em'";
$count=$obj->GetSingleData($qq);
if($type!="select")
{
if($count==0)
{
$obj1=new ConnectionClass();
$q="INSERT INTO faculty(staff_id,qualification,designation,f_name,l_name,address,type,email_id) VALUES ('$staffid','$quali', '$desi', '$fname', '$lname',  '$adrs', '$type', '$em')";
$obj1->operation($q);



$obj2=new ConnectionClass();
$q2="INSERT INTO login(username,password,usertype,status) VALUES ('$staffid','$pwd','$type','active')";
$obj2->operation($q2);


//send username,password to email
$username=$em;
$sub="Greetings..";
$content="You are added to online examination website..Username:$staffid,Password:$pwd";
$obj3=new ConnectionClass();
$obj3->SendMail($username,$sub,$content);

echo "<script>alert('Successfully Added'); location.href='../addfaculty.php';</script>";
}
else
{	
echo "<script>alert('Emailid already added'); location.href='../addfaculty.php';</script>";
}
}
else
{

echo "<script>alert('Please choose staff type'); location.href='../addfaculty.php';</script>";
}
?>