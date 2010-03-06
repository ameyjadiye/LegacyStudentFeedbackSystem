<?
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please login and use this page </font>( No session exist) <br> Visit Home page to <a href=index.php>create session</a></center>";
exit;
}else{

echo "<center><font face='Verdana' size='2' color=green>Welcome $_SESSION[userid] | <a href=index.php>HOME</a> | <a href=display.php>Display Page</a> | <a href=logout.php>Logout</a></font></center>";

}
?>