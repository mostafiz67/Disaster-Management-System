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
</head>
<body>
<div id="main">
	<div id="header"><h1>Your Personal Information</h1></div>
	<div class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
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

			$query = "SELECT person_info.id,person_info.post_code,person_info.city,person_info.name,person_info.gender, person_info.fax, person_info.shortbio, person_info.birth_date,  person_info.email, person_info.phone, person_info.status,person_info.present_address,person_info.permanent_address,person_info.national_id,person_info.username,person_info.phi_carrier,person_info.policy_number,person_info.img
			FROM person_info 
			WHERE  person_info.username = '$username' AND person_info.password = '$password'";
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
							echo '<tr>';
							echo '<td>'. 'Short-Bio' . '</td>';
							echo '<td>'. $row['shortbio'] . '</td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>Image</td>';
							echo'<td>';
							echo"<img  alt='Responsive image' border=\"0\" src=\"".$row['img']."\" width=\"200\" alt=\"Image\" height=\"200\">";
							echo'</tr>';
							echo'<tr>';
							echo'<td>'. 'Action :' . '</td>';
							echo '<td><div align="center"><a rel="facebox" href="person_edit_profile.php?id='.$row['id'].'" title="Click To View Orders">Edit Profile</a></div></td>';
							echo'</tr>';
						}
			?>
		</table>
	</div>
	<div id="footer"></div>
</div>
<div id="footer" align="center">
			<h5>copyright @ mostafiz67.cu.cse@gmail.com<br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com
			</h5>
		</div>
</body>
</html>
