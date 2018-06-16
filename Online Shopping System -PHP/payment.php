<?php
session_start();
include ('dbconfig.php');

///////////////////////////////////////////////////////<<<<<<<<<<<<<add1>>>>>>>>>>>>>>>/////////////////////////////////////////////////////////////
if (isset($_POST['add1']))
{	

$line1 =  mysql_real_escape_string( $_REQUEST['line1']);
$line2 =  mysql_real_escape_string( $_REQUEST['line2']);
$line3 =  mysql_real_escape_string( $_REQUEST['line3']);
$line4 =  mysql_real_escape_string( $_REQUEST['line4']);
$address1 = "{$line1},{$line2},{$line3},{$line4}";

/*$check = "SELECT * FROM user_individual_register WHERE address1 IS NULL OR address1 = '' AND userid = '$_SESSION[user]'";
$checkagain = mysqli_query($conn,$check);

if( $checkagain !== false ) 
{*/
$sql =  "UPDATE user_individual_register SET address1 = '$address1' WHERE userid = '$_SESSION[user]'";

     if (mysqli_query($conn,$sql)) 
	 {
     echo("<script>alert('Primary Address Added. Edit at My Account.');
                     window.location.href='checkout-login-register.php';
          </script>");							    
     } 	
     else
	 {
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='checkout-login-register.php';
                </script>"); 				   
      }
/*}
else
{
	echo("<script>alert('Alert!Primary Address has already been added. Edit in My Account.');
                     window.location.href='checkout-login-register.php';
          </script>");
}*/
} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////<<<<<<<<<<<<<add2>>>>>>>>>>>>>>>/////////////////////////////////////////////////////////////
if (isset($_POST['add2']))
{	

$line1 =  mysql_real_escape_string( $_REQUEST['line1']);
$line2 =  mysql_real_escape_string( $_REQUEST['line2']);
$line3 =  mysql_real_escape_string( $_REQUEST['line3']);
$line4 =  mysql_real_escape_string( $_REQUEST['line4']);
$address2 = "{$line1},{$line2},{$line3},{$line4}";

$sql =  "UPDATE user_individual_register SET address2 = '$address2' WHERE userid = '$_SESSION[user]'";

     if (mysqli_query($conn,$sql)) 
	 {
     echo("<script>alert('Secondary Address Added. Edit at My Account');
              window.location.href='checkout-login-register.php';       
          </script>");							    
     } 	
     else
	 {
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                  window.location.href='checkout-login-register.php';	   
          </script>"); 			   
      }
} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////<<<<<<<<<<<<<number>>>>>>>>>>>>>>>/////////////////////////////////////////////////////////////
if (isset($_POST['number']))
{	

$number1 =  mysql_real_escape_string( $_REQUEST['number1']);
$number2 =  mysql_real_escape_string( $_REQUEST['number2']);

$sql =  "UPDATE user_individual_register SET number1 = '$number1', number2 = '$number2' WHERE userid = '$_SESSION[user]'";

     if (mysqli_query($conn,$sql)) 
	 {
     echo("<script>alert('Contact Numbers added.');
              window.location.href='checkout-login-register.php';       
          </script>");							    
     } 	
     else
	 {
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                  window.location.href='checkout-login-register.php';	   
          </script>"); 			   
      }
} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////<<<<<<<<<<<<<temporary>>>>>>>>>>>>>>>/////////////////////////////////////////////////////////////
if (isset($_POST['temp']))
{	

$message =  mysql_real_escape_string( $_REQUEST['message']);
$radio = $_POST["same"];
$reference_number = 'maiisuu-' . time();
$date = date("d-m-Y");
$time = date("h:i a");

$sql1 = "INSERT INTO temp(message, timeslot, customer_id, temp_number, temp_date, temp_time) VALUES ('$message', '$radio', '$_SESSION[user]', '$reference_number', '$date', '$time' ) ";
//$sql = "UPDATE temp SET message = '$message', timeslot = '$radio', customer_id = '$_SESSION[user]'";



if (mysqli_query($conn,$sql1)) 
{
header ('location: checkout-login-register.php');						    
} 	
else
{	
header ('location: checkout-login-register.php');	            			   
}
} 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////<<<<<<<<<<<<<order confirm>>>>>>>>>>>>>>>/////////////////////////////////////////////////////////////
$ids = mysqli_query($conn, "SELECT cart_product_id FROM cart WHERE cart_user_id = '$_SESSION[user]'");
if($ids)
{
$idary = array();
while($idrows = mysqli_fetch_assoc($ids))
{
	$idary[] = $idrows['cart_product_id'];
}
$id_string = implode(",", $idary);
}

$address =  mysqli_query($conn, "SELECT address1 FROM user_individual_register WHERE userid = '$_SESSION[user]'");
//$letters = explode(',',mysql_fetch_assoc($address));
if($address)
{
$addr = array();
while($rows = mysqli_fetch_assoc($address))
{
	$addr[] = $rows['address1'];
}
$addr_string = implode(",", $addr);
}

$sql = mysqli_query($conn, "UPDATE temp SET temp_details = '$id_string', temp_address = '$addr_string' WHERE customer_id ='$_SESSION[user]' ");

//$b = mysqli_query($conn, "UPDATE order SET order_detail = '$id_string' WHERE order_userid ='$_SESSION[user]' ");

if($sql){

  echo "Pass";
}
else
{
  echo "Fail";	
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

mysqli_close($conn);
?>
