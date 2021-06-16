<?php session_start();
	if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/login.php');
	$username=$_SESSION['username'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'test1');
	$sq="SELECT name,locality FROM users WHERE username='$username'";
	$sq1="SELECT address1 FROM orders WHERE username='$username' ORDER BY orderid DESC";
	$result=mysqli_query($con,$sq);
	$result1=mysqli_query($con,$sq1);
	$placeholder=mysqli_fetch_array($result);
	$placeholder1=mysqli_fetch_array($result1);
	$name=$placeholder['name'];
	$locality=$placeholder['locality'];
	$address1=$placeholder1['address1'];
	
	mysqli_close($con);
?>
<html>
	<head>
		<title>vG | PROJECT</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body
		{	
			background-image:url();
			background-size:100%;
			background-attachment: fixed;
		}	
		.head
		{
			color:black;
			font-size:12px;
			letter-spacing:5px;
			text-align:center;
			padding:10px;
		}
		</style>
	</head>
	<body>
		
		
		</br></br></br>
		
		<div style="margin-top:10px;margin-left:350px;background-color:white;width:700px;opacity:0.8" class="table-responsive">
						
					<form action="" method="post">
						<table class="table table-bordered">
							<tr>
								<th class="head" width="40%">Item Name</th>
								<th class="head" width="10%">Quantity</th>
								<th class="head" width="20%">Price</th>
								<th class="head" width="15%">Sub-Total</th>
								
							</tr>
							<?php
								if(!empty($_SESSION["shopping_cart"]))
								{
									$total=0;
									foreach($_SESSION["shopping_cart"] as $keys => $values)
									{
								?>	
								<tr>
									<td class="head"><?php echo $values["item_name"]; ?></td>
									<td class="head"><?php echo $values["item_quantity"]; ?></td>
									<td class="head">Rs. <?php echo $values["item_price"]; ?></td>
									<td class="head">Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></td>		
									
								</tr>
								
							<?php 	
							
							$total=$total + ($values["item_quantity"] * $values["item_price"]);
									}
							?>
								<tr>
									<td class="head" colspan="3" align="right">GST</td>
									<td class="head" align="center"> <?php echo 'Rs.'.number_format(.12*$total,2);?></td>
								</tr>
								<tr>
									<td class="head" colspan="3" align="right">Total</td>
									<td class="head" align="center"> <?php echo 'Rs.'.number_format(($total*.12)+$total,2);?></td>
									
									
								</tr>
								<tr>
									<th class="head">NAME : </th>
									<td colspan="3"><input type="text" name="name" class="form-control" value="<?php echo $name ?> " required readonly /></td>
								</tr>
								<tr>
									<th class="head">ADDRESS : </th>
									<td colspan="3"><input type="text" name="address1" class="form-control" value="<?php echo $address1; ?> " required readonly /></td>
									</tr>
								<tr>
								<th></th>
								<td colspan="3"><input type="text" name="address" class="form-control" value="<?php echo $locality;?>" required readonly /></td>
								</tr>
								<tr>
								
									<td colspan="4" align="center" style="padding:10px;"><input onclick=window.print() name="submit" style="letter-spacing:2px;font-size:15px" class="btn btn-success" type="submit"	value="&nbsp&nbsp&nbsp PRINT &nbsp&nbsp&nbsp"/></td>
									
								</tr>
							<?php
								}
							?>
						</table>
					</form>
		</div>
			<div align="center" style="background-color:gray;opacity:0.8">
				Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by VIKAS KUMAR GUPTA.
		</div>	
	</body>
</html>