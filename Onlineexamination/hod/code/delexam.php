<?php
$sid=$_REQUEST["id"];

include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="delete from exam where exam_id='$sid'";
$count=$obj->operation($qq);

echo "<script>alert('Success..'); location.href='../scheduling.php';</script>";
?>