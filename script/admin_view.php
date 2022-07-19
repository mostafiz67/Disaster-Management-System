<html>
<head>
<title>DMS</title>
<link rel="stylesheet" href="profile/css/main.css" type="text/css" media="screen" />
<!--sa poip up-->
<link href="profile/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="profile/lib/jquery.js" type="text/javascript"></script>
  <script src="profile/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'profile/src/loading.gif',
        closeImage   : 'profile/src/closelabel.png'
      })
    })
  </script>
<link rel="stylesheet" href="profile/febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<link rel="stylesheet" href="profile/febe/style.css" type="text/css" media="screen" charset="utf-8">
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
				<th style="border-left: 1px solid #C1DAD7">Object</th>
				<th style="border-left: 1px solid #C1DAD7">Description</th>
			</tr>
			
			<?php
			session_start();
			include('connect.php');
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "SELECT admin.id,admin.dob,admin.name,admin.post_code,admin.gender, admin.password,admin.phone,admin.present_address,admin.permanent_address,admin.national_id,admin.username
			FROM admin 
			WHERE  admin.username = '$username' AND admin.password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$temp_row = mysql_fetch_array($result);
			mysql_data_seek($result, 0);
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td>'. 'Name Of Admin:' . '</td>';
							echo '<td>'. $row['name'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Username:' . '</td>';
							echo '<td>'. $row['username'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Password:' . '</td>';
							echo '<td>'. $row['password'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Post Code:' . '</td>';
							echo '<td>'. $row['post_code'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Phone:' . '</td>';
							echo '<td>'. $row['phone'] . '</td>';
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
							echo '<td>'. 'Gender:' . '</td>';
							echo '<td>'. $row['gender'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Date Of Birth:' . '</td>';
							echo '<td>'. $row['dob'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'National ID:' . '</td>';
							echo '<td>'. $row['national_id'] . '</td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>'. 'Action :' . '</td>';
							echo '<td><div align="center"><a rel="facebox" href="admin_edit_profile.php?id='.$row['id'].'" title="Click To View Orders">Edit Profile</a></div></td>';
							echo'</tr>';
						}
			?>

		</table>
	</div>
</div>
<div id="footer" align="center">
			<h5>copyright @ mostafiz67.cu.cse@gmail.com<br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com
			</h5>
		</div>
</body>
</html>

