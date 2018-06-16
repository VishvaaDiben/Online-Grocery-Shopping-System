<?php
session_start();
include'dbconfig.php';

if (isset($_GET["sub_category"])) 
{
    $id=$_GET["sub_category"];    
}
else
{  
    $id="";
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
                        <p style="color:#0F0; position:relative; right:-200px;"><i style="color:#333">WELCOME&nbsp;</i><?php echo "$_SESSION[email]"; ?></p>
							<ul class="nav navbar-nav">
							<li class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><a href="">My Account&#9660;<span style="margin-left:25px">|</span></a></li>
                                
                                <ul class="dropdown-menu">
<li><a href="profile.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Profile</a></li><br>
<li><a href="deliver_address.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Delivery Address</a></li><br>
<li><a href="favourites.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Favourites</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order History</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order Issues</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Settings</a></li><br>
<li><a href="logout.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';" id="logout">Logout</a></li><br>
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

	   $sql ="SELECT DISTINCT category FROM categories";
       $query = mysqli_query($conn,$sql) or die ;
  
       if($id== null || $id == "")
       {
        $sql2 ="SELECT * FROM product";
       }
       else
       {
	    $sql2 ="SELECT * FROM product WHERE sub_category = '$id'";	  
       }  
       $query2 = mysqli_query($conn,$sql2) or die ;
	   
       while($row = mysqli_fetch_array($query))
        {   //value="'.$row['category'].'"
            echo '<li value="_'.$row['category'].'">'.$row['category'].'</li>';
        }
	   	
       /* while($row = mysqli_fetch_assoc($filter))
        {   //value="'.$row['category'].'"
            echo '<li value="'.$row['category'].'">'.$row['category'].'</li>';
        }*/
		
    ?>   <!--
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
                        
                        <div id="filter2">
                        </div>
                        
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2   class="title text-center">HOME/PRODUCTS</h2>
<!--start-->
                       <?php
                       
					   while($fetch=mysqli_fetch_array($query2))					  
					   {
						foreach (glob("images/".$fetch[1]."*.*") as $filename)
					    {							
							 $shortname = basename($filename);
							
                       echo " <div class='col-sm-4' style=' width:25%; height:10%;'>
						<div class='product-image-wrapper'>
						<div class='single-products'>
						<div class='productinfo text-center'>
						<form id='form' method='POST' action='cart.php' enctype='multipart/form-data'>
						<img src='$filename' alt='' />										
						<h2>$fetch[1] ($fetch[3]kg)</h2>										
						<p>$$fetch[4]/kg</p>
                        <p>$$fetch[5]</p>
						<input hidden='' type='text' name='productid' value='$fetch[0]'/>                                       
<button class='btn btn-default add-to-cart'  type='submit' name='addtocart' onClick='block(); return false;'><i class='fa fa-shopping-cart'></i>Add to cart</button>
						</form>
						</div>
						</div>
						</div>
						</div>";						
						
					  }
					   }
					    
					?>
                        <!--end-->              
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
 url: 'fetch_data2.php',
 data: {
  get_3:selKeyVal
 },
 success: function (response) {
  document.getElementById("filter2").innerHTML=response;

 }
 });
 })
 
 $(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout')) {
            return true;
        }

        return false;
    });
});

setTimeout(function() { window.location.href = "logout.php"; }, 24 * 60 * 60 * 1000);
   </script>
	

</body>
</html>