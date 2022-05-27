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
<div id="main">
	<div id="header"><h1>Organization Author's Dashboard : Welcome to this Page</h1><br>
	<h2>Messages from Admin...</h2>
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
		<table cellpadding="1" cellspacing="1" id="resultTable">
											<tr>
												<th style="border-left: 1px solid #C1DAD7">Message From Admin</th>
												</tr>
												<?php
													include('connect.php');
													$result = mysql_query("SELECT * FROM notification WHERE position='org_aut'");
															while($row = mysql_fetch_array($result))
															{
																
																echo '<tr>';
																echo '<td style="border-left: 1px solid #C1DAD7">'.$row['message'].'</td>';
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
