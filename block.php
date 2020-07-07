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
	<link rel="stylesheet" type="text/css" href="./css/style_block.css">
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
					<li ><a href="about.php ">About</a></li>
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
    
    <div class="content">

        <div class="block b1"><a href="./view/veg.php">Vegitables</a></div>
        <div class="block b2"><a href="./view/fruit.php">Fruits</a></div>
        <div class="block b3"><a href="./view/rice.php">Rice</a></div>
        <div class="block b4"><a href="./view/milk.php">Milk</a></div>


    </div>

    <div class="content">

        <div class="block b1"><a href="./view/soap.php">Soap</a></div>
        <div class="block b2"><a href="./view/chocolate.php">Chocolate</a></div>
        <div class="block b3"><a href="./view/bread.php">Bread</a></div>
        <div class="block b4"><a href="./view/all.php">All Products</a></div>


    </div>


    <footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
    </footer>
    
    
</body>
</html>