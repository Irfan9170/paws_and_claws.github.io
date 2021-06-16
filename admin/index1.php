<?php session_start();
	if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/adminlogin.php');
	$connect=mysqli_connect("localhost","root","","test1"); 
?>
<html>
	<head>
		<title>ADMIN</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body
	{	
		background-image:url(bg3.jpg);
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
				$query="SELECT * FROM dog ORDER BY id ASC";
				$result=mysqli_query($connect,$query);
				if(mysqli_num_rows($result)>0)
				{	
					while($row=mysqli_fetch_array($result))
					{
				?>
					
					<div class="col-md-3" style="height:400px;">
					
						<form method="post" action="">
							<div id="box" style="border:1px solid #333; background-color: #000f1a; border-radius:5px; padding:10px;" align="center">
								<img src="<?php echo $row["image"];?>" class="img-responsive img-circle" style="height:150px;"/><br/>
								<h4 class="text-info"><?php echo $row["name"];?></h4>
								<h4 class="text-danger">Rs. <?php echo $row["price"];?></h4>
								<h4 class="text-info"><?php echo $row["detail"];?></h4>	
								<h4 style="background-color:white;color:black;">PRODUCT ID : <?php echo $row["id"];?></h4>	
							</div>
						</form>
					</div>
				
					
					<?php }}
						else echo 'NO PRODUCT AVAILABLE;'?>
		
			</div> 
			
		</body>
</html>