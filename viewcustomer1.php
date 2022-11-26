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
		<style>
			b{
				font-weight: 750;
			}
			h4{
				font-weight: 900;
				color: green;
			}
			b{
				padding-left: 25px;
				padding-right: 25px;
			}
		</style>
</head>
<body>


				<?php
					require 'menu.php';

					$sql="SELECT * FROM transaction WHERE bid = '$bid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$pid = $row['pid'];
					$sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$frow['pimage'];

					?>
				<h2 class="page-title">Customer Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">
							All Customer Details
							<a class="btn btn-danger" style="text-decoration: none;float: right;" href="confirm_sales.php?bid=<?php echo $row['bid'] ;?>">Confirm Sale</a>
						    </div>
							<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%">
									
									
									<tbody>

<tr>
<td colspan="3"><h4>Product Realted Info</h4></td>
<td><a href="full-details.php?bid=<?php echo $row['bid'] ;?>">Print Data</a><b> || </b><a href="receipt.php?bid=<?php echo $row['bid'] ;?>">Print Receipt</td>
</tr>
<tr>
<td colspan="4"><b>Order Date : <?php echo $row['orderdate'];?></b></td>
</tr>



<tr>
<td><b>Product Name :</b></td>
<td><?php echo $frow['product'];?></td>
<td><b>Price :</b></td>
<td><?php echo $dr=$frow['price'];?></td>
</tr>
<tr>
<td><b>Quantity Ordered:</b></td>
<td><?php echo $fpm=$row['quantity'];?></td>
<td><b>Product Features :</b></td>
<td><?php echo $frow['pinfo'];?></td>
</tr>
<tr>
<td><b>TOTAL PAYMENT</b></td>
<td>Ksh.<?php echo $dr*$fpm;?>.00</td>
</tr>

<tr>
<td colspan="4"><h4>Customer Info</h4></td>
</tr>

<tr>
<td><b>Full Name :</b></td>
<td><?php echo $row['name'];?>
<td><b>City :</b></td>
<td><?php echo $row['city'];?></td>
</tr>


<tr>
<td><b>Mobile Number :</b></td>
<td><?php echo $row['mobile'];?></td>
<td><b>Email :</b></td>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<td><b>PinCode :</b></td>
<td><?php echo $row['pincode'];?></td>
</tr>


<tr>
<td colspan="4"><h4>Addresses</h4></td>
</tr>
<tr>
<td colspan=""><b>Customer Address</b></td>
<td colspan="">
<?php echo $row['addr'];?><br />

</td>

</tr>
<?php
  
?>
</tbody>
</table>
</div>
</div>

	</body>
	</html>
	<?php

						$row = $result->fetch_array();
					
						?>
