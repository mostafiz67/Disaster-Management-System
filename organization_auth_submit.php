<?php
session_start();
require_once('connect.php');

$uploadDir = 'org_image/';
if($_POST['action']=='add')
{
	$name_org=$_POST['name_org'];
	$city_org=$_POST['city_org'];
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
	$fileName = $_FILES['photo']['name'];
	$tmpName = $_FILES['photo']['tmp_name'];
	$fileSize = $_FILES['photo']['size'];
	$fileType = $_FILES['photo']['type'];

	//for images
    $p = pathinfo($_FILES['photo']['name']);
    $ext = $p['extension'];
    $fileName = trim(com_create_guid(), '{}') . '.' . $ext;
    $filepath = $uploadDir . $fileName;
   // echo $filepath;
    $result = move_uploaded_file($tmpName, $filepath);
    if (!$result) 
	{
        echo 'Error File uploading!';
        exit;
    }
}
	// insert
	$query2 = "INSERT INTO org_aut_info (id,city_org,photo,filepath,national_id,name_org,name ,username,password ,confirm_password,birth_date,email,phone,fax,emergency_contact,gender,status,present_address,permanent_address,post_code)
				VALUES ('','$city_org','$fileName','$filepath','$national_id','$name_org','$name','$username','$password','$confirm_password','$birth_date','$email','$phone','$fax','$emergency_contact','$gender','$status','$present_address','$permanent_address','$post_code')";
	$result2 = mysql_query($query2)  or die('Error, query failed : ' . mysql_error());
	echo "<b> uploaded Successfully<b>";
	echo "<meta http-equiv='refresh' content='1 url=org_aut_log.php'>";
			 

?>
