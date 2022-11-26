<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>

<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require 'conn.php';
		require 'db.php';
		$query = mysqli_query($conn, "SELECT * FROM `fproduct` WHERE `product` LIKE '%$keyword%' ORDER BY `product`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">

	    <?php
			$picDestination = "images/productImages/".$fetch['pimage'];
		?>
		<h2 style="color: black;"><?php echo $fetch['product']?></h2>
		<center>
		<div style="width: 400px;">
		<a href="review.php?pid=<?php echo $fetch['pid'] ;?>" ><img class="image fit" src="<?php echo $picDestination;?>" height="220;" width="100;"  /></a>
	    </div>
	</center>
	    <p>Price:</p>
		<p>Ksh. <?php echo substr($fetch['price'], 0, 100)?></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>	
	<?php
		}
	?>
	<h2>Other Products</h2>
</div>
<?php
	}
?>