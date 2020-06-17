<?php
	require_once('conn.php');
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
    <link rel="stylesheet" href="./css/style_view.css " type="text/css">

</head>

<body>

	<?php
		$sql = "SELECT * FROM user";
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
			<h1><span class="highlight">Big C </span>Supermarket</h1>
		</div>

		<nav>
			<ul>
				<li ><a href="home.php">Home</a></li>
				<li><a href="about.php ">About</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
		</nav>

	</div>

	</header>

	<table border=1>
			<tr>
				<th>Name</th>
				<th>ID</th>
				<th>Username</th>
				<th>Telephone</th>
				<th>Gender</th>
				<th>Update</th>
				<th>Delete</th>

			</tr>

			
			<?php
				while($row=mysqli_fetch_assoc($result)){

			?>

			<tr>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['telephone'] ?></td>
				<td><?php echo $row['gender'] ?></td>


				<?php echo "<td><a href =update.php?id='".$row['id']."' > update </a> </td>"?>
				<?php echo "<td><a href =delete.php?id='".$row['id']."' > delete </a> </td>"?>

			</tr>

			<?php
	}
	?>
</table>

<br><a href="add2.php"><button type="button">Add</button></a>

	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>