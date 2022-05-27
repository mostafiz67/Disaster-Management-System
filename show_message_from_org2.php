<html>
<head>
<title>DMS</title>
<link rel="stylesheet" href="message/css/main.css" type="text/css" media="screen" />
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
	<ul>
	<?php
	include('connect.php');
	$result = mysql_query("SELECT * FROM notification WHERE position='admin'");
			while($row = mysql_fetch_array($result))
				{
					echo 'Receive Message Date';
					echo '<li>'.$row['date'].'</li>';
					echo 'Name Of Organization';
					echo '<li>'.$row['n_org'].'</li>';
					echo 'Message';
					echo '<li>'.$row['message'].'</li>';
					echo '<br><br>';
				}
	?>
	<div class="clearfix"></div>
	</ul>
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
