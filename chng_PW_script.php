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
 
  selbox.options[selbox.options.length] = new Option('SE (Entc - A)','seentca');
  selbox.options[selbox.options.length] = new Option('SE (Entc - B)','seentcb');
  selbox.options[selbox.options.length] = new Option('SE (Entc - C)','seentcc');

  
  selbox.options[selbox.options.length] = new Option('BE (Mech - A)','bemecha');
  selbox.options[selbox.options.length] = new Option('BE (Mech - B)','bemechb');
 
  selbox.options[selbox.options.length] = new Option('TE (Mech - A)','temecha');
  selbox.options[selbox.options.length] = new Option('TE (Mech - B)','temechb');
 
  selbox.options[selbox.options.length] = new Option('SE (Mech - A)','semecha');
  selbox.options[selbox.options.length] = new Option('SE (Mech - B)','semechb');

  selbox.options[selbox.options.length] = new Option('BE (Civil - A)','becivila');
  selbox.options[selbox.options.length] = new Option('BE (Civil - B)','becivilb');
 
  selbox.options[selbox.options.length] = new Option('TE (Civil - A)','tecivila');
  selbox.options[selbox.options.length] = new Option('TE (Civil - B)','tecivilb');
 
  selbox.options[selbox.options.length] = new Option('SE (Civil - A)','secivila');
  selbox.options[selbox.options.length] = new Option('SE (Civil - B)','secivilb');


  selbox.options[selbox.options.length] = new Option('FE - A','fea');
  selbox.options[selbox.options.length] = new Option('FE - B','feb');

  selbox.options[selbox.options.length] = new Option('FE - C','fec');
  selbox.options[selbox.options.length] = new Option('FE - D','fed');
 
  selbox.options[selbox.options.length] = new Option('FE - E','fee');
  selbox.options[selbox.options.length] = new Option('FE - F','fef');
 
  selbox.options[selbox.options.length] = new Option('FE - G','feg');
  selbox.options[selbox.options.length] = new Option('FE - H','feh');
    
}
}
</script>
</head>
<body>

<script type="text/javascript" src="images/wz_tooltip.js"></script>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span id="result_box"><span title="Student FeedBack System" closure_hashcode_9rbgu5="46"><span id="result_box"><span title="vidyarthi" closure_hashcode_9rbgu5="54">Student Feedback System</span></span></span></span></a></h1>
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
					<h2 align="center">Change Password</h2>
				</div>
				<div class="content">
					<form action="chng_PW_script.php" method="post" name="myform">
					
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
					
					              
 
                      </SELECT>
                      </p>
					  <p><strong>&nbsp;&nbsp;Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>  
					    <input type="password" name="oldpass" />
				      </p>
                                        <p><strong>&nbsp;&nbsp;New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>  
					    <input type="password" name="newpass" />
				      </p>
                                      <p><strong>&nbsp;&nbsp;Confirm Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>  
					    <input type="password" name="confirmpass" />
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


<?php
session_start();
$dbhost = 'localhost:3306';
$dbuser = 'aj';
$dbpass = 'aj';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
//echo "Database successfylly connected...";

$dbname = 'feedback';
mysql_select_db($dbname);



// Form input variables 

$user = mysql_real_escape_string($_POST['user']);
$oldpass = mysql_real_escape_string($_POST['oldpass']);
$newpass = mysql_real_escape_string($_POST['newpass']);
$confirmpass = mysql_real_escape_string($_POST['confirmpass']);

 $result = mysql_query("SELECT passwd FROM login WHERE username='$user'");
  //print "$result";

	if(!$result)
         //if($result!=$user)
        {
		echo "<b><b><b><b><b><b><font size=5 color=red>The username entered does not exist!</font></b></b></b></b></b></b>";
	}
	elseif($oldpass != mysql_result($result, 0))
        {
	  echo "<b><b><b><b><b><b><font size=5 color=red>Entered an incorrect password</font></b></b></b></b></b></b>";
        }
	elseif($newpass==$confirmpass)
        {
		$sql = mysql_query("UPDATE login SET passwd = '$newpass' WHERE username = '$user'");
                echo "<b><b><b><font size=5 color=red>Congratulations, password successfully changed!</font></b></b></b>";		
        }
	
	//if(!$sql)
        elseif($newpass!=$confirmpass)
        {
           echo "<b><b><b><b><b><b><font size=5 color=red>New password and confirm password must be the same!</font></b></b></b></b></b></b>";
        }
        

        //{
	//	echo "<b><b><b><font size=5 color=red>Congratulations, password successfully changed!</font></b></b></b>";
	//}
	//else
        //{
	//	echo "<b><b><b><font size=5 color=red>New password and confirm password must be the same!</font></b></b></b>";
	//}



 //if (!isset($_POST['submit'])) 
//{ 
  // if page is not submitted to itself echo the form
//} 
//else 
//{
  //$result = mysql_query("SELECT passwd FROM login WHERE user='$username' and pass= '".md5($passwd)."'")or die("Query failed: " . mysql_error());
//if(mysql_num_rows($result))
  //{
    //if($newpassword==$confirmpassword)
      // {
        //$sql=mysql_query("UPDATE login SET pass='".md5($newpassword)."' where usr='$username'");        
        //if($sql) 
        //{ 
          //    echo "Password Changed";
        //}       
       //else
       //{
            // In case when problem while updating your new password
         // echo "Error changing password, please email webmaster@signalwarrant.com";
      //}       
    //} 
     //else 
      //{
        // In case when new-password and retype-password do not match
      //echo "New and confirmed password do not match please try again.";
     //}
	
    //} 
   //else 
     //{
    // In case of you have not correct User name and password
//		echo "Current username and password do no match."; 	
  //  }
//}

?> 




<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p>Copyright © 2010 RCPIT,Shirpur. Designed by<strong> <a href="http://www.ameyjadiye.co.nr/" target="_blank" class="style2" onmouseover="Tip('<a href=\'mailto:ameyjadiye@gmail.com\'>ameyjadiye@gmail.com</a>')" onmouseout="UnTip()">Amey Jadiye </a> &amp; <span class="style2"><a href="mailto:saurabh.princesam@gmail.com" target="_blank">Saurabh agarwal </a></span> </strong></p>
	<p><div id="clockbox"></div>&nbsp;</p>
</div>
</body>
</html>
