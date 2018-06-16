<?php
session_start();

include'dbconfig.php';

if(!isset($_SESSION['user']) )
{
   header('Location: index.php');
    include('logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mycrate | Maiisuu</title>
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
                  <p style="color:#0F0; position:relative; right:-200px;"><?php echo "$_SESSION[email]"; ?></p>       
							<ul class="nav navbar-nav">
								<li class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><a href="">My Account&#9660;<span style="margin-left:25px">|</span></a></li>
                                
                                <ul class="dropdown-menu">
<li><a href="profile.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Profile</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Delivery Address</a></li><br>
<li><a href="favourites.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Favourites</a></li><br>
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
 <div id="openModal" class="modalDialog">
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
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                  <?php	 } ?> |
				  <li class="active" onClick="window.location.reload();return false;">Refresh</li> 
                  
<?php
//WHERE cart_user_id ='$_SESSION[user]'
$sql3 = "SELECT * FROM cart WHERE cart_user_id ='$_SESSION[user]'	 "; 
$result3=mysqli_query($conn, $sql3) or die ('Error! yo.');

if($num_rows3 = mysqli_num_rows($result3)){
?>                  
                  <p>Total quantity : <?php echo $num_rows3; ?> <p>
<?php } ?>

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
<a class="cart_quantity_up" id="target1" href="update_cart.php?action=increase&id=<?php echo $row['product_id'];?>" > + </a>
<?php

//WHERE cart_user_id ='$_SESSION[user]'			
$sql4 = "SELECT * FROM cart WHERE cart_product_id = '$row[cart_product_id]' AND cart_user_id ='$_SESSION[user]'	"; 
$result4 = mysqli_query($conn, $sql4) or die ('Error! yo.');

if($num_rows4 = mysqli_num_rows($result4)){
?>                                   
<input class="cart_quantity_input" id="output" type="text" name="quantity" value=<?php echo $num_rows4; ?> autocomplete="off" size="2">
<?php 
  } 
   
?>         
<a class="cart_quantity_down" id="target2" href="update_cart.php?action=decrease&id=<?php echo $row['product_id'];?>"> - </a>
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
<a class="cart_quantity_delete" href="update_cart.php?action=delete&id=<?php echo $row['product_id'];?>"><i class="fa fa-times"></i></a>
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
                        
		                     
                        
                       	<div>
							<a class="btn btn-default update" href="index_home.php">Continue to Shopping</a>
							<a class="btn btn-default check_out" href="checkout-login-register.php">Proceed to Payment</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
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


</body>
</html>