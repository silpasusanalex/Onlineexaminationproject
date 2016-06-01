<?php  include('hodheader.php'); 
$ex=$_REQUEST["examid"];
$fid=$_REQUEST["fac"];
include('../ConnectionClass.php');
$obj1=new ConnectionClass();
  $q="select * from questions where exam_id='$ex' and fuc_id='$fid' order by question_id";
$data=$obj1->selectdata($q);
?><a href="approve_questions.php">back</a>
<table>
<tr><th>Question</th><th>Oprion1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th></tr>
<?php
foreach($data as $r)
{
?>
<tr><th><?php echo $r["title"];  ?></th><th><?php echo $r["option1"];  ?></th><th><?php echo $r["option2"];  ?></th><th><?php echo $r["option3"];  ?></th><th><?php echo $r["option4"];  ?></th><th><?php echo $r["correct_ans"];?></th></tr>
<?php
}?>
</table>
<?php  include('hodfooter.php'); 