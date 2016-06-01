<?php
include('../ConnectionClass.php');
$name=$_POST["txtname"];
$sem=$_POST["txtsem"];
$rolno=$_POST["txtrno"];
$admsn=$_POST["txtadmnno"];
$addrss=$_POST["txtadrs"];
$gender=$_POST["gender"];
$batch=$_POST["txtbatch"];
$emlid=$_POST["txtemail"];
$passwd=$_POST["txtpwd"];


$obj=new ConnectionClass();
$qq="select count(*) from student where admin_num='$admsn' ";
$count=$obj->GetSingleData($qq);

if($count==0)
{

$obj4=new ConnectionClass();
$qq4="select count(*) from student where rollnum='$rolno' ";
$count4=$obj->GetSingleData($qq4);
if($count4==0)
{
$obj5=new ConnectionClass();
$qq5="select count(*) from student where email_id='$emlid' ";
$count5=$obj->GetSingleData($qq5);
if($count5==0)
{
$obj1=new ConnectionClass();
$q="insert into student(stud_name,semester,rollnum,admin_num,address,gender,batch,email_id) values('$name','$sem','$rolno','$admsn','$addrss','$gender','$batch','$emlid')";
$obj1->operation($q);

$obj2=new ConnectionClass();
$s="insert into login(username,password,usertype,status) values('$admsn','$passwd','student','inactive')";
$obj2->operation($s);
echo "<script>alert('Success...Your admission number will be the username to login..');location.href='../login.php'</script>";
}
else
{
	echo "<script>alert('email already exist'); location.href='../student_reg.php';</script>";

}
}
else
{
	
echo "<script>alert('Check your rollnumber'); location.href='../student_reg.php';</script>";
}
}
else
{
echo "<script>alert('Already added'); location.href='../stud_reg_exe.php';</script>";
}
?>
