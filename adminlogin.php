
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
		
		</br></br></br></br></br></br></br></br>
		<img style="margin-top:50px;margin-left:600px;width:200px;height:200px;" src="login.png"></img>
		<form action="adminvalidation.php" method="post">
			<table style="border: 1px solid white;background-color:#132639;width:400px;margin-left:500px;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| ADMIN's LOGIN |</marquee></th>
				</tr>
				<tr>
					<th class="head ">USERNAME :</th>
					<td><input class="inpt" type="text" name="username" placeholder="ADMIN ONLY" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head">PASSWORD :</th>
					<td><input class="inpt" type="password" name="password" placeholder="PASSWORD" required /></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-primary" type="submit" value="SIGN-IN"/>&nbsp &nbsp
					 <input style="letter-spacing:2px;"class="btn btn-primary" type="reset" value="RESET"/></td>
				</tr>
				
			</table>
		</form>
		
</body>
</html>