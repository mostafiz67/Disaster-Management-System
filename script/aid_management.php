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
	<div id="header"><h1>Please Give Some Aid For Affected Area And Affected People</h1>
					 <h3>Using our Account Number please send your economy help.</h3>
					 <h3>Account Number : XXXXXXXXX</h3>
					 <h3>After sending economy please send message ADMIN about amount & if you want to sent any kind of help...</h3>
					 <h3>In your message don't forget to give us your E-mail.</h3>
	</div>
	<div class="menu">
        <ul>
			<li><a href="home.php">Home</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<form action="sent_message_economy_admin.php" method="post">
		Today Date:<br>
		<input name="date" type="text"  size="25" class="ed"/>		[yyyy-mm-dd]<br>
		Position<br>
		<select name="position" class="ed">
			<option value="admin">Admin</option>
		</select><br>
		Message<br>
		<textarea name="message" class="ed">
		</textarea><br>
		<input type="submit" value="Sent" id="button1">
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
