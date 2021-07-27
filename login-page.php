<html>
	<head>
		<title>Suburban Outfitters Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="suburbanStyles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>
	
	<body id="login-page">
	
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
		
		<!-------Sign In ---------->
		<div class="login-page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="form-container">
							<div class="form-btn">
								<h4>Login</h4>
							</div>
							<form method='post' action='login-page.php'>
								<input type="text" placeholder="Username" name="username">
								<input type="password" placeholder="Password" name="password">
								<input type='submit' value='Sign In' class='btn'>
								<a href="signup-page.php" class="btn" type="submit" style="width: 100%; margin-top: 0px;">Register</a>
								<a href="#" style="color: gray; text-decoration: underline;">Forgot Your Password?</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php


			require_once 'login.php';
			require_once 'user.php';


			$conn = new mysqli($hn, $un, $pw, $db);
			if($conn->connect_error) die($conn->connect_error);

			if (isset($_POST['username']) && isset($_POST['password'])) {
				
				
				$tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
				$tmp_password = mysql_entities_fix_string($conn, $_POST['password']);
				
				
				
				$query = "SELECT * FROM user WHERE username = '$tmp_username'";
				
				
				$result = $conn->query($query); 
				if(!$result) die($conn->error);
				
				$rows = $result->num_rows;
				$passwordFromDB="";
				for($j=0; $j<$rows; $j++)
				{
					$result->data_seek($j); 
					$row = $result->fetch_array(MYSQLI_ASSOC);
					$passwordFromDB = $row['password'];
					$role = $row['role'];
					$username = $row['username'];
				}
				
				
				if(password_verify($tmp_password,$passwordFromDB))
				{
					echo "successful login<br>";
					
					$user = new User($tmp_username);
					
					if($role == "admin")
					{
						session_start();
						$_SESSION['user'] = $user;
						
						
						header("Location: admin-page.php");
					}
					else
					{
						session_start();
						$_SESSION['user'] = $user;
						
						header("Location: profile-page.php");
					}
				}
				else
				{
					echo "login error<br>";
				}	
				
			}

			$conn->close();



			function mysql_entities_fix_string($conn, $string){
				return htmlentities(mysql_fix_string($conn, $string));	
			}

			function mysql_fix_string($conn, $string){
				$string = stripslashes($string);
				return $conn->real_escape_string($string);
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
</html>
