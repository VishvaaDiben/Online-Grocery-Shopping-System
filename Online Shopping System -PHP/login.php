<?php
session_start(); // Starting Session
include'dbconfig.php';


if (isset($_POST['login'])) {
	
if (empty($_POST['email']) || empty($_POST['password'])) {
	
	 echo("<script>alert('Fields are empty');
                     window.location.href='mycrate-login.php';
                </script>");
}

else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "");

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Selecting Database
$db = mysqli_select_db($conn,"maiisuu");

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn, "select * from user_individual_register where password='$password' AND email='$email'");
$rows = mysqli_num_rows($query);

if ($rows == 1) 
{
	
  $row = mysqli_fetch_array($query);

    // $_SESSION['logged_in_admin_id'] = $row['AdminID']; 
   //$_SESSION['logged_in_admin_name'] = $adusernamelg;
  // $_SESSION['logged_in_admin_password'] = $adusernamelg;	
 //$_SESSION['user'] = $email;
$_SESSION['user'] = $row['userid'];
$_SESSION['email'] = $email;

$q = "DELETE FROM cart WHERE cart_user_id = $_SESSION[user] " ;
      $query = mysqli_query($conn,$q) or die ('Error! at delete cart.');
	  
//$temp =	"DELETE FROM temp WHERE customer_id = $_SESSION[user] " ;
      //$query = mysqli_query($conn,$temp) or die ('Error! at delete temp.');  

echo("<script>alert('User :$row[userid], Successfully Logged-in. You may begin Shopping :)');
                     window.location.href='index_home.php';
                </script>");
} 
else {
	 echo("<script>alert('Invalid Email or Password');
                     window.location.href='mycrate-login.php';
                </script>");
}
mysqli_close($conn); // Closing Connection
}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['login2'])) {	
if (empty($_POST['email2']) || empty($_POST['password2'])) {	
	 echo("<script>alert('Fields are empty');
                     window.location.href='checkout-login-register.php';
                </script>");
}
else
{
// Define $username and $password
$email=$_POST['email2'];
$password=$_POST['password2'];
$remember = $_POST['remember'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

// Selecting Database
$db = mysql_select_db("maiisuu", $connection);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from user_individual_register where password='$password' AND email='$email'", $connection);
$rows = mysql_num_rows($query);
$id = $query['id'];
if ($rows == 1) {
$cookie_name = "user";
$cookie_value = $id;
//expiriry time. 86400 = 1 day (86400*30 = 1 month)
$expiry = time() + (86400 * 30);

if($remember == 'true'){
 //setting cookie variable
 setcookie($cookie_name, $cookie_value, $expiry);
}else{
 //if your server requires to set session path
 session_start();
 $_SESSION['email'] = $id;
}
//$_SESSION['email']=$email; // Initializing Session
 echo("<script>alert('Successfully Logged-in');
                     window.location.href='profile.php';
                </script>");
} 
else {
	 echo("<script>alert('Invalid Email or Password');
                     window.location.href='checkout-login-register.php';
                </script>");
}
mysql_close($connection); // Closing Connection
}
}






if (isset($_POST['submit'])) {

$email=$_POST['email'];
$password=$_POST['newpassword'];
$passwordc = $_POST['newpasswordc'];

$connection = mysql_connect("localhost", "root", "");

$email = stripslashes($email);
$password = stripslashes($password);
$passwordc = stripslashes($passwordc);

$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$passwordc = mysql_real_escape_string($passwordc);

$db = mysql_select_db("maiisuu", $connection);

$query = mysql_query( "UPDATE user_individual_register SET password='$password' WHERE email = '$email' ");
 
if (mysql_query($query))
{

} 

else 
{
 echo("<script>alert('Successfully Reset Password.Try Login.');
       window.location.href='checkout-login-register.php';
      </script>");
}
mysql_close($connection); // Closing Connection
}





if (isset($_POST['login3'])) {	

$email=$_POST['email4'];
$password=$_POST['password4'];
$remember = $_POST['remember'];

$connection = mysql_connect("localhost", "root", "");

$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

$db = mysql_select_db("maiisuu", $connection);

$query = mysql_query("select * from user_business_register where password='$password' AND email='$email'", $connection);
$rows = mysql_num_rows($query);
$id = $query['id'];
if ($rows == 1) {
$cookie_name = "user";
$cookie_value = $id;

$expiry = time() + (86400 * 30);

if($remember == 'true'){

 setcookie($cookie_name, $cookie_value, $expiry);
}else{

 session_start();
 $_SESSION['email'] = $id;
}

 echo("<script>alert('Successfully Logged-in');
                     window.location.href='profile.php';
                </script>");
} 
else {
	 echo("<script>alert('Invalid Email or Password. Please try again.');
                  window.location.href='checkout-login-register.php';   
                </script>");//window.location.href='checkout-login-register.php';
}
mysql_close($connection); 
}





if (isset($_POST['submit2'])) {

$email=$_POST['email2'];
$password=$_POST['newpassword2'];
$passwordc = $_POST['newpasswordc2'];

$connection = mysql_connect("localhost", "root", "");

$email = stripslashes($email);
$password = stripslashes($password);
$passwordc = stripslashes($passwordc);

$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$passwordc = mysql_real_escape_string($passwordc);

$db = mysql_select_db("maiisuu", $connection);

$query = mysql_query( "UPDATE user_business_register SET password='$password' WHERE email = '$email' ");
 
if (mysql_query($query))
{

} 

else 
{
 echo("<script>alert('Successfully Reset Password.Try Login.');
       window.location.href='checkout-login-register.php';
      </script>");
}
mysql_close($connection); // Closing Connection
}

?>