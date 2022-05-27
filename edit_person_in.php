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
$city_org = clean($_POST['city_org']);
$post_code = clean($_POST['post_code']);
$birth_date = clean($_POST['birth_date']);
$status = clean($_POST['status']);
$gender = clean($_POST['gender']);
$phone=clean($_POST['phone']);

mysql_query("UPDATE person_info SET phone='$phone',username='$username', password='$password', name='$name', city_org='$city_org', post_code='$post_code', birth_date='$birth_date', status='$status', gender='$gender' WHERE id='$id'");
mysql_query("UPDATE person_info SET password='$password' WHERE username='$username'");
header("location: personal_log.php");
?>