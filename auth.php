<?php
					
session_start();
	include('random.php');				
function eval_user($pass, $name, $grp) 
{

   $sql = "select *  from login where username='$name'";
   $result=mysql_query($sql);
   
if (!$result) {
    header('location:~index.php');
}

if (mysql_num_rows($result) == 0) {
    header('location:~index.php');
    
}

    $row = mysql_fetch_assoc($result); 
    {
       if(!(strcmp($row['passwd'],$pass)) && ($row['group'] == $grp)) 

         {   
		 
		        
                $_SESSION['uname']=$name;
		        if($grp == 2)
				{
				
				   $_SESSION['dept']= $row['dept'];
				   $_SESSION['div']= $row['divi'];
				   $_SESSION['class']= $row['class'];
				   $_SESSION['sem'] = $_POST['sem'];
				   $_SESSION['yr'] = $_POST['yr'];
				   $_SESSION['count']= $row['staff'];
				   $aj = str_makerand (27, 28, "A", "@", 9 );
				   $_POST['$aj']; 
				header('location:feedback.php?authentication=df6g54365g4u984z21l12m654lk654nmuy54xx5gh54545rdtu5f1cf874i');
				}
				if($grp == 1)
				{
				
				   $_SESSION['dept']= $row['dept'];
				  // $_SESSION['div']= $row['divi'];
				   //$_SESSION['class']= $row['class'];
				   $_SESSION['sem'] = $_POST['sem'];
				   $_SESSION['yr'] = $_POST['yr'];
				header("location:admin.php?authentication=rty6t874s6df21hsr3t84s6f12th3fsdu6rt0bd4ty3jyurt54u54jf21j35f4g");
				}
         } 
       else 
         {header('location:~index.php');
         }
    }
   
      
   
}
mysql_pconnect("localhost","aj","aj");
mysql_select_db("feedback");
eval_user($_POST['pass'],$_POST['user'],$_POST['group']);



?>