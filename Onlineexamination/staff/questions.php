
<?php
include('staffheader.php');



include('../ConnectionClass.php');
$obj1=new ConnectionClass();

 $q="select * from subject join exam on subject.sub_id=exam.subject_code and exam.exam_date>DATE(NOW())";
$data=$obj1->selectdata($q);
if(count($data)>0)
{
?>



<form id="form1" name="form1" method="post" action="addquestion.php">
  <table width="506" border="0" cellspacing="1" cellpadding="5">
    <tr>
      <td width="111" align="center">choose exam</td>
      <td width="110"><label>
        <select name="dpexam" id="dpexam">
        <?php
        foreach($data as $row)
	{?>
    <option value="<?php echo $row["exam_id"];?>"><?php echo $row["exam_title"]."(Sem:".$row["semester"].",Date:".$row["exam_date"].")";?></option>
    
    <?php
	}
	?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="button" id="button" value="Next" />
      </div>
      </label></td>
    </tr>
  </table>
</form><?php
}
else
{?>
	<script>alert('no data found');location.href='staff_home.php'; </script>
    <?php
}

include('stafffooter.php');
?>