.<?php
session_start();


$host="localhost";
$user="root";
$password="";
$db="stock";

$connection = mysqli_connect($host,$user,$password,$db) or die("DB connection failed");

//mysqli_select_db($connection,$db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$uname' AND password='$password'";
    
    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0){
        $res=mysqli_fetch_row($result);
        $_SESSION["uname"]="yes";
        echo " You Have Successfully Logged in";
        if($res[2]=="ucsc" && $res[3]=="ucsc")
        {
            header("Location: home.php");
        }
        else
        {
            header("Location: home1.php");
        }
        exit();
    }
    else{
        echo"<script> alert('You have enterd wrong username or password') </script>";
        exit();
    }
        
}


?>


<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style_login.css " type="text/css">

<style>

    body{
        background: url("images/showcase.jpg");
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        }

</style>

</head>

<body>
<div class="login_box">
    
    <img src="icons/user.png" class="icon">
        <h1>Login Here</h1>
        <form name="Book" action="#" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br><br><br>
            <input type="submit" value="LOGIN" id="submit" name="submit">
			
           
        </form>
        
    </div>
</body>
</html>