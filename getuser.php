<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'aj', 'aj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("feedback", $con);

$sql="SELECT * FROM teacher WHERE idt = '".$q."'";

$result = mysql_query($sql);
echo "<b>";
echo "<table style='border:1px solid #c3c3c3' bgcolor='#CAF8C9' width='469' height='155'>";

while($row = mysql_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td><center><img src='show.php?id=".$row['idt']."' height='120' width='100'></center></td>";
  echo "<td> Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <font color='#CC0000'>".$row['Name']."</font><br>";
  echo "Department&nbsp;: ".$row['dept']."<br>";
  echo "Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['class']."<br>";
  echo "Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['divi']."<br>";
  echo "Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['sub']."</td>";
  
  echo "</tr>";
  }
echo "</table>";
echo "</b>";
mysql_close($con);
?> 