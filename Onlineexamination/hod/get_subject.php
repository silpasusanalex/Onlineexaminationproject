   <?php 
  
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();

$sem=$_REQUEST["sem"];
   $qry="select * from subject where semester='$sem'";
$t=$obj->selectdata($qry);
?> 
<?php
foreach($t as $b)
{
?>
 
 <option value="<?php echo $b['sub_id'];?>" ><?php echo $b['sub_name'];?></option>


  
  <?php
}?> 

