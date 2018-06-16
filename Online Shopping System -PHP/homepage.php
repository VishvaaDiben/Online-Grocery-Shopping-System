<?php
require_once'dbconfig.php';
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
						<div class="shop-menu pull-right dropdown">
							<ul class="nav navbar-nav">
				<li class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><a href="">My Account&#9660;<span style="margin-left:25px">|</span></a></li>
                                <ul class="dropdown-menu">
<li><a href="profile.php"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Profile</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Delivery Address</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Favourites</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order History</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Order Issues</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Settings</a></li><br>
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Logout</a></li><br>
                                </ul>
								<li><a href="contact.html">Contact<span style="margin-left:25px">|</span></a></li>
                                <li><a href="#">About Us<span style="margin-left:25px">|</span></a></li>
								<li><a href="mycrate.php">My Crate<i class="fa fa-shopping-cart"></i></a></li>
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

	</header><!--/header-->
	<section id="form" style="padding-top:20px; padding-bottom:50px;"><!--form-->
       <div class="container">
        <div id="content">
        
          <div class="row"><h4 style="color:black; margin-left:15px">CHECKOUT</h4></div>
          <hr>
          	<div class="span12"> <br>
            <div id="pay-now" class="">
              <div class="">
                <ul id="myTab" class="nav nav-tabs" >
                  
                  <li style="width:50%; text-align:center" class="active" ><a href="#checkout1" data-toggle="tab" style="color:black !important">1. DELIVERY DETAILS</a> </li>
              
                  <li style="width:47%; text-align:center; position:relative; left:40px" class="" ><a href="#checkout3" data-toggle="tab" style="color:black !important">2. PROCEED TO PAYMENT</a> </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  
               <div class="tab-pane fade active in" id="checkout1"> <!--class="tab-pane fade active in"-->
               <div class="row" style="color:#696763; padding-left:75px;padding-top:50px; padding-bottom:100px">
               <div class="col-lg-6">
               <div style="position:relative;left:400px" >
               <h4 style="color:black"></h4><br>
               
               <h4 style="color:black">Shipping Address </h4>
               <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit"><i class="fa fa-plus"></i> Add New</button><br><br>
               <div id="edit" class="collapse login-form">
               <form method="post" action="add_details.php" enctype="multipart/form-data">
    			<input type="text" name="addr1" placeholder="Address Line 1 *">
              	<input type="text" name="addr2" placeholder="Address Line 2 *">
                <input type="text" name="addr3" placeholder="Address Line 3 *">
                <br>
              	<div style="display:table; width:350px;text-align: center;">
              	<input type="text" name="brunei" placeholder="Brunei-Muara" style="width:60%;display:inline-block;" class="pull-left">
          		<input class="pull-right" name="postcode" type="number" placeholder="Post Code" style="width:30%;display:inline-block;">
                </div><br>
                <div class="row">
                <div class="col-lg-6">
                <button type="submit" name="saveaddress" class="btn btn-default">Save</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <button type="button" name="cancel" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button>
                </div>
                </div>
                </form>
                </div>
  				</div>
               </div>
               <div class="col-lg-6" >
              
               <div id="edit1" class="collapse login-form">
              
  				</div>
               </div>
               </div>
               </div>
              
                  <div class="tab-pane fade" id="checkout3">
               <section id="cart_items">
                <div class="container">
                    <h4 style="color:black; padding-top:50px">Cash on Delivery</h4>
                    <div style="padding-top:20px">
                    <p style="color:black">Thank you for your purchase on Maiisuu.</p>
                    <p style="color:black">Please pay in cash the exact amount billed in your Order Summary with <br> Order No.123456s, to our kaaklin once your item(s) arrive.</p>
                    </div>
                    <h4 style="color:black; padding-top:50px">Order Summary</h4>
                    <div class="row" style="color:#696763; padding-top:20px; padding-bottom:50px">
                     <div class="col-lg-6" >
                      <div class="row">
                      	<div class="col-lg-6" >
                        User Name :<br>
                        </div>
                        <div class="col-lg-6" >
                        Your User Name <br>
                        </div>
                        
                        <div class="col-lg-6" >
                        Full Name / Business Name :
                        </div>
                         <div class="col-lg-6" >
                        Your Full Name / Business Name<br>
                        </div>
                        
                        <div class="col-lg-6" >
                        Billing Address : <br>
                        </div>
                        <div class="col-lg-6" >
                        Your Billing Address<br>
                        </div>
                        
                      </div>
                     </div>
                     <div class="col-lg-6" >
                     	<div class="row">
                        
                      	<div class="col-lg-6" >
                        Order No. :<br>
                        </div>
                        <div class="col-lg-6" >
                        Your User Name <br>
                        </div>
                        
                        <div class="col-lg-6" >
                        Date &amp; Time of Purchase :<br>
                        </div>
                        <div class="col-lg-6" >
                        Your Date &amp; Time of Purchase<br>
                        </div>
                        
                        <div class="col-lg-6" >
                        Delivery Address : 
                        </div>
                        <div class="col-lg-6" >
                         Your Delivery Address<br>
                         Your Delivery Address<br>
                         Your Delivery Address
                        </div>
                        
                        <div class="col-lg-6" >
                        Delivery Slot : 
                        </div>
                        <div class="col-lg-6" >
                        Delivery Slot <br>
                        </div>
           
                      </div>
                     </div>
              		</div>
                	<div class="table-responsive cart_info">
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
												 												
						$sql = 'SELECT DISTINCT order_name, order_img, order_price, order_category, order_sub_category FROM cart ORDER BY order_id DESC';
						$result = mysql_query($sql); 
						$i = 0;	
						if (mysql_num_rows($result) > 0) 
						{ 					                                             
   						while($row = mysql_fetch_assoc($result))  
						{
						?>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="images/<?php echo $row['order_img']; ?>" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""><?php echo $row['order_name']; ?></a></h4>
								<p>Category :<?php echo $row['order_category']; ?> </p>
                                <p>Sub-Category :<?php echo $row['order_sub_category']; ?></p>
                                    </td>
                                    <td class="cart_price">
                                   <p>$<?php echo $row['order_price']; ?> </p>
                                    </td>
                                    <td class="cart_quantity">
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
$sql4 = "SELECT * FROM cart WHERE order_name = '$row[order_name]' "; 
$result4=mysql_query($sql4) or die ('Error! yo.');
mysql_select_db('maiisuu');
if($num_rows4 = mysql_num_rows($result4)){
?>
                                            <input class="cart_quantity_input" type="text" name="quantity" value=<?php echo $num_rows4; ?> autocomplete="off" size="2" style="border:none" readonly><?php } ?>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">$<?php echo $row['order_price']; ?> </p>
                                    </td>
                                </tr>
                                 <?php
						++$i;	
		
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
                          </tbody>
                        </table>
                    </div>
                 </div>
            </section> <!--/#cart_items-->
            
            <section id="do_action">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="total_area pull-right">
                                <ul>
                                    <li>Sub Total <span>$59</span></li>
                                    <li>Delivery Charge <span>$2</span></li>
                                    <hr>
                                    <li>Total <span>$59</span></li>
                                </ul>
                                 <hr>
                            </div>
                        </div>
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


	</script>
</body>
</html>