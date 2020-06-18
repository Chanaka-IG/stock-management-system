<?php 
session_start();
if(!isset($_SESSION["uname"]))
{
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Big C| Supermarket</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>

		<div class="container">

			<div id="branding">
				<h1><span class="highlight">Big C</span> Supermarket</h1>
			</div>

			<nav>
				<ul>
					<li class="current"><a href="home.php ">Home</a></li>
					<li><a href="about.php ">About</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</nav>

		</div>

	</header>

	<section id="showcase">
		<div class="container">
			<h1>Inventory Managment System </h1>
			<p>Maximise your margin and profitability through real-time inventory management. Improved efficiency with automated processes and an integrated production functionality.</p>
		</div>
	</section>

	<section id="newsletter">
		<div class="container">
			<h1>Need a help ? Contact us.</h1>
			<form>
				<input type="email" name="Email" placeholder="example@gmail.com">
				<button type="submit" class="button_1">Submit</button>
			</form>
		</div>
	</section>

	<section id="boxes">
		<div class="container">
			<div class="box">
				<a href="block.php"><img src="./img/logo_html.png"></a>
				<h3>Stock Managment</h3>
				<p>Ordering, Storing, Tracking and Controlling Inventory. </p>
			</div>

			<div class="box">
				<a href="./reports/daily_report.php"><img src="./img/logo_css.png"></a>
				<h3>Report Genarating</h3>
				<p>Genarates reports of inventories for a perticular time periods.</p>
			</div>

			<div class="box">
				<a href="add2.php"><img src="./img/logo_brush.png"></a>
				<h3>User Managment</h3>
				<p>Manage users and their details.Only admin can access this.</p>
			</div>
		</div>
	</section>

	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>