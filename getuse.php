<?php
error_reporting(0);
$idt=$_GET["q"];

$con = mysql_connect('localhost', 'aj', 'aj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("feedback", $con);

$sql="SELECT * FROM teacher WHERE idt = '".$idt."'";

$result = mysql_query($sql);
echo "<b>";
echo "<table style='border:1px solid #c3c3c3' bgcolor='#CAF8C9' width='469' height='155'>";

while($row = mysql_fetch_array($result))
  {
  
  echo "<tr>";
  echo "<td><center><img src='show.php?id=".$row['idt']."' height='120' width='100'></center></td>";
  echo "<td> Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <font color='#CC0000'>".$row['Name']."</font><br>";
  echo "Department&nbsp;: ".$row['dept']."<br>";
  
  echo "Academic Year&nbsp;: ".$row['yr']."<br>";
  echo "Semester&nbsp;: ".$row['sem']."<br>";


  echo "Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['class']."<br>";
  echo "Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['divi']."<br>";
  echo "Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$row['sub']."</td>";
  
  echo "</tr>";
  }
echo "</table>";
echo "</b>";


//TABLE





$a1= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a1a=mysql_fetch_array($a1);
$b1= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a1b=mysql_fetch_array($b1);
$c1= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a1c=mysql_fetch_array($c1);
$a2= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a2a=mysql_fetch_array($a2);
$b2= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a2b=mysql_fetch_array($b2);
$c2= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a2c=mysql_fetch_array($c2);
$a3= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a3a=mysql_fetch_array($a3);
$b3= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a3b=mysql_fetch_array($b3);
$c3= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a3c=mysql_fetch_array($c3);
$a4= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a4a=mysql_fetch_array($a4);
$b4= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a4b=mysql_fetch_array($b4);
$c4= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a4c=mysql_fetch_array($c4);
$a5= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a5a=mysql_fetch_array($a5);
$b5= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a5b=mysql_fetch_array($b5);
$c5= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a5c=mysql_fetch_array($c5);
$a6= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a6a=mysql_fetch_array($a6);
$b6= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a6b=mysql_fetch_array($b6);
$c6= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a6c=mysql_fetch_array($c6);
$a7= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a7a=mysql_fetch_array($a7);
$b7= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a7b=mysql_fetch_array($b7);
$c7= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a7c=mysql_fetch_array($c7);
$a8= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a8a=mysql_fetch_array($a8);
$b8= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a8b=mysql_fetch_array($b8);
$c8= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a8c=mysql_fetch_array($c8);

$a9= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a9a=mysql_fetch_array($a9);

$b9= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a9b=mysql_fetch_array($b9);

$c9= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a9c=mysql_fetch_array($c9);

$a10= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a10a=mysql_fetch_array($a10);

$b10= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a10b=mysql_fetch_array($b10);

$c10= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a10c=mysql_fetch_array($c10);


$a11= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a11a=mysql_fetch_array($a11);

$b11= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a11b=mysql_fetch_array($b11);

$c11= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a11c=mysql_fetch_array($c11);

$a12= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a12a=mysql_fetch_array($a12);

$b12= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a12b=mysql_fetch_array($b12);


$c12= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a12c=mysql_fetch_array($c12);
$a13= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a13a=mysql_fetch_array($a13);

$b13= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a13b=mysql_fetch_array($b13);

$c13= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a13c=mysql_fetch_array($c13);

$a14= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a14a=mysql_fetch_array($a14);

$b14= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a14b=mysql_fetch_array($b14);

$c14= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a14c=mysql_fetch_array($c14);

$d14= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
$a14d=mysql_fetch_array($d14);

$a1as=6*$a1a['1a'];
$a1bs=3*$a1b['1b'];
$a1cs=1*$a1c['1c'];

$a2as=6*$a2a['2a'];
$a2bs=3*$a2b['2b'];
$a2cs=1*$a2c['2c'];

$a3as=6*$a3a['3a'];
$a3bs=3*$a3b['3b'];
$a3cs=1*$a3c['3c'];

$a4as=6*$a4a['4a'];
$a4bs=3*$a4b['4b'];
$a4cs=1*$a4c['4c'];

$a5as=6*$a5a['5a'];
$a5bs=3*$a5b['5b'];
$a5cs=1*$a5c['5c'];

$a6as=6*$a6a['6a'];
$a6bs=3*$a6b['6b'];
$a6cs=1*$a6c['6c'];

$a7as=6*$a7a['7a'];
$a7bs=3*$a7b['7b'];
$a7cs=1*$a7c['7c'];

$a8as=6*$a8a['8a'];
$a8bs=3*$a8b['8b'];
$a8cs=1*$a8c['8c'];

$a9as=6*$a9a['9a'];
$a9bs=3*$a9b['9b'];
$a9cs=1*$a9c['9c'];

$a10as=6*$a10a['10a'];
$a10bs=3*$a10b['10b'];
$a10cs=1*$a10c['10c'];

$a11as=6*$a11a['11a'];
$a11bs=1*$a11b['11b'];
$a11cs=3*$a11c['11c'];

$a12as=6*$a12a['12a'];
$a12bs=3*$a12b['12b'];
$a12cs=1*$a12c['12c'];

$a13as=6*$a13a['13a'];
$a13bs=3*$a13b['13b'];
$a13cs=1*$a13c['13c'];

$a14as=0*$a14a['14a'];
$a14bs=3*$a14b['14b'];
$a14cs=5*$a14c['14c'];
$a14ds=2*$a14d['14d'];

$out1=($a1a['1a']+$a1b['1b']+$a1c['1c'])*6; 
$tot1=$a1as+$a1bs+$a1cs;
$p1=($tot1*100)/$out1;
$p1 = round($p1, 2);

$out2=($a2a['2a']+$a2b['2b']+$a2c['2c'])*6;
$tot2=$a2as+$a2bs+$a2cs;
$p2=($tot2*100)/$out2;
$p2 = round($p2, 2);

$out3=($a3a['3a']+$a3b['3b']+$a3c['3c'])*6;
$tot3=$a3as+$a3bs+$a3cs;
$p3=($tot3*100)/$out3;
$p3 = round($p3, 2);

$out4=($a4a['4a']+$a4b['4b']+$a4c['4c'])*6;
$tot4=$a4as+$a4bs+$a4cs;
$p4=($tot4*100)/$out4;
$p4 = round($p4, 2);

$out5=($a5a['5a']+$a5b['5b']+$a5c['5c'])*6; 
$tot5=$a5as+$a5bs+$a5cs;
$p5=($tot5*100)/$out5;
$p5 = round($p5, 2);

$out6=($a6a['6a']+$a6b['6b']+$a6c['6c'])*6; 
$tot6=$a6as+$a6bs+$a6cs;
$p6=($tot6*100)/$out6;
$p6 = round($p6, 2);

$out7=($a7a['7a']+$a7b['7b']+$a7c['7c'])*6; 
$tot7=$a7as+$a7bs+$a7cs;
$p7=($tot7*100)/$out7;
$p7 = round($p7, 2);

$out8=($a8a['8a']+$a8b['8b']+$a8c['8c'])*6; 
$tot8=$a8as+$a8bs+$a8cs;
$p8=($tot8*100)/$out8;
$p8 = round($p8, 2);

$out9=($a9a['9a']+$a9b['9b']+$a9c['9c'])*6; 
$tot9=$a9as+$a9bs+$a9cs;
$p9=($tot9*100)/$out9;
$p9 = round($p9, 2);

$out10=($a10a['10a']+$a10b['10b']+$a10c['10c'])*6; 
$tot10=$a10as+$a10bs+$a10cs;
$p10=($tot10*100)/$out10;
$p10 = round($p10, 2);

$out11=($a11a['11a']+$a11b['11b']+$a11c['11c'])*6; 
$tot11=$a11as+$a11bs+$a11cs;
$p11=($tot11*100)/$out11;
$p11 = round($p11, 2);

$out12=($a12a['12a']+$a12b['12b']+$a12c['12c'])*6; 
$tot12=$a12as+$a12bs+$a12cs;
$p12=($tot12*100)/$out12;
$p12 = round($p12, 2);

$out13=($a13a['13a']+$a13b['13b']+$a13c['13c'])*6; 
$tot13=$a13as+$a13bs+$a13cs;
$p13=($tot13*100)/$out13;
$p13 = round($p13, 2);

$out14=($a14a['14a']+$a14b['14b']+$a14c['14c']+$a14d['14d'])*5; 
$tot14=$a14as+$a14bs+$a14cs+$a14ds;
$p14=($tot14*100)/$out14;
$p14 = round($p4, 2);

$namet=mysql_query("SELECT * FROM  `teacher` WHERE idt =".$idt);
$name=mysql_fetch_array($namet);
$classt=mysql_query("SELECT * FROM  `teacher` WHERE idt =".$idt);
$class=mysql_fetch_array($classt);
$yeart=mysql_query("SELECT * FROM  `teacher` WHERE idt =".$idt);
$year=mysql_fetch_array($yeart);
$st=mysql_query("SELECT * FROM  `teacher` WHERE idt =".$idt);
$subject=mysql_fetch_array($st);

$ts=$a1a['1a']+$a1b['1b']+$a1c['1c'];
echo "<h3><center>STUDENT FEEDBACK EVALUATION SHEET </h3>";
//echo "<b><i>name of the faculty   :   </i></b>".$name['Name']."<b><i>      No. of students :  </i></b>".$ts."<br>";
//echo "<b><i>class  :   </i></b>".$class['dept']."<b><i>     year :  </i></b>".$year['class']."<b><i>subject :</b></i>".$subject['sub']."<br>";

$ts=$a1a['1a']+$a1b['1b']+$a1c['1c'];

echo '<h3>No. of student has Given the feedback :<font color=#FF0000> '.$ts.'</font></h3>';

//TABLE..... 	
echo '<table border="1" width="555" height="345" cellspacing="0">';
echo'</th><th>SrNo.</th><th>Qno.</th><th>A Nos.</th><th>A Multiplied BY</th><th>A Sub. Total</th><th>B Nos</th><th>B Multiplied By</th><th>B Sub Total</th><th>C Nos.</th><th>C Multiplied By.</th><th>C Sub Total</th><th>D Nos.</th><th>D Multiplied By</th><th>D Sub Total</th><th>Out Of</th><th>Total</th><th>%</th>';
echo '<tr><td>1</td><td>1</td><td>'.$a1a['1a'].'</td><td>6</td><td>'.$a1as.'</td><td>'.$a1b['1b'].'</td><td>3</td><td>'.$a1bs.'</td><td>'.$a1c['1c'].'</td><td>1</td><td>'.$a1cs.'</td><td></td><td></td><td></td><td>'.$out1.'</td><td>'.$tot1.'</td><td>'.$p1.'</td></tr>';
echo '<tr><td>2</td><td>2</td><td>'.$a2a['2a'].'</td><td>6</td><td>'.$a2as.'</td><td>'.$a2b['2b'].'</td><td>3</td><td>'.$a2bs.'</td><td>'.$a2b['2c'].'</td><td>1</td><td>'.$a2cs.'</td><td></td><td></td><td></td><td>'.$out2.'</td><td>'.$tot2.'</td><td>'.$p2.'</td></tr>';
echo '<tr><td>3</td><td>3</td><td>'.$a3a['3a'].'</td><td>6</td><td>'.$a3as.'</td><td>'.$a3b['3b'].'</td><td>3</td><td>'.$a3bs.'</td><td>'.$a3b['3c'].'</td><td>1</td><td>'.$a3cs.'</td><td></td><td></td><td></td><td>'.$out3.'</td><td>'.$tot3.'</td><td>'.$p3.'</td></tr>';
echo '<tr><td>4</td><td>4</td><td>'.$a4a['4a'].'</td><td>6</td><td>'.$a4as.'</td><td>'.$a4b['4b'].'</td><td>3</td><td>'.$a4bs.'</td><td>'.$a4b['4c'].'</td><td>1</td><td>'.$a4cs.'</td><td></td><td></td><td></td><td>'.$out4.'</td><td>'.$tot4.'</td><td>'.$p4.'</td></tr>';
echo '<tr><td>5</td><td>5</td><td>'.$a5a['5a'].'</td><td>6</td><td>'.$a5as.'</td><td>'.$a5b['5b'].'</td><td>3</td><td>'.$a5bs.'</td><td>'.$a5b['5c'].'</td><td>1</td><td>'.$a5cs.'</td><td></td><td></td><td></td><td>'.$out5.'</td><td>'.$tot5.'</td><td>'.$p5.'</td></tr>';
echo '<tr><td>6</td><td>6</td><td>'.$a6a['6a'].'</td><td>6</td><td>'.$a6as.'</td><td>'.$a6b['6b'].'</td><td>3</td><td>'.$a6bs.'</td><td>'.$a6b['6c'].'</td><td>1</td><td>'.$a6cs.'</td><td></td><td></td><td></td><td>'.$out6.'</td><td>'.$tot6.'</td><td>'.$p6.'</td></tr>';
echo '<tr><td>7</td><td>7</td><td>'.$a7a['7a'].'</td><td>6</td><td>'.$a7as.'</td><td>'.$a7b['7b'].'</td><td>3</td><td>'.$a7bs.'</td><td>'.$a7b['7c'].'</td><td>1</td><td>'.$a7cs.'</td><td></td><td></td><td></td><td>'.$out7.'</td><td>'.$tot7.'</td><td>'.$p7.'</td></tr>';
echo '<tr><td>8</td><td>8</td><td>'.$a8a['8a'].'</td><td>6</td><td>'.$a8as.'</td><td>'.$a8b['8b'].'</td><td>3</td><td>'.$a8bs.'</td><td>'.$a8b['8c'].'</td><td>1</td><td>'.$a8cs.'</td><td></td><td></td><td></td><td>'.$out8.'</td><td>'.$tot8.'</td><td>'.$p8.'</td></tr>';
echo '<tr><td>9</td><td>9</td><td>'.$a9a['9a'].'</td><td>6</td><td>'.$a9as.'</td><td>'.$a9b['9b'].'</td><td>3</td><td>'.$a9bs.'</td><td>'.$a9b['9c'].'</td><td>1</td><td>'.$a9cs.'</td><td></td><td></td><td></td><td>'.$out9.'</td><td>'.$tot9.'</td><td>'.$p9.'</td></tr>';
echo '<tr><td>10</td><td>10</td><td>'.$a10a['10a'].'</td><td>6</td><td>'.$a10as.'</td><td>'.$a10b['10b'].'</td><td>3</td><td>'.$a10bs.'</td><td>'.$a10c['10c'].'</td><td>1</td><td>'.$a10cs.'</td><td></td><td></td><td></td><td>'.$out10.'</td><td>'.$tot10.'</td><td>'.$p10.'</td></tr>';
echo '<tr><td>11</td><td>11</td><td>'.$a11a['11a'].'</td><td>6</td><td>'.$a11as.'</td><td>'.$a11b['11b'].'</td><td>3</td><td>'.$a11bs.'</td><td>'.$a11c['11c'].'</td><td>1</td><td>'.$a11cs.'</td><td></td><td></td><td></td><td>'.$out11.'</td><td>'.$tot11.'</td><td>'.$p11.'</td></tr>';
echo '<tr><td>12</td><td>12</td><td>'.$a12a['12a'].'</td><td>6</td><td>'.$a12as.'</td><td>'.$a12b['12b'].'</td><td>3</td><td>'.$a12bs.'</td><td>'.$a12c['12c'].'</td><td>1</td><td>'.$a12cs.'</td><td></td><td></td><td></td><td>'.$out12.'</td><td>'.$tot12.'</td><td>'.$p12.'</td></tr>';
echo '<tr><td>13</td><td>13</td><td>'.$a13a['13a'].'</td><td>6</td><td>'.$a13as.'</td><td>'.$a13b['13b'].'</td><td>3</td><td>'.$a13bs.'</td><td>'.$a13c['13c'].'</td><td>0</td><td>'.$a13cs.'</td><td></td><td></td><td></td><td>'.$out13.'</td><td>'.$tot13.'</td><td>'.$p13.'</td></tr>';
echo '<tr><td>14</td><td>14</td><td>'.$a14a['14a'].'</td><td>0</td><td>'.$a14as.'</td><td>'.$a14b['14b'].'</td><td>3</td><td>'.$a14bs.'</td><td>'.$a14c['14c'].'</td><td>5</td><td>'.$a14cs.'</td><td>'.$a14d['14d'].'</td><td>2</td><td>'.$a14ds.'</td><td>'.$out14.'</td><td>'.$tot14.'</td><td>'.$p14.'</td></tr>';
$out=$out1+$out2+$out3+$out4+$out5+$out6+$out7+$out8+$out9+$out10+$out11+$out12+$out13+$out14;
$tot= $tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10+$tot11+$tot12+$tot13+$tot14;
$per=$tot/$out;
$per = round($per, 2);
$per10= $tot*10/$out;
$per10 = round($per10, 2);
echo '<tr><td>15</td><td>TOTAL</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>'.$out.'</td><td>'.$tot.'</td><td></td></tr>';
echo '<tr><td></td><td>Percentile</td><td></td><td></td><td></td><td>'.$per.'</td></tr>';
echo '<tr><td></td><td>on SCALE 10</td><td></td><td></td><td></td><td>'.$per10.'</td></tr>';
echo '</table>';
if ($per10>8)
echo "<h3> the grade of the teacher is <font color='#33CC00'>excellent</font></h3>";
if ($per10>6 && $per10<8)
echo "<h3> the grade of the teacher is<font color='#33CCCC'> good</font></h3>";
if ($per10>4 && $per10<6)
echo "<h3> the grade of the teacher is<font color='#DEE309'> satisfactory</font></h3>";
if($per10>2 && $per10<4)
echo "<h3> the grade of the teacher is <font color='#FF9900'>un-satisfactory</font></h3>";
if ($per10<2)
echo "<h3> the grade of the teacher is <font color='#FF0000'>poor</font></h3>";
//table 2

echo'<font color="red">';
//echo'<h3><font color="blue">************COMMENTS*************</font></h3>';
//$com= mysql_query("SELECT * FROM  `main` WHERE idt =".$idt);
//$nts=mysql_fetch_array($com);

//$res = $nts['comments'];
//echo $res;
//print $res;

/*
$i=0;
do
{
$ch = $res[$i];
echo $ch;
if(ch == ',')
  {echo '<br>';}
$i = $i + 1;
}
while(ch != '\0');

*/







mysql_close($con);
?> 