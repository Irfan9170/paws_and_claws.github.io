
<!DOCTYPE html>
<html>
<head>
  <title>TEST</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style>
  ul	{font-size:15px;}
  li	{margin-left:50px;letter-spacing:5px}
  #name	{font-size:20px;letter-spacing:10px;color: #ff6666;}
  #nav	{opacity:0.7;}
  </style>
</head>
<body>

<nav id="nav" class="navbar navbar-expand-md navbar-inverse fixed-top " style="background-color:#800033;opacity:0.7;">
  <a class="navbar-brand" id="name" href="">PAWS & CLAWS ||</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="collapsibleNavbar" >
    <ul class="navbar-nav">
	  <li class="nav-item">
        <a class="nav-link"><?php echo 'HELLO ! ' .$_SESSION['username'] ?></a>
	  </li>
      <li class="nav-item">
        <a class="nav-link"  href="home.php">HOME</a>
      </li>
      <li class="nav-item dropdown" >
        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">MENU</a>
				<ul class="dropdown-menu">
					<li><a href="index1.php">DOGS</a></li>
					<li><a href="index2.php">CATS</a></li>
					<li><a href="index3.php">FISH & ACCESSORIES</a></li>
				</ul>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#cart">CART</a>
      </li> 
<li class="nav-item dropdown" >
        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">SERVICES</a>
				<ul class="dropdown-menu">
					<li><a href="petspa.php">PETS SPA</a></li>
					<li><a href="petcare.php">PETS CARE</a></li>
					<li><a href="petgrooming.php">PETS GROMMING</a></li>
					<li><a href="new.php">FIND NAME</a></li>
				</ul>
      </li> 	  
	   
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li> 
	  
    </ul>
  </div>  
</nav>
</body>
</html>


