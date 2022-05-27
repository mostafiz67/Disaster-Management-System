

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">            
    <title>Log In to DMS</title>    
		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
		
</head>
<?php
    
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
								<form name="login_form" id="login_form" action="organization_auther_view.php" method="post">	
									<h3>Enter your id and password</h3>
									<label>Author Username:</label>                          
									<input type="text" id="username" name="username" size="30" value="">
									<label>Password:</label>
									<input type="password" id="password" name="password" size="30" value=""><br/>
									<p><input type="submit" id="submit" name="submit" value="login" />
								</form> 
								 
										if (isset($_POST['submit'])) 
											{
												$username = $_POST['username'];//accept the submitted value and stores in a variable
												$password=$_POST['password'];
												$result = @mysql_query("SELECT * FROM org_aut_info  where (username='$username' AND password='$password')");
												if (!$result)
													{ 
														die(mysql_error());
														echo'<font color="green">Try again,UserName and Password not matched !</font>';
													}
												$i=0;
												while ( $row = mysql_fetch_array($result) ) 
													{
														$i++;
														$_SESSION['logged_in']="sldkjfsd";
														$_SESSION['log']="sldkjfsd";
														location.replace("organization_auther_view.php");
														
													}
												if ($i==0)
												echo'<font color="red">Try again, User Name and Password not matched !!</font>';
										   
											} 
									

								?>
							<p>&nbsp;</p>
							<p><span class="small"><a href="organization_auther_signup.php"><h3>Not yet registered! please click here</h3></a><br/></span></p>
                            </fieldset>
						</td>	
					</tr>
				</tbody>
			</table>
        </div>
	</body>
</html>