<?php

include('connect.php');
if($_GET['id'])
{
	$id=$_GET['id'];
	$sql = "delete from aff_area where id='$id'";
	mysql_query( $sql);
}

?>