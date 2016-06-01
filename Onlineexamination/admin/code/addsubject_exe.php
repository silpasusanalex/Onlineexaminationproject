<?php
$sem=$_POST["sem"];
$sub=$_POST["sub"];

include('../../ConnectionClass.php');
$obj=new ConnectionClass();
if($sem!="select")
{
$qq="select count(*) from subject where sub_name='$sub' and semester='$sem'";
$count=$obj->GetSingleData($qq);

if($count==0)
{
$obj1=new ConnectionClass();
$q="INSERT INTO subject(sub_name,semester) VALUES ('$sub', '$sem')";
$obj1->operation($q);

echo "<script>alert('Successfully Added'); location.href='../addsubject.php';</script>";
}
else
{	
echo "<script>alert('Already added'); location.href='../addsubject.php';</script>";
}
}
else
{
echo "<script>alert('Please choose a subject'); location.href='../addsubject.php';</script>";
}
?>