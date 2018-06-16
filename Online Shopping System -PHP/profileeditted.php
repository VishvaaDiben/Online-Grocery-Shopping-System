<?php
session_start();
include"dbconfig.php";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['save_address']))
{

$email =  mysql_real_escape_string( $_REQUEST['email']);
$number =  mysql_real_escape_string( $_REQUEST['number']);
$line1 =  mysql_real_escape_string( $_REQUEST['line1']);
$line2 =  mysql_real_escape_string( $_REQUEST['line2']);
$line3 =  mysql_real_escape_string( $_REQUEST['line3']);
$line4 =  mysql_real_escape_string( $_REQUEST['line4']);
$address2 = "{$line1},{$line2},{$line3},{$line4}"; 

$adding = "UPDATE user_individual_register SET email='$email', number='$number', address1='$address2' WHERE userid= '$_SESSION[user]' ";

$line5 =  mysql_real_escape_string( $_REQUEST['line5']);
$line6 =  mysql_real_escape_string( $_REQUEST['line6']);
$line7 =  mysql_real_escape_string( $_REQUEST['line7']);
$line8 =  mysql_real_escape_string( $_REQUEST['line8']);
$address3 = "{$line5},{$line6},{$line7},{$line8}"; 

$adding2 = mysqli_query($conn,"UPDATE user_individual_register SET  address2='$address3' WHERE userid= '$_SESSION[user]' ");

if (mysqli_query($conn, $adding)) 
{
echo("<script>alert('Successfully updated address in database');
     window.location.href='profile.php';
     </script>");
} 	
else
{
echo("<script>alert('ERROR: Could not able to execute $adding.  . mysql_error()');
     window.location.href='profile.php';   
     </script>");
}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


mysqli_close($conn);
?>