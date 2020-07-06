<?php 
	require_once('conn.php'); 
?>


<?php
if(isset($_GET['id'])){ 

$sql = "DELETE FROM user WHERE id =".$_GET['id'];


mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
header("Location: view.php");
}
else{
echo "Fail";
}

}
?>