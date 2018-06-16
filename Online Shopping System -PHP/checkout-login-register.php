<?php
session_start();
include'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Maiisuu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
	a { cursor: pointer; cursor: hand; }
	
	#form a {
		color:black;
	}
		.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}

    .modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}

    .close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

-webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;

	</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/Logo 8.jpg" alt="" />Freshness Delivered</a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><a href="">My Account&#9660;<span style="margin-left:25px">|</span></a></li>
                                
                                <ul class="dropdown-menu">
<li><a href="profile.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Profile</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Delivery Address</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Favourites</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order History</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order Issues</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Settings</a></li><br>
<li><a href="logout.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Logout</a></li><br>
                              </ul>
<li><a href="index_home.php"> Shopping <i class="fa fa-shopping-cart"></i><span style="margin-left:25px">|</span></a></li>                                
<li><a href="mycrate.php"> My Crate <i class="fa fa-shopping-cart"></i><span style="margin-left:25px">|</span></a></li>

<li><a href="checkout-login-register.php"> Payment <i class="fa fa-money"></i></a></li>
							</ul>
						</div>	
					</div>
                    
                    <div class="search_box pull-right" style="margin-top:15px;">
							<input type="text" placeholder="Enter keyword" style="width:300px"/>
					</div>
  <div id="openModal3" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Choose Account Type To Register</h2>
		<button><a href="home-register-indv.php">Individual</a></button>
		<button><a href="home-register-bus.php">Business</a></button>
	</div>
</div>                   
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                             <!--data-target-->
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
					</div>
				</div>
			</div>
            
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section id="form" style="padding-top:20px; padding-bottom:50px;"><!--form-->
       <div class="container">
        <div id="content">
          	<div class="span12"> <br>
            <div id="pay-now" class="">
              <div class="">
                <ul id="myTab" class="nav nav-tabs" >
                  
                  <li style="width:33%; text-align:center" class="" ><a href="#checkout1" data-toggle="tab" style="color:black !important">1. DELIVERY DETAILS</a> </li>
                  <li style="width:33%; text-align:center" class=""  ><a href="#checkout2" data-toggle="tab" style="color:black !important">2. ORDER DETAILS</a> </li>
                  <li style="width:33%; text-align:center" class="" ><a href="#checkout3" data-toggle="tab" style="color:black !important">3. PROCEED TO PAYMENT</a> </li>
                </ul>
                
                <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active " id="checkout1">
               <div class="row" style="color:#696763; padding-left:75px;padding-top:50px; padding-bottom:100px">
               <div class="col-lg-6">
               <h4 style="color:black; position:relative; left:300px">Delivery Details</h4>
               
               <h4 style="color:black">Primary Address </h4>
               <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit"><i class="fa fa-plus"></i> Add New</button>
               <div id="edit" class="collapse login-form">
               <form id='form' method='POST' action='payment.php' enctype='multipart/form-data'>
    			<input type="text" name="line1" placeholder="Address Line 1 *">
              	<input type="text" name="line2" placeholder="Address Line 2 *">
              	<div style="display:table; width:350px;text-align: center;">
              	<input type="text" name="line3" placeholder="Brunei-Muara" style="width:60%;display:inline-block;" class="pull-left">
          		<input class="pull-right" type="number" name="line4" placeholder="Post Code" style="width:30%;display:inline-block;">
                </div>
                <div class="row">
                <div class="col-lg-6">
                <button name="add1" type="submit" class="btn btn-default">Save</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button>
                </div>
                </div>
                </form>
  				</div>
               </div>
               <div class="col-lg-6" >
               <br><br>
               
               <h4 style="color:black; position:relative; top:-10px">Secondary Address<i>(optional)</i> </h4>
               <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white;position:relative; top:-10px" data-toggle="collapse" data-target="#edit1"><i class="fa fa-plus"></i> Add New</button>
               <div id="edit1" class="collapse login-form" style="position:relative; top:-10px">
               <form id='' method='POST' action='payment.php' enctype='multipart/form-data'>
    			<input type="text" name="line1" placeholder="Address Line 1 *">
              	<input type="text" name="line2" placeholder="Address Line 2 *">
              	<div style="display:table; width:350px;text-align: center;">
              	<input type="text" name="line3" placeholder="Brunei-Muara" style="width:60%;display:inline-block;" class="pull-left">
          		<input class="pull-right" name="line4" type="number" placeholder="Post Code" style="width:30%;display:inline-block;">
                </div>
                <div class="row">
                <div class="col-lg-6">
                <button type="submit" name="add2" class="btn btn-default">Save</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button>
                </div>
                </div>
                </form>
  				</div>
               </div>               
               </div> 
               <div style="position:relative; left:350px; top:-40px">
               <div class="col-sm-4">
               <div class="signup-form"><!--sign up form-->                                
               <form id='' method='POST' action='payment.php' enctype='multipart/form-data'>
               <div style="color:#696763;white-space:nowrap;" id="acc">
               </div> 
               <a onclick="toggle_visibility('foo');" style="text-decoration:underline">Add more contact numbers</a>
               <div id="foo" hidden>
               <input type="number" name="number1"  placeholder="Home/Handphone/Office *">
               <input type="number" name="number2"  placeholder="Home/Handphone/Office *">
               
               <script type="text/javascript">

                function toggle_visibility(id) {
                var e = document.getElementById(id);
                if(e.style.display == 'block')
                e.style.display = 'none';
                else
                e.style.display = 'block';
                }

                </script>
                <br>                                   
                <div class="row">
                <div class="col-lg-6">
                <button type="submit" name="number" class="btn btn-default">Add</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
<button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d; position:relative; left: 100px">Cancel</button>
                </div>
                </div>
                </div>
                </form>
                <script>
                 function valid2() {		
                 var c = document.getElementById('number').value;
                 if (c.length  > "10" || c.length < "10" ) {
	             alert("Phone number must have 10 digits.");
                 return false;
	             }			 
	             return true;	
                 }
				</script>
                </div><!--Adding new numbers-->
                </div>
                </div>              
               </div>
               
              <div class="tab-pane fade" id="checkout2">
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
<?php
//WHERE cart_user_id ='$_SESSION[user]'			
$sql2 = "SELECT DISTINCT cart_product_id FROM cart WHERE cart_user_id ='$_SESSION[user]'"; 

$result2=mysqli_query($conn, $sql2) or die ('Error! yo.');

if($num_rows = mysqli_num_rows($result2)){
?>
				  <li><a href="#"><i class="fa fa-shopping-cart"></i> My Crate(<?php echo $num_rows; ?> items)</a></li>
                  <?php	 } ?> 				

				</ol>
                
                
             
			</div>
          
            
			<div class="table-responsive cart_info" style="position:relative; top:-50px">
          
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Name</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Qty</td>
							<td class="total">Subtotal</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                      <?php

//WHERE cart_user_id ='$_SESSION[user]'											 												
$sql = " SELECT * FROM product INNER JOIN cart ON product.product_id = cart.cart_product_id WHERE cart_user_id ='$_SESSION[user]' GROUP BY cart_product_id ORDER BY cart_product_id DESC
" ;

      
						$result = mysqli_query($conn, $sql)or die ('Error! yo.'); 
						$i = 0;	
						if (mysqli_num_rows($result) > 0) 
						{ 	
						$sum=0;	
									                                             
   						while($row = mysqli_fetch_assoc($result))  
						{
						?>  
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/<?php echo $row['product_img']; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row['product_name']; ?></a></h4>
							</td>
							<td class="cart_price">
								<p>$<?php echo $row['product_price']; ?> </p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">

<?php

//WHERE cart_user_id ='$_SESSION[user]'			
$sql4 = "SELECT * FROM cart WHERE cart_product_id = '$row[cart_product_id]' AND cart_user_id ='$_SESSION[user]'	"; 
$result4 = mysqli_query($conn, $sql4) or die ('Error! yo.');

if($num_rows4 = mysqli_num_rows($result4)){
?>                                   
<input class="cart_quantity_input" id="output" type="text" name="quantity" value=<?php echo $num_rows4; ?> autocomplete="off" size="2" style="border:hidden" readonly>
<?php 
  } 
   
?>         

								</div>
<script>
$('#target').click(function() {
    $('#output').html(function(i, val) { return val*1+1 });
});
$('#target2').click(function() {
    $('#output').html(function(i, val) { return val*1-1 });
});
</script>     
                         
							</td>                        
							<td class="cart_total">
								<p class="cart_total_price">$<?php
								$total = ($num_rows4 * $row['product_price']);
								echo $total;
								  ?> </p>
							</td>
                           
							<td class="cart_delete">

							</td>
						</tr>

<?php			   
++$i;
}}
?>				    
					</tbody>
                     
				</table>
               
			</div>
		</div>
	</section> <!--/#cart_items-->
	
    <section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
                <span style="padding:60px 0px 0px 100px"><blink>FREE DELIVERY</blink>, WHEN YOU SHOP BND $XXX MORE.</span>
					<div class="total_area pull-right">

<ul>
<?php

$sql5 = " SELECT SUM(product_price) FROM product INNER JOIN cart ON product.product_id = cart.cart_product_id WHERE cart_user_id ='$_SESSION[user]'	";
$query5 = mysqli_query($conn,$sql5) or die ('Error  on sql 5');

while($row = mysqli_fetch_array($query5)){
						
?>

							<li>Sub Total <span>$<?php
                            echo $row['SUM(product_price)'];
                          ?> </span></li>
                                  
							<li>Delivery Charge <span>$2</span></li>
                            <hr>
                            <li>Total <span>$<?php
                            echo $row['SUM(product_price)'] + 2;
}                           ?></span></li>
                            
						</ul>
               <hr>
             
                        <form id='' method='POST' action='payment.php' enctype='multipart/form-data'>
                        <div stle="margin-left:10px">
                        Special Note
                        <textarea name="message" placeholder="Notes to kaakiin Driver on who will receive items." rows="10"></textarea>
                        </div>
                        <div style="left:50px; position:relative; padding-top:10px;">
                           <div style="position:relative; right:50px">
                            <input name="same" type="radio" value="7AM - 9AM">
                            <label>Delivery Slot 1 : 7am - 9am</label>
                            </div>
                            <div style="position:relative; right:-170px; top:-26px;">
                            <input name="same" type="radio" value="3PM - 5PM">
                            <label>Delivery Slot 2 : 3pm - 5pm</label>
                            </div>
						</div>
                       	<div>
<button name="temp" class="btn btn-default check_out pull-right" style="border-radius:10px; color:white; padding:5px 10px;">Proceed to Payment</button>
                        </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
                  </div>
                  <div class="tab-pane fade" id="checkout3" onClick="foo();">
               <section id="cart_items">
                <div class="container">
<?php
$sql= "SELECT * FROM temp WHERE customer_id = '$_SESSION[user]' " ;
$result = mysqli_query($conn, $sql)or die ('Error! yo.');
if (mysqli_num_rows($result) > 0) 
{ 	
while($row = mysqli_fetch_assoc($result))  
{
?>  
                <h4 style="color:black; padding-top:50px; padding-bottom:20px;">Order Summary</h4>
                    <h4 style="color:#0F0">Order ID</h4>
                    <p style="color:black"><?php echo $row['temp_number']; ?></p>
                    <p style="color:black"><?php echo $row['temp_date'].",&nbsp;".$row['temp_time']; ?></p>
                    <br>
                    <h4 style="color: #0F0">Payment Method</h4>
                    <h5 style="color:black;"><b>Cash On Delivery</b></h5>
                    <div style="padding-top:10px">
                    <p style="color:black">Thank you for your purchase on Maiisuu.</p>
                    <p style="color:black">Please pay in cash the exact amount billed in your Order Summary with <br> Order No as above, to our kaaklin once your item(s) arrive.</p>
                    </div>
                    <h4 style="color: #0F0; padding-top:20px;">Collection Method</h4>
                    <h5 style="color:black;"><b>Delivery To Door</b></h5>
                    
<?php
$sql6 = "SELECT * FROM user_individual_register WHERE userid = '$_SESSION[user]'"; 
$query6 = mysqli_query($conn,$sql6) or die ('Error Bruh');

while($fetch6=mysqli_fetch_array($query6))
		 {
?>                  
                    <h4 style="color: #0F0; padding-top:20px;">Delivery Address</h4>  
                    
                    <p style="color:black"><?php echo $fetch6[6]; }?></p>
                    <h4 style="color: #0F0; padding-top:20px;">Delivery Slot</h4>

                    <h3 style="color:black;"><?php echo $row['timeslot']; }?></h3>
                      <?php }
					else{
					echo"
<div style='padding-top:-50px'>
<div class='alert alert-warning'>
<span class='glyphicon glyphicon-info-sign'></span> &nbsp; You have not selected timeslot.Start adding timeslot in previous page(Order Details) and by clicking the 'Proceed to Payment' Order Bill will be registered and it will show up in this page. Thank You.
</div>
</div>	";
						
						}?>
                   
                    <h4 style="color: #0F0; padding-top:20px;">Order Details</h4>
                		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">				
     
				</ol>
                
                
             
			</div>
          
            
			<div class="table-responsive cart_info" style="position:relative; top:-50px">
          
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Name</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Qty</td>
							<td class="total">Subtotal</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                      <?php

//WHERE cart_user_id ='$_SESSION[user]'											 												
$sql = " SELECT * FROM product INNER JOIN cart ON product.product_id = cart.cart_product_id WHERE cart_user_id ='$_SESSION[user]' GROUP BY cart_product_id ORDER BY cart_product_id DESC
" ;

      
						$result = mysqli_query($conn, $sql)or die ('Error! yo.'); 
						$i = 0;	
						if (mysqli_num_rows($result) > 0) 
						{ 	
						$sum=0;	
									                                             
   						while($row = mysqli_fetch_assoc($result))  
						{
						?>  
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/<?php echo $row['product_img']; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row['product_name']; ?></a></h4>
							</td>
							<td class="cart_price">
								<p>$<?php echo $row['product_price']; ?> </p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">

<?php

//WHERE cart_user_id ='$_SESSION[user]'			
$sql4 = "SELECT * FROM cart WHERE cart_product_id = '$row[cart_product_id]' AND cart_user_id ='$_SESSION[user]'	"; 
$result4 = mysqli_query($conn, $sql4) or die ('Error! yo.');

if($num_rows4 = mysqli_num_rows($result4)){
?>                                   
<input class="cart_quantity_input" id="output" type="text" name="quantity" value=<?php echo $num_rows4; ?> autocomplete="off" size="2" style="border:hidden" readonly>
<?php 
  } 
  
   
?>         

								</div>
<script>
$('#target').click(function() {
    $('#output').html(function(i, val) { return val*1+1 });
});
$('#target2').click(function() {
    $('#output').html(function(i, val) { return val*1-1 });
});
</script>     
                         
							</td>                        
							<td class="cart_total">
								<p class="cart_total_price">$<?php
								$total = ($num_rows4 * $row['product_price']);
								echo $total;
								  ?> </p>
							</td>
                           
							<td class="cart_delete">

							</td>
						</tr>

<?php			   
++$i;
}}
?>				    
					</tbody>
                     
				</table>
               
			</div>
		</div>
	</section> <!--/#cart_items-->
	
    <section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
                <span style="padding:60px 0px 0px 100px"><blink>FREE DELIVERY</blink>, WHEN YOU SHOP BND $XXX MORE.</span>
					<div class="total_area pull-right">

<ul>
<?php
//WHERE cart_user_id ='$_SESSION[user]'
$sql5 = " SELECT SUM(product_price) FROM product INNER JOIN cart ON product.product_id = cart.cart_product_id WHERE cart_user_id ='$_SESSION[user]'	";
$query5 = mysqli_query($conn,$sql5) or die ('Error  on sql 5');

while($row = mysqli_fetch_array($query5)){
						
?>

							<li>Sub Total <span>$<?php
                            echo $row['SUM(product_price)'];
                          ?> </span></li>
                                  
							<li>Delivery Charge <span>$2</span></li>
                            <hr>
                            <li>Total <span>$<?php
                            echo $row['SUM(product_price)'] + 2;
}                           ?></span></li>
                            
						</ul>
                      
                            </div>
                            
                        </div>
                        <a style="position:relative; right:-400px" class="btn btn-default check_out" href="" onclick="MyFunction();too();">Confirm Order</a>
                    </div>
                    
                </div>
            </section>
             
          </div>
                </div>
              </div>
            </div>
          </div>
        </div></div>
        
        <div id="push"></div>
</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<center><p>Copyright © 2017 Maiisuu. All rights reserved.</p></center>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
	function validate() {	
	
var $email = $('form input[name="email2'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}

var a = document.getElementById('password2').value;
	
if (a = "") 
{
            alert("Please enter password.");
            return false;
}
if (a.length  > "8" || a.length < "8" )
{
	alert("Passwords must be 8 characters.");
            return false;
	}			 
	return true;	
}
function MyFunction() {
    window.print();
}

 function foo () {
      $.ajax({
        url:"payment.php",
        type: "POST", 
		
       
     });
 }
 
  function too () {
      $.ajax({
        url:"update_cart.php",
        type: "POST", 
		
        success:function(data){
         window.alert(data);
       }
     });
 }

setTimeout(function() { window.location.href = "logout.php"; }, 24 * 60 * 60 * 1000);
	</script>
</body>
</html>