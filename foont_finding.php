<?php
error_reporting(0);
//require_once('auth.php');
include('connect.php');
/*$id=$_SESSION['SESS_MEMBER_ID'];
echo "$id";

if(isset($_POST['position'])=='success'):
$sqli="update missing_person_info set found=0";
mysql_query($sqli);
echo "Successfuly Found";
endif;*/
$pos=$_POST['position'];
$usr=$_POST['usr'];
$sql=mysql_query("Update missing_person_info set found='$pos' WHERE username='$usr'");

include('found.php')
?>