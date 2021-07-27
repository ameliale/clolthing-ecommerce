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
		
		<!------- Footer --------->
		
		<div class="checkout">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<h2>Check Out</h2>
						<div class="form-container">
							<form class ="input" method='post' action='checkout-page.php'>
								First Name: <input type='text' name='first_name'>
								Last Name: <input type='text' name='last_name'>
								Email: <input type='text' name='email'>
								Phone Number: <input type='text' name='phone_number'>
								Address: <input type='text' name='address'>
								Card Information: <input type='text' name='cardNumber'>
								Payment Date: <input type='date' name='paymentDate'>
								
								<input type='submit' class='btn' value='Submit Order' style="margin-left: 2%; width: 90%; margin-top: 10px;">
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
				$email = $_POST['email'];
				$phone_number = $_POST['phone_number'];
				$address = $_POST['address'];
				$cardNumber = $_POST['cardNumber'];
				$paymentDate = $_POST['paymentDate'];
				
				$query1 = "INSERT INTO payment (cardNumber, paymentDate) VALUES ('$cardNumber', '$paymentDate')";
				
				$query2 = "INSERT INTO customer (first_name, last_name, email, phone_number, address) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$address')";
				
				$result1 = $conn->query($query1); 
				if(!$result1) die($conn->error);
				
				$result2 = $conn->query($query2); 
				if(!$result2) die($conn->error);
				
				header("Location: order-submitted.php");
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