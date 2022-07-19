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
<?php
$usr=$_GET['usr'];
?>
<div id="main">
	<div id="header"><h1>Personal Information Of Finding Person</h1></div>
	<div class="menu">
        <ul>
			 <li><a href="found_f.php">Found</a></li>
			<li><a href="home.php">Logout</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
		<form action="found_finding.php" method="post">
		Position<br>
		<input name="usr" type="text" value="<?php echo $usr;?>" hidden>
		<select name="position" class="ed">
			<option value="1">Found</option>
			<option value="0">Not Found</option>
		</select><br><br>
		<input type="submit" value="Submit" id="button1">
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
