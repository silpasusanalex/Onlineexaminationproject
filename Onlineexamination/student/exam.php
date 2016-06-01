
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="../styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
		<!-- clock -->
        
 <script src="../js_datepicker/jquery-1.3.1.min.js"></script><!--
	<script type="text/javascript" src="../js_datepicker/jquery-1.4.3.min.js"></script>-->
	<script type="text/javascript" src="../js_datepicker/jquery.spriteTimer-1.3.6.js"></script>
		<script type="text/javascript">
	 window.history.forward();
	
	
</script>

 

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
	         background: #fff url(../images/white_grey_background_upside_down.jpg) repeat-x;
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
					
				
			
			    <div id="content_bg_top"></div>
				<div id="content_box">
					<div id="header">
					
					   
		 <div id="wrapper">
        <div id="slider-wrapper">        
<img src="../images/testb.jpg" width="870" height="241" />       
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
				<form id="form1" runat="server" method="get" action="code/testdata.php" >
					  
					  <font color="#FFFFFF" size="+2">
					 
					 <?php
require_once('../ConnectionClass.php');
  
$obj1=new ConnectionClass();
$qry="SELECT * FROM questions where status='accepted' and exam_id='1' order by rand()";
$res=$obj1->selectdata($qry);
$i=1;
foreach($res as $row)
{
echo $i.":";
echo $row['title']."<br>";
echo  "<font color='#FFFFFF' size='+1'>";
?>
<br />
<input type="radio" name="answer<?php echo $row['question_id']; ?>" value="<?php echo $row['option1']; ?>" />A : <?php echo $row['option1']; ?>
<br />
<input type="radio" name="answer<?php echo $row['question_id']; ?>" value="<?php echo $row['option2']; ?>" />B : <?php echo $row['option2']; ?>
<br />
<input type="radio" name="answer<?php echo $row['question_id']; ?>" value="<?php echo $row['option3']; ?>" />C : <?php echo $row['option3']; ?>
<br />
<input type="radio" name="answer<?php echo $row['question_id']; ?>" value="<?php echo $row['option4']; ?>" />D : <?php echo $row['option4']; ?>

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
					
				</div>
				<div id="content_bg_bot"></div>
		
			
		</div>

    </body>
</html>
