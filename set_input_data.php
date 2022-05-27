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
$area = clean($_POST['area']);
$destruction_level = clean($_POST['destruction_level']);
$p_died = clean($_POST['p_died']);
$amount_d = clean($_POST['amount_d']);
$p_injur = clean($_POST['p_injur']);
$amount_i = clean($_POST['amount_i']);
$l_asset = clean($_POST['l_asset']);
$amount_a = clean($_POST['amount_a']);
$date = clean($_POST['date']);
$n_org = clean($_POST['n_org']);

mysql_query("INSERT INTO aff_area (area, destruction_level, p_died,amount_d, p_injur,amount_i,l_asset,amount_a,date,n_org)
VALUES ('$area','$destruction_level','$p_died','$amount_d','$p_injur','$amount_i','$l_asset','$amount_a','$date','$n_org')");
header("location: input_data.php");
?>