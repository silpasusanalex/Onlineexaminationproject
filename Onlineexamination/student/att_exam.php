
		<!-- clock -->
		<script type="text/javascript">
	 window.history.forward();
	
	
</script>

 
 <script src="../js_datepicker/jquery-1.3.1.min.js"></script>

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

  
    
    <style type="text/css">
    
        #mainbody
        {
        	width:900px;
	        border:2px solid gray;
	        overflow:auto;
	        margin:10px auto;
	        padding:20px;
	         background-color:#CCF;
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
     
	
	<script type="text/javascript" src="../js_datepicker/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="../js_datepicker/jquery.spriteTimer-1.3.6.js"></script>
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
				'digitImagePath': '../js_datepicker/numbers.png',
		        'callback': runWhenFinished
		    });
			
			$('.exampleB .timer').spriteTimer({
				'digitImagePath': '../js_datepicker/numbers.png',
				'seconds': 12,
		        'isCountDown': false
		    });
			
		
			
			
			
			
		});
	</script>


		
	<!-- clock -->	
		
		
		
    </head>
    <body>
    	
    	
	    <div id="wrapper1" style="background-color:#99F">
				
			
			    <div id="content_bg_top"></div>
				<div id="content_box">
					
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
					 session_start();
					 $username=$_SESSION["username"];
require_once('../ConnectionClass.php');
  $q=$_POST["examid"];
 $_SESSION["examid"]=$q;
 
 $obj12=new ConnectionClass();
$qry2="SELECT * FROM ans_sheet where admn_no='$username' and exam_id='$q'";
$res2=$obj12->selectdata($qry2);
if(count($res2)>0)
{
echo "<script>alert('Sorry...You are already attended this exam..');location.href='student_home.php';</script>";
}

  
$obj1=new ConnectionClass();
$qry="SELECT * FROM questions where status='accept' and exam_id='$q' order by rand()";
$res=$obj1->selectdata($qry);
if(count($res)>0)
{

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
}
else
{
echo "<script>alert('Sorry...Try again..');location.href='student_home.php';</script>";
}
?>
		   <input type="hidden" id="d1" name="d1" value="<?php echo $q; ?>" />
	 
					  </font>
					  
<div align="center"><input type="submit" name="sub" value="Submit" /></div>					  
					  </p>
					  </form>
					  
				  </div>
					
				</div>
			
			
		</div>

    </body>
</html>
