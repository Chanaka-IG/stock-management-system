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
	<title>Big C | Supermarket</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>

		<div class="container">

			<div id="branding">
				<h1><span class="highlight">Big C </span>Supermarket</h1>
			</div>

			<nav>
				<ul>
					<li ><a href="home1.php">Home</a></li>
					<li class="current"><a href="about.php ">About</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</nav>

		</div>

	</header>

	<section id="newsletter">
		<div class="container">
			<h1>Need a help ? Contact us.</h1>
			<form>
				<input type="email" name="Email" placeholder="example@gmail.com">
				<button type="submit" class="button_1">Submit</button>
			</form>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title">Overview</h1>
				<p>	Efficient management of the company stock plays a significant role in the escalation of the revenue of a company. The conventional procedure of manual stock management has major drawbacks such as inefficiency, inaccuracy and time consumption. Thus, the proposed system of Online Stock Management system will address these drawbacks by taking this procedure to an online platform.</p>
				
				<h1 class="page-title">Specifications</h1>
				<p class="dark">The administration authority is given to the admin, who is authorized for adding or deleting new users. These users can modify the stock as appropriate, and thereby make records of increase or decrease in the stock. Furthermore, they can generate reports such as Full Stock Report, Daily Report of the available stock and the reports of certain items of stock that may finish soon.</p>

			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>Goals and Objectives </h3>
					<p>
						<ul>
							<li>Efficient Management of the stock of the company</li>
							<li>Better planning and prompt ordering of insufficient stock</li>
							<li>Generating reports in order to facilitate the decision making process of the company.</li>
							<li>Better consumer satisfaction</li>
						</ul>

					</p>
				</div>
			</aside>

		</div>
	</section>

	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>