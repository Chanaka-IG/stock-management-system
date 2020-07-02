<?php
	require_once('conn.php');
?>

<?php

if(isset($_GET['prod_code']))
{
    $sql_code = "SELECT * FROM items WHERE prod_code =".$_GET['prod_code'];
    $result = mysqli_query($conn,$sql_code);
    $row=mysqli_fetch_assoc($result);
    if($result){}


//echo "Sucessfull";
}

else{
    echo"failed";	
}



if(isset($_POST['submit'])){/*
	$stock= $_POST['stock'];
	if($stock > $row['max_stock']) {
		echo"<script> alert('Updated unucessfully') </script>";
	} else {
		echo 'not found';
	}*/
$sql_set = "UPDATE items SET start_stock = '".$_POST['stock']."' WHERE prod_code ='".$_POST['id']."'";
$result2 = mysqli_query($conn,$sql_set);

$sql_get = "SELECT * FROM items WHERE prod_code =".$_POST['id'];
$result3 = mysqli_query($conn,$sql_get);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['prod_code'])&&!isset($_POST['submit'])){
//  header("Location: all.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./css/style_update.css">
	<title></title>

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
	<section id="main">
        <div class="container">
            <article id="main-col">
				<br>
				<br>
			<h1><?php echo"".$row['prod_name'].""?></h1> 
			<div class="codes">
			
			<form action='#' method ='POST' class="input" >
			<table class="tableBox">
<tr>
	<td>Product Code</td>
	<td><?php  echo "<td><input type = 'text' name='id' required value =".$row['prod_code']." readonly></td>";
?></td>
</tr>

<tr>
	<td>Product Name</td>
	<td><?php	echo "<td><input type = 'text' name='name' required value =".$row['prod_name']." readonly></td>";
?></td>
</tr>

<tr>

	<td>New Stock</td>
	<td><?php echo "<td><input type = 'text' name='stock' required value =".$row['start_stock']."></td>";?></td>
</tr>
<tr>
<tr>
</tr><td></td>
	<td><input  class="button_view" type='submit' value="Update" name='submit'></td>
	<td ><button class="button_view"> <a href="./view/veg.php">view</a></button></td>
</tr>
</form>
</table>	
</div>

			</article>
		</div>
	</section>
	<footer class="footer_update">
        <p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
    </footer>
</body>
</html>