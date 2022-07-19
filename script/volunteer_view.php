
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
		//firstname
        closeImage   : 'profile/src/closelabel.png'
      })
    })
  </script>
<link rel="stylesheet" href="profile/febe/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
<div id="main">
	<div id="header"><h1>Your Personal Information</h1></div>
	<div class="menu">
        <ul>
            <li><a href="volunteer_message_show.php">Message</a></li>
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

			$query = "SELECT volunteer_info.id,volunteer_info.post_code,volunteer_info.city,volunteer_info.name,volunteer_info.gender, volunteer_info.fax, volunteer_info.password, volunteer_info.birth_date,  volunteer_info.email,volunteer_info.phone, volunteer_info.status,volunteer_info.present_address,volunteer_info.permanent_address,volunteer_info.national_id,volunteer_info.username,volunteer_info.phi_carrier,volunteer_info.policy_number,volunteer_info.img
			FROM volunteer_info 
			WHERE  volunteer_info.username = '$username' AND volunteer_info.password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$temp_row = mysql_fetch_array($result);
			mysql_data_seek($result, 0);
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td>'. 'Name:' . '</td>';
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
							echo '<td>'. 'Date Of Birth:' . '</td>';
							echo '<td>'. $row['birth_date'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'City:' . '</td>';
							echo '<td>'. $row['city'] . '</td>';
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
							echo '<tr>';
							echo '<td>'. 'Gender:' . '</td>';
							echo '<td>'. $row['gender'] . '</td>';
							echo'</tr>';
							echo '<td>'. 'Status:' . '</td>';
							echo '<td>'. $row['status'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Primary Health Insurance Carrier :' . '</td>';
							echo '<td>'. $row['phi_carrier'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'Policy Number :' . '</td>';
							echo '<td>'. $row['policy_number'] . '</td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>Image</td>';
							echo'<td>';
							echo"<img  alt='Responsive image' border=\"0\" src=\"".$row['img']."\" width=\"200\" alt=\"Image\" height=\"200\">";
							echo'</tr>';
							echo'<tr>';
							echo'<td>'. 'Action :' . '</td>';
							echo '<td><div align="center"><a rel="facebox" href="volunteer_edit_profile.php?id='.$row['id'].'" title="Click To View Orders">Edit Profile</a></div></td>';
							echo'</tr>';
						}
			?>
		</table>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
