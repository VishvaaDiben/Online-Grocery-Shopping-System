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
						<h2   class="title text-center">ORDER HISTORY</h2>
                       
			                     
						<div class="col-sm-4" style=" width:50%; height:10%;"> <!--class="col-sm-4"-->
							<div> <!--class="product-image-wrapper"-->
								<div class="single-products"> <!--class="single-products"-->
										<div class="productinfo text-center"> <!--class="productinfo text-center"-->
             
 
                        </div><br><br>
                             
<br>   
 <div id="container">
<div style="margin:20px auto; text-align: center;">
<form method="post" action="">
    <input type="text" name="search" id="search_box" class='search_box'/>
    <input type="submit" value="Search" class="search_button" /><br />
</form>
<?php
if (isset($_POST['search'])) 
{

    $word = mysql_real_escape_string($_POST['search']);
    $word = htmlentities($word);
  
    $sql = "SELECT temp_number FROM temp WHERE temp_number LIKE '%" . $word . "%' AND customer_id='$_SESSION[user]' ORDER BY temp_number LIMIT 10";
    
	$row = $conn->query($sql);
    if(count($row)) 
	{
        $end_result = '';
        foreach($row as $r)
		 {
          
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold) . '</li>';            
        }
        echo $end_result;
    } 
	else 
	{
        echo '<li>No results found</li>';
    }
}
?>
</div>      
<div>
 
<div id="searchresults">Search results :</div>
<ul id="results" class="update">
</ul>
 
</div>
</div>                       
</div>


                                                  
									</div>
								</div>
							</div>
						</div>
					

               
            
                </div>
  				</div>
                
	                                  
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script>
	 
$(function() {
 
    $(".search_button").click(function() {
        // getting the value that user typed
        var searchString    = $("#search_box").val();
        // forming the queryString
        var data            = 'search='+ searchString;
         
        // if searchString is not empty
        if(searchString) {
            // ajax call
            $.ajax({
                type: "POST",
                url: "do_search.php",
                data: data,
                beforeSend: function(html) { // this happens before actual call
                    $("#results").html(''); 
                    $("#searchresults").show();
                    $(".word").html(searchString);
               },
               success: function(html){ // this happens after we get results
                    $("#results").show();
                    $("#results").append(html);
              }
            });    
        }
        return false;
    });
});
	</script>
	

</body>
</html>