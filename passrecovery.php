<?php

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'viikashlg@gmail.com');


$username=$_POST['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
$q="SELECT email,password FROM users WHERE username='$username'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{	
	$row=mysqli_fetch_array($result);
	
	$to='$row["email"]';         
	$subject='PASSWORD RECOVERY';
	$message='This is an automated generated password recovery.Do not reply.<\br> Your password is $row["password"]';
	$from='From: vikas@anvika.com';
	$email=mail($to,$subject,$message,$from);
	if($email)
		echo'Password send successfully to your email.';
	
}
else
{	
	echo '<script>alert("NO USERNAME FOUND")</script>';
	echo '<script>window.location="password.php"</script>';
}
?>
<html>
		<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
</html>