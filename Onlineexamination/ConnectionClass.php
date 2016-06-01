<?php

class ConnectionClass
{
  public function __construct()
  {
    require("config.php");
	 //echo "<h1>"."Constructed Created"."</h1>";
	 
  }



  public function operation($qry)    //insertion,deletion,updation
  {
  $response =array();
   	try
	{
	
		$result=mysql_query($qry); 
		if($result)
		$response['Status']="true";
			 
		else
			throw new Exception(mysql_error());	
	
	}
	catch(Exception $e)
	{
	$response['Status']="false";
	$response['Message']= $e->getMessage();
		 
	}
    
	 mysql_close();
	 
	 return ($response);
	 
  }
 
  public function selectdata($qry)  //select * from
 {
 	try
	{
		$result=mysql_query($qry);// or throw new Exception("Error in Query");
		if($result)
		{
			$data = array(); // create a variable to hold the information
			while (($row = mysql_fetch_array($result, MYSQL_ASSOC)) !== false)
			{
				$data[] = $row; // add the row in to the results (data) array
		  
			}

			return $data;
		}
		else
			throw new Exception(mysql_error());	
	
	}
	catch(Exception $e)
	{
		return $e->getMessage();
	}
 	mysql_close();
 }
 
 
 
 
 
 
 
 
 public function GetSingleData($qry) 
 {
 	 try
	{
		$result=mysql_query($qry);// or throw new Exception("Error in Query");
		if($result)
		{
			//$data = array(); // create a variable to hold the information
			$row = mysql_fetch_row($result) ;
			
			//	$data = $row; // add the row in to the results (data) array

			return $row[0];
		}
		else
			throw new Exception(mysql_error());	
	
	}
	catch(Exception $e)
	{
		return $e->getMessage();
	}
 	mysql_close($con);
 }
 
 public function SendMail($to1,$subject,$body)
{
require_once('SMTPmail/SMTPconfig.php');
require_once('SMTPmail/SMTPClass.php');

$to = $to1;
$from = "event805@gmail.com";
 
 
  
 

$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
  $SMTPChat = $SMTPMail->SendMail(); 
}
 
 public function GetSingleRow($qry) 
 {
 	 try
	{
		$result=mysql_query($qry);// or throw new Exception("Error in Query");
		if($result)
		{
			//$data = array(); // create a variable to hold the information
			$row = mysql_fetch_array($result) ;
			
			//	$data = $row; // add the row in to the results (data) array

			return $row;
		}
		else
			throw new Exception(mysql_error());	
	
	}
	catch(Exception $e)
	{
		return $e->getMessage();
	}
 	mysql_close($con);
 }







 public function GenerateID($qry,$num) 
 {
	try
	{
		$result=mysql_query($qry);// or throw new Exception("Error in Query");
		if($result)
		{
			//$data = array(); // create a variable to hold the information
			$row = mysql_fetch_row($result) ;
			if(empty($row[0]))
			{
				$maxid=($num+1);
			}
			else
			{
				$maxid=$row[0]+1;
				
			}
			//	$data = $row; // add the row in to the results (data) array

			return $maxid;
		}
		else 
			throw new Exception(mysql_error());	
	
	}
	catch(Exception $e)
	{
		return $e->getMessage();
	}
	mysql_close();
 }
  
  public function FileUpload($path,$filename)
  {
     if(!is_dir($path))
  {
     mkdir($path,0777);
  }
   else
   {
      echo "ok";
   }
  }
 
}

?>