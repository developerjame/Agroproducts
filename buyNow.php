<?php
	session_start();
	require 'db.php';
    $pid = $_GET['pid'];
    
    $sql="SELECT * FROM fproduct WHERE pid = '$pid'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $fid = $row['fid'];
                    $sql = "SELECT * FROM farmer WHERE fid = '$fid'";
                    $result = mysqli_query($conn, $sql);
                    $frow = mysqli_fetch_assoc($result);
                    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO transaction (fid, bid, pid, quantity, name, city, mobile, email, pincode, addr)
                VALUES ('$fid', '$bid', '$pid', '$quantity', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/success.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
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
<body>

    <?php
        require 'menu1.php';
    ?>


    <section id="main" class="wrapper" >
        <div class="container">
        <center>
                <h2>Transaction Details</h2>
        </center>
        <section id="two" class="wrapper style2 align-center">
        <div class="container">
            <center>
                <form method="post" action="buyNow.php?pid=<?= $pid; ?>" style="border: 1px solid black; padding: 15px;">
                    <center>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="city" id="city" value="" placeholder="City" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>

                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="pincode" id="pincode" value="" placeholder="Pincode" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="addr" id="addr" value="" placeholder="Address" required/>
                        </div>
                    </div>
                    <div class="row uniform">    
                        <div class="10u 12u$(xsmall)">
                            <br><p>Please Enter the Quantity of your Product you Ordered</p>
                            <input type="number" name="quantity" value="1" min="1" max="<?=$row['quantity']?>" required/>
                        </div>
                    </div>
                    <br />
                    <p>
                        <input type="submit" value="Confirm Order" />
                    </p>
                </center>
            </form>
        </fieldset>
