<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Student FeedBack System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style2 {color: #CC0000}
-->
</style>
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
<script type="text/javascript">
function setOptions(chosen) {
var selbox = document.myform.user;
 
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Please select one of the options above first',' ');
 
}
if (chosen == "1") {
 
  selbox.options[selbox.options.length] = new Option('HOD (Computer)','hodcomp');
  selbox.options[selbox.options.length] = new Option('HOD (IT)','hodit');
  selbox.options[selbox.options.length] = new Option('HOD (ENTC)','hodentc');
  selbox.options[selbox.options.length] = new Option('HOD (MECH)','hodmech');
  selbox.options[selbox.options.length] = new Option('HOD (CIVIL)','hodcivil');
  selbox.options[selbox.options.length] = new Option('HOD (FE)','hodfe');
  selbox.options[selbox.options.length] = new Option('HOD (ELECT)','hodelect');

 
}
if (chosen == "2") {
  selbox.options[selbox.options.length] = new Option('BE (comp - A)','becompa');
  selbox.options[selbox.options.length] = new Option('BE (comp - B)','becompb');
 
  selbox.options[selbox.options.length] = new Option('BE (IT)','beita');
  
  selbox.options[selbox.options.length] = new Option('TE (comp - A)','tecompa');
  selbox.options[selbox.options.length] = new Option('TE (comp - B)','tecompb');
 
  selbox.options[selbox.options.length] = new Option('TE (IT)','teita'); 
  
  selbox.options[selbox.options.length] = new Option('SE (comp - A)','secompa');
  selbox.options[selbox.options.length] = new Option('SE (comp - B)','secompb');
 
  selbox.options[selbox.options.length] = new Option('SE (IT)','seita');  
   

  selbox.options[selbox.options.length] = new Option('BE (Entc - A)','beentca');
  selbox.options[selbox.options.length] = new Option('BE (Entc - B)','beentcb');
 
  selbox.options[selbox.options.length] = new Option('TE (Entc - A)','teentca');
  selbox.options[selbox.options.length] = new Option('TE (Entc - B)','teentcb');
  selbox.options[selbox.options.length] = new Option('TE (Entc - C)','teentcc');
 
  selbox.options[selbox.options.length] = new Option('SE (Entc - A)','seentca');
  selbox.options[selbox.options.length] = new Option('SE (Entc - B)','seentcb');
  selbox.options[selbox.options.length] = new Option('SE (Entc - C)','seentcc');

  
  selbox.options[selbox.options.length] = new Option('BE (Mech - A)','bemecha');
  selbox.options[selbox.options.length] = new Option('BE (Mech - B)','bemechb');
  selbox.options[selbox.options.length] = new Option('BE (Mech - C)','bemechc');
 
  selbox.options[selbox.options.length] = new Option('TE (Mech - A)','temecha');
  selbox.options[selbox.options.length] = new Option('TE (Mech - B)','temechb');
  selbox.options[selbox.options.length] = new Option('TE (Mech - C)','temechc');
 
  selbox.options[selbox.options.length] = new Option('SE (Mech - A)','semecha');
  selbox.options[selbox.options.length] = new Option('SE (Mech - B)','semechb');
  selbox.options[selbox.options.length] = new Option('SE (Mech - C)','semechc');

  selbox.options[selbox.options.length] = new Option('BE (Civil - A)','becivila');
 // selbox.options[selbox.options.length] = new Option('BE (Civil - B)','becivilb');
 
  selbox.options[selbox.options.length] = new Option('TE (Civil - A)','tecivila');
  //selbox.options[selbox.options.length] = new Option('TE (Civil - B)','tecivilb');
 
  selbox.options[selbox.options.length] = new Option('SE (Civil - A)','secivila');
  //selbox.options[selbox.options.length] = new Option('SE (Civil - B)','secivilb');

  //selbox.options[selbox.options.length] = new Option('BE (ELECT - A)','beelecta');
  //selbox.options[selbox.options.length] = new Option('BE (ELECT - B)','beelectb');
 
  selbox.options[selbox.options.length] = new Option('TE (ELECT - A)','teelecta');
  //selbox.options[selbox.options.length] = new Option('TE (ELECT - B)','teelectb');
 
  selbox.options[selbox.options.length] = new Option('SE (ELECT - A)','seelecta');
 // selbox.options[selbox.options.length] = new Option('SE (ELECT - B)','seelectb');


  selbox.options[selbox.options.length] = new Option('FE - A','fea');
  selbox.options[selbox.options.length] = new Option('FE - B','feb');

  selbox.options[selbox.options.length] = new Option('FE - C','fec');
  selbox.options[selbox.options.length] = new Option('FE - D','fed');
 
  selbox.options[selbox.options.length] = new Option('FE - E','fee');
  selbox.options[selbox.options.length] = new Option('FE - F','fef');
 
  selbox.options[selbox.options.length] = new Option('FE - G','feg');
  selbox.options[selbox.options.length] = new Option('FE - H','feh');

  //selbox.options[selbox.options.length] = new Option('FE - I','fei');
 // selbox.options[selbox.options.length] = new Option('FE - J','fej');
    
}
}
</script>
</head>
<body>
<?php
session_start();
$dbhost = 'localhost:3306';
$dbuser = 'aj';
$dbpass = 'aj';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname);
?>
<script type="text/javascript" src="images/wz_tooltip.js"></script>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span id="result_box"><span title="Student FeedBack System" closure_hashcode_9rbgu5="46"><span id="result_box"><span title="vidyarthi" closure_hashcode_9rbgu5="54">विद्यार्थी</span> राय   प्रणाली</span></span></span></a></h1>
		<p>R.C.Patel Institute Of Technology,shirpur </p>
  </div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="chng_PW_script.php">Change Password</a></li>
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
	<div id="content">
	  <div class="two-columns">
			<div class="columnA">
				<div class="title red">
					<h2 align="center">Login</h2>
				</div>
				<div class="content">
					<form action="auth.php" method="post" name="myform">
					
					<p><strong>&nbsp;&nbsp;Group:  </strong>
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="group" size="1"
onchange="setOptions(document.myform.group.options[document.myform.group.selectedIndex].value);">
					    <OPTION VALUE="" selected="selected">               
                        <OPTION VALUE="1">Administrator
                        <OPTION VALUE="2">Student
                      </SELECT>
                       
                      <br />
                      <br />
<strong>&nbsp;&nbsp;User Name:&nbsp;&nbsp;&nbsp; </strong>
					<select name="user" size="1">
<option value=" " selected="selected"></option>
</select>
					</p>
					<p><strong>&nbsp;&nbsp;sem:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
					<input type="radio" value="1" name="sem" /> 1
			<input type="radio" value="2" name="sem" />
			2 </strong>
					<p><strong>&nbsp;&nbsp;Year:  </strong>
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <select name="yr" size="1">
					    <OPTION VALUE="" selected="selected">               
  <?php                      
  $query="SELECT DISTINCT yr FROM teacher";

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

$result = mysql_query ($query);

while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
echo '<option value='.$nt['yr'].'>'.$nt['yr'].'</option>';
/* Option values are added by looping through the array */
}

?>
                      </SELECT>
                      </p>
					  <p>					    <strong>&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>  
					    <input type="password" name="pass" />
				      </p>
					  <tbody id="2" style="display: none;">

					<p><center><input type="image" src="login.gif" alt="Click Hear For Login..!!" name="submit" width="120" height="100" />
					</center><br />
					  </p>
					</form>
					
				
					
				</div>
			</div>
			<div class="btm">&nbsp;</div>
	  </div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<!-- end sidebar -->
</div>
<!-- end page -->
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p>Copyright © 2010 RCPIT,Shirpur. Designed by<strong> <a href="http://www.ameyjadiye.co.nr/" target="_blank" class="style2" onmouseover="Tip('<a href=\'mailto:ameyjadiye@gmail.com\'>ameyjadiye@gmail.com</a>')" onmouseout="UnTip()">Amey Jadiye </a> &amp; <span class="style2"><a href="mailto:saurabh.princesam@gmail.com" target="_blank">Saurabh agarwal </a></span> </strong></p>
	<p><div id="clockbox"></div>&nbsp;</p>
</div>
</body>
</html>
