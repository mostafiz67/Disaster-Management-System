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
	<h2>Please give the actual data of affected area</h2>
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
		<form action="set_input_data.php" method="post">
		Today Date:<br>
		<input name="date" type="text"  size="25" class="ed"/>		[yyyy-mm-dd]<br><br>
		Name Of Your Organization:<br>
		<input name="n_org" type="text"  size="30" class="ed"/><br><br>
		Name of affected area:<br>
		<select name="area" class="ed">
		<?php
		include('connect.php');
		$results = mysql_query("SELECT * FROM area ORDER BY area_name");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option>'.$rows['area_name'].'</option>';
			}
		?>
		</select><br><br>
		Destruction Level:<br>
		<select name="destruction_level" class="ed">
		<option>High</option>
		<option>Medium</option>
		<option>Low</option>
		</select><br><br>
		People Died:<br>
		<input name="p_died" type="text"  size="10" class="ed"/>
		<select name="amount_d" class="ed">
		<option>People</option>
		<option>Hundred</option>
		<option>Thousand</option>
		<option>Million</option>
		<option>Billion</option>
		</select><br><br>
		People Injured:<br>
		<input name="p_injur" type="text"  size="10" class="ed"/>
		<select name="amount_i" class="ed">
		<option>People</option>
		<option>Hundred</option>
		<option>Thousand</option>
		<option>Million</option>
		<option>Billion</option>
		</select><br><br>
		Lost Of Asset: <br>
		<input name="l_asset" type="text"  size="10" class="ed"/>
		<select name="amount_a" class="ed">
		<option>Hundred</option>
		<option>Thousand</option>
		<option>Million</option>
		<option>Billion</option>
		</select><br><br>

		<input type="submit" value="Submit" id="button1">
		</form>
	</div>
</div>
<div id="footer" align="center">
			<h4>copyright @ mostafiz67.cu.cse@gmail.com<br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com
			</h4>
		</div>
</body>
</html>
