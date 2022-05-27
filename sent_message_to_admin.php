<?php
	require_once('connect.php');
?>
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
	<div id="header"><h1>Organization Author's Dashboard : Welcome to this Page</h1><br>
	<h2>Sent Message To The Admin.....</h2>
	</div>
	<div class="menu">
        <ul>
			<li><a href="org_message_show.php">Message Show</a></li>
			<li><a href="input_data.php">Input Data</a></li>
			<li><a href="sent_message_to_admin.php">Sent Message</a></li>
			<li><a href="home.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<form action="sent_message_exec_to_admin.php" method="post">
		Today Date:<br>
		<input name="date" type="text"  size="25" class="ed"/>		[yyyy-mm-dd]<br><br>
		Name Of Your Organization:<br>
		<input name="n_org" type="text"  size="30" class="ed"/><br><br>
		Position<br>
		<select name="position" class="ed">
			<option value="admin">Admin</option>
		</select><br><br>
		Message<br>
		<textarea name="message" class="ed">
		</textarea><br>
		<input type="submit" value="Post" id="button1">
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
