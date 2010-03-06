<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="selectuse.js"></script>
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
		<h1><a href="#"><span id="result_box"><span title="Student FeedBack System" closure_hashcode_9rbgu5="46"><span id="result_box"><span title="vidyarthi" closure_hashcode_9rbgu5="54">विद्यार्थी</span>राय   प्रणाली</span></span></span></a></h1>
		<p>R.C.Patel Institute Of Technology,shirpur </p>
  </div>
	<!--
<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Popularity</a></li>
			<li><a href="#">Staff</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
-->
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
  <div class="red" id="sidebar"><br>
	
	<br><br>
	<?php
	if(strcmp($_GET['authentication'],"rty6t874s6df21hsr3t84s6f12th3fsdu6rt0bd4ty3jyurt54u54jf21j35f4g"))
	{
	header('location:~index.php');
	}
	
	?>

<br>
	<br>
	<div class="post greenbox">
			<div class="title">
				<h1 align="center">ADMINISTRATOR</h1>
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
				//$div = $_SESSION['div'];
				//$class = $_SESSION['class'];
				$sem = $_SESSION['sem'];
				$yr = $_SESSION['yr'];
				//$staff = $_SESSION['count'];
				
				//echo "$dept $div $class";
				
		
				
$query="SELECT name,idt FROM teacher WHERE dept='$dept' AND  sem='$sem' AND yr='$yr' ";

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
			
			<p>&nbsp;</p>
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
<!-- end page 
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p>Copyright © 2010 RCPIT,Shirpur. Designed by<strong><a href="http://www.ameyjadiye.co.nr/" target="_blank" class="style1" onmouseover="Tip('<a href=\'mailto:ameyjadiye@gmail.com\'>ameyjadiye@gmail.com</a>')" onmouseout="UnTip()"> Amey Jadiye </a> &amp; <span class="style1"><a href="mailto:saurabh.princesam@gmail.com" target="_blank">Saurabh agarwal </a></span> </strong></p>
	<p><div id="clockbox"></div>&nbsp;</p>
</div>
-->
</body>
</html>
