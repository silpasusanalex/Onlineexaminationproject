<?php  include('hodheader.php'); 

$exam=$_POST["exam"];
include('../ConnectionClass.php');
$obj1=new ConnectionClass();

 $q="select * from questions join faculty on faculty.staff_id=questions.fuc_id and questions.exam_id='$exam' group by questions.fuc_id";
$data=$obj1->selectdata($q);
?>

  
<?php
if(count($data)>0)
{
?><table width="443" height="186" border="0">
  <tr><th>Prepared By</th><th></th></tr>
  <?php
  foreach($data as $r)
	{	
  ?>
    <tr>
      <td><?php 
	  $f=$r["f_name"];
	  $l=$r["l_name"];
	  
	  echo $f." ".$l; ?></td><td><a href="acceptreject.php?examid=<?php echo $r["exam_id"] ?>&fac=<?php echo $r["fuc_id"] ?>">View Questions</a>
      <br />
      <a href="code/acceptrejectquestion.php?action=accept&qid=<?php echo $r["question_id"] ?>&examid=<?php echo $r["exam_id"] ?>&fac=<?php echo $r["fuc_id"] ?>">Accept</a>
      <br />
      <a href="code/acceptrejectquestion.php?action=reject&qid=<?php echo $r["question_id"] ?>&examid=<?php echo $r["exam_id"] ?>&fac=<?php echo $r["fuc_id"] ?>">Reject</a>
      
      </td>
    </tr>
   <?php
   }
   ?>
  </table>
  <?php
  }
  else
  {
	  
echo "<script>alert('No data');location.href='approve_questions.php'</script>";
   }
  ?>
</form>



<?php  include('hodfooter.php'); ?>