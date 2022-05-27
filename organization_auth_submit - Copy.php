<?php
session_start();
require_once('connect.php');


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
//$photo=$_POST['photo'];



$to = "mostafiz67.cu.cse@gmail.com";
$subject ="Msg for member request";
$body = "this is an email from $email \n\n to be a part as a Oraginization Auther in DMS";

if($_POST['action']=='add'):
	$sql="insert into org_aut_info(city_org,name_org,name,password,birth_date,email,phone,fax,gender,status,present_address,permanent_address,username,confirm_password,national_id,emergency_contact,post_code) 
	values('$city_org','$name_org','$name','$password','$birth_date','$email','$phone','$fax','$gender','$status','$present_address','$permanent_address','$username','$confirm_password','$national_id','$emergency_contact','$post_code')";

	mail($to,$subject,$header,$body);
	
else:
	echo " fill the form !!!!!!!!";
endif;

mysql_query($sql);

if($_POST['action']=='add'):
$id=mysql_insert_id();
echo $id;
else:
$id=$_POST['id'];
endif;

$dest="profile_pictures/".$id.".jpg";


if(isset($_FILES['photo']['name'])):
if(move_uploaded_file($_FILES['photo']['tmp_name'],$dest)):
$sqli="update org_aut_info set photo=1 where id='".$id."'";
mysql_query($sqli);
else:
echo "couldn't upload the file";
endif;
endif;

echo"successful";

echo "<script language='javascript'>location.href='organization_auther_log.php'</script>";

?>
