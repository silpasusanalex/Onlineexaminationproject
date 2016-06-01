<?php   
$ex=$_REQUEST["examid"];
$fid=$_REQUEST["fac"];
$act=$_REQUEST["action"];
$qid=$_REQUEST["qid"];
include('../../ConnectionClass.php');


if($act=="accept")
{
	$obj11=new ConnectionClass();
	$qq="select * from questions where exam_id='$ex' and status='$act'";
	$dd=$obj11->selectdata($qq);
	if(count($dd)>0)
	{
		
		echo "<script>alert('Already selected a pattern..  '); location.href='../approve_questions.php';</script>";
	}
	else
	{
	$obj21=new ConnectionClass();
  $q2="update questions set status='$act' where exam_id='$ex' and fuc_id='$fid'";
$data2=$obj21->operation($q2);	
	}
}
else
{
	$obj1=new ConnectionClass();
  $q="update questions set status='$act' where exam_id='$ex'  and fuc_id='$fid'";
$data=$obj1->operation($q);
}


echo "<script>alert('Success'); location.href='../approve_questions.php';</script>";
?>