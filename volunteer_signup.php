<?php
error_reporting(0);
include 'connect.php';
if($_GET['err']=='ok')
{
$err="Username Already Taked. try with another username.";
}

?>
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
			name: {
				required: true,
				minlength: 2
			},
			username : {
					required : true,
					minlength:5
					},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			emergency_contact: {
				required: true,
				minlength: 13,
				//remote:'username_search.php?src=user_name'
			},
			phone: {
				required: true,
				minlength: 13
			},
			fax: {
				required: false,
			},
			homepage: {
				required: false,
				//url:true
			},
			status: {
				required: true,
			},
			city: {
				required:true,
				},
			post_code : {
				required: true,
				},
            blood: {
				required: true,
			},
			
			present_address: {
				required: true,
				minlength: 10
			},
			permanent_address: {
				required: true,
				minlength: 10
			},
			shortbio: {
				required: true,
				minlength: 10
			},			
			birth_date: {
				required: true,
				//minlength: 16
			},
			email: {
				required: true,
			},
			national_id :{
				required : true,
			},
			
		},
		messages: {
			
			name: {
				required: "This field is required",
				minlength: "Your username must consist of at least 4 characters"
			},
			
			username : {
					required : "Enetr your username",
					minlength:"Your username must consist of at least 5 characters"
					},
            emergency_contact: {
				required: "This field is required",
				minlength: "Contact number must consist of at least 13 characters"
			},
			
                       email: "Please enter a valid email address",

			phone: {
				required: "This field is required",
				minlength: "Contact number must consist of at least 13 characters"
			},
			
			//homepage: "Please enter correct url started with http://",
			status: "Please select your present status",
                        blood: "Please select your blood group",
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
			},	
			city :{
				required: "plese inter your city"
				},
			post_code : {
				required : "plese inter your valid post code"
				},
			national_id :{
				required : "plese enter your National ID"
				},
		}
	});
});
</script>


<style type="text/css">
#signupForm { width: 770px; }
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
				<h2 align="center">Registration Form</h2>
			<div style="text-align:;">
				<form class="cmxform" action="volunteer_submit.php" id="signupForm" method="POST" enctype="multipart/form-data">
					<table style="width: auto; height: auto; margin: 0 auto;" border="1">
							<tbody>
							
								<tr>
									<td><label for="name"><strong>Full Name :</strong></label></td>
									<td><input id="name" name="name" style="width:185px"></td>
								</tr>
								
								<tr>
									<td><label for="name"><strong>Username :</strong></label><?php  echo $err; ?></td>
									<td><input id="usernsme" name="username" style="width:185px"></td>
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
									<td><strong>Birth Date :</strong></td>
									<td><input class="hasDatepicker" name="birth_date" id="birth_date" style="width:185px" type="text"></td>
								</tr>
					
								<tr>
									<td><strong>Email:</strong></td>
									<td><input name="email" id="email" style="width:185px" type="text"></td>
								</tr>

								<tr>
									<td><strong>Contact Number:</strong></td>
									<td><input name="phone" id="phone" style="width:185px" type="text"></td>
								</tr>

								<tr>
									<td><strong>Fax :</strong></td>
									<td><input name="fax" id="fax" style="width:185px" type="text"></td>
								</tr>

								<tr>
									<td><strong>Primary Health Insurance Carrier :</strong></td>
									<td><input name="phi_carrier" id="phi_carrier" style="width:185px" type="text"></td>
								</tr>

								<tr>
									<td><strong>Policy Number :</strong></td>
									<td><input name="policy_number" id="policy_number" style="width:185px" type="text"></td>
								</tr>
								<tr>
									<td><strong>National_ID :</strong></label></td>
									<td><input id="national_id" name="national_id" style="width:185px"></td>
								</tr>

								<tr>
									<td><strong>Emergency Contact :</strong></td>
									<td><input name="emergency_contact" id="emergency_contact" style="width:185px" type="text"></td>
								</tr>
								
								<tr>
									<td><label for="gender"><strong>Gender :</strong></label></td>
									<td><input name="gender" id="gender" size="35" value="male" type="radio"> Male &nbsp;
										<input name="gender" id="gender" size="35" value="female" type="radio"> Female</td>
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
									<td><label for="blood"><strong>Blood Group :</strong></label></td>
									<td><select name="blood" id="blood" style="width:185px">
											<option selected="selected"></option>
											<option value="AB+">AB+</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>			
										</select>
									</td>
								</tr>

								<tr>
									<td><label for="status"><strong>Status :</strong></label></td>
									<td><select name="status" id="status" style="width:185px">
											<option selected="selected"></option>
											<option value="Student">Student</option>
											<option value="Teacher">Teacher</option>
											<option value="Bussinessman">Other's</option>			
										</select>
									</td>
								</tr>
				
								<tr>
									<td><strong>Present Address :</strong></td>
									<td><textarea rows="4" cols="40" name="present_address" id="present_address"></textarea></td>
								</tr>
								
								<tr>
									<td><strong>Permanent Address :</strong></td>
									<td><textarea rows="4" cols="40" name="permanent_address" id="permanent_address"></textarea></td>
								</tr>
								
								<tr>
									<td><strong>Short Bio :</strong></td>
									<td><textarea rows="4" cols="40" name="shortbio" id="shortbio"></textarea></td>
								</tr>
								
								<tr>
									<td><label for="photo"><strong>Image :</strong></label></td>
									<td><input name="photo" style="width:185px" type="file"></td>
								</tr>
						</tbody>
					</table>
				
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