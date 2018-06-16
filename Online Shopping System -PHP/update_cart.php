<?php
session_start(); // Starting Session
include'dbconfig.php';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['action']))
{
 if($_REQUEST['action']=="delete")
 { 
    $id = $_GET['id'];

    $sql = "DELETE FROM cart WHERE cart_product_id = '$id' " ;
    $query = mysqli_query($conn,$sql) or die ('Error! at update_cart.php >> $sql at line 9 does not execute.');
	header("location:mycrate.php");
 }
 
  else if($_REQUEST['action']=="increase")
  {
	$id = $_GET['id'];
	$sql1 = "INSERT INTO cart (cart_user_id, cart_product_id)
        SELECT'$_SESSION[user]', product_id FROM product WHERE product_id='$id' LIMIT 1;";
	$query1 = mysqli_query($conn,$sql1) or die ('Error! at update_cart.php >> $sql at line 19 does not execute.');
	header("location:mycrate.php");	  
  }
  
  else if($_REQUEST['action']=="decrease")
  {
	  $id = $_GET['id'];
	  $id = $_GET['id'];
	  $sql2 = "DELETE FROM cart WHERE cart_product_id = '$id' LIMIT 1" ;
	  $query2 = mysqli_query($conn,$sql2) or die ('Error! at update_cart.php >> $sql at line 28 does not execute.');
	  header("location:mycrate.php");
	  
  }
 
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////placing order///////////////////////////////////////////////////////////////////////

$a = mysqli_query($conn, "SELECT ");

if($a)
{
		   echo "Done";
}
else
{
		   echo"Not Done";
 }
	

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
mysqli_close($conn);
?>