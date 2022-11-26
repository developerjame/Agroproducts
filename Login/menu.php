<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
        <head>
    	    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
    	    </script>
        </head>
    <body>
			<header id="header">
				<h1><a href="#">AgroProduct</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="../market.php"><span class="glyphicon glyphicon-grain"></span> Online-Market</a></li>
						<li><a href="../weather.php"><i class="glyphicon glyphicon-cloud"></i> Weather-Forecast</a></li>
						<li><a href="../blogView.php"><span class="glyphicon glyphicon-comment"></span> Chats</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
