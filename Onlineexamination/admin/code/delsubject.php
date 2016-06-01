<?php
$sid=$_REQUEST["id"];

include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="delete from subject where sub_id='$sid'";
$count=$obj->operation($qq);



echo "<script>alert('Success..'); location.href='../addsubject.php';</script>";
?>