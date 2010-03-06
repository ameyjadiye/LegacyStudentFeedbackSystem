<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="selectuser.js"></script>
<script>


function highlight(which,color){
if (document.all||document.getElementById)
which.style.backgroundColor=color
which.style.fontsize = 12
}
</script>
<SCRIPT LANGUAGE="JavaScript">
<!--
tday  =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyeara = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

if(nyeara<1000){nyeara=(""+(nyeara+11900)).substring(1,5);}
else{nyeara=(""+(nyeara+10000)).substring(1,5);}

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyeara+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=function(){GetClock();}
//--></script>

<title>Student FeedBack System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {color: #CC0000}
-->
</style>
</head>
<body>
<script type="text/javascript" src="images/wz_tooltip.js"></script>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span id="result_box"><span title="Student FeedBack System" closure_hashcode_9rbgu5="46"><span id="result_box"><span title="vidyarthi" closure_hashcode_9rbgu5="54">विद्यार्थी</span></span> राय   प्रणाली</span></span></a></h1>
		<p>R.C.Patel Institute Of Technology,shirpur </p>
  </div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Popularity</a></li>
			<li><a href="#">Staff</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
  <div class="red" id="sidebar"><br>
	<div>
	<br><br>
	<?php
	if(strcmp($_GET['authentication'],"df6g54365g4u984z21l12m654lk654nmuy54xx5gh54545rdtu5f1cf874i"))
	{
	header('location:~index.php');
	}
	
	?>

<br>
	</div><br>
	<div class="post greenbox">
			<div class="title">
				<h1>Kindly Enter your feedback ..! </h1>
			</div>
			
			<?php
			session_start();
$dbhost = 'localhost:3306';
$dbuser = 'aj';
$dbpass = 'aj';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname);
?>

			
			
			
			<form action="submit.php" method="post">
			
			<center>
			  <p>
			    <?php
				
				
				$dept =  $_SESSION['dept'];
				$div = $_SESSION['div'];
				$class = $_SESSION['class'];
				$sem = $_SESSION['sem'];
				$yr = $_SESSION['yr'];
				$staff = $_SESSION['count'];
				
				//echo "$dept $div $class";
				
		
				
$query="SELECT name,idt FROM teacher WHERE dept='$dept' AND class='$class' AND divi='$div' AND sem='$sem' AND yr='$yr' AND count='$staff'";

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

$result = mysql_query ($query);
echo "<select name=teacher value='' onChange='showUser(this.value)'>Teacher Name</option>";
// printing the list box select command
echo "<option value=''>-----Select-----</option>";
while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
echo "<option value=$nt[idt]>$nt[name]</option>";
/* Option values are added by looping through the array */
}
echo "</select>";// Closing of list box 
?>
		      </p>
			  <p>  <div class="reference" id="txtHint"><b></b></div>   
			  </p>
			  <br><br>
			</center>
			
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>1. Does The Teacher come well prepared for the class?<br>
	        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" value="a" name="1" />
Always 
			<input type="radio" value="b" name="1" />
			Some Times 
			<input type="radio" value="c" name="1" />
			Never</strong></p>
			
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.The Teachers English,presentation and teaching skills are ... <br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="2" />
		    Good 
		    <input type="radio" value="b" name="2" />
		    Satisfactory 
		    <input type="radio" value="c" name="2" />
		    Unsatisfactory</strong></p>
			
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. How is Teachers Voice?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="3" />
		    Loud & Clear
            <input type="radio" value="b" name="3" />
            dificult To Hear at last bench 
		    <input type="radio" value="c" name="3" />
		    Not Audible&nbsp; </strong></p>
			
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. How the Teachers Works On Blackboard ?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="4" />
		    Neat & Clear
            <input type="radio" value="b" name="4" />
            Satisfactory
            <input type="radio" value="c" name="4" />
            shabby			 </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Does the teacher allow you to ask questions and answer ,the questions you asked? <br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <input type="radio" value="a" name="5" />
		    Always
		    <input type="radio" value="b" name="5" />
		    Evades
		    <input type="radio" value="c" name="5" />
		    Never </strong></p><p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.Does The teacher revise and ask questions,which are relevent to topic discussion?<br />
	        <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="a" name="6" />
			Always 
			<input type="radio" value="b" name="6" />
			Rarely 
			<input type="radio" value="c" name="6" />
			Never			</strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. Does the teacher give sufficient examples and solve previous examination problems in class?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="7" />
		    Always 
		    <input type="radio" value="b" name="7" />
		    Rarely 
		    <input type="radio" value="c" name="7" />
		    Never
		&nbsp; </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.Does teacher establish and maintain eye connection with the students? <br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="8" />
		    Always 
		    <input type="radio" value="b" name="8" />
		    Rarely 
		    <input type="radio" value="c" name="8" />
		    Never
		&nbsp; </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.Does the teacher presents real world example to clearfy very abstract and diffucult ideas? <br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="9" /> 
			Always 
			<input type="radio" value="b" name="9" /> 
			Some Times
			<input type="radio" value="c" name="9" />
			Never
			&nbsp; </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.Does the teacher come in to class and takes the class till the end of hour?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="10" /> 
			Always 
			<input type="radio" value="b" name="10" /> 
			Some Times
			<input type="radio" value="c" name="10" />
			Never
			&nbsp; </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11. Does the teacher Neglect the act of Indiscipline in and out side the class?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="11" /> 
			Never 
			<input type="radio" value="b" name="11" /> 
			Always
			<input type="radio" value="c" name="11" />
			Some Times
			&nbsp; </strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12.How is teacher's assessment of your internal assesment (test) books? <br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="12" /> 
			Correct 
			<input type="radio" value="b" name="12" /> 
			Very Strict
			<input type="radio" value="c" name="12" />
			Erratic
			&nbsp;</strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13. Does The Teacher Favor Some group of student while evaluating internal<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test books and regarding other issues ? <br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="a" name="13" /> 
			No 
			<input type="radio" value="b" name="13" />
			Yes
			
			&nbsp;</strong></p>
			<p onMouseover=highlight(this,'#CAF8C9') onMouseout="highlight(this,'#FFFFFF')"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14. does the teacher dectate The notes in the class ?<br>
		    <br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" value="a" name="14" />
			No(  if yes) time spent is 
			<input type="radio" value="b" name="14" />
&lt;25%
<input type="radio" value="c" name="14" /> 
			Between 25% to 50%   
			<input type="radio" value="d" name="14" />
			&gt;50%
			&nbsp; </strong></p>
			



               








			<p><center><input type="submit" value="submit" />
			&nbsp; &nbsp;
			<input type="reset" /></center></p>
			</form>
			
			
			
			
			<div class="btm">
				<div class="l">
					<div class="r">
					  <p class="meta">&nbsp;</p>
				  </div>
				</div>
			</div>
	</div>
		<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		
  </div>
	<!-- end content -->
	<!-- start sidebar -->
	<!-- end sidebar -->
</div>
<!-- end page -->
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p>Copyright © 2010 RCPIT,Shirpur. Designed by<strong><a href="http://www.ameyjadiye.co.nr/" target="_blank" class="style1" onmouseover="Tip('<a href=\'mailto:ameyjadiye@gmail.com\'>ameyjadiye@gmail.com</a>')" onmouseout="UnTip()"> Amey Jadiye </a> &amp; <span class="style1"><a href="mailto:saurabh.princesam@gmail.com" target="_blank">Saurabh agarwal </a></span> </strong></p>
	<p><div id="clockbox"></div>&nbsp;</p>
</div>

<?php 

$aj = $_SESSION['count'];
			  $aj = $aj - 1;
			  unset($_SESSION['count']);
			  $_SESSION['count'] = $aj;
			  
			  
			  if( $_SESSION['count'] < 0)
			  {
			  header('location:thanx.php');
			  }

			  
			  ?>





</body>
</html>
