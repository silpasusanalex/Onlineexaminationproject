<?php
session_start();
$eid=$_SESSION["examid"];
$ques=$_POST["aq1"];
$ans=$_POST["txtans"];
$op1=$_POST["txtop1"];
$op2=$_POST["txtop2"];
$op3=$_POST["txtop3"];
$op4=$_POST["txtop4"];

$username=$_SESSION["username"];
include('../../ConnectionClass.php');
$obj=new ConnectionClass();
$qq="select count(*) from questions where exam_id='$eid' and title='$ques'";
$count=$obj->GetSingleData($qq);

if($count==0)
{
$obj1=new ConnectionClass();
$q="INSERT INTO questions(title,option1,option2,option3,option4,correct_ans,fuc_id,exam_id,status) VALUES ('$ques','$op1','$op2','$op3','$op4','$ans','$username','$eid','submitted')";
$obj1->operation($q);

echo "<script>alert('Successfully Added'); location.href='../addquestion.php';</script>";
}
else
{	
echo "<script>alert('Already added'); location.href='../scheduling.php';</script>";
}


?>