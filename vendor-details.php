<html>
	<head>
		<title>Suburban Outfitters</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="vendor-details">
	
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
			<button class="tablinks"><a href="campaign.php" style="color: white;">Campaign</a></button>
			<button class="tablinks"><a href="customer-list.php" style="color: white;">Customers</a></button>
		</div>
		<br>
		<div class="vendor">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<h2>Vendor Information</h2>
		<?php
						require_once 'login.php';

						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);

						if(isset($_GET['vendorID'])) {
	
							$vendorID = $_GET['vendorID'];
	
							$query = "SELECT * FROM vendor WHERE vendorID=$vendorID";
	
							$result = $conn->query($query); 
							if(!$result) die($conn->error);

							$rows = $result->num_rows;
	
							for($j=0; $j<$rows; $j++)
							{
								$row = $result->fetch_array(MYSQLI_ASSOC);
echo <<<_END

						<div class="form-container" style="margin-top: 35px;">
							<form method='post' action='vendor-details.php'>
								Vendor #: <input type='text' name='vendorID' value='$row[vendorID]' style='font-size: 15px;'>
								Vendor Name: <input type='text' name='vendorName' value='$row[vendorName]' style='font-size: 15px;'>
								Vendor Address: <input type='text' name='vendor_address' value='$row[vendor_address]' style='font-size: 15px;'>
								
								<input type='hidden' name='update' value='yes'>
								<input type='hidden' name='vendorID' value='$row[vendorID]'>
								<input type='submit' class='btn' value='Update Vendor'>	
									
							</form>
							
						</div>
						<div class="form-container" style="margin-top: 35px;">
							<form action='vendor-delete.php' method='post'>
								<input type='hidden' name='delete' value='yes'>
								<input type='hidden' name='vendorID' value='$row[vendorID]'>
								<input type='submit' class='btn' style='margin-top: -180px; width: 263px; margin-left: 0px;' value='Delete Vendor'>	
							</form>
						</div>
		
		
_END;
							}
						}
						if(isset($_POST['update']))
						{
							$vendorID = $_POST['vendorID'];
							$vendorName = $_POST['vendorName'];
							$vendor_address = $_POST['vendor_address'];
							
							
							$query = "UPDATE vendor SET vendorID='$vendorID', vendorName='$vendorName', vendor_address='$vendor_address' WHERE vendorID=$vendorID";
							
							$result = $conn->query($query); 
							if(!$result) die($conn->error);
							
							header("Location: vendors.php");
							
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