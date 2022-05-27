
<?php

include('connect.php');


  $username=$_POST['username'];
  //print($id);
  $password=$_POST['password'];
  //print($password);

if(empty($username) or empty($password))
   
   {
    $u=FALSE;  $p=FALSE;
	include("personal_log.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }
	 
	
else if(empty($password) and empty($username))
   {
     $u=FALSE; $p=FALSE;
	include("personal_log.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }	
else
	{
		  $u=$username;
		  $p=$password;
    }	 
  
  
if($u && $p)
{
  
  $s1="select * from person_info  where username='$u' and password='$p'";
  
  $r=mysql_query($s1);

  $result=mysql_fetch_object($r);
  
  if($result->username==$u and $result->password==$p)
      {
	  include("picture_view.php");
      }
	else 
     {
	  	  include("personal_log.php");
		  echo'<font color="red">Try again,User Name and Password not matched !</font>';
	 }               
}

?> 

