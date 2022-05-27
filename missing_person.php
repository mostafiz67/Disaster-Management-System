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
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="profile/js/application.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div id="main">
	<div id="header"><h1>The List Of Missing Person</h1></div>
	<div class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
        </ul>
        <br style="clear: left">
    </div>
	<div id="content">
	<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
		<table cellpadding="1" cellspacing="1"  id="resultTable">
		<thead>
			<tr>
				<th style="border-left: 1px solid #C1DAD7">Name</th>
				<th>National ID</th>
				<th>City</th>
				<th>Gender</th>
				<th>Post Code</th>
				<th>Phone</th>
				<th>Present Address</th>
				<th>Permanent Address</th>
				<th>Short Bio</th>
				<th>Image</th>
			</tr>
		</thead>
			<?php
			include('connect.php');
			$result = mysql_query("SELECT * FROM  missing_person_info where situation='Missing' AND found=0");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr>';
							echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['name'].'</td>';
							echo '<td><div align="left">'.$row['national_id'].'</div></td>';
							echo '<td><div align="left">'.$row['city'].'</div></td>';
							echo '<td><div align="left">'.$row['gender'].'</div></td>';
							echo '<td><div align="left">'.$row['post_code'].'</div></td>';
							echo '<td><div align="left">'.$row['phone'].'</div></td>';
							echo '<td><div align="left">'.$row['present_address'].'</div></td>';
							echo '<td><div align="left">'.$row['permanent_address'].'</div></td>';
							echo '<td><div align="left">'.$row['shortbio'].'</div></td>';
							echo"<td><img  alt='Responsive image' border=\"0\" src=\"".$row['img']."\" width=\"100\" alt=\"Image\" height=\"100\"></td>";
							echo '</tr>';
						}
			?>
		</table>
	</div>
	<div id="footer"></div>
</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteteacher.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<div id="footer" align="center">
			<h4>copyright @ mostafiz67.cu.cse@gmail.com<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com</h4>

</body>
</html>
