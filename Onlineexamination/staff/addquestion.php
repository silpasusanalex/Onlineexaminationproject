
<?php
include('staffheader.php');
//session_start();
$username=$_SESSION["username"];

if(!(isset($_POST["dpexam"])))
{
	$examid=$_SESSION["examid"];
}
else
{
$examid=$_POST["dpexam"];
$_SESSION["examid"]=$examid;

}
?>

<form id="form1" name="form1" method="post" action="code/addqu_exe.php">
<input type="hidden" id="hid" name="hid" value="<?php echo $examid;  ?>" />
  <table width="596" border="0" cellspacing="1" cellpadding="5">
    <tr>
      <td>&nbsp;</td>
      <td>Add Questions</td>
    </tr>
    <tr>
      <td width="167">Question</td>
      <td width="406"><label>
        <textarea name="aq1" id="aq1" class="required"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Option 1</td>
      <td><label>
        <input type="text" name="txtop1" id="txtop1" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>Option 2</td>
      <td><label>
        <input type="text" name="txtop2" id="txtop2" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>Option 3</td>
      <td><label>
        <input type="text" name="txtop3" id="txtop3" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>Option 4</td>
      <td><label>
        <input type="text" name="txtop4" id="txtop4" class="required" />
      </label></td>
    </tr>
    <tr>
      <td>Correct answer</td>
      <td><label>
        <input type="text" name="txtans" id="txtans" class="required" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="sav" id="sav" value="Save" />
      </div>
      </label></td>
    </tr>
  </table>
</form>
<?php

include('../ConnectionClass.php');
$obj11=new ConnectionClass();

 $q1="select * from questions where exam_id='$examid' and fuc_id='$username'";
$data1=$obj11->selectdata($q1);
if(count($data1)>0)
{
?>
<table>
<tr><th>Slno</th><th>Question</th><th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th><th>Action</th></tr>
<?php
$i=1;
foreach($data1 as $r)
	{	
?>
<tr><td><?php echo $i;$i++; ?></td><td><?php echo $r["title"];?></td><td><?php echo $r["option1"];?></td><td><?php echo $r["option2"];?></td><td><?php echo $r["option3"];?></td><td><?php echo $r["option4"];?></td><td><?php echo $r["correct_ans"];?></td><td><a href="code/delquestion.php?id=<?php echo $r["question_id"];?>" onclick="return(confirm('Are you sure want to delete it?'));">Delete</a></td></tr>
<?php
	}
?>
</table>
<?php
}
include('stafffooter.php');
?>