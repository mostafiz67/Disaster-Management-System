<?php
include('connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$id = clean($_POST['id']);
$username = clean($_POST['username']);
$password = clean($_POST['password']);
$name = clean($_POST['name']);
$present_address=$row['present_address'];
$post_code = clean($_POST['post_code']);
$dob = clean($_POST['dob']);
$permanent_address=$row['permanent_address'];
$gender = clean($_POST['gender']);
$phone=clean($_POST['phone']);

mysql_query("UPDATE admin SET phone='$phone',username='$username', password='$password', name='$name', present_address='$present_address', post_code='$post_code', dob='$dob', permanent_address='$permanent_address', gender='$gender' WHERE id='$id'");
mysql_query("UPDATE admin SET password='$password' WHERE username='$username'");
header("location: admin_loginform2.php");
?>