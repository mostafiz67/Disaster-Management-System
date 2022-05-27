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
$post_code = clean($_POST['post_code']);
$phone=clean($_POST['phone']);
$situation=clean($_POST['situation']);
$gender=clean($_POST['gender']);
$present_address=clean($_POST['present_address']);
$permanent_address=clean($_POST['permanent_address']);

mysql_query("UPDATE missing_person_info SET phone='$phone',username='$username', password='$password', name='$name', permanent_address='$permanent_address', post_code='$post_code', present_address='$present_address', situation='$situation', gender='$gender' WHERE id='$id'");
mysql_query("UPDATE missing_person_info SET password='$password' WHERE username='$username'");
header("location: missing_person_log.php");
?>