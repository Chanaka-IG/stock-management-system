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

<html>

<head>
    <title>User Add</title>
    <link rel="stylesheet" href="./css/style_add.css " type="text/css">

</head>

<body>

<header>

		<div class="container">

			<div id="branding">
				<h1><span class="highlight">Big C</span> Supermarket</h1>
			</div>

			<nav>
				<ul>
					<li><a href="home.php ">Home</a></li>
					<li><a href="about.php ">About</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</nav>

		</div>

</header>

<div class="login_box">
    
    
        <h1>User Details</h1>
        <form action="#" method="POST">

			<p>Name</p>
			<input type="text" name="name" placeholder="Enter name">

			<p>UserID</p>
			<input type="text" name="id" placeholder="Enter user ID">
			
            <p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			
            <p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			
			<p>Telephone</p>
			<input type="text" name="telephone" placeholder="Enter mobile number">

			<p>Gender</p>
			<input type="radio" name="gender" value="male">Male
	        <input type="radio" name="gender" value="female">Female
			
			<br><br><br>
			<input type="submit" value="Register" id="submit" name="submit">
			
			<a href="view.php"><button type="button">View</button></a>
			
           
        </form>
        
	</div>
	

	<footer>
		<p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
	</footer>

</body>
</html>




<?php


	if(isset($_POST['submit']))
	{
		
		$name=$_POST["name"];
		$id=$_POST["id"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$tele=$_POST["telephone"];
		$gender=$_POST["gender"];
		

		$sql = "INSERT INTO user  VALUES ('$name','$id','$username','$password','$tele','$gender')";

		$result = mysqli_query($conn,$sql);


		if($result)
			echo"<script> alert('Registered Sucessfully') </script>";
		else
			echo"failed";
	}

?>