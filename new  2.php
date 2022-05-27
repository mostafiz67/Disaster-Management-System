<?php
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">            
    <title>Log In to DMS</title>    
		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
		
</head>
    
	<body>
        <div id="signup_hold">
            <div id="header">
                <div id="header_logos"><img src="image/dms.png" alt="phr"></div>
					<div id="progress_bar"> </div>
						<h2>Log In to DMS</h2>
            </div>
            <table class="customerSupport">
                <tbody>
					<tr>
						<td class="customerSupport" width="50%">
							<fieldset>
								<form name="login_form" id="login_form" action="profile_view_org.php" method="post">	
									<h3>Enter your Username and Password</h3>
									<label>Author Username:</label>                          
									<input type="text" id="username" name="username" size="30" value="">
									<label>Password:</label>
									<input type="password" id="password" name="password" size="30" value=""><br/>
									<p><input type="submit" id="submit" name="submit" value="login" />
								</form> 
							<p>&nbsp;</p>
							<p><span class="small"><a href="organization_auther_signup.php"><h3>Not yet registered! please click here</h3></a><br/></span></p>
                            </fieldset>
						</td>	
					</tr>
				</tbody>
			</table>
        </div><br><br><br>
		<div id="footer" align="center"><h6>copyright @ mostafiz67.cu.cse@gmail.com<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;			 rubel.cu.cse@gmail.com
			</h6></div>
	</body>
</html>