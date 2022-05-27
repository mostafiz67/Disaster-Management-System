<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">            
    <title>Disaster News </title>    
		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
		
</head>
    
	<body>
        <div id="signup_hold">
            <div id="header">
                <div id="header_logos"><img align="middle" src="pnews1 (1).jpg" hight=300 width=300 alt="phr"></div>
					<div id="progress_bar"> </div>
						<h2> Landslides, floods triggered by tropical storm Kajiki kill 6 in Philippines</h2>
            </div>
            <table class="customerSupport">
                <tbody>
					<tr>
						<td class="customerSupport" width="50%">
							<fieldset>
							<p>  
								<?php
									$file_name="karanigong.txt";
									$fp=fopen($file_name,"r") or die("couldn't open");
									while(!feof($fp))
									{
										$line=fgets($fp,1024);
										print"$line<br/>";
									}
									?>
									
       							<h3 align="center">Overview Of The Affected Area Is Given Below:</h3>
									 <div id="content">
										<table align="center" cellpadding="5" cellspacing="5" id="resultTable">
											<tr>
												<th style="border-left: 1px solid #C1DAD7">Name Of Affected Area</th>
												<th>Destruction Level</th>
												<th>People Died</th>
												<th>People Injured</th>
												<th>Loss Of Asset</th>
												<th>Date of Statistics</th>
												<th>Org.Name</th>
											</tr>
												<?php
												include('connect.php');
												$result = mysql_query("SELECT * FROM aff_area WHERE area='karanigong'");
														while($row = mysql_fetch_array($result))
															{
																echo '<tr>';
																echo '<td style="border-left: 1px solid #C1DAD7">'.$row['area'].'</td>';
																echo '<td><div align="left">'.$row['destruction_level'].'</div></td>';
																echo '<td><div align="left">'.$row['p_died'].' '.$row['amount_d'].'</div></td>';
																echo '<td><div align="left">'.$row['p_injur'].' '.$row['amount_i'].'</div></td>';
																echo '<td><div align="left">'.$row['l_asset'].' '.$row['amount_a'].'</div></td>';
																echo '<td><div align="left">'.$row['date'].'</div></td>';
																echo '<td><div align="left">'.$row['n_org'].'</div></td>';
																echo '</tr>';
															}
												?>
										</table>
									</div>
								</p>
                            </fieldset>
						</td>	
					</tr>
				</tbody>
			</table>
        </div>
		<div id="footer" align="center">
			<h5>copyright @ mostafiz67.cu.cse@gmail.com<br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com
			</h5>
		</div>
	</body>
</html>