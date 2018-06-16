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
											<li><a href="favourites.php">Favourites</a></li>
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
						<h2   class="title text-center">Delivery Address</h2>
                       
						<?php						
						$sql = "SELECT * FROM user_individual_register where userid = '$_SESSION[user]'";
						$result = mysqli_query($conn, $sql); 
						if (mysqli_num_rows($result) > 0) 
						{                                         
   						while($row = mysqli_fetch_assoc($result)) 
						{	
						$mark = $row['address1'];
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
                                       
                      <form  method="POST" action="delivery_address_edit_ss.php" enctype="multipart/form-data">
						<div style="position: relative; left:-50px">       
                          <br>
<p><b>Primary Address</b></p>
<hr>                          
<label style="color:#000; position:relative; left: -80px">Billing Address :&nbsp;&nbsp;</label>
<input style="position:relative; left:120px; top:-25px;" type='text' name='line1' size="40" id="1"  value='<?php echo $line1; ?>' />   
                          <br>
<div style="position:relative; left:55px">
<input style="position:relative; left:65px; top:-20px;" type='text' name='line2' size="40" id="2"  value='<?php echo $line2; ?>' />  
                          <br>
<input style="position:relative; left:65px; top:-15px;" type='text' name='line3' size="40" id="3"  value='<?php echo $line3; ?>' />  
                          <br>
<input style="position:relative; left:65px; top:-10px;" type='text' name='line4' size="40"  id="4" value='<?php echo $line4; ?>' />  


 
                             </div><br><br>                             
                             <input name="save_addr1" type="submit" value="Save"/>
                             <input type="button" onclick="ClearFields1();" value="Clear" />

</div>
                                      </form> 
                                        
									</div>
								</div>
							</div>
						</div>
						
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
         
                      <?php
						
				
						$sql = "SELECT * FROM user_individual_register where userid = '$_SESSION[user]'";
						$result = mysqli_query($conn, $sql); 
						if (mysqli_num_rows($result) > 0) 
						{                                            
   						while($row = mysqli_fetch_assoc($result)) 
						{
							$mark = $row['address2'];
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
                                       
                      <form  method="POST" action="delivery_address_edit_ss.php" enctype="multipart/form-data">
						<div style="position: relative; left: -50px; top:-2px">       
                          <br>
<p style="position:relative; left: 10px"><b>Secondary Address</b></p>
<hr style="position:relative; left:60px">                           
<label style="color:#000; position:relative; left: -80px">Billing Address :&nbsp;&nbsp;</label>
<input style="position:relative; left:120px; top:-25px;" type='text' name='line5' size="40" id="5"  value='<?php echo $line1; ?>' />   
                          <br>
<div style="position:relative; left:55px">
<input style="position:relative; left:65px; top:-20px;" type='text' name='line6' size="40" id="6"  value='<?php echo $line2; ?>' />  
                          <br>
<input style="position:relative; left:65px; top:-15px;" type='text' name='line7' size="40"  id="7" value='<?php echo $line3; ?>' />  
                          <br>
<input style="position:relative; left:65px; top:-10px;" type='text' name='line8' size="40" id="8"  value='<?php echo $line4; ?>' />    

 
                             </div><br><br>                             
                             <input name="save_addr2" type="submit" value="Save"/>
                             <input type="button" onclick="ClearFields2();" value="Clear" />

</div>
                                      </form> 
                                        
									</div>
								</div>
							</div>
						</div>
						
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
	function ClearFields1() {

     document.getElementById("1").value = "";
     document.getElementById("2").value = "";
	 document.getElementById("3").value = "";
	 document.getElementById("4").value = "";
	}
	
	function ClearFields2() {
	 document.getElementById("5").value = "";
	 document.getElementById("6").value = "";
	 document.getElementById("7").value = "";
	 document.getElementById("8").value = "";
}
	</script>
	

</body>
</html>