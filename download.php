<?php

$localhost= "localhost";
$dbusername="root";
$dbpassword="";
$dbname="alhelper";

#connection string
$conn= mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);


if (isset($_GET['dow'])){
	$path = $_GET['dow'];
	$res = mysql_query("SELECT * FROM fileup WHERE paper = '$paper'");
	
	header('content-type : application/octet-stream');
	header ('content-Disposition: attachment; filename="'.basename($paper).'"');
	header ('Content-length: ' . filesize($paper));
	readfile($paper);
	
	
}



?>