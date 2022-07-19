<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">            
    <title>Log In to DMS</title>    
		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
		
</head>
    
	<body>
        <div id="signup_hold">
            <div id="header">
                <div id="header_logos"><img src="image/phr.png" alt="phr"></div>
					<div id="progress_bar"> </div>
						<h2>Log In to DMS</h2>
            </div>
            <table class="customerSupport">
                <tbody>
					<tr>
						<td class="customerSupport" width="50%">
							<fieldset>
								<form name="login_form" id="login_form" action="personal_auth2.php" method="post">	
									<h3>Enter your username and password</h3>
									<label>Username:</label>                          
									<input type="text" id="username" name="username" size="30" value="">
									<label>Password:</label>
									<input type="password" id="password" name="password" size="30" value=""><br/>
									<p><input type="submit" id="submit" name="submit" value="login" />
					
								</form> 
								<?php

										session_start();
										require_once('connect.php');
										$chk=0;
										if($_GET['act']=='save')
										{
										$chk=0;
										$username=$_POST['username'];
										//$status=$_POST['status'];
										$password=$_POST['password'];
										$sql=mysql_query("Select *from personal_info where username='$username' and password='$password'");
										while($result=mysql_fetch_array($sql))
										{
										$username=$result['username'];
										$password=$result['password'];
										//$st=$result['status'];
										}
										if($username==$username && $password==$password)
										{
										$chk=1;
										echo "<div style='color:red;'>";
										echo "Successfully Loggen in.";
										echo "</div>";
										echo "<br />";
										}
										else
										{
										echo "<div style='color:red;'>";
										echo "Wrong Password.Please try again.";
										//echo "<br />";
										}
										}
										else
										{
										$username=$_POST['username'];
										//$status=$_POST['status'];
										echo "<form method='POST' action='personal_auth2.php'>";
						
										}
										?>
										</form>
										<?php
										if($chk==1)
										{
										echo "<form method='POST' action='personal_auth2.php'>";
									
										}
										?>
										</fieldset>
							<p>&nbsp;</p>
							<p><span class="small"><a href="personal_signup.php"><h3>Not yet registered! please click here</h3></a><br/></span></p>
                            </fieldset>
						</td>	
					</tr>
				</tbody>
			</table>
        </div>
	</body>
</html>