<?php
session_start();
include'dbconfig.php';

    /*  */ 
///////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['addtofav']))
{

 
//$fav = $_POST["id"];
$fav = mysqli_real_escape_string($conn, $_POST['id']);	

//$adding = "Update user_favourites set product_id = '$fav' WHERE fav_userid='$_SESSION[user]'";  


$sql = "INSERT INTO favourite_temp (favourite_userid, favourite_productid)
        SELECT'$_SESSION[user]', product_id FROM product WHERE product_id='$fav';";

if (mysqli_query($conn, $sql)) 
{

echo("<script>alert('Added');
     window.location.href='favourites.php';
     </script>"); 	 
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
     window.location.href='favourites.php';   
     </script>");
}
}//end if
 /*  */ 
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['Save'])) {

//$productid = mysqli_real_escape_string($conn, $_POST['productid']);	
$productid = $_POST["productid"];

$sql = "INSERT INTO cart (cart_user_id, cart_product_id)
        SELECT'$_SESSION[user]', favourite_productid FROM favourite_temp WHERE favourite_productid='$productid';";

if (mysqli_query($conn, $sql)) 
{

	
	      echo("<script>alert('Check My Crate ');  
                 window.location.href='favourites.php'; 
                </script>");					   			
}
 else{
	 
 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='favourites.php';
                </script>");
	 }
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////Delete////////////////////////////////////////////////////////////////////

if(isset($_POST['Delete'])) {

//$productid = mysqli_real_escape_string($conn, $_POST['productid']);	
$productid = $_POST["productid"];

$sql = "DELETE FROM favourite_temp WHERE favourite_productid = '$productid' " ;		

if (mysqli_query($conn, $sql)) 
{

	
	      echo("<script>alert('Deleted ');  
                 window.location.href='favourites.php'; 
                </script>");					   			
}
 else{
	 
 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='favourites.php';
                </script>");
	 }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////

mysqli_close($conn);
?>