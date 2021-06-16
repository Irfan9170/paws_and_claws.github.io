<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'test1');
$q="SELECT username,password FROM admin WHERE username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/testing2/admin/home.php');
}
else
{	
	echo '<script>alert("LOGIN FAILED - ENTER CORRECT INFORMATION")</script>';
	echo '<script>window.location="adminlogin.php"</script>';
}
?>
<html>
		<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
</html>