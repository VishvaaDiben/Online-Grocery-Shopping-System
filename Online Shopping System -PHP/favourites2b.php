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
	a
{color:black;}
a:hover
{color:green;}
a.focus:link, a.focus:visited
{color:blue;}
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
											<li><a href="#">Profile</a></li>
											<li><a href="#" >Delivery Address</a></li>
											<li><a href="favourites.php" class="alert-success">Favourites</a></li>
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
						
<p><b>FAVOURITES</b>&nbsp;&nbsp;&nbsp;<a href="favourites2a.php" >List</a>&nbsp;I&nbsp;<a href="favourites2b.php" class="focus">Grid</a></p><hr>
<?php
						
						$sql = "SELECT list_name FROM user_favourites where fav_userid = '$_SESSION[user]'";

						$result = mysqli_query($conn,$sql); 

						if (mysqli_num_rows($result) > 0) 
						{                                         

   						while($row = mysqli_fetch_assoc($result)) 
						{
echo"<div align='center'>" . $row['list_name'] . "</div>";
echo "<hr>";}}												    		
						?>                        
                        
											
						<?php												 												
						$sql = "SELECT * FROM product INNER JOIN favourite_temp ON product.product_id = favourite_temp.favourite_productid WHERE favourite_userid = '$_SESSION[user]'";
						$result = mysqli_query($conn,$sql); 						
						$i = 0;				
						if (mysqli_num_rows($result) > 0) 
						{                                             
   						while($row = mysqli_fetch_assoc($result)) 
						{
						?>
                        
						<div class="col-sm-4" style=" width:25%; height:10%;"> <!--class="col-sm-4"-->
							<div class="product-image-wrapper"> <!--class="product-image-wrapper"-->
								<div class="single-products"> <!--class="single-products"-->
										<div class="productinfo text-center"> <!--class="productinfo text-center"-->
                                       
<form id="form" method="POST" action="favourites_add_list_ss.php" enctype="multipart/form-data">
						<img src="images/<?php echo $row['product_img']; ?>" width="50px" height="250px" alt=""  /> 
											<!--<img src="images/Broccoli.jpg" alt="" />-->
							<p><b><?php echo $row['product_name']; ?>(<?php echo $row['product_weightkg'];?>kg)</b></p> 
											<p>$<?php echo $row['product_pricekg']; ?>/kg</p> 
                             <input type='text' hidden="" name='productid' value=<?php echo $row['product_id']; ?>/>               
                                            <p>$<?php echo $row['product_price']; ?></p>  
   <input hidden="" type='text' name='productname' size="10" value=<?php echo $row['product_name']; ?> />
                                          
<button style="position:relative; left: 20px" id="sub" class="btn btn-default add-to-cart"  type="submit" name="Save"><i class="fa fa-shopping-cart"></i>Add to cart</button>
<button style="position:relative; top: -350px" type="submit" id="button2" class="btn btn-danger" name="Delete"><i class="fa fa-times"></i></button>
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
                Start adding Favourites to this list by clicking the icon next to the product and it will show up in this page.<a href='favourite_index.php'>Click here</a>
            </div>
        </div>
        <?php
	                } 
						
	
         ?>
							
			</div><!--features_items-->
					
				</div>
			</div>
		</div>
        </div></div></div></div>
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
	function add_fields() {
document.getElementById('wrapper').innerHTML += '<span><hr><input name="list" id="list" type="text" placeholder="Enter list name"><br><br><input type="submit" id="add" name="add">&nbsp;<input type="reset"></span><hr>';		
document.getElementById('create').style.display = 'none';
}

/*$("#idForm").submit(function() {  
           
      $.ajax({    //create an ajax request to load_page.php
        type: "post",
        url: "favourites_add_ss.php",             
        data: $("#idForm").serialize(),   //expect html to be returned                
        success: function(){ 
		                    
			//document.getElementById("wrap").innerHTML=response;             
        },
    });
})*/

	</script>
	

</body>
</html>