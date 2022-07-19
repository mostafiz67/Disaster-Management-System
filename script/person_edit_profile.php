<?php
include('connect.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM person_info where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$name=$row['name'];
	$phone=$row['phone'];
	$username=$row['username'];
	$city=$row['city'];
	$post_code=$row['post_code'];
	$password=$row['password'];
	$phi_carrier=$row['phi_carrier'];
	$policy_number=$row['policy_number'];
	$birth_date=$row['birth_date'];
	//$birth=$row['birth'];
	$status=$row['status'];
	$gender=$row['gender'];
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
<form name="myForm" action="edit_person_in.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
Name <br />
<input name="name" type="text" class="ed" id="brnu" value="<?php echo $name?>" />
<br>
Username <br />
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $username?>" />
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
Birth Date <br />
<input name="birth_date" type="text" class="ed" id="brnu" value="<?php echo $birth_date?>" />
<br>
Policy Number <br />
<input name="policy_number" type="text" class="ed" id="brnu" value="<?php echo $policy_number?>" />
<br>
 Primary Health Insurance Carrier <br />
<input name="phi_carrier" type="text" class="ed" id="brnu" value="<?php echo $phi_carrier?>" />
<br>
Phone<br />
<input name="phone" type="text" class="ed" id="brnu" value="<?php echo $phone?>" />
<br>
Post Code <br />
<input name="post_code" type="text" class="ed" id="brnu" value="<?php echo $post_code?>" />
<br>
City <br />
<select name="city" class="ed">
<option><?php echo $city?></option>
<option>Chittagong</option>
<option>Sent-Martin</option>
<option>Cox-Bazar</option>
<option>Feni</option>
</select>
<br>
Status <br />
<input name="status" type="text" class="ed" id="brnu" value="<?php echo $status?>" />
<br>
Gender <br />
<select name="gender" class="ed">
<option><?php echo $gender?></option>
<option>Male</option>
<option>Female</option>
</select>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
