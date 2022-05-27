<?php
session_start();
require_once('connect.php');
$name = $_POST['name'];

	$query="INSERT INTO area (area_name)
						VALUES ('$name')";
	$result=mysql_query($query);
	if($result)
	{
		$_SESSION['area_entry_msg'] = "Successfully saved a new area.";
		header("Location: area.php");
		exit;
	}

		$_SESSION['subject_entry_msg'] = "Failed to create a new area.";
		header("Location: area.php");
		exit;

?>