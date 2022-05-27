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
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<link rel="stylesheet" href="profile/febe/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
<div id="main">
	<div id="header"><h1>The List Of Finding Person</h1></div>
	<div class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
	<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Name</th>
				<th>National ID</th>
				<th>City</th>
				<th>Status</th>
				<th>Gender</th>
				<th>Post Code</th>
				<th>Phone</th>
				<th>Permanent Address</th>
				<th>Action</th>
			</tr>
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * FROM  missing_person_info where situation='Finding'");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['name'].'</td>';
							echo '<td><div align="left">'.$row['national_id'].'</div></td>';
							echo '<td><div align="left">'.$row['city'].'</div></td>';
							echo '<td><div align="left">'.$row['situation'].'</div></td>';
							echo '<td><div align="left">'.$row['gender'].'</div></td>';
							echo '<td><div align="left">'.$row['post_code'].'</div></td>';
							echo '<td><div align="left">'.$row['phone'].'</div></td>';
							echo '<td><div align="left">'.$row['permanent_address'].'</div></td>';
							//echo '<td><div align="center"><a rel="facebox" href="viewworkload.php?id='.$row['idnumber'].'">View Load</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
							echo '</tr>';
						}
			?>
		</table>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
