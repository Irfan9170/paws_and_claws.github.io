<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/adminlogin.php');
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
		.inpt
			{
				font-size:13px;
				text-align:center;
				
			}
	
		</style>
	</head>
		<body>
		
		<?php include'navbar.php'?>
		<form action="insertcat.php" method="post">
		<table style="margin-left:450px;margin-top:200px;width:450px;border: 1px solid white;background-color:#52527a;opacity:0.7">
			<tr>
				<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" direction="right" behavior="alternate">| INSERT ITEM IN CAT MENU |</marquee></th>
			</tr>
			<tr>
					<th class="head ">IMAGE URL :</th>
					<td><input class="inpt" type="text" name="image" placeholder="ENTER IMAGE URL" value="cat/" required /></td>
					
			</tr>
			<tr>
					<th class="head ">ITEM NAME :</th>
					<td><input class="inpt" type="text" name="name" placeholder="ENTER NAME" required /></td>
					
			</tr>
			<tr>
					<th class="head ">DETAIL :</th>
					<td><input class="inpt" type="text" name="detail" placeholder="ENTER DETAIL" required /></td>
					
			</tr>
			<tr>
					<th class="head ">PRICE :</th>
					<td><input class="inpt" type="number" name="price" placeholder="ENTER PRICE" required /></td>
					
			</tr>
			<tr>
				<td align="center" colspan="2" style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-danger" type="submit" value="&nbsp&nbsp INSERT &nbsp&nbsp"/></td>
				
			</tr>
		</table>
		</form>
		
		</body>
</html>