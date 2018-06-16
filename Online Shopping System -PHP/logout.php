<?php
session_start();
include'dbconfig.php';

$sql1 = "DELETE FROM cart WHERE cart_user_id = $_SESSION[user] " ;
      $query1 = mysqli_query($conn,$sql1) or die ('Error! at delete cart.');
	  
//$sql2 = "DELETE FROM temp WHERE customer_id = $_SESSION[user] " ;
      //$query2 = mysqli_query($conn,$sql2) or die ('Error! at delete temp.');	  
	  
session_unset();
session_destroy();
header("location:index.php");
exit();

?>