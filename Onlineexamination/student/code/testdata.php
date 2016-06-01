
<?php
session_start();
$eid=$_SESSION["examid"];
$username=$_SESSION["username"];
require('../../ConnectionClass.php');
  $q="select * from questions where status='accept' and exam_id='$eid'";
  $obj=new ConnectionClass();
  $res=$obj->selectdata($q);
  $mark=0;
foreach($res as $row)
{
$pst="answer".$row["question_id"];

 $ans=@$_GET[$pst];

if($ans==$row["correct_ans"])
{
$mark=$mark+1;
}
else
{
$mark=$mark+0;
}



}
 $obj1=new ConnectionClass();
  $qry1="insert into ans_sheet(admn_no,exam_id,mark_obtained) values('$username','$eid','$mark')";
   
   $result=$obj1->operation($qry1);
if($result)
{
   ?>
<script language="javascript">
alert('Please contact the invigilator for further proceedings  THANK YOU!!');
location.href="../student_home.php";
</script>
<?php
}
?>