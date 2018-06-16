<?php

//include ('dbconfig.php') ;

                //btnsave

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'maiisuu';
$conn = mysql_connect($host, $username, $password, $dbname);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

 

//button 1
if( isset( $_POST['btnsave'])) {
	
$product_name = $_POST['product_name'];
$product_weight = $_POST['product_weight'];
$product_price = $_POST['product_price'];	
$product_category = $_POST['category'] ;
$product_sub_category = $_POST['sub-category'] ;

$product_name = mysql_real_escape_string( $_REQUEST['product_name']);
$product_weight = mysql_real_escape_string( $_REQUEST['product_weight']);
$product_price = mysql_real_escape_string( $_REQUEST['product_price']);


$product_nprice = round(($product_weight*$product_price),2, PHP_ROUND_HALF_UP);
//$product_nprice = round(($product_weight*$product_price),2);
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
                     
                </script>");	
			}
	 

$sql =  "INSERT INTO product ( product_name, product_weightkg, product_img, product_pricekg, product_price, category, sub_category) VALUES ('$product_name', '$product_weight', '$productpic', '$product_price', '$product_nprice', '$product_category', '$product_sub_category')";

mysql_select_db('maiisuu');

if (mysql_query($sql)) {
      echo("<script>alert('Records Added Successfully!');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
	
	 echo("<script>alert('ERROR: Could not able to execute $sql.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
    
}
}// button 1 end


//button 2
elseif (isset($_POST['save'])){
	
$category_name = $_POST['category_name'];
$category_name =  mysql_real_escape_string( $_REQUEST['category_name']);

	if(empty($category_name))
      {
	      echo("<script>alert('PLease fill the category name');
                    window.location.href='admin.php'; 
                </script>");
	
     } 
	  else{
	
	$sql2 =  "INSERT INTO categories (category) VALUES ('$category_name')";

mysql_select_db('maiisuu');

             if (mysql_query($sql2)) {
     echo("<script>alert('New Category Added Successfully!');
                     window.location.href='admin.php';
                </script>");							    
              } 
	
             else{
	
	 echo("<script>alert('ERROR: Could not able to execute $sql2.  . mysql_error()');
                     window.location.href='admin.php';
                </script>"); 				   
                }
	
}
	
	} // button 2 ends

// button 4 *
elseif (isset($_POST['save2']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('maiisuu');
 
 $new_category = $_POST['editable'];
 $category = $_POST['select'];

 
 $update=  "UPDATE categories SET category='$new_category' WHERE category = '$category'";	
	
	if (mysql_query($update, $conn)) {
      echo("<script>alert('Category Updated Successfully!');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
       	 echo("<script>alert('ERROR: Could not able to execute $update.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
    }
	} // button 4 ends
	
//button 5
elseif (isset($_POST['delete']))
{
	$category = $_POST['select'];

	$delete = "DELETE FROM categories WHERE category = '$category'";
	
	mysql_select_db('maiisuu');

if (mysql_query($delete, $conn)) {
      echo("<script>alert('Category Deleted Successfully');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $delete.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
}
	
}// button 5 ends

//button 6
elseif (isset($_POST['save3']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('maiisuu');
 
 $new_category = $_POST['adding'];
 $category = $_POST['select2'];
 if(empty($category)){
	echo("<script>alert('PLease select the category');
                    window.location.href='admin.php'; 
                </script>");
	 }
  else{
	  
	 // $adding = "UPDATE categories SET category ='$category',sub_category='$new_category' WHERE sub_category = ''";
	  $adding= "INSERT INTO categories( category, sub_category) VALUES ('$category', '$new_category')"; 
	  if (mysql_query($adding, $conn)) {
      echo("<script>alert('Sub-Category Added Successfully');
                     window.location.href='admin.php';
                </script>");
} 	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $adding.  . mysql_error()');
                 window.location.href='admin.php';   
                </script>");
   }
}	 
}
//button 6 ends	
elseif (isset($_POST['save4']))
{
	
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('maiisuu');
 
 $new_category = $_POST['editable2'];
 $category = $_POST['slt'];

 
 $update=  "UPDATE categories SET sub_category='$new_category' WHERE sub_category = '$category'";	
	
	if (mysql_query($update, $conn)) {
      echo("<script>alert('Sub-category Updated Successfully!');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
       	 echo("<script>alert('ERROR: Could not able to execute $update.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
    }	
	
}

//button 7
elseif (isset($_POST['delete2']))
{
	$category = $_POST['slt'];
    //  Delete vs Update table with empty value
	$delete = "DELETE FROM categories WHERE sub_category = '$category'";
	
	mysql_select_db('maiisuu');

if (mysql_query($delete, $conn)) {
      echo("<script>alert('Sub-category Deleted Successfully');
                     window.location.href='admin.php';
                </script>");
} 
	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $delete.  . mysql_error()');
                     window.location.href='admin.php';
                </script>");
}
	
}
// button 7 ends


//button 8
/*if (isset($_POST['saveaddress']))
 {
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('maiisuu');

$addr1 = $_POST["addr1"];
$addr2 =$_POST["addr2"];
$addr3 =$_POST["addr3"];
$brunei = $_POST["brunei"];
$postcode = $_POST["postcode"];; 
 
$array = array("$addr1", "$addr2", "$addr3", "$brunei", "$postcode");
$array_data = implode("array_separator", $array);
$adding = "Update user_individual_register set address1 VALUE '" . $array_data . "'";	 //where user_id=Session  
 
	  if (mysql_query($adding, $conn)) {
      echo("<script>alert('Successfully');
                     window.location.href='homepage.php';
                </script>");
} 	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $adding.  . mysql_error()');
                 window.location.href='homepage.php';   
                </script>");
   }
} 
*/
//button8 ends


	
mysql_close();

	 

 ?>