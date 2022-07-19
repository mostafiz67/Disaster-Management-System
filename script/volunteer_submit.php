<?php
session_start();
require_once('connect.php');
$uploadDir = 'profile_pictures/';

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$birth_date=$_POST['birth_date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];
$phi_carrier=$_POST['phi_carrier'];
$policy_number=$_POST['policy_number'];
$national_id=$_POST['national_id'];
$emergency_contact=$_POST['emergency_contact'];
$gender=$_POST['gender'];
$blood=$_POST['blood'];
$status=$_POST['status'];
$present_address=$_POST['present_address'];
$permanent_address=$_POST['permanent_address'];
$post_code=$_POST['post_code'];
$city=$_POST['city'];
$chkusr=mysql_query("SELECT *FROM missing_person_info");
$chk=1;
while($row=mysql_fetch_array($chkusr))
{
if($row['username']==$username)
{
$chk=0;
break;
}
}
if($chk==1)
{

$fileName = $_FILES['photo']['name']; 
	$tmpName = $_FILES['photo']['tmp_name']; 
	$fileSize = $_FILES['photo']['size']; 
	$fileType = $_FILES['photo']['type']; 
	$filePath = $uploadDir . $fileName; 
	$result = move_uploaded_file($tmpName, $filePath);

   if (!$result) {
	//echo "Error uploading file"; 
	$img="Error uploading file"; 
	//exit; 
	}

    if(!get_magic_quotes_gpc()) { $fileName = addslashes($fileName); 
	$filePath = addslashes($filePath); }


if($_POST['action']=='add')
{
				$query2 = mysql_query( "INSERT INTO volunteer_info (id,city,name ,username,password ,confirm_password,birth_date,email,phone,fax,phi_carrier,policy_number,national_id,emergency_contact,gender,blood,status,present_address,permanent_address,post_code,img)
							VALUES ('','$city','$name','$username','$password' ,'$confirm_password','$birth_date','$email','$phone','$fax','$phi_carrier','$policy_number','$national_id','$emergency_contact','$gender','$blood','$status','$present_address','$permanent_address','$post_code','$filePath')");
if($query2)
{
echo "successfull";
}
else
{
echo "try again";
}
	}
	}
	else
{
//$err="Username Already Taked. try with another username."

	$_SESSION['missing_person_submit_msg'] = "Failed to create.";
	header("Location: finding_person_signup.php?err=ok");
	exit;
}
?>
