<?php
session_start();
include'dbconfig.php';


////////////////////////////////////////////* Add List Name begin */ ///////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$list =  mysqli_real_escape_string($conn, $_POST["list"]);
$add = "INSERT INTO user_favourites (list_name, fav_userid) VALUES ('$list', '$_SESSION[user]') ";  //
if (mysqli_query($conn, $add)) 
{
header('Location: favourites.php');	 	 	 
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $add.  . mysql_error()');
     window.location.href='favourites.php';   
     </script>");
}
//end if/
//////////////////////////////////////////////////////////////////* Add List Name end */ //////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 
 
 
 
    /*  */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['addtofav']))
{

$host = 'localhost';
$user = 'root';
$pass = '';
mysql_connect($host, $user, $pass);
mysql_select_db('maiisuu');
 
$fav = $_POST["id"];

$adding = "Update user_favourites set product_id = '$fav' where fav_id=1";  //
if (mysql_query($adding, $conn)) 
{
echo("<script>alert('added to favourite');
     window.location.href='favourite_index.php';
     </script>"); 	 
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $adding.  . mysql_error()');
     window.location.href='favourites.php';   
     </script>");
}
}//end if
 /*  */ 
////////////////////////////////////////////////////////////////////////////////////////////////
?>