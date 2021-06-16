<?php 	session_start();
		$connect=mysqli_connect("localhost","root","","test1");
		
		if(isset($_POST["addtocart"]))
		{
			if(isset($_SESSION["shopping_cart"]))
			{
				$item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
				if(!in_array($_GET["id"],$item_array_id))
				{
					$count=count($_SESSION["shopping_cart"]);
					$item_array=array
					(
							'item_id'=>$_GET["id"],
							'item_name'=>$_POST["hidden_name"],
							'item_price'=>$_POST["hidden_price"],
							'item_quantity'=>$_POST["quantity"],
					
					);
					$_SESSION["shopping_cart"][$count]=$item_array;
				}
				else
				{
					echo '<script>alert("Items Already Added")</script>';
					echo '<script>window.location="index2.php"</script>';
				}
			}
			else
			{
				$item_array=array
				(
					'item_id'=>$_GET["id"],
					'item_name'=>$_POST["hidden_name"],
					'item_price'=>$_POST["hidden_price"],
					'item_quantity'=>$_POST["quantity"],
				);
				$_SESSION["shopping_cart"][0]=$item_array;
			}
		}
		
		if(isset($_GET["action"]))
		{
			if($_GET["action"]=="delete")
			{
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					if($values["item_id"]==$_GET["id"]) 
					{
						unset($_SESSION["shopping_cart"][$keys]);
						echo '<script>alert("ITEM REMOVED")</script>';
						echo '<script>window.location="index2.php"</script>';
					}
				}
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
		background-image:url(bg1.jpg);
		background-size:100%;
		background-attachment: fixed;
	}
	#box{opacity:0.7;}
	
		</style>
	</head>
		<body>
		
		<?php include'navbar.php'?>
		
		</br></br></br></br></br></br></br></br>
			<div class="container" style="width:1100px;" >			
				<?php
				$query="SELECT * FROM cat ORDER BY id ASC";
				$result=mysqli_query($connect,$query);
				if(mysqli_num_rows($result)>0)
				{	
					while($row=mysqli_fetch_array($result))
					{
				?>
					
					<div class="col-md-3" style="height:400px;">
					
						<form method="post" action="index2.php?action=add&id=<?php echo $row["id"];?>">
							<div id="box" style="border:1px solid #333; background-color: #000f1a; border-radius:5px; padding:10px;" align="center">
								<img src="<?php echo $row["image"];?>" class="img-responsive img-circle" style="height:150px;"/><br/>
								<h4 class="text-info"><?php echo $row["name"];?></h4>
								<h4 class="text-danger">Rs. <?php echo $row["price"];?></h4>
								<h4 class="text-info"><?php echo $row["detail"];?></h4>
								<input type="text" name="quantity" class="form-control" value="1"/>
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>"/>
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
								<input type="submit" name="addtocart" style="margin-top:5px;letter-spacing:5px;" class="btn btn-success" value="ADD TO CART" />
							</div>
						</form>
					</div>
				
					
					<?php }} ?>
					<div style="clear:both"></div><br/>
					<a style="letter-spacing:5px;color:black;background-color:black;color:red;font-size:30px;opacity:0.8" name="cart">
						<marquee scrollamount="5" direction="right" behavior="alternate">YOUR ORDER DETAILS</marquee></a>
					<div style="margin-top:10px;background-color:white;"class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th width="40%">Item Name</th>
								<th width="10%">Quantity</th>
								<th width="20%">Price</th>
								<th width="15%">Total</th>
								<th width="5%">Action</th>
							</tr>
							<?php
								if(!empty($_SESSION["shopping_cart"]))
								{
									$total=0;
									foreach($_SESSION["shopping_cart"] as $keys => $values)
									{
								?>	
								<tr>
									<td><?php echo $values["item_name"]; ?></td>
									<td><?php echo $values["item_quantity"]; ?></td>
									<td>Rs. <?php echo $values["item_price"]; ?></td>
									<td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"],2); ?></td>
									<td><a style="text-decoration:none;" href="index2.php?action=delete&id=<?php echo $values["item_id"]?>"><span class="btn btn-danger">Remove</span></a></td>
								</tr>
								
							<?php 	
							$total=$total + ($values["item_quantity"] * $values["item_price"]);
									}
							?>
								<tr>
									<td colspan="3" align="right">Total</td>
									<td align="right"> <?php echo 'Rs.'.number_format($total,2);?></td>
								</tr>
								<tr>
									<td colspan="5" align="center"><a style="text-decoration:none;letter-spacing:10px;" href="login.php"><span class="btn btn-primary">| CHECKOUT |</span></a></td>
								</tr>
							<?php
								}
							?>
						</table>
					</div>
				
						
			</div> <br/>
			
		
		</body>
</html>