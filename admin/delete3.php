<?php session_start();

?>
<html>
	<head>
		<title>TesT</title>
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
		<br/><br/>
		<form action="deleteextraitem.php" method="post">
		<table style="margin-left:450px;margin-top:250px;width:450px;border: 1px solid white;background-color:#52527a;opacity:0.7">
			<tr>
				<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" direction="right" behavior="alternate">| DELETE ITEM FROM EXTRA MENU |</marquee></th>
			</tr>
			<tr>
				<th class="head">ITEM ID[ 201-300 ]</th>
				<td><input colspan="2"style="font-size:10px;" type="number" name="itemid" placeholder="ENTER ITEM ID" required "/></td>
				
			</tr>
			<tr>
				<td align="center" colspan="2" style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-danger" name="delete" type="submit" value="&nbsp&nbsp DELETE &nbsp&nbsp"/></td>
				
			</tr>
		</table>
		</form>
		
		</body>
</html>