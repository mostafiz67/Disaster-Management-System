<!DOCTYPE html>
<head>
<style>
div.header
{

}

div.left
{
float:center;
border:0px solid gray;;
width:55%;
}

div.right
{
float:left;
border:0px solid gray;;
width:40%;

}

div.footer
{
float:left;
border:0px solid gray;
width:50%;
}
</style>
</head>

<body>
<?php
session_start();
require_once('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT person_info.name, person_info.fax, person_info.password, person_info.birth_date,  person_info.email, person_info.phone, person_info.status,person_info.present_address,person_info.permanent_address,person_info.national_id,person_info.username
FROM person_info 
WHERE  person_info.username = '$username' AND person_info.password = '$password'";

$result = mysql_query($query) or die(mysql_error());
$temp_row = mysql_fetch_array($result);
mysql_data_seek($result, 0);

?>
<div class="header">

<h1 align="center"> Your Personal Information </h1>
<p align="center" >Your name: <b>

<?php 
echo $temp_row['name']; 
?> </b><br/>

National_ID: 
<?php 
echo $temp_row['national_id']; 
?><br/>

</div>
<hr>

<div class="left" align="center">

<?php
echo "<table border='1' width='auto'>";
while($row = mysql_fetch_assoc($result)) 
	{
		// set student id from database, into a global variable to use outside while loop
		echo '<tr>';
		echo '<td>'. 'Username:' . '</td>';
		echo '<td>'. $row['username'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'Password:' . '</td>';
		echo '<td>'. $row['password'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'Phone:' . '</td>';
		echo '<td>'. $row['phone'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'fax:' . '</td>';
		echo '<td>'. $row['fax'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'Present_address:' . '</td>';
		echo '<td>'. $row['present_address'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'Permanent_address:' . '</td>';
		echo '<td>'. $row['permanent_address'] . '</td>';
		echo'</tr>';
		echo '<tr>';
		echo '<td>'. 'Email:' . '</td>';
		echo '<td>'. $row['email'] . '</td>';
		echo'</tr>';
		echo '<td>'. 'Status:' . '</td>';
		echo '<td>'. $row['status'] . '</td>';
		echo'</tr>';

		}
	echo'</table>';
?>

</div>
</p>

<div class="footer">
</div>
</body>
</html>