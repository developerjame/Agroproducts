<?php
	session_start();
	require 'db.php';
	$bid = $_GET['bid'];

?>

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