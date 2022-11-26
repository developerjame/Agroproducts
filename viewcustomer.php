<?php
	session_start();
	require 'db.php';
	$bid = $_GET['bid'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>AgroProducts: Product</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>AgroProducts</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>


				<?php
					require 'menu1.php';

					$sql="SELECT * FROM transaction WHERE bid = '$bid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$pid = $row['pid'];
					$sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$frow['pimage'];

					?>
				<section id="main" class="wrapper style1 align-center">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<img class="image fit" src="<?php echo $picDestination.'';?>" alt="" />
								</div><!-- Image of farmer-->
								<div class="col-12 col-sm-6">
									<p style="font: 50px Times new roman;"><?= $frow['product']; ?></p>
									<p style="font: 30px Times new roman;">Price : <?= $frow['price'].' /-'; ?></p>
									<p style="font: 30px Times new roman;">Quantity Ordered : <?= $row['quantity']; ?></p>
                                   
								</div>
							</div><br />
							<div class="row">
								<div class="col-12 col-sm-12" style="font: 25px Times new roman;">
									<?= $frow['pinfo']; ?>
								</div>
							</div>
						</div>

						<br /><br />

					
			<?php

			?>

	</body>
	</html>
	<?php

						$row = $result->fetch_array();
					
						?>
