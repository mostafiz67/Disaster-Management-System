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
$position = clean($_POST['position']);
$message = clean($_POST['message']);
$date = clean($_POST['date']);
$n_org = clean($_POST['n_org']);

mysql_query("INSERT INTO notification (position, message,date,n_org)
VALUES ('$position','$message','$date','$n_org')");
header("location: sent_message_to_admin.php");
?>