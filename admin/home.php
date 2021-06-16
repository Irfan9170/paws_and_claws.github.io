<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/login.php');
?>
<html>
	<head>
		<title> ADMIN</title>
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
		
		<table style="margin-left:450px;margin-top:100px;width:450px;border: 1px solid white;background-color:#52527a;opacity:0.7">
			<tr>
				<td class="head"><a href="insert1.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-success" />INSERT ITEM IN DOGS MENU</a></td>
			</tr>
			<tr>
				<td class="head"><a href="insert2.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-success" />INSERT ITEM IN CATS MENU</a></td>
			</tr>
			<tr>
				<td class="head"><a href="insert3.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-success" />INSERT ITEM IN FISH & ACCESSORIES MENU</a></td>
			</tr>
			<tr>
				<td class="head"><a href="vieworder.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-warning" />VIEW AND DELETE COMPLETED ORDERS</a></td>
			</tr>
			<tr>
				<td class="head"><a href="delete1.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-danger" />DELETE ITEM FROM DOGS MENU</a></td>
			</tr>
			<tr>
				<td class="head"><a href="delete2.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-danger" />DELETE ITEM FROM CATS MENU</a></td>
			</tr>
			<tr>
				<td class="head"><a href="delete3.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-danger" />DELETE ITEM FROM FISH & ACCESSORIES MENU</a></td>
			</tr>
		</table>

		</body>
</html>