<?php 

session_start();
session_start();
$dbhost = 'localhost:3306';
$dbuser = 'aj';
$dbpass = 'aj';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname);

//include("config.php"); 

// connect to the mysql server
$link = mysql_connect("localhost","aj","aj")
or die ("Could not connect to mysql because ".mysql_error());

// select the database
mysql_select_db("feedback")
or die ("Could not select database because ".mysql_error());


$username = $_POST['username'];
$password = $_POST['passwd'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

$result = mysql_query("SELECT passwd FROM login WHERE username='$username'");
if(!$result) 
{ 
echo "The username you entered does not exist. <a href=changepw.htm>Try Again</a> or <a href=index.htm>Quit</a>"; 
} 
else 
if($passwd!= mysql_result($result, 0)) 
{ 
echo "You entered an incorrect password. <a href=changepw.htm>Try Again</a> or <a href=index.htm>Quit</a>"; 
} 
else
if($newpassword==$confirmnewpassword) 
    $sql=mysql_query("UPDATE login SET passwd='$newpassword' where username='$username'"); 
    if($sql) 
    { 
    echo "Congratulations! You have successfully changed your password. <a href=index.htm>Continue</a>"; 
    }
else
{ 
echo "The new password and confirm new password fields must be the same. <a href=changepw.htm>Try Again</a> or <a href=index.htm>Quit</a>"; 
}  
?> 