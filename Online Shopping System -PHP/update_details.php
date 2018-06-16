<?php

//include ('dbconfig.php') ;

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'maiisuu';
$conn = mysql_connect($host, $username, $password, $dbname);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}



$product_id = $_POST['product_id'];

$product_name = mysql_real_escape_string( $_REQUEST['product_name']);
$product_weight = mysql_real_escape_string( $_REQUEST['product_weight']);
$product_price = mysql_real_escape_string( $_REQUEST['product_price']);
$product_nprice = round(( (1/$product_weight)*$product_price),2);
		
     
if (isset($_POST["Save"])) {
	
if(empty($product_name) || empty($product_weight) || empty($product_price) || empty($imgFile))
{
	      echo("<script>alert('Some of the fields are empty. Please complete to proceed!');
                     window.location.href='admin.php';
                </script>");
	
}
	

	    $imgFile = $_FILES['product_pic']['name']; 
		$tmp_dir = $_FILES['product_pic']['tmp_name'];
		$imgSize = $_FILES['product_pic']['size'];
		
		
		$upload_dir = 'images/'; // upload directory
	
	    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$productpic = rand(1000,1000000).".".$imgExt; //
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions))
			{			
				// Check file size '5MB'
				if($imgSize < 5000000)				
				{
					move_uploaded_file($tmp_dir,$upload_dir.$productpic);
				}
				else
				{
					//$errMSG = "Sorry, your file is too large.";
					 echo("<script>alert('Sorry, your file is too large.');
                     window.location.href='admin.php';
                </script>");
				}
			}
			else
			{
				//$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
				echo("<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                     window.location.href='admin.php';
                </script>");		
			}
	 

if(!empty($_FILES['product_pic']['name'])) //new image uploaded
{        

$sql =  "UPDATE product SET product_name='$product_name', product_img='$productpic', product_weightkg = '$product_weight', product_pricekg = '$product_price', product_price = '$product_nprice' WHERE product_id = '$product_id' "; // single quote taken

mysql_select_db('maiisuu');

                     if (mysql_query($sql, $conn)) {
                     echo("<script>alert('Records Updated Successfully!');
                     window.location.href='admin.php';
                     </script>");
                       } 
	
                      else{
   	                  echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                      window.location.href='admin.php';
                      </script>");
                       }
}



//IF's else
	
else 
{
	$sql1 =  "UPDATE product SET product_name='$product_name', product_weightkg = '$product_weight', product_pricekg = '$product_price', product_price = '$product_nprice' WHERE product_id = '$product_id' "; // single quote taken

mysql_select_db('maiisuu');

if (mysql_query($sql1, $conn)) {
      echo("<script>alert('Records Updated Successfully!');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
       	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
    }
}

}
    







elseif (isset($_POST["Delete"])) {

	$sql2 = "DELETE FROM product WHERE product_id = '$product_id'";
	
	mysql_select_db('maiisuu');

if (mysql_query($sql2, $conn)) {
      echo("<script>alert('Records Deleted Successfully!');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
}
	
}

mysql_close();

	

 ?>