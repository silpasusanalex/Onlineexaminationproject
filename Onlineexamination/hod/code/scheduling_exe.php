<?php
 session_start();
 
include('../../ConnectionClass.php');

$obj1=new ConnectionClass();
$exam=$_POST["exam"];
$date1=$_POST["d"];
$regf=$_POST["srf4"];
$regto=$_POST["srt5"];

$stime=$_POST["sst7"];
$a="insert into examschedule (date,exam_id,regno_from,regno_to,status,start_time)values('$date1','$exam','$regf','$regto','submitted','$stime')";
$obj1->operation($a);

echo "<script>alert('Successfully Added'); location.href='../examscheduling.php';</script>";
?>