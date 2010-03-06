<?php
session_start();
$dbhost = 'localhost:3306';
$dbuser = 'aj';
$dbpass = 'aj';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname);
			
			  $selected_radio1 = $_POST['1'];
			  $selected_radio2 = $_POST['2'];
			  $selected_radio3 = $_POST['3'];
			  $selected_radio4 = $_POST['4'];
			  $selected_radio5 = $_POST['5'];
			  $selected_radio6 = $_POST['6'];
			  $selected_radio7 = $_POST['7'];
			  $selected_radio8 = $_POST['8'];
			  $selected_radio9 = $_POST['9'];
			  $selected_radio10 = $_POST['10'];
			  $selected_radio11 = $_POST['11'];
			  $selected_radio12 = $_POST['12'];
			  $selected_radio13 = $_POST['13'];
			  $selected_radio14 = $_POST['14'];
			  
			  
			  $temp=$_POST['teacher'];
			  
			  
			  //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q1
			  //////////////////////////////////////////////////////////////////////
			  $result = mysql_query("SELECT * from main where idt=$temp"); 
		      $row = mysql_fetch_array($result);
			  if(!$row)
			  {
			  mysql_query("INSERT INTO `feedback`.`main` (`SNo`, `QNo`, `Nos`, `1a`, `1b`, `1c`, `2a`, `2b`, `2c`, `3a`, `3b`, `3c`, `4a`, `4b`, `4c`, `5a`, `5b`, `5c`, `6a`, `6b`, `6c`, `7a`, `7b`, `7c`, `8a`, `8b`, `8c`, `9a`, `9b`, `9c`, `10a`, `10b`, `10c`, `11a`, `11b`, `11c`, `12a`, `12b`, `12c`, `13a`, `13b`, `13c`, `14a`, `14b`, `14c`, `comments`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`, `sub12`, `sub13`, `sub14`, `%1`, `%2`, `%3`, `%4`, `%5`, `%6`, `%7`, `%8`, `%9`, `%10`, `%11`, `%12`, `%13`, `%14`, `percentile`, `idt`) VALUES ('4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$temp');");
			  }
			   if($selected_radio1=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt=$temp"); 
				   $row = mysql_fetch_array($result);
				   $count = $row["1a"];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `1a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio1=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[4];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `1b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio1=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[5];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `1c` = '$count' where idt=$temp");
				   }
				   
			       
				          
			  //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q2
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio2=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[6];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `2a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio2=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[7];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `2b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio2=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[8];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `2c` = '$count' where idt=$temp");
				   }
				   
				   
			  //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q3
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio3=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[9];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `3a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio3=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[10];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `3b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio3=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[11];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `3c` = '$count' where idt=$temp");
				   }
				   
			              
			  //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q4
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio4=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[12];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `4a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio4=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[13];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `4b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio4=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[14];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `4c` = '$count' where idt=$temp");
				   }
				   
			                     
				    //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q5
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio5=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[15];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `5a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio5=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[16];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `5b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio5=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[17];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `5c` = '$count' where idt=$temp");
				   }
				   
			                     
			          //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q6
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio6=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[18];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `6a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio6=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[19];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `6b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio6=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[20];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `6c` = '$count' where idt=$temp");
				   }
				   
			                     
			      //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q7
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio7=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[21];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `7a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio7=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[22];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `7b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio7=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[23];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `7c` = '$count' where idt=$temp");
				   }
				   
			                     
			                      
			                      //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q8
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio8=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[24];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `8a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio8=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[25];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `8b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio8=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[26];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `8c` = '$count' where idt=$temp");
				   }
				   
			                     
			   //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q9
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio9=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[27];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `9a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio9=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[28];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `9b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio9=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[29];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `9c` = '$count' where idt=$temp");
				   }
				   
			                     
			           //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q10
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio10=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[30];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `10a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio10=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[31];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `10b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio10=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[32];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `10c` = '$count' where idt=$temp");
				   }
				   
			       //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q11
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio11=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[33];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `11a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio11=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[34];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `11b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio11=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[35];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `11c` = '$count' where idt=$temp");
				   }
				   
			                     
			         //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q12
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio12=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[36];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `12a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio12=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[37];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `12b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio12=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[38];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `12c` = '$count' where idt=$temp");
				   }
				   
			                     
			        //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q13
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio13=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[39];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `13a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio13=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[40];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `13b` = '$count' where idt=$temp");
				   }
				   
				   
			         //////////////////////////////////////////////////////////////////////
			  //              Updating count of Q14
			  //////////////////////////////////////////////////////////////////////
			  
			  
			   if($selected_radio14=='a')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[42];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `14a` = '$count' where idt=$temp");
				   }
				   else if($selected_radio14=='b')
			       {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[43];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `14b` = '$count' where idt=$temp");
				   }
				   else if($selected_radio14=='c')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[44];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `14c` = '$count' where idt=$temp");
				   }
                                                                                   else if($selected_radio14=='d')
				   {
				   $result = mysql_query("SELECT * from main where idt='$temp'"); 
				   $row = mysql_fetch_array($result);
				   $count = $row[45];
				   $count = $count + 1;
				    mysql_query("UPDATE `feedback`.`main` SET `14d` = '$count' where idt=$temp");
				   }
				   
			                     
			         
					                       $result = mysql_query("SELECT * from main where idt='$temp'"); 
				                           $row = mysql_fetch_array($result);
										   $count = $row["comments"];
										   $comm = $_POST['sugg'];
                                           $count = $count.$comm."<br><br>";  
										   mysql_query("UPDATE `feedback`.`main` SET `comments` = '$count' where idt=$temp");	 
              
			                     		                                   
              
              header('location:feedback.php?authentication=df6g54365g4u984z21l12m654lk654nmuy54xx5gh54545rdtu5f1cf874i');
		
			
			?>