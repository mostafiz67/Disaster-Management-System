<html>
<head>
<title>DMS</title>
<link rel="stylesheet" href="message/css/main.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
</head>
<body>
<div id="main">
	<div id="header"><h1>Admin's Dashboard : Welcome to Admin Page</h1></div>
	<div class="menu">
        <ul>
			<li><a href="active_org_aut.php">Add Author</a></li>
			<li><a href="request.php">Request Author</a></li>
			<li><a href="area.php">Add Affected Area</a></li>
			<li><a href="show_affected_area.php">Show Affected Area</a></li>
			<li><a href="sent_message.php">Sent Message</a></li>
			<li><a href="show_message_from_org.php">Show Message</a></li>
			<li><a href="show_aid_management.php">Aid Management</a></li>
			<li><a href="home.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<form action="active_org_aut.php" method="post">
		<h3>Please insert the Organization Author id that you want to activate</h3>  </br><br> 
				<h4>Author Id : <input name="id" type="text" id="id" value='' size="25" class="ed"/></h4> </br>
				<p>
					<input type ='submit' size="35" name='submit' value='Activate' id='button1'>
				</p>
		</form>
	</div>
	<div id="footer"></div>
</div>
<div id="footer" align="center">
			<h4>copyright @ mostafiz67.cu.cse@gmail.com<br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com
			</h4>
		</div>
</body>
</html>
<?php
include('connect.php');

if(isset($_POST['id'])):
$sqli="update org_aut_info set active=1 where id='".$_POST['id']."'";
mysql_query($sqli);
echo "Successfuly Active";
endif;
?>
