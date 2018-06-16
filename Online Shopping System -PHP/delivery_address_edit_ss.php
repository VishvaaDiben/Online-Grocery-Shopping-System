<?php
session_start();
include'dbconfig.php';
     
/////////////////////////////////////////////////////////* Update Primary Address *//////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['save_addr1']))
{
 
$line1 =  mysql_real_escape_string( $_REQUEST['line1']);
$line2 =  mysql_real_escape_string( $_REQUEST['line2']);
$line3 =  mysql_real_escape_string( $_REQUEST['line3']);
$line4 =  mysql_real_escape_string( $_REQUEST['line4']);
$address2 = "{$line1},{$line2},{$line3},{$line4}";  

$update = "UPDATE user_individual_register SET address1='$address2' WHERE userid= '$_SESSION[user]' ";  
 
if (mysqli_query($conn, $update)) 
{
echo("<script>alert('Successfully updated primary address in database');
     window.location.href='deliver_address.php';
     </script>");
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $update.  . mysql_error()');
     window.location.href='deliver_address.php';   
     </script>");
}
}//end if
////////////////////////////////////////////////* Update Primary Address  */////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 
 
 
/////////////////////////////////////////////////////////* Update Secondary Address *////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['save_addr2']))
{
 
$line5 =  mysql_real_escape_string( $_REQUEST['line5']);
$line6 =  mysql_real_escape_string( $_REQUEST['line6']);
$line7 =  mysql_real_escape_string( $_REQUEST['line7']);
$line8 =  mysql_real_escape_string( $_REQUEST['line8']);
$address3 = "{$line5},{$line6},{$line7},{$line8}"; 

$added = mysqli_query($conn,"UPDATE user_individual_register SET  address2='$address3' WHERE userid= '$_SESSION[user]' ");
 
 
if (mysqli_query($conn, $added)) 
{
echo("<script>alert('Successfully updated secondary address in database');
     window.location.href='deliver_address.php';
     </script>");
} 	
else
{
/*echo("<script>alert('ERROR: Could not able to execute $update.  . mysql_error()');
     window.location.href='deliver_address.php';   
     </script>");*/
	 header('Location: deliver_address.php');
}
}//end if
//////////////////////////////////////////////////////////* Update Secondary Address  *//////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 
if (isset($_POST['add_address']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('maiisuu');

$addr2a = $_POST["addr2a"];
$addr2b =$_POST["addr2b"];
$addr2c =$_POST["addr2c"];
$addr2d= $_POST["addr2d"];
$addr2e = $_POST["addr2e"];; 

$query = "UPDATE user_individual_register SET addr2a='$addr2a', addr2b='$addr2b', addr2c='$addr2c', addr2d='$addr2d', addr2e='$addr2e' where userid= '1' ";	 //where user_id=Session  
 
if (mysql_query($query, $conn)) 
{
echo("<script>alert('Successfully added address in database');
     window.location.href='profile.php';
     </script>");
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $query.  . mysql_error()');
     window.location.href='profile.php';   
     </script>");
}
}//main if ends //button1 ends

 
?>