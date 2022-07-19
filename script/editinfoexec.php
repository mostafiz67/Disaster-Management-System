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
	$phone=$row['phone'];
	$password=$row['password'];
	$name=$row['name'];
	$username=$row['username'];
	$post_code=$row['post_code'];
	//$birth_date=$row['birth_date'];
	$situation=$row['situation'];
	$gender=$row['gender'];
	$present_address=$row['present_address'];
	$permanent_address=$row['permanent_address'];

mysql_query("UPDATE missing_person_info SET phone='$phone', password='$password', name='$name', username='$username', post_code='$post_code', situation='$situation', gender='$gender', present_address='$present_address',  permanent_address='$permanent_address' WHERE id='$id'");
mysql_query("UPDATE user SET password='$password' WHERE username='$username'");
header("location: missing_person_log.php");
?>