<?php
	require_once('../conn.php');
?>

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
    <link rel="stylesheet" href="../css/style_view.css " type="text/css">

</head>

<body>

	<?php
		$sql = "SELECT * FROM items WHERE prod_code LIKE '4000%' ";
		mysqli_query($conn, $sql);
		$result = mysqli_query($conn,$sql);

		if($result){
			//echo "Sucessfull";
			}
		else{
			echo"failed";	
			}

	?>
	<header>

	<div class="container">

		<div id="branding">
			<h1><span class="highlight">Big C </span>Supermarket<span class="highlight"> Milk</span></h1>
		</div>

		<nav>
			<ul>
				<li ><a href="../home1.php">Home</a></li>
				<li><a href="../about.php ">About</a></li>
				<li><a href="../logout.php">logout</a></li>
			</ul>
		</nav>

	</div>

	</header>

	<table border=1>
			<tr>
				<th>Product Code</th>
				<th>Product Name</th>
				<th>Stock</th>
				<th>Update</th>

			</tr>

			
			<?php
				while($row=mysqli_fetch_assoc($result)){

			?>

			<tr>
				<td><?php echo $row['prod_code'] ?></td>
				<td><?php echo $row['prod_name'] ?></td>
				<td><?php echo $row['start_stock'] ?></td>


				<?php echo "<td><a href =../stock_update.php?prod_code='".$row['prod_code']."' > update </a> </td>"?>

			</tr>

			<?php
	}
	?>
</table>

<br><a href="../add123.php"><button type="button">Add</button></a>

	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>