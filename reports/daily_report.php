<!DOCTYPE html>

<?php
require_once 'config.php';

?>



<html>

<head>
    <title> Report Generation </title>
    <link rel="stylesheet" type="text/css" href="report.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="background-image">

<header>

<div class="container">

    <div id="branding">
        <h1><span class="highlight">Big C </span>Supermarket</h1>
    </div>

    <nav>
        <ul>
            <li ><a href="../home1.php">Home</a></li>
            <li ><a href="../about.php ">About</a></li>
            <li><a href="../logout.php">logout</a></li>
        </ul>
    </nav>

</div>

</header>


<h1>Inventory Report</h1>
<div class='grid-container' style = align: 'left'>
<div style='padding-top: 4cm;width: 10cm;'>
    <form action='#' method='POST' class='container2'>
        <label for='date_from' style='color: white;'><b>Click to Genarate report: </b></label>
        <input type='date' placeholder='Enter Date' name='date' required>
        <div style='align-content:center;padding-left:15%'>

            
            <button type='submit' class='btn'>Generate Report</button> 

        </div>
    </form>
</div>

</div>

<?php

if (isset($_POST['date'])) {
    $sql = "SELECT * FROM `items`";
    $query = mysqli_query($conn, $sql);
    echo "

    <div align = 'left'>

    <div style='overflow-y:auto; ' class='table1'>
        <div class='table1-header'>
            <table cellpadding='0' cellspacing='0'>
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class='table1-content'>
            <table cellpadding='0' cellspacing='0'>
                <tbody>";

    if ($query === false) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    while ($row = mysqli_fetch_array($query)) {

        echo '<tr>
                        
                        <td>' . $row['prod_code'] . '</td>
                        <td>' . $row['prod_name'] . '</td>
                       <td>' . $row['start_stock'] . '</td>

                        </tr>';
    }
    echo "
                </tbody>

                </table>
            </div>
            </table>
        </div>
    </div>
                


    ";
}

?>


</body>

</html>