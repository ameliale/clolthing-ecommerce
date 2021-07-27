<html>
	<head>
		<title>Suburban Outfitters Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="inventory-detail">
	
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
	
							$query = "SELECT product.prodID, product.prodName, product.price, product.prodType, product.selection, product.imagepath1, product.imagepath2, product.imagepath3, inventory.prodID, inventory.quantity, inventory.date_ordered, inventory.cost FROM product, inventory WHERE product.prodID = inventory.prodID AND product.prodID=$prodID GROUP BY product.prodName ";
	
							$result = $conn->query($query); 
							if(!$result) die($conn->error);

							$rows = $result->num_rows;
	
							for($j=0; $j<$rows; $j++)
							{
								$row = $result->fetch_array(MYSQLI_ASSOC);
echo <<<_END
						<div class="col-sm-2" style="margin-left: 350px;">
							<p style="color: gray; font-size: 15px;"> Home / $row[prodType] / $row[prodName]</p>
							<img src="$row[imagepath1]">
							<div class="small-img-row">
								<img src="$row[imagepath2]">
							</div>
							<div class="small-img-row">
								<img src="$row[imagepath3]">
							</div>
						</div>
						<div class="form-container" style="margin-top: 35px;">
							<form method='post' action='inventory-detail.php'>
								Product ID: <input type='text' name='prodID' value='$row[prodID]' style='font-size: 15px;'>
								Product Name: <input type='text' name='prodName' value='$row[prodName]' style='font-size: 15px;'>
								Product Price: <input type='text' name='price' value='$row[price]' style='font-size: 15px;'>
								Product Quantity: <input type='text' name='quantity' value='$row[quantity]' style='font-size: 15px;'>
								Product Type: <input type='text' name='prodType' value='$row[prodType]' style='font-size: 15px;'>
								Product Selection: <input type='text' name='selection' value='$row[selection]' style='font-size: 15px;'>
								Date Ordered: <input type='date' name='date_ordered' value='$row[date_ordered]' style='font-size: 15px;'>
								Cost: <input type='text' name='cost' value='$row[cost]' style='font-size: 15px;'>
								Image 1: <input type='text' name='imagepath1' value='$row[imagepath1]' style='font-size: 13px;'>
								Image 2: <input type='text' name='imagepath2' value='$row[imagepath2]' style='font-size: 13px;'>
								Image 3: <input type='text' name='imagepath3' value='$row[imagepath3]' style='font-size: 13px;'>
								
								<input type='hidden' name='update' value='yes'>
								<input type='hidden' name='prodID' value='$row[prodID]'>
								<input type='submit' class='btn' value='Update Product'>	
									
							</form>
						</div>
							<form action='inventory-delete.php' method='post'>
								<input type='hidden' name='delete' value='yes'>
								<input type='hidden' name='prodID' value='$row[prodID]'>
								<input type='submit' class='btn' style='margin-top: 875px; width: 260px; margin-left: -805px;' value='Delete Product'>	
							</form>
		
		
_END;
							}
						}
						if(isset($_POST['update']))
						{
							$prodID = $_POST['prodID'];
							$prodName = $_POST['prodName'];
							$price = $_POST['price'];
							$quantity = $_POST['quantity'];
							$prodType = $_POST['prodType'];
							$selection = $_POST['selection'];
							$date_ordered = $_POST['date_ordered'];
							$cost = $_POST['cost'];
							$imagepath1 = $_POST['imagepath1'];
							$imagepath2 = $_POST['imagepath2'];
							$imagepath3 = $_POST['imagepath3'];
							
							$query1 = "UPDATE product SET product.prodName='$prodName', product.price='$price', product.prodType='$prodType', product.selection='$selection', product.imagepath1='$imagepath1', product.imagepath2='$imagepath2', product.imagepath3='$imagepath3' WHERE product.prodID=$prodID";
							$query2 = "UPDATE inventory SET inventory.quantity='$quantity', inventory.cost='$cost', inventory.date_ordered='$date_ordered', inventory.imagepath='$imagepath1' WHERE inventory.prodID=$prodID";
							
							$result1 = $conn->query($query1); 
							if(!$result1) die($conn->error);
							
							$result2 = $conn->query($query2); 
							if(!$result2) die($conn->error);
							
							header("Location: inventory.php");
							
						}
						
						$conn->close();
					?>
				</div>
			</div>
		</div>
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
