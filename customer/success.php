<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/login.php');
$length = count($_SESSION['shopping_cart']); 
if(isset($_POST['submit']))
{
	
	for($i=0; $i<$length; $i++) {   
	
	
	$username=$_SESSION['username'];
	$name=$_POST['name'];
	$address=$_POST['address'];
				
	
	 $item=$_SESSION['shopping_cart'][$i]['item_name'];
	 $price=$_SESSION['shopping_cart'][$i]['item_price'];
	 $quantity= $_SESSION['shopping_cart'][$i]['item_quantity'];
	 $subtotal=$price * $quantity;
	 $total=$_POST['hidden_total'];
	 $con=mysqli_connect('localhost','root');


	mysqli_select_db($con,'test1');
	$sq="INSERT INTO orders (username,name,address,item,quantity,price,subtotal,total)
	VALUES ('$username','$name','$address','$item','$quantity','$price','$subtotal','$total')";
	mysqli_query($con,$sq);

	mysqli_close($con);
	 
	 
	 }	
}
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
			background-image:url(bg11.jpg);
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
		
		</br></br></br>
		<table style="margin-left:450px;margin-top:150px;width:450px;border: 1px solid white;background-color:#52527a;opacity:0.7">
				
				<tr style="color:white;">
					<th class="head" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">
					| ORDER PLACED SUCCESSFULLY |</marquee></th>
				</tr>
				<tr >
					<th class="head">THANK YOU  KEEP VISITING  :) </th>
					
				</tr>
				<tr >
					<th class="head text-warning" style="background-color:black;" >KEEP CASH READY <br/>| DELIVERY WITHIN 1 DAY|</th>
				</tr
				<tr>
					<td class="head"><a href="index1.php" style="margin-top:5px;letter-spacing:5px;" class="btn btn-success" />CONTINUE ORDERING MORE</a></td>
				</tr>
			</table>
			
	</body>
</html>