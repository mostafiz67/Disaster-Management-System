<?php
session_start();
require_once('connect.php');
$uploadDir = 'profile_pictures/';


$name_org=$_POST['name_org'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$birth_date=$_POST['birth_date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];
$national_id=$_POST['national_id'];
$emergency_contact=$_POST['emergency_contact'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$present_address=$_POST['present_address'];
$permanent_address=$_POST['permanent_address'];
$post_code=$_POST['post_code'];
$city_org=$_POST['city_org'];
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

if($_POST['action']=='add'){
	$sql=mysql_query("insert into org_aut_info(city_org,name_org,name,password,birth_date,email,phone,fax,gender,status,present_address,permanent_address,username,confirm_password,national_id,emergency_contact,post_code,img) 
	values('$city_org','$name_org','$name','$password','$birth_date','$email','$phone','$fax','$gender','$status','$present_address','$permanent_address','$username','$confirm_password','$national_id','$emergency_contact','$post_code','$filePath')");
$sqlchk=mysql_query("SELECT *FROM org_aut_info Where username='$username'");
while($row=mysql_fetch_array($sqlchk))
{
$uid=$row['id'];
$email=$row['email'];
}
$to = "mostafiz67.cu.cse@gmail.com";
$subject ="Msg for member request";
$message = "This is an email to be a part as a Oraginization Auther in DMS with user id ";
$message.=$uid;
$message.=" and email is ";
$message.=$email;

$headers = 'From: jony@ezzitech.com' . "\r\n" .
'Reply-To: jony@ezzitech.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$sentmail = mail($to,$subject,$message,$headers);
$message="Dear user you are successfully register as a organization auther in DMS. But you can login when admin active your account.After activating your account admin will sent email to you.";
$to = $email;
$subject ="Msg from admin of DMS";
$headers = 'From: jony@ezzitech.com' . "\r\n" .
'Reply-To: jony@ezzitech.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$sentmail = mail($to,$subject,$message,$headers);
if($sql)
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
	header("Location: organization_auther_signup.php?err=ok");
	exit;
}
	//mail($to,$subject,$header,$body);
?>