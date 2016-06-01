<?php
include('../ConnectionClass.php');
$cp=$_POST["txtcp"];
$np=$_POST["txtnp"];
$cnp=$_POST["txtcop"];
$obj1=new ConnectionClass();
$q="insert into student(student_name,semester,rollnum,admin_num,address,gender,batch,email_id) values('$name','$sem','$rolno','$admsn','$addrss','$gender','$batch','$emlid')";
$obj->opertion($q);
echo "<script>alert('Success');</script>";

?>