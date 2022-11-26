<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="#">AgroProducts</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						
						<li><a href="profileView1.php"><span class="<?php echo $logo; ?>"></span> <?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market1.php"><span class="glyphicon glyphicon-grain">.Online-Market</a></li>
						<li><a href="blogView1.php"><span class="glyphicon glyphicon-comment">.Chats</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
