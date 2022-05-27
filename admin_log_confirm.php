<?php
error_reporting(0);
include('connect.php');


  $username=$_POST['username'];

  $password=$_POST['password'];


if(empty($username) or empty($password))
   
   {
    $u=FALSE;  $p=FALSE;
	include("admin_loginform2.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }
	 
	
else if(empty($password) and empty($username))
   {
     $u=FALSE; $p=FALSE;
	include("admin_loginform2.php");
	echo'<font color="red">Try again,User Name and Password not matched !</font>';
    }	
else
	{
		  $u=$username;
		  $p=$password;
    }	 
  
  
if($u && $p)
{
  
  $s1="select * from admin  where username='$u' and password='$p'";
  
  $r=mysql_query($s1);

  $result=mysql_fetch_object($r);
  
  if($result->username==$u and $result->password==$p)
      {
	  include("admin_view.php");
      }
	else 
     {
	  	  include("admin_loginform2.php");
		  echo'<font color="red">Try again,User Name and Password not matched !</font>';
	 }               
}

?> 

