<?php
    session_start();
    require 'db.php';
    $bid = $_GET['bid'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>AgroProduct: Transaction</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>AgroCulture</title>
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
<?php require 'menu.php'; ?>
<body>

                    <?php

                    $sql="SELECT * FROM transaction WHERE bid = '$bid'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $pid = $row['pid'];
                    $sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
                    $result = mysqli_query($conn, $sql);
                    $frow = mysqli_fetch_assoc($result);

                    $picDestination = "images/productImages/".$frow['pimage'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $total_price = $_POST['total_price'];
        $fid = $_SESSION['id'];

        $sql = "INSERT INTO sale (fid, product, price, quantity, total_price)
                VALUES ('$fid', '$product', '$price', '$quantity', '$total_price')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Sale Succesfully Done!";
            header('Location: mycustomers.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Sale was not completed";
            //header('Location: Login/error.php');
        }
    }

                    ?>
    <section id="main" class="wrapper" >
        <div class="container">
        <center>
                <h2>SALES</h2>
        </center>
        <section id="two" class="wrapper style2 align-center">
        <div class="container">
            <center>
                <form method="post" action="confirm_sales.php?pid=<?= $pid; ?>" style="border: 1px solid black; padding: 15px;">
                    <center>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <p>Product Name:</p>
                            <input type="text" name="product" id="product" value="<?php echo $frow['product'];?>" placeholder="" readonly />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <p>Price:</p>
                            <input type="text" name="price" id="price" value="<?php echo $dr=$frow['price'];?>" placeholder="" readonly/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <p>Quantity:</p>
                            <input type="text" name="quantity" id="quantity" value="<?php echo $fpm=$row['quantity'];?>" placeholder="" readonly/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <p>Total Price:</p>
                            <input type="text" name="total_price" id="total_price" value="<?php echo $dr*$fpm;?>" placeholder="" readonly/>
                        </div>
                    </div>
                    <br />
                    <p>
                        <input type="submit" value="Finish Sale" />
                    </p>
                </center>
            </form>
        </fieldset>
