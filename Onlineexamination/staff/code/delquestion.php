<?php
$sid=$_REQUEST["id"];

include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="delete from questions where question_id='$sid'";
$count=$obj->operation($qq);

echo "<script>alert('Success..'); location.href='../addquestion.php';</script>";
?>