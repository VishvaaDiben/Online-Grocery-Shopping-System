<?php
session_start();
require'dbconfig.php';
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
	
		<div class="header-bottom" style="padding-bottom:10px !important; padding-top: 0px !important;"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="background-color:#0b713d; height:auto; padding:50px 20px; ">
						<section id="form"><!--form-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="login-form"><!--login form-->
                                        
                                            <form action="cart.php" method="POST" onSubmit="return validate();">
 <h2  style="position:relative; left:400px;color:#FFF">Individual</h2>
                                                <input id="email" name="email" style="position:relative; left:320px; width:250px; " type="email" placeholder="Email Address" required>
                                                <input id="password" name="password" style=" position:relative; width:250px; left:320px;" type="password" placeholder="Password" required>
                                                 <input id="passwordc" name="passwordc" style=" position:relative; width:250px; left:320px;" type="password" placeholder="Confirm Password" required> 
                                                 <input id="number" name="number" style=" position:relative; width:250px; left:650px; top:-150px" type="number" placeholder="Mobile number" required>
                                                 
<button type="submit" name="register" style="background-color: #0C3; color:white; outline-color:#FFF; position:relative; left:800px">Register</button>
                                            </form>
                                        </div><!--/login form-->
                                    </div>
                                     <div class="col-sm-4 col-sm-offset-1" style="margin-top:50px">
                                         <div class="pull-right">
             <a style="position:relative; left:140px ;top:-54px" href="home-register-bus.php">Business Acct</a>
                                            <br><br>
                                            
                                           
                                          </div>
                                     </div>
                                </div>
                            </div>
                        </section>
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
                                    <ul><li style="color:#F00">register to view</li></ul>
										<ul id="filter" hidden="">
                                            
                                               <?php  
       $conn = mysqli_connect('localhost', 'root', '');
	   $db = mysqli_select_db($conn,"maiisuu");
	   $filter = mysqli_query($conn, "SELECT DISTINCT category FROM categories") or die(mysqli_error());
		
        while($row = mysqli_fetch_assoc($filter))
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
										<ul><li style="color:#F00">register to view</li></ul>
                                        <ul id="filter2" hidden> 
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

						$sql = 'SELECT product_id, product_name, product_weightkg, product_pricekg, product_img, product_price FROM product ORDER BY product_id DESC';
							
						$result = mysqli_query($conn, $sql); 

						if (mysqli_num_rows($result) > 0) 
						{                                         
    
   						while($row = mysqli_fetch_assoc($result)) 
						{
						?>
                        
						<div id="displaythis" class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
                                       <form id="form" method="POST" action="" enctype="multipart/form-data">
						<img src="images/<?php echo $row['product_img']; ?>" width="90px" height="250px" alt=""  /> 
											<!--<img src="images/Broccoli.jpg" alt="" />-->
							<h2><?php echo $row['product_name']; ?>(?kg)</h2> 
											<p style="color:#F00">$[register to view]/kg</p> 
                                            
                                            <p style="color:#F00">$[register to view]</p>  
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
                                            
<button  id="" class="btn btn-default add-to-cart"  type="" name=""><i class="fa fa-cart-arrow-down"></i>Register to Add</button>
										</div>
								</div>
							</div>
						</div>
						</form>
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


function validate() {	
//


var $email = $('form input[name="email'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}
//
var a = document.getElementById('password').value;
var b = document.getElementById('passwordc').value;	
if (a != b) 
{
            alert("Passwords not matched.");
            return false;
}
if (a.length  > "8" || a.length < "8" )
{
	alert("Passwords must be 8 characters.");
            return false;
	}
var c = document.getElementById('number').value;
if (c.length  > "10" || c.length < "10" )
{
	alert("Phone number must have 10 digits.");
            return false;
	}		
			 
	return true;	
}

</script>
</body>
</html>