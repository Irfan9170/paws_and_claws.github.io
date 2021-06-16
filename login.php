
<html>
<head>
	<title>LOGIN </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			body
			{	
				background-image:url(bg9.jpg);
				background-size:100%;
				background-repeat: no-repeat;
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
		
		<img style="margin-top:200px;margin-left:600px;width:200px;height:200px;" src="login.png"></img>
		<form action="validation.php" method="post">
			<table style="border: 1px solid white;background-color:#132639;width:400px;margin-left:500px;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| CUSTOMER's LOGIN |</marquee></th>
				</tr>
				<tr>
					<th class="head ">USERNAME :</th>
					<td><input class="inpt" type="text" name="username" placeholder="VALID USERNAME"/></td>
					<td></td>
				</tr>
				<tr>
					<th class="head">PASSWORD :</th>
					<td><input class="inpt" type="password" name="password" placeholder="PASSWORD"/></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-primary" type="submit" value="SIGN-IN"/>&nbsp &nbsp
					 <input style="letter-spacing:2px;"class="btn btn-primary" type="reset" value="RESET"/></td>
				</tr>
				<tr>
					<th></th>
					<td style="padding:5px;"><a href="password.php"style="letter-spacing:2px;font-size:10px;text-align:center;text-decoration:none;background-color:black;" class="text-danger">&nbsp&nbsp&nbsp&nbsp FORGOT PASSWORD &nbsp&nbsp</a></td>
					<td></td>
				</tr>
				<tr>
					<th></th>
					<td style="padding:5px;"><a href="signup.php"style="letter-spacing:2px;font-size:10px;text-align:center;text-decoration:none;background-color:black;" class="text-warning">&nbsp&nbsp&nbsp&nbsp NEW USER &nbsp&nbsp&nbsp&nbsp</a></td>
					<td></td>
				</tr>
			</table>
		</form>

</body>
</html>