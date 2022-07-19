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
   <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<link rel="stylesheet" href="profile/febe/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
<div id="main">
	<div id="header"><h1>Organization Author's Dashboard : Welcome to this Page</h1><br>
	<h2>Personal Information Of The Organization Author </h2></div>
	<div class="menu">
        <ul>
            <li><a href="org_message_show.php">Message Show</a></li>
			<li><a href="input_data.php">Input Data</a></li>
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
			include('connect.php');
			$id=$_SESSION['SESS_MEMBER_ID'];
			echo '$id';
			$result = mysql_query("SELECT * FROM org_aut_info WHERE id='$id'");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td>'. 'Name Of Organization:' . '</td>';
							echo '<td>'. $row['name_org'] . '</td>';
							echo'</tr>';
							echo '<tr>';
							echo '<td>'. 'City Of Organization:' . '</td>';
							echo '<td>'. $row['city_org'] . '</td>';
							echo'</tr>';
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
							echo '<tr>';
							echo '<td>'. 'Status:' . '</td>';
							echo '<td>'. $row['status'] . '</td>';
							echo'</tr>';
							echo'<tr>';
							echo'<td>'. 'Action :' . '</td>';
							echo '<td><div align="center"><a rel="facebox" href="organization_auther_edit.php?id='.$row['id'].'" title="Click To View Orders">Edit Profile</a></div></td>';
							echo'</tr>';
						}
			?>
			<tr>
			 <td>Photo</td>
			 <td valign="top"><img src="profile_pictures/<?php echo $row['photo']; ?>" width="100" height="100"></td>
			</tr>
		</table>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
