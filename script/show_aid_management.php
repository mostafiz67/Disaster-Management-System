<?php
include('connect.php');
error_reporting(0);
if($_GET['act']=='del')
{
$cid=$_GET['id'];
$sql=mysql_query("UPDATE aid SET vis='1' WHERE id='$cid'");

}

?>
<html>
<head>
<title>DMS</title>
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<!--sa poip up-->
<link href="css/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="css/lib/jquery.js" type="text/javascript"></script>
  <script src="css/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="css/js/application.js" type="text/javascript" charset="utf-8"></script>
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
<table cellpadding="1" cellspacing="1" id="resultTable">
											<tr>
												<th style="border-left: 1px solid #C1DAD7">Receive Message Date</th>
												<th>Message</th>
												<th>Action</th>
												</tr>
												<?php
													include('connect.php');
													$result = mysql_query("SELECT * FROM aid WHERE position='admin'AND vis=0");
															while($row = mysql_fetch_array($result))
															{
																
																echo '<tr>';
																echo '<td style="border-left: 1px solid #C1DAD7">'.$row['date'].'</td>';
																echo '<td><div align="left">'.$row['message'].'</div></td>';
																echo '<td><div align="center"><a href="show_aid_management.php?act=del&id='.$row['id'].'"   title="Click To Delete">Archive</a></div></td>';
																echo '</tr>';
															}
												?>
		</table>
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
