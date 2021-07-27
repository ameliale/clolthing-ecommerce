<html>
	<head>
		<title>Suburban Outfitters</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="home-page">
	
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
						<a class="dropdown-item" href="logout.php">Sign Out</a><br>
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
		
		<!------- Profile Page -------->
		<div class="tab">
			<button class="tablinks"><a href="profile-page.php" style="color: white;">Profile</button>
			<button class="tablinks"><a href="#" style="color: white;">Favorite</button>
			<button class="tablinks"><a href="#" style="color: white;">Purchases</button>
			<button class="tablinks"><a href="order-tracking.php" style="color: white;">Track My Order</a></button>
		</div>
		<?php
		$page_roles = array('user');

		require_once 'login.php';
		require_once 'check-session.php';

		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		

		$conn->close();

		function get_post($conn, $var) {
		return $conn->real_escape_string($_POST[$var]);
		}

		?>
		<div class="profile-page">
			<div class="container-fluid">
				<h2 style="margin-right: 79%; margin-bottom: -25px;">Profile Information</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="form-container profile">
							<img src="images/picture-icon.png">
							<h2>Quentin Taratino</h2>
							<h4>Customer</h4>
							<p>Female</p>
							<p>Joined 02/28/2021</p>
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-container information">
							<h3>Account ID: 1</h3>
							<div class="col-md-6">
								<h4>Username:</h4>
								<input type="text">
								<br>
								<br>
								<br>
								<h4>First Name:</h4>
								<input type="text">
								<br>
								<br>
								<br>
							</div>
							<div class="col-md-6">
								<h4>Email:</h4>
								<input type="text">
								<br>
								<br>
								<br>
								<h4>Last Name:</h4>
								<input type="text">
								<br>
								<br>
								<br>
							</div>
							<div>
								<h4 style="margin-left: 50px;">Adress:</h4>
								<input type="text" style="width: 700px;">
								<br>
								<br>
							</div>
							<div class="col-md-3">
								<h4>City:</h4>
								<input type="text" style="margin-left: 35px;">
							</div>
							<div class="col-md-3">
								<h4 style="margin-left: 100%;">State:</h4>
								<input type="text" style="width: 150px; margin-left: 100%;">
							</div>
							<div class="col-md-3">
								<h4 style="margin-left: 100%;">Zipcode:</h4>
								<input type="text" style="width: 150px; margin-left: 100%;">
							</div>
							<div class="update-btn">
								<a href="#" class="btn" style="width: 30%;">Update Information</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
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