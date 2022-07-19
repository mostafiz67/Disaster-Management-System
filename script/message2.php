<?php session_start(); ?>
<?php include "connect.php"; ?>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">            
    <title>Log In to DMS</title>    
		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->
		
</head>
    
<body >

    <div id="signup_hold">
            <div id="header">
                <div id="header_logos"><img src="image/phr.png" alt="phr"></div>
					<div id="progress_bar"> </div>
						<h2>Log In to DMS</h2>
            </div>
   
       <div id="leftcolumn">
       
	   </div>
	   
<div id="content"><br><br><br><br>

<table align="center"> 
<tr>
<td>
<font color="green"><h3>Select Your Username and Password</h3></font>


<?php
echo'<form action="message2.php" method="post">
<p><b>Enter Username :</b><br>
<input type="text" id="username" name="username" size="30" value="">
<br />
<br />
<b>Enter Password &nbsp:  </b> <br>
<input type="password" id="password" name="password" size="30" value=""><br/>
</br>
<p align=center style="padding-right: 400px;"><input type="submit" name="submituser" value="LOGIN"/>
</p>
</form>';
  // Connect to the database server
    
    if (isset($_POST['submituser'])) 
	{
      $username = $_POST['username'];//accept the submitted value and stores in a variable
	  $password=$_POST['password'];
	$result = @mysql_query("SELECT * FROM org_aut_info where (username='$username' AND password='$password')");
	 if (!$result){ 
	     die(mysql_error());
	 echo'<font color="green">Try again,User Name and Password not matched !</font>';
	 }
$i=0;
    while ( $row = mysql_fetch_array($result) ) 
	     {
		 $i++;
			$_SESSION['logged_in']="sldkjfsd";
			$_SESSION['log']="sldkjfsd";
			echo'<script language="javascript">
			location.replace("message3.php");
			</script>';
		}
		if ($i==0)
	 echo'<font color="red">Try again, User Name and Password not matched !!</font>';
       
    } 
    

?>
							<p>&nbsp;</p>
							<p><span class="small"><a href="organization_auther_signup.php"><h3>Not yet registered! please click here</h3></a><br/></span></p>
</td>
</tr>
</table >
</div>
</body>
</html>
