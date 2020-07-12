<!DOCTYPE html>
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
    <title>Add New Items</title>
    <link rel="stylesheet" href="./css/style_add_items.css " type="text/css">

    <?php



                    if(isset($_POST['PassToDb'])){

                        $add_items = "INSERT INTO items values ('".$_POST['prod_code']."','".$_POST['prod_name']."','".$_POST['start_stock']."','".$_POST['max_stock']."')";
                        $add_order = "INSERT INTO  order (prod_code,seller_code) Values ('".$_POST['prod_code']."','".$_POST['seller_code']."',)";
                        $add_seller = "INSERT INTO seller (seller_code ,seller_name,seller_ad,seller_phone) values ('".$_POST['seller_code']."','".$_POST['seller_name']."','".$_POST['seller_ad']."','".$_POST['seller_phone']."')"; 
                        $result = mysqli_query($conn,$add_items);
                        $result2 = mysqli_query($conn,$add_seller);
                        if($result){
                            if($result2)
                                echo"<script> alert('New Data Added') </script>";
                            else

                                echo"<script> alert('New Item Added') </script>";}
                        else
                            echo"failed";
                    
                    }

     ?>
</head>

<body>
    <header>
        <div class="container">

            <div id="branding">
                <h1><span class="highlight">Big C </span>Supermarket</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home1.php">Home</a></li>
                    <li class="current"><a href="about.php ">About</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <article id="main-col">


                <div class="items_box">
                    <h1> Add New Items </h1>
                    
            <div class="codes">
                                    <h3>Starting Product Codes </h3>

                                    <ul>
                                        <li>Veg :1000</li>
                                        <li>Furit:2000</li>
                                        <li>Rice :3000</li>
                                        <li>Milk :4000</li>
                                        <li>Soap :5000</li>
                                        <li>Chocolates :6000</li>
                                        <li>Bread :7000</li>
                                        
                                    </ul>

                                 </div>

                    <form action='#' method="POST" class="input">
                        <table class="tableBox">
                            <tr>
                                <td>
                                    <table class="tableBox">
                                        <tr >
                                            <td colspan=2>
                                                <h3>Product Information</h3>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr>
                                            <td>Prod Code :</td>
                                            <td><input type="text" name="prod_code" maxlength="10" required></td>
                                        </tr>
                                        <tr>
                                            <td>Prod Name :</td>
                                            <td><input type="text" name="prod_name" required></td>
                                        </tr>
                                        <tr>
                                            <td>Starting Stock :</td>
                                            <td><input type="number" name="start_stock" maxlength="6" required></td>
                                        </tr>
                                        <tr>
                                            <td>Maxcimum Stock :</td>
                                            <td><input type="number" name="max_stock" maxlength="6"></td>
                                        </tr>
                                        <tr><td></tr>
                                        <tr></tr>

                                        <tr>
                                            <td colspan=2>
                                               <h3>Seller Information</h3>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr>
                                            <td>Seller Code :</td>
                                            <td><input type="text"  name="seller_code" maxlength="10" required></td>

                                        </tr>
                                        <tr>
                                            <td>Seller Name :</td>
                                            <td><input type="text" name="seller_name" required></td>
                                        </tr>
                                        <tr>
                                            <td>Seller Address :</td>
                                            <td><input type="text" name="seller_ad" ></td>
                                        </tr>

                                        <tr>
                                            <td>Seller Contact number :</td>
                                            <td><input type="text" name="seller_phone" maxlength="10" required></td>
                                        </tr>
                                        

                                    </table><br>
                       
                        </table>


                        <br>
                        <br>


                        <input  type="submit" value="Submit" name="PassToDb" class="btn_add">

                        <input type="reset" value="Clear" class="btn_add">

                    </form>
                    </table>
            </article>

        </div>
    </section>
    <footer class="footer_add">
        <p>Big C Stock Managment Systems, Copyright &copy; 2019</p>
    </footer>
</body>


</html>