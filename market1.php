<?php
 	session_start();
	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroProducts</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<?php require 'menu1.php'; ?>
	<body>



		<!-- One -->
			<section id="one" class="wrapper style1 align-center" style="height: 600px">
				<div class="container">
					<h2>Welcome to Online Market</h2>
					<br />
					<div style="border-top: 1px solid black; border-bottom: 1px solid black; padding-top: 30px;" class="row 200%">
						<section class="3u 12u$(small)">
							<a href="profileView1.php"><img style="border-top: 1px solid white;" src="profileDefault.png"></a>
							<p>Your Profile</p>
						</section>
						<section class="3u 12u$(small)">
							<a href="productMenu1.php?n=1" name="catSearch"><img src="search.png"></a>
							<p>Search according to your needs</p>
						</section>
						<section class="3u 12u$(small)">
							<a href="productmenu1.php?n=0"><img style="border-top: 1px solid white;" src="products.png" width="50" height="50"></a>
							<p>Our products</p>
						</section>
						<section class="3u$ 12u$(small)">
							<a href="order.php"><img style="border-top: 1px solid white;" src="cart.png" width="50" height="50"></a>
							<p>View Your Order</p>
						</section>
					</div>
				</div>
			</section>
	</body>
</html>
