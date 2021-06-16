<?php

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$city=$_POST['city'];

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'test1');
$sq="INSERT INTO users (name,username,password,email,mobile,gender,city) 
 VALUES ('$name','$username','$password','$email',$mobile,'$gender','$city')";
$i=mysqli_query($con,$sq);

mysqli_close($con);
?>
<html>
<head><title>SIGN-UP</title>
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
		<img src="banner.gif" style="width:100%;margin-top:60px;opacity:0.7;"></img>
		</br></br></br></br></br></br></br></br>
		<img style="margin-left:600px;margin-top:-100px;height:200px;opacity:0.7;"src="signup.png"></img>
		
		<form action="signup1.php" method="post">
			<table style="border: 1px solid white;background-color:#132639;width:400px;margin-top:20px;margin-left:500px;opacity:0.7;">
				<tr style="color:white;">
					<th class="head" colspan="2" style="text-align:center;border-bottom: 1px solid #ddd;"><marquee scrollamount="2" behavior="alternate">| REGISTER YOURSELF |</marquee></th>
				</tr>
				<tr>
					<th class="head ">FULL NAME :</th>
					<td><input class="inpt" type="text" name="name" maxlength="15"  placeholder="ENTER FULL NAME" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">USERNAME :</th>
					<td><input class="inpt" type="text" name="username" maxlength="15"  placeholder="Numbers+Alphabets" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head">PASSWORD :</th>
					<td><input class="inpt" type="password" name="password" maxlength="15" placeholder=" PASSWORD" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">EMAIL :</th>
					<td><input class="inpt" type="email" name="email" maxlength="25" name="email" placeholder="Enter valid email" required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">MOBILE NUMBER :</th>
					<td><input class="inpt" type="number" name="mobile" maxlength="10" placeholder="VALID NUMBER"  required /></td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">GENDER :</th>
					<td style="color:white;font-size:12px;"><input class="inpt" type="radio" name="gender" required />MALE &nbsp &nbsp
					<input class="inpt" type="radio" name="gender" required />FEMALE </td>
					<td></td>
				</tr>
				<tr>
					<th class="head ">LOCALITY :</th>
						<td><select class="inpt" name="city" required>
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
						<td></td>
						<td></td>
				</tr>
				<tr>
					<td></td>
					<td style="padding:10px;"><input style="letter-spacing:2px;"class="btn btn-primary" type="submit" value="SIGN-UP"/>&nbsp &nbsp
					 <input style="letter-spacing:2px;"class="btn btn-primary" type="reset" value="RESET"/></td>
					 <td></td>
				</tr>
				<tr>
					<td style="padding:10px;" class="head " colspan="2">
						<span>EXISTING USER</span><a style="text-decoration:none;" href="login.php"> LOGIN HERE</a>
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="padding:10px;letter-spacing:2px;font-size:10px;"align="center" colspan="3" class="text-danger">
					<?php if($i==1)
						echo "\n *  SUCCESSFULLY REGISTERED";
						else echo "\n * USERNAME EXIST TRY ANOTHER";
					?>
					</td>
				</tr>
	
			</table>
		</form>

</body>
</html>