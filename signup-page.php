<html>
	<head>
		<title>Suburban Outfitters Register</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="signup-page">
	
	<!------- Nav Bar ----------->
		<nav>
			<div class="logo">
				<a href="home-page.php"><img src="images/suburban outfitters logo.png" class="logo-image" style="height: 46px; width: 46px;">
				<span class="storename">Suburban Outfitters</span></a>
			</div>
			<ul class="nav-links">
				<li>
					<a href="home-page.php">HOME</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLOTHING</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="collection-top.php">TOP</a><br>
						<a class="dropdown-item" href="collection-bottom.php">BOTTOMS</a><br>
						<a class="dropdown-item" href="collection-dress.php">DRESSES</a><br>
						<a class="dropdown-item" href="collection.php">SHOP ALL</a>
					</div>
				</li>
				<li>
					<a href="collection-sale.php">SALE</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/profile-logo.png" class="img-fluid" style="height: 30px; width: 30px; margin-top: -5px;"></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="login-page.php">Sign In</a><br>
						<a class="dropdown-item" href="signup-page.php">Register</a><br>
					</div>
				</li>
				<li>
					<a href="cart-page.php"><img src="images/cart-logo.png" class="img-fluid" style="height: 30px; width: 30px; margin-top: -5px;"></a>
				</li>
			</ul>
			<div class="search"> 
				<form action="#"> 
					<input type="text"
						placeholder="Search.."
						name="search"> 
					<button> 
						Search
					</button> 
				</form> 
			</div> 
		</nav>
		
		<!-------Sign Up ---------->
		<div class="signup-page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="form-container">
							<div class="form-btn">
								<h4>Join Suburban Outfitters Squad</h4>
							</div>
							<form class="input" method='post' action='signup-page.php'>
										<select name='role' id='role'>
											<option value='user' $B>Customer</option>
										</select>
								<input type="text" placeholder="First Name" name='first_name'>
								<input type="text" placeholder="Last Name" name='last_name'>
								<input type="text" placeholder="Address" name='address'>
								<input type="text" placeholder="Email" name='email'>
								<input type="text" placeholder="Phone Number" name='phone_number'>
								<input type="text" placeholder="Username" name='username'>
								<input type="password" placeholder="Password" name='password'>
								<input type='submit' class='btn' value='Register' style="margin-left: 0%; width: 100%; margin-top: 10px;">
								<a href="login-page.php" class="btn" type="submit" style="width: 100%; height: 35px; margin-top: 0px;">Already Sign Up? Sign In</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require_once 'login.php';

			$conn = new mysqli($hn, $un, $pw, $db);
			if($conn->connect_error) die($conn->connect_error);

			if(isset($_POST['first_name']))
			{
				$first_name =  $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$address = $_POST['address'];
				$email = $_POST['email'];
				$phone_number = $_POST['phone_number'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$role = $_POST['role'];
				$token = password_hash($password, PASSWORD_DEFAULT);
				
				$query1 = "INSERT INTO user (first_name, last_name, username, password, role) VALUES ('$first_name', '$last_name', '$username', '$token', '$role')";
				
				$query2 = "INSERT INTO customer (first_name, last_name, email, phone_number, address, username, password, role) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$address', '$username', '$password', '$role')";
				
				$result1 = $conn->query($query1); 
				if(!$result1) die($conn->error);
				
				$result2 = $conn->query($query2); 
				if(!$result2) die($conn->error);
				
				header("Location: login-page.php");
			}

			$conn->close();

		?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	
		<!------- Footer --------->
		<div class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="logo">
						<a href="#homePage"><img src="images/suburban outfitters logo.png" class="logo-image" style="height: 46px; width: 46px;">
						<span class="storename">Suburban Outfitters</span></a>
					</div>
					<div class="footer-col-1">
						<h3>Help & Support</h3>
						<ul>
							<li><a href="order-tracking.php">Track Order</a></li>
							<li><a href="about-us.php">About Suburban Outfitters</a></li>
							<li><a href="admin-page.php">Admin Page</a></li>
						</ul>
					</div>
					<div class="footer-col-1">
						<h3>Social Media</h3>
						<img src="images/facebook-icon.png" style="height: 40px; width: 40px; margin-left: -32px">
						<img src="images/instagram-icon.png" style="height: 50px; width: 50px;">
						<img src="images/twitter-icon.png" style="height: 50px; width: 50px;">
						<img src="images/tiktok-icon.png" style="height: 40px; width: 70px; margin-left: -15px;">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
