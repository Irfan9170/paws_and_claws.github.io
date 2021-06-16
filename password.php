
<html>
<head><title>FORGOT PASSWORD</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body
	{	background-image:url(bg9.jpg);
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
		<img style="height:200px;top-margin:250px;margin-left:600px;"src="pass.png"></img>
		<form action="passrecovery.php" method="post">
			<table style="border: 1px solid white;width:400px;margin-left:500px;background-color:#132639;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| GET YOUR PASSWORD |</marquee></th>
				
				</tr>
				<tr>
					<th class="head ">USERNAME :</th>
					<td><input class="inpt" type="text" name="username" placeholder="VALID USERNAME"required /></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-primary" type="submit" value="SUBMIT"/>&nbsp &nbsp
					 <input style="letter-spacing:2px;"class="btn btn-primary" type="reset" value="RESET"/></td>
				</tr>
			</table>
		</form>

</body>
</html>