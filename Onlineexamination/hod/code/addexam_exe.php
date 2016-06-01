<?php
session_start();
$sem=$_POST["hid"];
$sub=$_POST["sub"];
$title=$_POST["etitle"];

$edate=$_POST["edate"];
$duration='15';
$username=$_SESSION["username"];
include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="select count(*) from exam where exam_title='$title' and exam_date='$edate' and sem='$sem'";
$count=$obj->GetSingleData($qq);

if($count==0)
{
$obj1=new ConnectionClass();
$q="INSERT INTO exam(exam_date,exam_title,subject_code,staff_id,duration,sem) VALUES ( '$edate','$title','$sub','$username','$duration','$sem')";
$obj1->operation($q);

echo "<script>alert('Successfully Added'); location.href='../scheduling.php';</script>";
}
else
{	
echo "<script>alert('Already added'); location.href='../scheduling.php';</script>";
}
?>
