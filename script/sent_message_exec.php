<?php
include('connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$position = clean($_POST['position']);
$message = clean($_POST['message']);
if($position=="volunteer")
{

$sqldonor=mysql_query("Select *from volunteer_info");
/*$message1='We need volunteer for effected area ';
$message1.=$group;
$message1.=' blood.';
$message1.='Please contact this no ';
$message1.=$mobile;
  */
  $message1=$message;
   $subject = "Save Life";
  // $header = "Online Blood Donation System";
  // $message = $message1;
$message1 = urlencode($message1);
//echo $message;
$sender="Save Life";
$sender = urlencode($sender);


$headers = 'From: jony@ezzitech.com' . "\r\n" .
'Reply-To: jony@ezzitech.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
//$sentmail=mail($to, $subject, $message, $headers);

while($arr=mysql_fetch_array($sqldonor))
{
$num=$arr['phone'];
$to=$arr['email'];
//echo $to;
//echo $num;
$sentmail = mail($to,$subject,$message,$headers);
echo "<br />";
if($sentmail)
            {
            $test1=1; }
   else
         {
         $test1=0;
        }
  /*fOR Auto Sms alert
  */ $link = "http://ezzitech.com/newdesign/lib/rootsmsapi.php?destination=".$num."&source=".$sender."&message=".$message1."";
   $api_status=file_get_contents($link);
  
   if($api_status)
   {
   $test2=1;
   } 
   else
   {
   $test=2;
   }  
}
/*if($test1==1)
{
echo "<center>";
   echo "Blood rquirement Post sent to all donor mail address.";
   echo "</center>";
}
else
{
echo "<center>";
    echo "Email Not sent.";
 echo "</center>";
}*/
/*if($test2==1)
{
echo "<center>";
    echo 'Blood Requirement message sent to all donor mobile number.';
   echo "</center>";
}*/
}
mysql_query("INSERT INTO notification (position, message)
VALUES ('$position','$message')");
header("location: sent_message.php");
?>