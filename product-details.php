<?php
session_start();
?>
<html>
	<head>
		<title>Suburban Outfitters Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="product-detail">
	
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
		
		<!------ Product Detail ------->
		<div class="container-fluid">
			<div class="small-container-fluid product">
				<div class="row">
					<?php
						require_once 'login.php';

						$conn = new mysqli($hn, $un, $pw, $db);
						if($conn->connect_error) die($conn->connect_error);

						if(isset($_GET['prodID'])) {
	
							$prodID = $_GET['prodID'];
	
							$query = "SELECT * FROM product WHERE prodID=$prodID ";
	
							$result = $conn->query($query); 
							if(!$result) die($conn->error);

							$rows = $result->num_rows;
	
							for($j=0; $j<$rows; $j++)
							{
								$row = $result->fetch_array(MYSQLI_ASSOC);
						
echo <<<_END
	<div class="col-sm-8">
		<p style="color: gray;"> Home / $row[prodType] / $row[prodName]</p>
		<img src="$row[imagepath1]">
		<div class="small-img-row">
			<img src="$row[imagepath2]">
		</div>
		<div class="small-img-row">
			<img src="$row[imagepath3]">
		</div>
	</div>
	<div class="col-sm-8">
		<h1>$row[prodName]</h1>
		<h4>$$row[price]</h4>
		<select>
			<option>Select Size</option>
			<option>Small</option>
			<option>Medium</option>
			<option>Large</option>
			<option>X-Large</option>
			<option>XX-Large</option>
		</select>
		<input type="number" value ="1">
		<a href="cart-page.php?prodID=$row[prodID]" class="btn" name="add-to-cart">Add to Cart</a>
		</div>
_END;
							}
						}
						$conn->close();
					?>
				</div>
			</div>
		</div>
		
		<!------ For You ------>
		<div class="container-fluid">
			<div class="small-container-fluid">
				<h2 class="title">RECOMMENDED FOR YOU</h2>
				<div class="row">
					<div class="col-sm-2">
						<a href="#"><img src="images/green-top1.png"></a>
						<h4>Green Crop Top</h4>
						<p>$20.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="images/green-brown-jeans1.png"></a>
						<h4>Two Tones Patch Jeans</h4>
						<p>$45.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="images/butterfly-jeans1.png"></a>
						<h4>Butterfly Patch Jeans</h4>
						<p>$35.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="images/black-sweater1.png"></a>
						<h4>Black Argyle Cardigan</h4>
						<p>$35.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="images/sweater1.png"></a>
						<h4>Letter Pullover</h4>
						<p>$39.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="images/zebra-pants1.png"></a>
						<h4>Zebra Pattern Pants</h4>
						<p>$35.00</p>
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