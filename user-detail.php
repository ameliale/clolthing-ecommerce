<html>
	<head>
		<title>Suburban Outfitters</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="update-user">
	
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
		<br>
		<div class="campaign">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<h2>User Information</h2>
						<?php
							$page_roles = array('admin');

							require_once 'login.php';
							require_once 'check-session.php';

							$conn = new mysqli($hn, $un, $pw, $db);
							if ($conn->connect_error) die($conn->connect_error);

							if(isset($_GET['username'])){

							$username = $_GET['username'];

							$query = "SELECT * FROM user where username='$username'";

							$result = $conn->query($query); 
							if(!$result) die($conn->error);
								
							$rows = $result->num_rows;

							for ($j = 0 ; $j < $rows ; ++$j)  {
								
								$row = $result->fetch_array(MYSQLI_ASSOC);
								
								$role = $row['role'];
								$A=$B='';
								if($role=='admin') $A = 'selected';
								if($role=='user') $B = 'selected';
			
			
			
echo <<<_END
			
							<div class="form-container">
								<form action='user-detail.php' method='post'>
									First Name: <input type='text' name='first_name' value='$row[first_name]'>
									Last Name: <input type='text' name='last_name' value='$row[last_name]'>
									Username: <input type='text' name='username' value='$row[username]'> 
									<br>
									<br>
									User Type (Role):
										<select name='role' id='role'>
											<option value='admin' $A>Administrator</option>
											<option value='user' $B>Customer</option>
										</select>
										
										<input type='hidden' name='update' value='yes'>
										<input type='hidden' name='username' value='$row[username]'>
										<input type='submit' class='btn' style='margin-top: 35px;' value='Update User'>
								</form>
							</div>
							<div class="form-container">
								<form action='user-delete.php' method='post'>
									<input type='hidden' name='delete' value='yes'>
									<input type='hidden' name='username' value='$row[username]'>
									<input type='submit' class='btn' style='margin-top: -80px; width: 263px; margin-left: 0px;' value='Delete User'>	
								</form>
							</div>
			
_END;
			
						}  

					}

					if(isset($_POST['update'])){
						
						$username = $_POST['username'];
						$first_name = $_POST['first_name'];
						$last_name = $_POST['last_name'];
						$role = $_POST['role'];
									
							
						$query = "UPDATE user SET first_name='$first_name', last_name='$last_name', role='$role' WHERE username='$username' ";
						
						$result = $conn->query($query); 
						if(!$result) die($conn->error);
						
						header("Location: customer-list.php");
					}
					 
					$conn->close();	

					?>
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