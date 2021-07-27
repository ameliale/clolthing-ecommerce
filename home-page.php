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
						<a class="dropdown-item" href="profile-page.php">Profile</a><br>
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
	
		<!-------- Collage Image --------->
		<div class="container-fluid">
			<img src="images/header-collage.png" alt="frontpage-img" style="width: 100%;">
		</div>
		
		<!------ Categories -------->
		<div class="container-fluid">
			<div class="categories">
				<div class="small-container">
					<div class="row">
						<div class="col-sm-3">
							<h2 class="categories-name">DRESSES</h2>
							<a href="collection-dress.php"><img src="images/floral-dress1.png"></a>
						</div>
						<div class="col-sm-3">
							<h2 class="categories-name">TOPS</h2>
							<a href="collection-top.php"><img src="images/blue-collar-top1.png"></a>
						</div>
						<div class="col-sm-3">
							<h2 class="categories-name">BOTTOMS</h2>
							<a href="collection-bottom.php"><img src="images/pattern-skirt1.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!------ Featured Products ----->
		<div class="container-fluid">
			<div class="small-container-fluid">
				<h2 class="title">FEATURED PRODUCTS</h2>
				<div class="row">
					<?php
						require_once 'login.php';
						
						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);
						
						$query = "SELECT * FROM product WHERE selection = 'Featured'";
						
						$result = $conn->query($query);
						if(!$result) die($conn->error);
						
						$rows = $result->num_rows;

						for($j = 0; $j < $rows; $j++)
						{
							$row = $result -> fetch_array(MYSQLI_ASSOC);
						
echo <<<_END
							<div class="col-sm-4">
								<a href="product-details.php?prodID=$row[prodID]"><img src="$row[imagepath1]"></a>
								<h4>$row[prodName]</h4>
								<p>$$row[price]</p>
							</div>
_END;
						}
					?>
				</div>
			</div>
		</div>
		
		<!------ New Arrivals ------>
		<div class="container-fluid">
			<div class="small-container-fluid">
				<h2 class="title">NEW ARRIVALS</h2>
				<div class="row">
					<?php
						require_once 'login.php';
						
						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);
						
						$query = "SELECT * FROM product WHERE selection = 'New Arrival'";
						
						$result = $conn->query($query);
						if(!$result) die($conn->error);
						
						$rows = $result->num_rows;

						for($j = 0; $j < $rows; $j++)
						{
							$row = $result -> fetch_array(MYSQLI_ASSOC);
						
echo <<<_END
							<div class="col-sm-2">
								<a href="product-details.php?prodID=$row[prodID]"><img src="$row[imagepath1]"></a>
								<h4>$row[prodName]</h4>
								<p>$$row[price]</p>
							</div>
_END;
						}
					?>
				</div>
			</div>
		</div>
		
		<!------ Promotion ------->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/discount-banner.png">
				</div>
				<div class="col-sm-6">
					<a href="collection-sale.php"><img src="images/sale-banner.png"></a>
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