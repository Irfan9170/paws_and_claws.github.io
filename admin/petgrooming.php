<?php
	$connect=mysqli_connect("localhost","root","","test1");
	
	if(isset($_POST['request']))
		{	$date=$_POST['date'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
		    $dogbreed=$_POST['dogbreed'];
			
			$sq="INSERT INTO petgrooming (date,name,email,mobile,dogbreed) 
			VALUES ('$date','$name','$email',$mobile,'$dogbreed')";
			$i=mysqli_query($connect,$sq);
			
			if($i==1)
			{
				echo '<script>alert("SUCCESSFULL /n WE WILL CONTACT YOU SOON")</script>';
				echo '<script>window.location="home.php"</script>';
			}
			else
			{	
			echo '<script>alert("FAILED ")</script>';
			echo '<script>window.location="petgrooming.php"</script>';
			}
			
		
		}
			

		
?>
<?php session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/testing2/login.php');
?>
<html>
<head><title>TEST</title>
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
		<img style="margin-left:400px;margin-top:60px;height:200px;opacity:1;"src="spa.png"></img>
		<img style="margin-top:60px;height:200px;opacity:1;"src="spa.png"></img>
		<img style="margin-top:60px;height:200px;opacity:1;"src="spa.png"></img>
		
		<form action="" method="post">
			<table style="border: 1px solid white;background-color:#132639;width:400px;margin-top:20px;margin-left:500px;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| BOOK APPOINTMENT FOR YOUR DOG MEET|</marquee></th>
				</tr>
				<tr>
					<th class="head ">DATE :</th>
					<td><input class="inpt" type="date" name="date" maxlength="30"  placeholder="0000-00-00" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">FULL NAME :</th>
					<td><input class="inpt" type="text" name="name" maxlength="30"  placeholder="ENTER FULL NAME" required /></td>
					<td></td>
				</tr>
				
				<tr>
					<th class="head ">EMAIL :</th>
					<td><input class="inpt" type="email" name="email" minlength="10" maxlength="30" name="email" placeholder="Enter valid email" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">MOBILE NUMBER :</th>
					<td><input class="inpt" type="tel" name="mobile" minlength="10" maxlength="10" placeholder="VALID NUMBER"  required /></td>
					<td></td>
				</tr>
				
				<tr>
					<th class="head ">DOGBREED :</th>
						<td><select class="inpt" name="dogbreed" required>
							<option>German Shepherd</option>
							<option>Rottweiler</option>
							<option>Bulldog</option>
							<option>Doberman</option>
							<option>Labrador Retriever</option>
							<option>Great Dane</option>
							<option>Bullmastiff</option>
							<option>Boxer</option>
							<option>Golden Retriever</option>
							<option>Cocker Spaniel </option>
							<option>Beagles</option>
							<option>Indian Pariah</option>
							<option>Indian Spitzs</option>
							<option>Pug</option>
							
							</select>
						</td>
						
				</tr>
				<tr>
					<td></td>
					<td style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-primary" name="request" type="submit" value="MAKE REQUEST"/>&nbsp &nbsp
					
					 </td>
				</tr>
				
				
			</table>
		</form>

</body>
</html>