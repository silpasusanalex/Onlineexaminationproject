<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	//Start session
		 @session_register("user"); 
		  @session_register("passwd"); 
 if(!isset($_SESSION['user'])){
header("location:testlogin.php");
}
	?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Faith Infosys Aptitude Test</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<!-- clock -->
		<script type="text/javascript">
	 window.history.forward();
	
	
</script>

 
 <script src="jquery-1.3.1.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function(){
      $(document).bind("contextmenu",function(e){
        return false;
      });
    });
  
    //process this function whenever a key is pressed
$(document).keydown(function (event) {

var keyCode = event.keyCode ? event.keyCode : event.charCode;


  //window.status = keyCode;
 
  // keyCode for F% on Opera is 57349 ?!
 
  if (keyCode == 116 || keyCode ==15 ) {
  
   
   return false  ;
  }

if(event ) {

if(event.ctrlKey )  {
return false;
}
else if(event.MOUSEDOWN)
{
alert("okkk");
}
}


});
   
    </script>

  
    <title>Untitled Page</title>
    
    <style type="text/css">
    
        #mainbody
        {
        	width:900px;
	        border:2px solid gray;
	        overflow:auto;
	        margin:10px auto;
	        padding:20px;
	         background: #fff url(images/white_grey_background_upside_down.jpg) repeat-x;
            height:auto;
        }
        .timerbox
        {
        	 
	     
        	
        	height:70px;
        	position:fixed;
        background:#ccf;
        	right:30px;
        	margin:0;
        	padding:5px;
            top: -1px;
            width:220px;
        }
        
        
       *html  .timerbox
        {
        	position:absolute ;
            float:right;
        }
     ul  li
        {
        	list-style:none;
        	display:inline;
        	padding:5px ;
        	text-align:right;
        }
        
        ul  li ul
        {
        	padding-left:40px;
        	padding-top:20px;
        }
         ul  li ul li
        {
        	padding:10px;
        }
    .Questions
    {
    	border:1px solid red;
    	color:Black;
    	font-size:medium;
    	padding:20px 30px;
    }
    </style>
    
    <script type="text/javascript">
//<![CDATA[
  
  
  var windowHeight=screen.availHeight/4*3+20+"px"

function sniffer() {
    var el=document.getElementById("mainbody"); 
if(screen.width==1280) {
                
                   el.style.height= windowHeight;
                  
 } 
else {
if(screen.width==1024) {
                  
                   el.style.height= windowHeight;
                  
 } 
else { 
if(screen.width==800) {
              
                   el.style.height= windowHeight;
               
    }   
   }
  }
 }
onload=sniffer;
//]]>
</script>
     
	
	<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="jquery.spriteTimer-1.3.6.js"></script>
	<script type="text/javascript">
		function runWhenFinished() {
		    $('.exampleA').css({'background':'#333'});
			alert("STOP! Your times Over");
		    
document.forms.form1.submit();
		   
		}
	

		$(document).ready(function() {
		var a=   900
			
			$('.exampleA .timer').spriteTimer({
		        'seconds':a,
		        'isCountDown': true,
				'digitImagePath': 'numbers.png',
		        'callback': runWhenFinished
		    });
			
			$('.exampleB .timer').spriteTimer({
				'digitImagePath': 'numbers.png',
				'seconds': 12,
		        'isCountDown': false
		    });
			
		
			
			
			
			
		});
	</script>


		
	<!-- clock -->	
		
		
		
    </head>
    <body>
    	
    	<div id="bg2"></div>
	    <div id="wrapper1">
				<div id="menu">
					<ul>
						<li><a href="test.php" class="active">Home</a></li>
						<li><a href="logout.php" class="active">Logout</a></li>

					</ul>
					<div class="clear"></div>
				</div>	
				<div id="logo">
					<h1><a href="#">Faith Infosys</a></h1>
					<a href="#"><small>Software Development And Training</small></a>
				</div>
			
			    <div id="content_bg_top"></div>
				<div id="content_box">
					<div id="header">
					
					   
		 <div id="wrapper">
        <div id="slider-wrapper">        
<img src="images/testb.jpg" width="870" height="241" />       
        </div>
	

	</div>
					
					</div>
					<div id="column_box">
					
					<div class="timerbox">
<div class="example exampleA">
	
		<div class="timer"></div>
	</div>
</div>
					  <p>
				<form id="form1" runat="server" method="get" action="testdata.php">
					  
					  <font color="#FFFFFF" size="+2">
					 
					 <?php
require_once('config.php');
   $con=mysql_connect(dbhost,dbuser,dbpwd);
   $db=mysql_select_db(dbdata,$con);
$qry="SELECT * FROM questions where status=1 order by rand()";
$res=mysql_query($qry);
$i=1;
while($row=mysql_fetch_array($res))
{
echo $i.":";
echo $row['question']."<br>";
echo  "<font color='#FFFFFF' size='+1'>";
?>
<br />
<input type="radio" name="answer<?php echo $row['qno']; ?>" value="<?php echo $row['op1']; ?>" />A : <?php echo $row['op1']; ?>
<br />
<input type="radio" name="answer<?php echo $row['qno']; ?>" value="<?php echo $row['op2']; ?>" />B : <?php echo $row['op2']; ?>
<br />
<input type="radio" name="answer<?php echo $row['qno']; ?>" value="<?php echo $row['op3']; ?>" />C : <?php echo $row['op3']; ?>
<br />
<input type="radio" name="answer<?php echo $row['qno']; ?>" value="<?php echo $row['op4']; ?>" />D : <?php echo $row['op4']; ?>

<?php
echo "</font>";
echo "<br>";
echo "<br>";
$i++;
}

?>
		 
	 
					  </font>
					  
<div align="center"><input type="submit" name="sub" value="Submit" /></div>					  
					  </p>
					  </form>
					  <p>&nbsp;					    </p>
					  <div class="clear"></div>
					  
				  </div>
					<div id="footer_top">
					  <div class="clear"></div>
					</div>
				</div>
				<div id="content_bg_bot"></div>
			<div id="footer_bot">
				<p>Copyright  2011. <!-- Do not remove -->Designed by <a href="http://www.myfreecsstemplates.com/" title="Free CSS Templates">Faith Infosys </a><!-- end --></p>
				<p>&nbsp;</p>
			</div>
			
		</div>

    </body>
</html>
