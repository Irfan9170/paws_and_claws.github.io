<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/adminlogin.php');
$connect=mysqli_connect("localhost","root","","test1");
if(isset($_GET['action'])&& isset($_GET['orderid']))
	{	$orderid=$_GET['orderid'];
		if($_GET['action']=="delete")	

			$sq="DELETE FROM orders WHERE orderid='$orderid'";
			mysqli_query($connect,$sq);

	}
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
		font-size:12px;
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
				color:white;
				background-color:black;
			}
	
		</style>
	</head>
		<body>
		
		<?php include'navbar.php'?>
		<br/><br/>
		
		
		<form action="" method="post">
		<table class="table-responsive"style="margin-left:100px;margin-top:100px;width:1200px;border: 1px solid white;background-color:#52527a;opacity:0.7">
			<tr>
				<th class="head" colspan="9" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" direction="right" behavior="alternate">| ORDERS |</marquee></th>
			</tr>
			<tr>
					<th class="head ">ORDER ID :</th>
					<th class="head ">USERNAME:</th>
					<th class="head ">NAME :</th>
					<th class="head ">ADDRESS :</th>
					<th class="head ">ITEM :</th>
					<th class="head ">QUANTITY :</th>
					<th class="head ">PRICE :</th>
					<th class="head ">TOTAL :</th>
					<th class="head ">ACTION :</th>
					
					
			</tr>
			<?php
				$query="SELECT * FROM orders";
				$result=mysqli_query($connect,$query);
				if(mysqli_num_rows($result)>0)
				{	
					while($row=mysqli_fetch_array($result))
					{
				?>
			<tr>
					<td class="inpt "><?php echo $row["orderid"];?></td>
					<td class="inpt "><?php echo $row["username"];?></td>
					<td class="inpt "><?php echo $row["name"];?></td>
					<td class="inpt "><?php echo $row["address"];?></td>
					<td class="inpt "><?php echo $row["item"];?></td>
					<td class="inpt "><?php echo $row["quantity"];?></td>
					<td class="inpt "><?php echo $row["price"];?></td>
					<td class="inpt "><?php echo $row["total"];?></td>
					<td class="inpt "align="center"  style="padding:10px;"><a href="vieworder.php?action=delete&orderid=<?php echo $row["orderid"]?>" style="letter-spacing:2px;"class="btn btn-danger" >&nbsp&nbsp REMOVE ORDER &nbsp&nbsp</a></td>
					<?php }}?>
			</tr>
			
		</table>
		</form>
		
		</body>
</html>