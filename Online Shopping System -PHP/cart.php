<?php
session_start();
include 'dbconfig.php';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//button1
if(isset($_POST['addtocart'])) {

$productid = mysqli_real_escape_string($conn, $_POST['productid']);	

$sql = "INSERT INTO cart (cart_user_id, cart_product_id)
        SELECT'$_SESSION[user]', product_id FROM product WHERE product_id='$productid';";

mysqli_select_db($conn,"maiisuu");

if (mysqli_query($conn, $sql)) {
		
$sql2 = "SELECT * FROM cart where cart_user_id =  '$_SESSION[user]' ";
$result2=mysqli_query($conn, $sql2) or die ('Error! yo.');
$num_rows = mysqli_num_rows($result2);
mysqli_select_db($conn,"maiisuu");
	
	      echo("<script>alert('$num_rows products added to cart! Check My Crate ');  
                 window.location.href='index_home.php'; 
                </script>");					   			
	}
 else{
 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='index_home.php';
                </script>");
	 }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset( $_POST['register'])) {
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);	
$number = mysqli_real_escape_string($conn, $_REQUEST['number']);

if($number == "" || $number == NULL) {
      echo("<script>alert('Please fill all fields');
                    
                </script>");
	// window.location.href='home-register-indv.php';				
	}
else {
$sql =  "INSERT INTO user_individual_register ( email, password, number) VALUES ('$email', '$password', '$number')";

mysqli_select_db($conn,"maiisuu");

if (mysqli_query($conn, $sql)) {
      echo("<script>alert('Successfully Registered!');
                     window.location.href='mycrate-login.php';
                </script>");
} 
	
else{
	
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='home-register-indv.php';
                </script>");
    
}	
}
}

if (isset($_POST['register2'])) {
$email = mysql_real_escape_string( $_REQUEST['email']);
$password = mysql_real_escape_string( $_REQUEST['password']);	
$number = mysql_real_escape_string( $_REQUEST['number']);
$business =  mysql_real_escape_string( $_REQUEST['business']); 
$selectOption = $_POST['select'];	

$sql =  "INSERT INTO user_business_register ( email, password, number, business_name , business_type ) VALUES ('$email', '$password', '$number', '$business', '$selectOption')";

mysql_select_db('maiisuu');

if (mysql_query($sql)) {
      echo("<script>alert('Successfully Registered!');
                     window.location.href='mycrate-login.php';
                </script>");
} 
	
else{
	
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='home-register-bus.php';
                </script>");
    
}	
}


if(isset( $_POST['registerfinal']))
{
$email = mysql_real_escape_string( $_REQUEST['mail']);
$password = mysql_real_escape_string( $_REQUEST['password']);
$business =  mysql_real_escape_string( $_REQUEST['business']); 
$selectOption = $_POST['select2'];	
$number = mysql_real_escape_string( $_REQUEST['number']);
$number1 = mysql_real_escape_string( $_REQUEST['number1']);
$number2 = mysql_real_escape_string( $_REQUEST['number2']);

$sql =  "INSERT INTO user_business_register ( email, password, number, number1, number2, business_name, business_type) VALUES ('$email', '$password', '$number','$number1','$number2', '$business', '$selectOption' )";

mysql_select_db('maiisuu');

if (mysql_query($sql)) {
      echo("<script>alert('Successfully Registered. Login to access!');
                     window.location.href='checkout-login-register.php';
                </script>");
} 	
else{
	
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='checkout-login-register.php';
                </script>");    
}	
}

mysqli_close($conn);

?>