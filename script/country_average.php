<?php
	include 'connect.php';
	//Start Missing 
	$tot_m=mysql_query("SELECT SUM(amount) AS numrows FROM disister ");
	$aa=mysql_fetch_array($tot_m);
	
	$tot_mnum=$aa['numrows'];
	
	$found_m=mysql_query("SELECT Sum(amount) AS numrows1 FROM disister where catagorry='fire'");
	$bb=mysql_fetch_array($found_m);
	
	$found_mnum=$bb['numrows1'];
	$per_found=number_format((($found_mnum/$tot_mnum)*100),2);
	//$per_mis=100-$per_found;
	
	//End Missing
	
	// start
	
	
	$found_f=mysql_query("SELECT Sum(amount) AS numrows2 FROM disister where catagorry='bc'");
	$cc=mysql_fetch_array($found_f);
	
	$found_fnum=$cc['numrows2'];
	$per_fn=number_format((($found_fnum/$tot_mnum)*100),2);
	
	
?>
	

<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
<title>DMS</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<meta name="robots" content="index, follow">
<link rel="stylesheet" type="text/css" href="DMS_files/screen.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="DMS_files/phr.css" media="screen, projection">



<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
  
  
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Success Ratio'],
          ['Fire',    <?php echo $per_found; ?>],
          ['Building Collups',    <?php echo $per_fn; ?>],
        ]);

        var options = {
          title: 'Statistics of Disister'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
     
	  
      }
    </script>


</head>

</head>

<body>
<div id="header_hold">
	<div class="container">
		<br><br><br><br>
		<div id="main_menu" class="clearfix">
			<div class="clearfix module _menu">
				<div class="clearfix module_inner">
					<div class="clearfix module_content">
						<ul id="nav" class="menu">
							<li id="current" class="active parent item1"><a href="home.php"><span>Home</span></a></li>
							<li class="parent item2"><a href="about_dms.php"><span>Objectives</span></a>
							<li><a href="home.php"><span>Registration & Login</span></a>
								<ul>
									<li class="active item107"><a href="organization_auther_log.php"><span><h6>Organization Registry & Login</h6></span></a></li>
									<li class="active item39"><a href="volunteer_log.php"><span><h6>Volunteer Registry & Login</h6></span></a></li>
									<li class="active item110"><a href="missing_person_log.php"><span><h6>Missing Person’s Registry & Login</h6></span></a></li>
									<li class="active item110"><a href="finding_person_log.php"><span><h6>Finding Person’s Registry & Login</h6></span></a></li>
								</ul>
							</li>
							<li><a href="home.php"><span>Person’s Find</span></a>
								<ul>
									<li class="active item43"><a href="missing_person.php"><span><h6>Missing Person</h6></span></a></li>
									<li class="active item107"><a href="finding_person.php"><span><h6>Finding Person</h6></span></a></li>
								</ul>
							</li>
							<li><a href="home.php"><span>Affected Area</span></a>
								<ul>
									<li class="active item43"><a href="affected_area_files/division/dhaka.php"><span><h6>Dhaka</h6></span></a></li>
									<li class="active item107"><a href="affected_area_files/division/chittagong.php"><span><h6>Chittagong</h6></span></a></li>
									<li class="active item107"><a href="affected_area_files/division/rajsahi.php"><span><h6>Rajsahi</h6></span></a></li>
									<li class="active item107"><a href="affected_area_files/division/borishal.php"><span><h6>Borishal</h6></span></a></li>
								</ul>
							</li>
							<li class="parent item110"><a href="aid_management.php"><span>Aid Management</span></a></li>
							<li class="parent item46"><a href="admin_loginform2.php"><span></span>Admin</a></li>
							<li><a href="home.php"><span>Statistics</span></a>
								<ul>
									<li class="active item43"><a href="system_success.php"><span><h6>System Success</h6></span></a></li>
									<li class="active item107"><a href="country_average.php"><span><h6>Country Average</h6></span></a></li>
								</ul>
							</li>
							<li class="parent item52"><a href="contact.php"><span>Contact us </span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div id="homepage_content_hold">
	
	
	<div id="piechart" style="width: 900px; height: 500px;"></div>
	
</div>

</body></html>