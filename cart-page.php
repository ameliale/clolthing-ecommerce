<?php
session_start();

require_once 'login.php';

?>
<html>
	<head>
		<title>Suburban Outfitters Cart</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="cart-page">
	
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
		
		<!-------- Cart Items Details ------->
		<div class="small-container cart-page">
			<h2>Shopping Cart</h2>
			<table>
				<tr>
					<th>Product</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
				<?php
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
									<tr>
										<td>
											<div class="cart-info">
												<img src="$row[imagepath1]">
												<div class="item-info">
													<p>$row[prodName]</p>
													<small>
														<select>
															<option>Small</option>
															<option>Medium</option>
															<option>Large</option>
															<option>X-Large</option>
															<option>XX-Large</option>
														</select>
													</small>
													<a href="#">Remove</a>
												</div>
											</div>
										</td>
										<td><input type="number" value="1"></td>
										<td>$$row[price]</td>
									</tr>
								</table>
								<div class="total-price">
									<table>
										<tr>
											<td style="font-weight: bold;">Subtotal:</td>
											<td>$$row[price]</td>
										</tr>
										<tr>
											<td style="font-weight: bold;">Total:</td>
											<td>$$row[price]</td>
										</tr>
									</table>
								</div>
								<div class="check-out-btn">
									<a href="checkout-page.php" class="btn" style="margin-left: 70.5%; width: 30%; margin-top: 10px;">Check-Out</a>
								</div>
_END;
							}
						}
						$conn->close();
				?>
			</table>
		</div>
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
</head>