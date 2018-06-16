<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = mysql_connect($host, $user, $pass);
 if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
 mysql_select_db('maiisuu');

 $state = $_POST['get_option'];
 $find=mysql_query("select sub_category from categories where category='$state'");
 echo
   '<option value="">Select</option>';
 while($row=mysql_fetch_array($find))
 {
  //echo '<option value=""></option>';
  echo '<option value="'.$row['sub_category'].'">'.$row['sub_category'].'</option>';  
 }
 exit;
}


if(isset($_POST['get_1']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = mysql_connect($host, $user, $pass);
 if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
 mysql_select_db('maiisuu');

 $state1 = $_POST['get_1'];
 $find1=mysql_query("select sub_category from categories where category='$state1'");
 echo
   '<option value="">Select Sub-Category</option>';
 while($row=mysql_fetch_array($find1))
 {
  //echo '<option value=""></option>';
  echo '<option value="'.$row['sub_category'].'">'.$row['sub_category'].'</option>';  
 }
 exit;
}



if(isset($_POST['get_4']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $conn = mysql_connect($host, $user, $pass);
 if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
 mysql_select_db('maiisuu');

 $state4 = $_POST['get_4'];
 $find4 = mysql_query("SELECT product_id, product_name, product_weightkg, product_pricekg, product_img, product_price FROM product ORDER BY product_id DESC where category='$state4'");
 while($row=mysql_fetch_array($find4))
 { 
 
 
						
						
  echo '<div class="product-image-wrapper">';
								echo'<div class="single-products">';
										echo'<div class="productinfo text-center">';
								echo'<img src="images/'.$row['product_img'].'" width="90px" height="250px  alt=""  />'; 
											
							 echo'<h2>'.$row['product_name'].'"('.$row['product_weightkg'].'"kg)</h2>'; 
							echo'<p>$'.$row['product_pricekg'].'"/kg</p> ';
                                            
                              echo'<p>$'.$row['product_price'].'"</p>';         
                                        
                                            echo'<br><br>';
				echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
					echo'</div>';
					echo'</div>';
					echo'</div>'; 
											               
					
 }
 exit;
}

?>