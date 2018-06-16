<?php
require_once'dbconfig.php';
$_GET['sub_category'];
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
								<li><a href="mycrate-login.php"> Login <span style="margin-left:25px">|</span></a></li>
								<li><a href="#openModal"> Register <span style="margin-left:25px">|</span></a></li>
								<li><a href="contact.html"> Contact <span style="margin-left:25px">|</span></a></li>
								<li><a href="mycrate.php"> My Crate <i class="fa fa-shopping-cart"></i></a></li>
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
						<div class="mainmenu">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="categories.html" class="active">CATEGORIES</a></li>
								<li><a href="past-purchases.html">PAST PURCHASES</a></li>
								<li><a href="favourites.html">FAVOURITES</a></li>
                                <li><a href="offer.html">OFFER</a></li>
							</ul>
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
					<div class="left-sidebar">
						<h2>FILTERS</h2>
                        
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sub1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										<div>Categories </div>	
										</a>
									</h4>
								</div>
                                
								<div id="sub1" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul id="filter">
                                            
                                               <?php  
       $conn = mysql_connect('localhost', 'root', '');
	   $db_selected = mysql_select_db('maiisuu', $conn);
	   
        $filter = mysql_query("SELECT DISTINCT category FROM categories") or die(mysql_error());
		
        while($row = mysql_fetch_assoc($filter))
        {   //value="'.$row['category'].'"
            echo '<li value="'.$row['category'].'">'.$row['category'].'</li>';
        }
    ?>
    <!--
											<li><a href="#">Sub Category </a></li>
											<li><a href="#">Sub Category </a></li>
											<li><a href="#">Sub Category </a></li>
											<li><a href="#">Sub Category </a></li>
		-->								
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="panel-group category-products" id="accordian1"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sub2">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sub-Category
										</a>
									</h4>
								</div>
								<div id="sub2" class="panel-collapse collapse in">
									<div class="panel-body">
										
                                        <ul id="filter2"> 
                                        <!--                                           
											<li><input type="checkbox"> <a href="#"> Category </a></li>
											<li><input type="checkbox"> <a href="#"> Category </a></li>
											<li><input type="checkbox"> <a href="#"> Category </a></li>
											<li><input type="checkbox"> <a href="#"> Category </a></li>
											<li><input type="checkbox"> <a href="#"> Category </a></li>
                                            <li><input type="checkbox"> <a href="#"> Category </a></li>
                                          -->  
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2   class="title text-center">HOME/PRODUCTS</h2>
                       
						<?php
						
						$conn = mysql_connect('localhost', 'root', '');
                        if (!$conn) 
						{
                            die('Not connected : ' . mysql_error());
					     }
 

                        $db_selected = mysql_select_db('maiisuu', $conn);
                        if (!$db_selected) 
					    {
                           die ('Can\'t use maiisuu : ' . mysql_error());
                         }
						 
						
						$key = $_GET['sub_category'];
						$sql = 'SELECT * FROM product where sub_category = "$key"';//
							
						
						$result = mysql_query($sql); 

						if (mysql_num_rows($result) > 0) 
						{                                         
    
   						while($row = mysql_fetch_assoc($result)) 
						{
						?>
                        
						<div class="col-sm-4" style=" width:25%; height:10%;"> <!--class="col-sm-4"-->
							<div class="product-image-wrapper"> <!--class="product-image-wrapper"-->
								<div class="single-products"> <!--class="single-products"-->
										<div class="productinfo text-center"> <!--class="productinfo text-center"-->
                                       
 <form id="form" method="POST" action="cart.php" enctype="multipart/form-data">
						<img src="images/<?php echo $row['product_img']; ?>" width="50px" height="250px" alt=""  /> 
											<!--<img src="images/Broccoli.jpg" alt="" />-->
							<p><b><?php echo $row['product_name']; ?>(<?php echo $row['product_weightkg'];?>kg)</b></p> 
											<p>$<?php echo $row['product_pricekg']; ?>/kg</p> 
                                            
                                            <p>$<?php echo $row['product_price']; ?></p>  
                             <input hidden="" type='text' name='productname' size="10" value=<?php echo $row['product_name']; ?> />
                            <br>       
                                            <!--<div class="cart_quantity">
                                            <div class="pull-left" style="margin-left:45px"><p>Qty</p></div>
                                            <div class="cart_quantity_button pull-right" style="margin-right:25px">
                                                <a class="cart_quantity_up" href=""> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href=""> - </a>
                                                
                                            </div>
											</div> -->
                                            
<button id="sub" class="btn btn-default add-to-cart"  type="submit" name="addtocart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
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
$('#filter li').click(function(){
    var $this = $(this);
    var selKeyVal = $this.attr("value");
   
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_3:selKeyVal
 },
 success: function (response) {
  document.getElementById("filter2").innerHTML=response;

 }
 });
 })
 
 function myfunction(){	
 var $this = $(this);
 var selKeyVal = $this.attr("value");
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_4:selKeyVal
 },
 success: function (response) {
  document.getElementById("displaythis").innerHTML=response;  
 }
 });
 }
 

   </script>
	

</body>
</html>