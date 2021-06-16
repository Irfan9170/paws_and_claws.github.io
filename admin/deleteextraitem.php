<?php session_start();
if(isset($_POST['delete'])){
$item=$_POST['itemid'];
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'test1');
$q="SELECT id FROM extra WHERE id='$item'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	mysqli_query($con,"DELETE FROM extra WHERE id='$item'");
	
}
else
{	
	echo '<script>alert("ENTER CORRECT PRODUCT ID")</script>';
	echo '<script>window.location="delete3.php"</script>';
}
}
?>
<html>
	<head>
		<title> TesT</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body
	{	
		background-image:url(bg4.jpg);
		background-size:100%;
		background-attachment: fixed;
	}
	.head
		{
			color:white;
			font-size:12px;
			letter-spacing:5px;
			text-align:center;
			padding:10px;
		}
	
		</style>
	</head>
		<body>
		
		<?php include'navbar.php'?>
		
		
		<table style="margin-left:450px;margin-top:250px;width:450px;border: 1px solid white;background-color:#52527a;opacity:0.7">
			<tr>
				<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" direction="right" behavior="alternate">| ITEM DELETED SUCCESSFULLY|</marquee></th>
			</tr>
			
		</table>
		</form>
		
			</body>
</html>