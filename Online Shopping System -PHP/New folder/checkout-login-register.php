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
<li><a href="#"  onmouseover="this.style.color='orange';" onmouseout="this.style.color='';">Logout</a></li><br>
                              </ul>
                                
								<li><a href="contact.html"> Contact <span style="margin-left:25px">|</span></a></li>
<li><a href="index_home.php"> Shopping <i class="fa fa-shopping-cart"></i><span style="margin-left:25px">|</span></a></li>
								<li><a href="mycrate.php"> My Crate <i class="fa fa-shopping-cart"></i></a></li>
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
                  <li style="width:25%; text-align:center" class="active"><a href="#profile" data-toggle="tab" >1. LOGIN / REGISTRATION</a></li>
                  <li style="width:25%; text-align:center" class="" ><a href="#checkout1" data-toggle="tab" style="color:black !important">2. DELIVERY DETAILS</a> </li>
                  <li style="width:25%; text-align:center" class=""  ><a href="#checkout2" data-toggle="tab" style="color:black !important">3. ORDER DETAILS</a> </li>
                  <li style="width:25%; text-align:center" class="" ><a href="#checkout3" data-toggle="tab" style="color:black !important">2. PROCEED TO PAYMENT</a> </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="profile">
                    <div>
                      <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="login-form"><!--login form-->
                                <h2>Login</h2>
                               <form action="login.php" method="POST" onSubmit="return validate();">
                                    <input type="email" name="email2" placeholder="Email Address *">
                                    <input type="password" name="password2" placeholder="Password *">
                                    <span>
                                     <input type="checkbox" name="remember" value="true" class="checkbox" > 
                                        <span style="color:#696763">Remember me</span><br>
                                       <a href="#openModal" style="color:#0b713d; position:relative; left:200px; top:-25px"><i>Forgot password?</i></a>
                                    </span>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <button type="submit" name="login2" style="position:relative; left: 50px" class="btn btn-default">Login</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-pull-3">
                                    <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d; position:relative; left: 100px">Cancel</button>
                                    </div>
                                    </div>
                                </form>
                            </div><!--/login form-->
                        </div>
    <div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Enter account id and reset password</h2>
                <form action="login.php" method="POST" onSubmit="return valid();"><br>
                <input type="email" name="email" id="" placeholder="Enter email id" required/><br>
                <input type="password" name="newpassword" id="newpassword" placeholder="Enter new password" required/><br>
                <input type="password" name="newpasswordc" id="newpasswordc" placeholder="confirm new password" required/><br>
                <button name="submit">Submit</button>
                </form>
                <script>
				function valid() 
{		
var $email = $('form input[name="email'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}
var a = document.getElementById('newpassword').value;
var b = document.getElementById('newpasswordc').value;	
if (a != b ) 
{
            alert("password is not matching.");
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
	</div>
</div> 
                        <div class="col-sm-1">
                            <h2 class="or">OR</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="signup-form"><!--sign up form-->
                                <h2>Register Account - Individual</h2>                                 
                                 <form action="cart.php" method="POST" onSubmit="return valid2();">
                                	<div style="color:#696763;white-space:nowrap;" id="acc">
                                        
                                    </div>
                                    <input type="text" name="email3" placeholder="Email Address *" required>
                                    <input type="text" name="password" id="password" placeholder="Password *" required>
                                    <input type="text" id="passwordc" placeholder="Confirm Password *" required>
                                      
                                    <input type="number" name="number" id="number" placeholder="Office *" required>
                                    <a onclick="toggle_visibility('foo');" style="text-decoration:underline">Add more contact numbers</a>
           <div id="foo" hidden>
           <input type="number" name="number1" id="number1" placeholder="Office1 *">
           <input type="number" name="number2" id="number2" placeholder="Office2 *">
           </div>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
                                  <br><br>
                                   <i style="font-size:11px; color:black" >I have read, understood and agreed to maiisuu's<a href="#" style="text-decoration:underline; color:#0b713d">T&amp;C's*</a>.Trust all information declared is accurate, complete and current.</i>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <button type="submit" name="register3" class="btn btn-default">Register</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-pull-3">
                                    <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d; position:relative; left: 100px">Cancel</button>
                                    </div>
                                    </div>
                                </form>
                                                <script>
function valid2() 
{		
var $email = $('form input[name="email3'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}
var a = document.getElementById('password').value;
var b = document.getElementById('passwordc').value;	
if (a != b ) 
{
            alert("password is not matching.");
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
                            </div><!--/sign up form-->
                        </div>
                    </div>
                </div>
               </div>
              </div>
              <hr>
              <div class="tab-pane fade active in" id="profile">
                    <div>
                      <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="login-form"><!--login form-->
                                <h2>Login</h2>
                                 <form action="login.php" method="POST" onSubmit="return valid3();">
                                    <input type="email4" name="email4" id="email4" placeholder="Email Address *">
                                    <input type="password4" id="password4" name="password4" placeholder="Password *">
                                    <span>
                                     <input type="checkbox" name="remember" value="true" class="checkbox" > 
                                        <span style="color:#696763">Remember me</span><br>
                                       <a href="#openModal2" style="color:#0b713d; position:relative; left:200px; top:-25px"><i>Forgot password?</i></a>
                                    </span>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <button type="submit" name="login3" style="position:relative; left: 50px" class="btn btn-default">Login</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-pull-3">
                                    <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d; position:relative; left: 100px">Cancel</button>
                                    </div>
                                    </div>
</form>
<script>                                

function valid3() {	
	
var $email = $('form input[name="email4'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}

var a = document.getElementById('password4').value;
	
if (a.length  > "8" || a.length < "8" )
{
	alert("Passwords must be 8 characters.");
            return false;
	}			 
	return true;	
}


	</script>                                
                            </div><!--/login form-->
                        </div>
<div id="openModal2" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Enter account id and reset password</h2>
                <form action="login.php" method="POST" onSubmit="return valid4();"><br>
                <input type="email" name="email2" id="" placeholder="Enter email id" required/><br>
                <input type="password" name="newpassword2" id="newpassword2" placeholder="Enter new password" required/><br>
                <input type="password" name="newpasswordc2" id="newpasswordc2" placeholder="confirm new password" required/><br>
                <button name="submit2">Submit</button>
                </form>
                <script>
				function valid4() 
{		
var $email = $('form input[name="email2'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}
var a = document.getElementById('newpassword2').value;
var b = document.getElementById('newpasswordc2').value;	
if (a != b ) 
{
            alert("password is not matching.");
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
	</div>
</div>                         
                        <div class="col-sm-1">
                            <h2 class="or">OR</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="signup-form"><!--sign up form-->
                                <h2>Register Account - Business</h2>                                 
                                <form action="cart.php" method="POST" onSubmit="return valid5();">
                                	<div style="color:#696763;white-space:nowrap;" id="acc">
                                        
                                    </div>
                                    <input type="text" name="mail" placeholder="Email Address *" required>
                                    <input type="text" name="password" id="password6" placeholder="Password *" required>
                                    <input type="text" id="passwordc6" placeholder="Confirm Password *" required>
                                      
                                    
                                      
                                    <input type="text" name="business" id="business6" placeholder="Business Name *" required>
                                    <select id="select" name="select2" required>
   <option value="">Business Type</option>                                              
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<br><br>
                                    <input type="number" name="number" id="number6" placeholder="Office *" required>
                                    <a onclick="toggle_visibility2('foo2');" style="text-decoration:underline">Add more contact numbers</a>
<div id="foo2" hidden>
           <input type="number" name="number1" id="number1" placeholder="Office1 *">
           <input type="number" name="number2" id="number2" placeholder="Office2 *">
           </div>
<script type="text/javascript">
<!--
    function toggle_visibility2(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>                                    
                                    
                                    <br><br>
                                   <i style="font-size:11px; color:black" >I have read, understood and agreed to maiisuu's<a href="#" style="text-decoration:underline; color:#0b713d">T&amp;C's*</a>.Trust all information declared is accurate, complete and current.</i>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <button type="submit" name="registerfinal" class="btn btn-default">Register</button>
                                    </div>
                                    <div class="col-lg-3 col-sm-pull-3">
                                    <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d; position:relative; left: 100px">Cancel</button>
                                    </div>
                                    </div>
                                </form>
<script>
function valid5() 
{		
var $email = $('form input[name="mail'); //change form to id or containment selector
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
if ($email.val() == '' || !re.test($email.val()))
{
    alert('Please enter a valid email address.');
    return false;
}
var a = document.getElementById('password6').value;
var b = document.getElementById('passwordc6').value;	
if (a != b ) 
{
            alert("password is not matching.");
            return false;
}
if (a.length  > "8" || a.length < "8" )
{
	alert("Passwords must be 8 characters.");
            return false;
	}
var c = document.getElementById('number6').value;
if (c.length  > "10" || c.length < "10" )
{
	alert("Phone number must have 10 digits.");
            return false;
	}
var d = document.getElementById('business6').value;
if ( d = "")
{
	alert("Phone enter business name.");
            return false;
	}			 
	return true;	
}
</script>                                
                            </div><!--/sign up form-->
                        </div>
                    </div>
                </div>
               </div>
              </div>
              
               <div class="tab-pane fade" id="checkout1">
               <div class="row" style="color:#696763; padding-left:75px;padding-top:50px; padding-bottom:100px">
               <div class="col-lg-6">
               <h4 style="color:black">Delivery Details</h4><br><br>
               <h4 style="color:black">Primary Address | <span style="font-size:11px"> Edit <i class="fa fa-pencil"></i></span></h4>
               <address>
               address 1<br>
               address 2<br>
               address 3<br>
               </address>
               <br>
               <h4 style="color:black">Secondary Address </h4>
               <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit"><i class="fa fa-plus"></i> Add New</button>
               <div id="edit" class="collapse login-form">
               <form>
    			<input type="text" placeholder="Address Line 1 *">
              	<input type="text" placeholder="Address Line 2 *">
              	<div style="display:table; width:350px;text-align: center;">
              	<input type="text" placeholder="Brunei-Muara" style="width:60%;display:inline-block;" class="pull-left">
          		<input class="pull-right" type="number" placeholder="Post Code" style="width:30%;display:inline-block;">
                </div>
                <div class="row">
                <div class="col-lg-6">
                <button type="submit" class="btn btn-default">Save</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button>
                </div>
                </div>
                </form>
  				</div>
               </div>
               <div class="col-lg-6" >
               <h4 style="color:black">Delivery Details<span style="color:#929292">(for business account)</span></h4><br><br>
               <h4 style="color:black">Primary Address | <span style="font-size:11px"> Edit <i class="fa fa-pencil"></i></span></h4>
               <address>
               address 1<br>
               address 2<br>
               address 3<br>
               </address>
               <br>
               <h4 style="color:black">Secondary Address </h4>
               <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit1"><i class="fa fa-plus"></i> Add New</button>
               <div id="edit1" class="collapse login-form">
               <form>
    			<input type="text" placeholder="Address Line 1 *">
              	<input type="text" placeholder="Address Line 2 *">
              	<div style="display:table; width:350px;text-align: center;">
              	<input type="text" placeholder="Brunei-Muara" style="width:60%;display:inline-block;" class="pull-left">
          		<input class="pull-right" type="number" placeholder="Post Code" style="width:30%;display:inline-block;">
                </div>
                <div class="row">
                <div class="col-lg-6">
                <button type="submit" class="btn btn-default">Save</button>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <button type="button" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button>
                </div>
                </div>
                </form>
  				</div>
               </div>
               </div>
               </div>
              <div class="tab-pane fade" id="checkout2">
                   <section id="cart_items">
		<div class="container">
            <h4 style="color:black">Order Details</h4>
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
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Broccoli.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Broccoli</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Cabbage.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Cabbage</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/Chili Red.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Chili</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
                           
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
    <section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
                	<span style="padding:60px 0px 0px 100px"><blink>FREE DELIVERY</blink>, <span style="color:black;">WHEN YOU SHOP BND $XXX MORE.</span></span>
					<div class="total_area pull-right">
						<ul>
							<li>Sub Total <span>$59</span></li>
							<li>Delivery Charge <span>$2</span></li>
                            <hr>
                            <li>Total <span>$59</span></li>
						</ul>
                         <hr>
                        <div stle="margin-left:10px">
                        Special Note
                        <textarea name="message" placeholder="Notes to kaakiin Driver on who will receive items." rows="10"></textarea>
                        </div>
                       	<div>
							<a class="btn btn-default check_out pull-right" style="border-radius:10px; color:white; padding:5px 10px;" href="">Proceed to Payment</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="images/Broccoli.jpg" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">Broccoli</a></h4>
                                        <p>Web ID: 1089772</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>$59</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href=""> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href=""> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">$59</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="images/Cabbage.jpg" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">Cabbage</a></h4>
                                        <p>Web ID: 1089772</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>$59</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href=""> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href=""> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">$59</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="images/Chili Red.jpg" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">Chili</a></h4>
                                        <p>Web ID: 1089772</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>$59</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href=""> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href=""> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">$59</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                    </td>
                                   
                                </tr>
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
 function block(){
	 alert("Login to Access this section");
	 }

	</script>
</body>
</html>