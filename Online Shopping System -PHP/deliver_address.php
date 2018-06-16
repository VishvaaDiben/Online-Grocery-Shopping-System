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
    li { cursor: pointer; cursor: hand; }
	
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
								<li><a href=""> Login <span style="margin-left:25px">|</span></a></li>
								<li><a href=""> Register <span style="margin-left:25px">|</span></a></li>
								<li><a href=""> Contact <span style="margin-left:25px">|</span></a></li>
								<li><a href="mycrate.php"> My Crate <i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>	
					</div>
                    
                    <div class="search_box pull-right" style="margin-top:15px;">
							<input type="text" placeholder="Enter keyword" style="width:300px"/>
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
						<div class="mainmenu">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"> <!--Think its this-->
					<div>
                       
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#sub1">
											
										<div>My Account</div>	
										</a>
									</h4>
								</div>
                                
								<div id="sub1">
									<div class="panel-body">
										<ul id="filter">
											<li><a href="profile.php">Profile</a></li>
											<li><a href="deliver_address.php" class="alert-success">Delivery Address</a></li>
											<li><a href="#">Favourites</a></li>
											<li><a href="#">Order History</a></li>
								            <li><a href="#">Order Issues</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Logout</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2   class="title text-center">DELIVERY ADDRESS</h2>
                       
						 <?php

$address1 = mysqli_query($conn, "SELECT * FROM user_individual_register WHERE userid = '$_SESSION[user]'");
while($rows = mysqli_fetch_array($address1)) {
	$mark = $rows['address1'];
	$addr = explode(',', $mark);
	$line1= $addr[0];
	if ( ! isset($addr[1]) || ! isset($addr[2]) || ! isset($addr[3])) {
   $addr[1] = null;
   $addr[2] = null;
   $addr[3] = null;
    }
	$line2= $addr[1];
	$line3= $addr[2];
	$line4= $addr[3];	
 ?>                        
						<div class="col-sm-4" style=" width:50%; height:10%;"> <!--class="col-sm-4"-->
							<div> <!--class="product-image-wrapper"-->
								<div class="single-products"> <!--class="single-products"-->
										<div class="productinfo text-center"> <!--class="productinfo text-center"-->
                                       
                      <form method="POST" action="" enctype="multipart/form-data">
						<div>        
                          <br>
                          <p><b>Primary Address</b>&nbsp;&nbsp;<a href="delivery_address_edit_cs.php" style="text-decoration:underline">Edit</a></p><hr>
<label style="color:#000">Billing Address :&nbsp;&nbsp;</label>
<input style="border:none" type='text' name='' size="40"  value='<?php echo $line1; ?>'  readonly/>                            <br>
<div style="position:relative; left:55px">
<input style="border:none" type='text' name='' size="40"  value='<?php echo $line2; ?>'  readonly/>                            <br>
<input style="border:none" type='text' name='' size="40"  value='<?php echo $line3; ?>' readonly />                            <br>
<input style="border:none" type='text' name='' size="40"  value='<?php echo $line4; ?>'  readonly/>                            <br>

 
                        </div><br><br>
                             
<br>                             
</div>

 </form> 
                                                  
									</div>
								</div>
							</div>
						</div>
						
						<?php
		
					   } 
	
						?>
      
 <?php 


$sql2 = mysqli_query($conn, "SELECT address2 FROM user_individual_register WHERE userid = '$_SESSION[user]'");
if (mysqli_num_rows($sql2) > 0){  
while($rows = mysqli_fetch_array($sql2)) {
	$mark = $rows['address2'];
	$addr = explode(',', $mark);
	$line5= $addr[0];
	if ( ! isset($addr[1]) || ! isset($addr[2]) || ! isset($addr[3])) {
   $addr[1] = null;
   $addr[2] = null;
   $addr[3] = null;
    }
	$line6= $addr[1];
	$line7= $addr[2];
	$line8= $addr[3];
   echo "    <form method='POST' action='' enctype='multipart/form-data'>
						  <div>        
                          <br>
                          <p><b>Secondary Address</b>&nbsp;&nbsp;<a href='delivery_address_edit_cs.php' style='text-decoration:underline'>Edit</a></p><hr>
<label style='color:#000'>Billing Address :&nbsp;&nbsp;</label>
<input style='border:none' type='text' name='' size='40'  value='$line5' readonly/>                           <br>
<div style='position:relative; left:55px'>
<input style='border:none' type='text' name='' size='40' value='$line6'  readonly/>                           <br>
<input style='border:none' type='text' name='' size='40' value='$line7' readonly />                           <br>
<input style='border:none' type='text' name='' size='40' value='$line8'  readonly/>                           <br>
  
                        </div><br><br>                             
<br>                             
</div>
</form>";
						}//end while
						}//end if
						
else	
				        {	
						echo '	
						
							 
<div style="position:relative;left:30px; top:-50px"> <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit"><i class="fa fa-plus"></i> Add New</button></div>
<div id="edit" class="collapse login-form" style="position:relative;left:-50px; top:-10px" >
               <div style="position:relative; left: 150px">
               
               <form method="POST" action="delivery_address_edit_ss.php" enctype="multipart/form-data" >                  <!--FORM ATTRIBUTES-->
     			<input id="" type="text" name="addr2a" placeholder="Address line 1 *" >
             	<input id=""  type="text" name="addr2b" placeholder="Address line 2 *" >
            	<input id="" type="text" name="addr2c" placeholder="Address line 3 " >
                <input id="" type="text" name="addr2d" placeholder="Country/City *" >          	                <input id="" type="text" name="addr2e" placeholder="Postcode *" >
                
                <div style="position:relative;left:50px; top:-20px" class="row">
                <div class="col-lg-6">
                <div> <button type="submit" name="add_address" class="btn btn-default">Save</button></div>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
<div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                </div>
                </form>
                </div>
  				</div>
                
	              '; } 
                 ?>                       
				</div><!--features_items-->
					
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
    <script>
	</script>
	

</body>
</html>