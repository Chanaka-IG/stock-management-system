<?php require_once('conn.php'); ?>
<?php
if(isset($_GET['id'])){
$sql1 = "SELECT * FROM user WHERE id =".$_GET['id'];
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['updateB'])){
$sql2 = "UPDATE user SET Name = '".$_POST['name']."',Username = '".$_POST['username']."', Telephone = '".$_POST['telephone']."',Gender = '".$_POST['gender']."' WHERE id ='".$_POST['id']."'";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM user WHERE id =".$_POST['id'];
$result3 = mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['id'])&&!isset($_POST['updateB'])){
header("Location: view.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./css/style_update.css">
	
</head>
<body>
	<header>
        <div class="container">

            <div id="branding">
                <h1><span class="highlight">Big C </span>Supermarket</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li class="current"><a href="about.php ">About</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<title></title>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Username</td>
			<td>Telephone</td>
			<td>Gender</td>

		</tr>
		<form action='update.php' method ='POST'>
			<tr>
			<?php
			echo "<td><input type = 'text' name='id' required value =".$row['id']." readonly></td>";
			echo "<td><input type = 'text' name='name' required value =".$row['name']." readonly></td>";
			echo "<td><input type = 'text' name='username' required value =".$row['username']."></td>";
			echo "<td><input type = 'text' name='telephone' required value =".$row['telephone']."></td>";
			echo "<td><input type = 'text' name='gender' required value =".$row['gender']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="view.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
	<footer class="footer_update">
        <p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
    </footer>
</body>
</html>