   <?php 
  
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();

$sub=$_REQUEST["subject"];
   $qry="select * from exam where subject_code='$sub'";
$t=$obj->selectdata($qry);
?> 
<?php
foreach($t as $b)
{
?>
 
 <option value="<?php echo $b['exam_id'];?>" ><?php echo $b['exam_title'];?></option>


  
  <?php
}?> 

