<?php
session_start();
include'dbconfig.php';
if(!isset($_SESSION['user']))
{
header("Location: index.php");
}
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
								<li class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><a href="">My Account&#9660;<span style="margin-left:25px">|</span></a></li>
                                
                                <ul class="dropdown-menu">
<li><a href="profile.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Profile</a></li><br>
<li><a href="deliver_address.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Delivery Address</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Favourites</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order History</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order Issues</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Settings</a></li><br>
<li><a href="logout.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Logout</a></li><br>
                              </ul>
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
											<li><a href="profile.php" class="alert-success">Profile</a></li>
											<li><a href="deliver_address.php">Delivery Address</a></li>
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
						<h2   class="title text-center">Profile</h2>
                       
						<?php
						
						$sql = "SELECT * FROM user_individual_register where userid ='$_SESSION[user]'";						

						$result = mysqli_query($conn, $sql); 

						if (mysqli_num_rows($result) > 0) 
						{                                             
   						while($row = mysqli_fetch_assoc($result)) 
						{
						?>
                        
						<div class="col-sm-4" style=" width:50%; height:10%;"> <!--class="col-sm-4"-->
							<div> <!--class="product-image-wrapper"-->
								<div class="single-products"> <!--class="single-products"-->
										<div class="productinfo text-center"> <!--class="productinfo text-center"-->
                                       
                        <form method="POST" action="" enctype="multipart/form-data">
						<div>     
<label style="color:#000;position:relative; left:100px; top: -20px;">Email Address :&nbsp;&nbsp;</label>
<input style="border:none; position:relative; left:100px; top:-20px;" type='text' name='' size="40"  value= '<?php echo $row['email']; ?>' readonly />
                          <br>    
<label style="color:#000; position:relative; left:-55px; top: -10px;">Contact Number :</label>
<input style="border:none; position:relative; left: 150px; top: -35px" type='text' name='' size="40"  value='<?php echo $row['number']; ?>' readonly />						<?php
		
					   } 
	
				     }    

				    else	
				    {
		
						?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	                } 
							
         ?>         

                          
<div style="position:relative; left:48px; top:-20px;">                          
<label style="color:#000">Billing Address :&nbsp;&nbsp;</label>
<?php

$address = mysqli_query($conn, "SELECT * FROM user_individual_register WHERE userid = '$_SESSION[user]'");
if (mysqli_num_rows($address) > 0){ 
while($rows = mysqli_fetch_array($address)) {
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
<input style="border:none" type='text' name='' size="40"  value='<?php echo $line1; ?>'  readonly/>                             
<input style="border:none; position:relative; left:50px;" type='text' name='' size="40"  value='<?php echo $line2; ?>'  readonly/>                            
<input style="border:none; position:relative; left:50px;"" type='text' name='' size="40"  value='<?php echo $line3; ?>' readonly />                           
<input style="border:none; position:relative; left:50px;" type='text' name='' size="40"  value='<?php echo $line4; ?>'  readonly/>                            
 
<?php
		
					   } 
	
				     }    

				    else	
				    {
		
						?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	                } 
							
         ?> 
 
</div><br><br>
                             <button style="position:relative; left:150px;" type="submit"><a href="profileedit.php">Edit</a></button>
                             
</div>

                                         
                                        
									</div>
								</div>
							</div>
						</div>
                        
                      
<!--//////////////////////////////////////////                    /////////////////////////////////// ///////// -->
<br>
<br>
<br>
     

                          
<div style="position:relative; left:48px; top:-20px;">   
<i style="position:relative; left:50px;">SECONDARY</i> <br>                  
<label style="color:#000">Billing Address :&nbsp;&nbsp;</label>
<?php

$address1 = mysqli_query($conn, "SELECT * FROM user_individual_register WHERE address2 IS NOT NULL AND userid = '$_SESSION[user]'");
if (mysqli_num_rows($address1) > 0){ 
while($rows = mysqli_fetch_array($address1)) {
	$mark = $rows['address2'];
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
	

echo "<input style='border:none' type='text' name='' size='40'  value='$line1'  readonly/>                             
<input style='border:none; position:relative; left:50px;' type='text' name='' size='40'  value='$line2'  readonly/>                            
<input style='border:none; position:relative; left:50px;' type='text' name='' size='40'  value='$line3' readonly />                           
<input style='border:none; position:relative; left:50px;' type='text' name='' size='40'  value='$line4'  readonly/> ";                           
 

		
					   } 
	
				     }    

				    else	
				    {
		
						?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	                } 
							
         ?>
 
</div><br><br>
                             
                             
</div>

                                        </form> 
                                        
									</div>
								</div>
							</div>
						</div>
<!--//////////////////////////////////////////                    /////////////////////////////////// ///////// -->                       
                        
						

				</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
<!--		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<center><p>Copyright © 2017 Maiisuu. All rights reserved.</p></center>
				</div>
			</div>
		</div>
-->		
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