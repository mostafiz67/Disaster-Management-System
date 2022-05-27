
<?php

include('connect.php');


  $username=$_POST['username'];
  //print($id);
  $password=$_POST['password'];
  //print($password);

if(empty($username) or empty($password))
   
   {
    $u=FALSE;  $p=FALSE;
	include("message1.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }
	 
	
else if(empty($password) and empty($username))
   {
     $u=FALSE; $p=FALSE;
	include("message1.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }	
else
	{
		  $u=$username;
		  $p=$password;
    }	 
  
  
if($u && $p)
{
  
  $s1="select * from org_aut_info  where username='$u' and password='$p'";
  //print($s1);
    
  $r=mysql_query($s1);

  $result=mysql_fetch_object($r);
  //print($result->Id);
  //print($result->Password);
  
  if($result->username==$u and $result->password==$p)
      {
	  include("organization_auther_view.php");
      //echo "<a href=administrator.php>Administrator</a>";
      }
	else 
     {
	  	  include("message1.php");
	 }               
}

?> 

