<?php
	$connect=mysqli_connect("localhost","root","","test1");
	
	if(isset($_POST['request']))
		{	$date=$_POST['date'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$pettype=$_POST['pettype'];
			$locality=$_POST['locality'];
			
			$sq="INSERT INTO petcare (date,name,email,mobile,pettype,locality) 
			VALUES ('$date','$name','$email',$mobile,'$pettype','$locality')";
			$i=mysqli_query($connect,$sq);
			
			if($i==1)
			{
				echo '<script>alert("SUCCESSFULL /n WE WILL CONTACT YOU SOON")</script>';
				echo '<script>window.location="home.php"</script>';
			}
			else
			{	
			echo '<script>alert("FAILED ")</script>';
			echo '<script>window.location="petcare.php"</script>';
			}
			
		
		}
			

		
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
		<img style="margin-left:300px;margin-top:60px;height:200px;opacity:1;"src="pc1.jpg"></img>
		<img style="margin-top:60px;height:200px;opacity:1;"src="pc2.jpg"></img>
		<img style="margin-top:60px;height:200px;opacity:1;"src="pc3.jpg"></img>
		
		<form action="" method="post">
			<table style="border: 1px solid white;background-color:#132639;width:400px;margin-top:20px;margin-left:500px;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| BOOK APPOINTMENT WITH DOCTOR FOR YOUR PET |</marquee></th>
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
					<th class="head ">PET TYPE:</th>
					<td style="color:white;font-size:12px;"><input class="inpt" type="radio" name="pettype" value="cat" required />CAT &nbsp &nbsp
					<input class="inpt" type="radio" name="pettype" value="dog" required />DOG <input class="inpt" type="radio" name="pettype" value="others" required />OTHERS</td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">LOCALITY :</th>
						<td><select class="inpt" name="locality" required>
							<option>Aashiyana</option>
							<option>Aishbag</option>
							<option>Alambagh</option>
							<option>Aliganj</option>
							<option>Aminabad</option>
							<option>Bansmandi</option>
							<option>Burlington</option>
							<option>Butler Colony</option>
							<option>Cantt</option>
							<option>Charbagh</option>
							<option>Chinhat</option>
							<option>Dubagga</option>
							<option>Faizabad Road</option>
							<option>Hazratganj</option>
							<option>Munshipulia</option>
							<option>Indiranagar</option>
							<option>Polytechnic</option>
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