<html>
	<head>
		<title>Suburban Outfitters Vendor</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="vendor-add">
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
		
		<div class="tab">
			<button class="tablinks"><a href="admin-page.php" style="color: white;">Profile</button>
			<button class="tablinks"><a href="vendors.php" style="color: white;">Vendors</button>
			<button class="tablinks"><a href="inventory.php" style="color: white;">Inventory</button>
			<button class="tablinks"><a href="campaign.php" style="color: white;">Campaigns</a></button>
			<button class="tablinks"><a href="customer-list.php" style="color: white;">Customers</a></button>
		</div>
		
		<div class="vendor">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<h2>New User</h2>
						<div class="form-container">
							<form class ="input" method='post' action='user-add.php'>
								First Name: <input type='text' name='first_name'><br>
								Last Name: <input type='text' name='last_name'><br>
								Username: <input type='text' name='username'><br>
								Password: <input type='text' name='password'><br><br>
								User Type (Role):
										<select name='role' id='role'>
											<option value='admin' $A>Administrator</option>
											<option value='user' $B>Customer</option>
										</select>
								<br>
								<input type='submit' class='btn' value='Add User' style="margin-left: 2%; width: 90%; margin-top: 25px;">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php

			$page_roles = array('admin');

			require_once 'login.php';
			require_once 'check-session.php';

			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) die($conn->connect_error);

			if(isset($_POST['username'])) {
				
					$first_name = get_post($conn, 'first_name');
					$last_name = get_post($conn, 'last_name');
					$username = get_post($conn, 'username');
					$password = get_post($conn, 'password');
					$role = get_post($conn, 'role');
					$token = password_hash($password, PASSWORD_DEFAULT);
					
					$query = "INSERT INTO user (first_name, last_name, username, password, role) VALUES ".
						"('$first_name','$last_name','$username', '$token','$role')";
						
					$result=$conn->query($query);
					if(!$result) echo "INSERT failed: $query <br>" .
						$conn->error . "<br><br>";
				
					header("Location: customer-list.php");
				
			}

			$conn->close();

			function get_post($conn, $var) {
			return $conn->real_escape_string($_POST[$var]);

		}

		?>
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
</head>