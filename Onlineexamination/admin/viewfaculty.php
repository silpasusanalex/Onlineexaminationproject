<?php  include('adminheader.php'); 



include('../ConnectionClass.php');
$obj1=new ConnectionClass();
$q="select * from faculty";
$res=$obj1->selectdata($q);
?>
<table border="1">
<tr><th>First Name</th><th>Last Name</th><th>Designation</th><th>Qualification</th><th>Address</th><th>Email</th><th>Faculty Type</th><th>Action</th></tr>
	 <?php
	foreach($res as $row)
	{
		?>
        <tr><td><?php echo $row["f_name"];?></td><td><?php echo $row["l_name"];?></td><td><?php echo $row["designation"];?></td><td><?php echo $row["qualification"];?></td><td><?php echo $row["address"];?></td><td><?php echo $row["email_id"];?></td><td><?php echo $row["type"];?></td><td><a href="code/delfaculty.php?id=<?php echo $row["staff_id"];?>" onclick="return(confirm('Are you sure want to delete it?'));">Delete</a></td></tr>
  
      <?php
	  }
	  ?>
      </table>
<?php  include('adminfooter.php'); ?>