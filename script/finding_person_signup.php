<?php
error_reporting(0);
include 'connect.php';
if($_GET['err']=='ok')
{
$err="Username Already Taked. try with another username.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>DMS</title>
	<script type="text/javascript" src="DMS%20pass_files/jquery.htm"></script>
	<script type="text/javascript" src="DMS%20pass_files/jquery-1.js"></script>
	<script src="DMS%20pass_files/jquery.js" type="text/javascript"></script>
    <script src="DMS%20pass_files/jquery_005.js" type="text/javascript"></script>
	<script src="DMS%20pass_files/jquery_002.js"></script>
	<script src="DMS%20pass_files/jquery_003.js"></script>
	<script src="DMS%20pass_files/jquery_004.js"></script>
	
	<link rel="stylesheet" type="text/css" href="DMS%20pass_files/screen.css">
	<link rel="stylesheet" type="text/css" href="DMS%20pass_files/phr.css">
	<link rel="stylesheet" type="text/css" media="screen" href="DMS%20pass_files/cmxform.css">


	<link rel="stylesheet" type="text/css" href="DMS%20pass_files/jquery_002.htm">
	<link rel="stylesheet" type="text/css" href="DMS%20pass_files/jquery-ui-1.css">
	<link rel="stylesheet" href="DMS%20pass_files/jquery.css">
<!--[if lt IE 9]><LINK rel=stylesheet type=text/css href="css/ie.css"><![endif]-->


	
	
	<script type="text/javascript">
/*$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});*/

$().ready(function() {

		$( "#date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		
	// validate the comment form when it is submitted
	$("#commentForm").validate();
	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			phone: {
				required: true,
				minlength: 13
			},
			city: {
				required:true,
				},
			post_code : {
				required: false,
				},
			
			present_address: {
				required: true,
				minlength: 10
			},			
			/*national_id :{
				required : false,
			},*/
			
			shortbio : {
				required : true,
				},
			gender : {
				required : true,
				},
			sit : {
				required : true,
				},
			name : {
				required : true,
				},
			username : {
				required : true,
				},
			
		},
		messages: {
		
			password: {
				required: "Please provide a password",
				minlength: "Password must be 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Password must be 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			present_address:{
				required: "Please enter an address"
				//remote:jQuery.format("ID {0} already used")
			},	
			city :{
				required: "plese inter your city"
				},
			present_address :{
				required : "plese enter your  present Address"
				},
			shortbio : {
				required : "plese enter the MISSING PERSON shortbio"
				},
			gender : {
				required : "plese enter the Finding Person is male/female"
				},
			sit : {
				required : "plese enter"
				},
			name : {
				required : "Name of finding people"
				},
			username : {
				required : "username of this person who is do this work"
				},
			phone : {
				required : "phone number must be 13 digit "
				},
		}
	});
});
</script>


<style type="text/css">
#signupForm { width: 960px; }
#signupForm label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
}
</style>

	<noscript> 
		<meta http-equiv="refresh" content="0; URL=Error.jsp">
	</noscript> 

<script type="text/javascript">							
	$().ready(function(){
			$("#birth_date").datepicker({						<!--for datepicker-->
				changeMonth:true,
				changeYear:true
			});
	});
</script>
	

</head>
<body>
	<div id="homepage_content_hold">
		<div class="container">
			<div id="hero"><img src="DMS%20pass_files/for_individual.jpg"></div>
				<h2 align="center">Finding Person Registration Form</h2>
			<div style="text-align:;">
				<form class="cmxform" action="finding_submit.php" id="signupForm" method="POST" enctype="multipart/form-data">
					<table style="width: auto; height: auto; margin: 0 auto;" border="1">
						<tr>
							<td><strong>Name Of Finding Person :</strong></label></td>
							<td><input id="name" name="name" style="width:185px"></td>
						</tr>
						<tr>
							<td><strong>National_ID :</strong></label></td>
							<td><input id="national_id" name="national_id" style="width:185px"></td>
						</tr>
						<tr>
							<td><label for="city"><strong>City :</strong></label></td>
							<td><select name="city" id="city" style="width:185px">
									<option selected="selected"></option>
									<option value="chittagong">Chittagong</option>
									<option value="rangamaty">Rangamaty</option>
									<option value="cox-bazar">Cox-bazar</option>
									<option value="banderban">Banderban</option>
									<option value="feni">Feni</option>
									<option value="sent-martin">Sent-martin</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><strong>Post-code :</strong></td>
							<td><input name="post_code" id="post_code" style="width:185px" type="text"></td>
						</tr>
						<tr>
							<td><strong>Contact Number:</strong></td>
							<td><input name="phone" id="phone" style="width:185px" type="text"></td>
						</tr>
						<tr>
							<td><strong>Username :</strong></label></td>
							<td><input id="username" name="username" style="width:185px"><?php  echo $err; ?></td>
						</tr>
						<tr>
							<td><strong> Password</strong></td>
							<td><input name="password" id="password" style="width:185px" type="password"></td>
						</tr>
		
						<tr>
							<td><strong>Confirm Password</strong></td>
							<td><input name="confirm_password" id="confirm_password" style="width:185px" type="password"></td>
						</tr>
						<tr>
							<td><strong>E-Mail</strong></td>
							<td><input name="email" id="email" style="width:185px" type="text"></td>
						</tr>
						<tr>
							<td><label for="gender"><strong>Gender :</strong></label></td>
							<td><select name="gender" id="gender" style="width:185px">
									<option selected="selected"></option>
									<option value="male">Male</option>
									<option value="female">Female</option>
							</td>
						</tr>
						<tr>
							<td><label for="situation"><strong>Situation :</strong></label></td>
							<td><select name="situation" id="situation" style="width:185px">
									<option selected="selected"></option>
									<option value="finding">Finding</option>
							</td>
						</tr>
						<tr>
							<td><label for="present_address"><strong>Present Address :</strong></label></td>
							<td><textarea rows="4" cols="40" name="present_address" id="present_address"></textarea></td>
						</tr>
						<tr>
							<td><label for="permanent_address"><strong>Permanent Address :</strong></label></td>
							<td><textarea rows="4" cols="40" name="permanent_address" id="present_address"></textarea></td>
						</tr>
						
						<tr>
							<td><strong>Short Bio of missing person :</strong></td>
							<td><textarea rows="4" cols="40" name="shortbio" id="shortbio"></textarea></td>
						</tr>
						<tr>
							<td><label for="photo"><strong>Image :</strong></label></td>
							<td><input name="photo" style="width:185px" type="file"></td>
						</tr>
						
						
						
					</tbody></table>
				
						<p>
							<input name="action" id="action" value="add" type="hidden">
							<input name="hidden_session" id="hidden_session" value="" type="hidden">
							<input name="id" id="id" value="0" type="hidden">
						</p>
		
						<br>
		
					<div style="text-align: center;"><input value="Submit" type="submit"></div>
		
				</form>
			</div>
		
			<div id="footer" align="center"><a href="home.php"><h2>[Home]</h2></a></br>
			<h6>copyright @ mostafiz67.cu.cse@gmail.com<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;												   rubel.cu.cse@gmail.com</h6>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>