<?php
session_start();
require_once('connect.php');
$uploadDir = 'profile_pictures/';


$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$phone=$_POST['phone'];
$national_id=$_POST['national_id'];
$city=$_POST['city'];
$present_address=$_POST['present_address'];
$permanent_address=$_POST['permanent_address'];
$post_code=$_POST['post_code'];
$shortbio=$_POST['shortbio'];
$gender=$_POST['gender'];
$situation=$_POST['situation'];
$name=$_POST['name'];
$username=$_POST['username'];
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
	echo $img;
	//exit; 
	}
	else
	{
	//echo "image success";
	}

    if(!get_magic_quotes_gpc()) { $fileName = addslashes($fileName); 
	$filePath = addslashes($filePath); }


if($_POST['action']=='add')
{




		$query2 = "INSERT INTO missing_person_info (id,name,username,permanent_address,situation,national_id,password ,confirm_password,phone,city,post_code,shortbio,present_address,gender,img)
							VALUES ('','$name','$username','$permanent_address','$situation','$national_id','$password','$confirm_password','$phone','$city','$post_code','$shortbio','$present_address','$gender','$filePath')";
				$result2 = mysql_query($query2)  or die(mysql_error());
			   


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