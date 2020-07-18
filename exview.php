
<?php



$localhost= "localhost";
$dbusername="root";
$dbpassword="";
$dbname="alhelper";

#connection string
$conn= mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Big C | Supermarket</title>
    <link rel="stylesheet" href="./css/style_view.css " type="text/css">

</head>

<body>

	<?php
		$sql = "SELECT * FROM fileup";
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



	</header>

	<table border=1>
			<tr>
				<th>title</th>
				<th>paper number</th>
				<th>paper</th>
				<th>Download</th>

			</tr>

			
			<?php
				while($row=mysqli_fetch_assoc($result)){

			?>

			<tr>
				<td><?php echo $row['title'] ?></td>
				<td><?php echo $row['paper_no'] ?></td>
				<td><?php echo $row['paper'] ?></td>
				

				<?php echo "<td><a href =download.php?dow='".$row['paper']."' > Download </a> </td>"?>
			

			</tr>

			<?php
	}
	?>
</table>


	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>