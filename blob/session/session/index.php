<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

session_start(); // Must be there at top of the page where we want to use session variables. 

?>
<html>
<head>
<title>(Type a title for your page here)</title>
</head>
<body >
<?

echo "<br><br>Here a new session is started with userid plus2net  Click here to visit <a href=display.php>display</a> page to check session status. ";

$_SESSION['userid']="plus2net"; // Starting a session. 
$_SESSION['name']="Ronny";    // Storing name in another session variable. 


?>


<center>
<br><br><a href='http://www.plus2net.com'>PHP SQL HTML free tutorials and scripts</a></center> 

</body>

</html>
