<?php
include('connect.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM missing_person_info where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$phone=$row['phone'];
	$password=$row['password'];
	$name=$row['name'];
	$username=$row['username'];
	$post_code=$row['post_code'];
	//$birth_date=$row['birth_date'];
	//$situation=$row['situation'];
	$gender=$row['gender'];
	$present_address=$row['present_address'];
	$permanent_address=$row['permanent_address'];
  }
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form name="myForm" action="edit_missing_in.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
Name <br />
<input name="name" type="text" class="ed" id="brnu" value="<?php echo $name?>" />
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
Username <br />
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $username?>" />
<br>
Phone <br />
<input name="phone" type="text" class="ed" id="brnu" value="<?php echo $phone?>" />
<br>
Post_code <br />
<input name="post_code" type="text" class="ed" id="brnu" value="<?php echo $post_code?>" />
<br>
Gender <br />
<select name="gender" class="ed">
<option><?php echo $gender?></option>
<option>Male</option>
<option>Female</option>
</select>
<br>
Present Address <br />
<input name="present_address" type="text" class="ed" id="brnu" value="<?php echo $present_address?>" />
<br>
Permanent Address <br />
<input name="permanent_address" type="text" class="ed" id="brnu" value="<?php echo $permanent_address?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
