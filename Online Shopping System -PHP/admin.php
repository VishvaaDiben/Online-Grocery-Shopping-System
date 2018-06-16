<?php
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
	#form a {
		color:black;
	}
	
    input {
    border: 0;
     }
	 
	 .error {
    color: #FF0000;
     }	 	
	 
	 select {
     width:200px;
    } 
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
        
          <div class=""><h2 style="color:black; margin-left:15px; text-align: center">Admin Options</h2></div>
          <hr>
          	<div class="span12"> <br>
            <div id="pay-now" class="">
              <div class="">
                <ul id="myTab" class="nav nav-tabs" style="padding-left: 50px" >
                  
<li style="width:25%; text-align:center" class=""><a href="#tab1" data-toggle="tab" style="color:black !important">1. Add Products</a> </li>
<li style="width:25%; text-align:center" class=""><a href="#tab2" data-toggle="tab" style="color:black !important">2. Edit Products</a> </li>
<li style="width:25%; text-align:center" class=""><a href="#tab3" data-toggle="tab" style="color:black !important">3. View Products</a> </li>
<li style="width:25%; text-align:center" class=""><a href="#tab4" data-toggle="tab" style="color:black !important">4. Add Category/Sub-Category</a> </li>
                </ul>
                
               <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade active " id="tab1">
               <div class="row" style="color:#696763; padding-top:34px; padding-bottom:100px">
               <div class="col-lg-6" >
              
              
               
               <h4 style="color:black;position:relative;left:500px;">Products </h4>
              <div style="position:relative;left:500px;"> <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit"><i class="fa fa-plus"></i> Add New</button></div>
               <div id="edit" class="collapse login-form" style="position:relative;left:300px;" >
               
               <form id="form1" method="POST" action="add_details.php" enctype="multipart/form-data" >                  <!--FORM ATTRIBUTES-->
                
                <label> Name: </label>
    			<input id="v_name" type="text" name="product_name" placeholder="Enter Vegetable Name *" >
               
				   
             	<label>Weight (kg):</label>
              	<input id="v_weight"  type="text" name="product_weight" placeholder="Enter Product Weight *" >
                
              	
              	<label >Price:</label>
              	<input id="v_price" type="text" name="product_price" placeholder="Enter Product Price/Kg  *" >
                
              	
              	<label >Picture:</label>
              	<input id="v_pic" type="file" name="product_pic" accept="image/*">  

                  
                  
                  <label>Category:</label>                
<select id="dd1" name="category" onChange="fetch_select2(this.value)">
<option value="">Select Category</option>
 <?php  
       $conn = mysql_connect('localhost', 'root', '');
	   $db_selected = mysql_select_db('maiisuu', $conn);
	   
        $q = mysql_query("SELECT DISTINCT category FROM categories") or die(mysql_error());
		
        while($row = mysql_fetch_assoc($q))
        {
            echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
        }
    ?>
</select>

<div style="position:relative; top:-30px; left:265px;" id="open" hidden >
<label>Sub-category:</label>
<select id="dd2" name="sub-category">

</select>
</div>


<br> 
                
                  
                            	             
                <div style="position:relative;left:150px;" class="row">
                <div class="col-lg-6">
                <div> <button type="submit" name="btnsave" class="btn btn-default">Save</button></div>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                </div>
                </form>
  				</div>
               </div>

               </div>
               </div>
               
              <div class="tab-pane fade" id="tab2">
            <section id="cart_items">
		    <div class="container">
            <h4 style="color:black">Edit Details</h4>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
						    <td class="description" style="padding-left:40px">Index</td>
							<td class="image">Picture</td>                         
							<td class="description">Name</td>
							<td class="price">Weight(kg)</td>
							<td></td>
							<td class="quantity">Price</td>							
                            <td style="padding-left:30px">Options</td>
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
												 												
						$sql = 'SELECT product_id, product_name, product_pricekg, product_img, product_weightkg FROM product ORDER BY product_id DESC';

						$result = mysql_query($sql); 
						
						$i = 0;
					

						if (mysql_num_rows($result) > 0) 
						{                                         
    
   						while($row = mysql_fetch_assoc($result)) 
						{
						?>
						<form method="POST" action="update_details.php" enctype="multipart/form-data" >
						<tr>
						
						    <td class="cart_description">
								<h4 style="color: black"><p><input type='text' name="product_id" size="5" value=<?php echo $row['product_id']; ?>. style="padding-left:40px" readonly/></p></h4>
							</td>
						
							<td class="cart_product">						     					   
							     <img name="vege_pic" src="images/<?php echo $row['product_img']; ?>" alt="" />
                                 <!--<input type='file' name='vege_pic' accept="image/* />-->	
                                 <input type="file" style="color:#000" name="product_pic" accept="image/*">					
							</td>
							
							<td class="cart_description"> <!--cart_description-->
								<h4><p><input type='text' name='product_name' size="10" value=<?php echo $row['product_name']; ?> /></p></h4>	
                                							
							</td>
							
							<td class="cart_price">
													
								<p><input type='text' name='product_weight' size="5" value=<?php echo $row['product_weightkg']; ?> style="position:relative;left:40px" /></p>	
                                						
							</td>
							
							<td class="cart_quantity">							
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price"><input type='text' name="product_price" size="5" value=<?php echo $row['product_pricekg']; ?> style="position:relative;right:-3px;" /></p>
                               
							</td>
							
							
							<td class="">
								<input type="submit" id="button1" class="btn btn-success" name="Save"  value="Save"/>
							&nbsp;&nbsp;																				
							<!--<td class="cart_delete">-->
								<input type="submit" id="button2" class="btn btn-danger" name="Delete"  value="Delete"/>
														
							</td>
							
						</tr>
						</form>
						
						
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
	

                  </div>
                  <div class="tab-pane fade" id="tab3">
               <section id="cart_items">
                <div class="container">
                    
                	<div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                  <td class="image">Picture</td>
							      <td class="description">Name</td>
							      <td class="price">Weight(kg)</td>
							      <td></td>
							      <td class="quantity">Price</td>
							
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

						
						$sql = 'SELECT product_id, product_name, product_pricekg, product_img, product_weightkg FROM product ORDER BY product_id DESC';

						$result = mysql_query($sql); 
						
						$i = 0;
					

						if (mysql_num_rows($result) > 0) 
						{                                         
    
   						while($row = mysql_fetch_assoc($result)) 
						{
						?>
                               <td class="cart_product">
							     <a href=""><img src="images/<?php echo $row['product_img']; ?>" alt=""></a>
								<!--<a href=""><img src="images/Broccoli.jpg" alt=""></a>-->
							</td>
							
							<td class="cart_description"> <!--cart_description-->
								<h4><p><?php echo $row['product_name']; ?> </p></h4>
								
							</td>
							<td class="cart_price">
								<p style="padding-left:40px"> <?php echo $row['product_weightkg']; ?> </p>
								
											
							</td>
							<td class="cart_quantity">
							
							</td>
							<td class="cart_total">
								<p class="cart_total_price" style="position:relative;right:3px;"><?php echo $row['product_pricekg']; ?></p>
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
            

          </div>
          <!-- checkout 4 -->
          <div class="tab-pane fade" id="tab4">
               <div class="row" style="color:#696763; padding-top:34px; padding-bottom:100px">
               <div class="col-lg-6" >
              
              
               
               <h4 style="color:black;position:relative;left:500px;">Category</h4>
             <div style="position:relative;left:500px;"> <button type="submit" class="btn btn-default" style="background-color:#0b713d; color:white" data-toggle="collapse" data-target="#edit2"><i class="fa fa-plus"></i> Add New</button></div>
                 
              
<br>               
               
               <form id="form2" method="POST" action="add_details.php" enctype="multipart/form-data" >                  <!--FORM ATTRIBUTES-->
                
                <div id="edit2" class="collapse login-form" style="position:relative;left:420px;">
        
                <label> Name: </label>
                
    			<input id="category" type="text" name="category_name" style="background-color: #F3F3F3; width:200px; height:30px;" placeholder="  Enter Category Name *">
                
                
<br> <br>               
                <div style="position:relative;left:20px;" class="row">
                <div class="col-lg-6">
                <div> <button type="submit" name="save" class="btn btn-default">Save</button></div>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                </div>
                </div>
                              
<br>
                <div style="position:relative;left:500px;"> <button type="button" class="btn btn-default" style="background-color:#0b713d; color:white; width:97px;" data-toggle="collapse" data-target="#edit3"><i class="fa fa-plus"></i> Edit</button></div>
<br>
               <div id="edit3" class="collapse" style="position:relative;left:400px;">                  
               <!-- Dropdown Menus -->
               <label>Category:</label>  
                             
               <select name="select" id="dropdown1" onchange="fetch(this);">
               <option value="">Select Category</option>
                   <?php
        
        $res = mysql_query("SELECT DISTINCT category FROM categories") or die(mysql_error());
		
        while($row = mysql_fetch_assoc($res))
        {
            echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
        }
    ?>
               </select>
<br><br>
                <label style="position:relative; left:35px">Edit:</label>
                <input id="editing" type="text" name="editable" style="background-color: #F3F3F3; width:200px; height:30px; position:relative; left:35px;" >
  <!--              <input id="editing" type="text" name="" style="background-color: #F3F3F3; width:200px; height:30px; position:relative; left:35px;">-->
                               
<br> <br>               
               <div style="position:relative;left:20px;" class="row">
                
                <div class="col-lg-6">
                <div> <button type="submit" name="save2" class="btn btn-default">Save</button></div>
                </div>                
                
                <div style="position:relative;right:200px" class="col-lg-3 col-sm-pull-3">
                <div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                
                <div class="col-lg-3" style="position:relative; right:240px">
                <div> <button type="submit" name="delete" class="btn btn-default">Delete</button></div>
                </div>
                
                </div> 
               </div>
               <p style="position:relative; left:300px">========================================================</p>
              <h4 style="color:black;position:relative;left:500px;">Sub-Category</h4>  
            <div style="position:relative;left:500px;"> <button type="button" class="btn btn-default" style="background-color:#0b713d; color:white; width:97px;" data-toggle="collapse" data-target="#edit4"><i class="fa fa-plus"></i> Add New</button></div>
<br>   
               <div id="edit4" class="collapse" style="position:relative;left:400px;">                  
               <!-- Dropdown Menus -->
               <label>Category:</label>                
               <select name="select2" id="dropdown2">
               <option value="">Select Category</option>
               <?php
        
        $res2 = mysql_query("SELECT DISTINCT category FROM categories") or die(mysql_error());
		
        while($row2 = mysql_fetch_assoc($res2))
        {
            echo '<option value="'.$row2['category'].'">'.$row2['category'].'</option>';
        }
    ?>
               </select>
<br><br>               
               <label style="position:relative; left:-30px">Sub-Category:</label>
                <input id="adding2" type="text" name="adding" style="background-color: #F3F3F3; width:200px; height:30px; position:relative; left:-30px;" >
<br><br>            
                <div style="position:relative;left:45px;" class="row">
                <div class="col-lg-6">
                <div> <button type="submit" name="save3" class="btn btn-default">Save</button></div>
                </div>
                <div class="col-lg-3 col-sm-pull-3">
                <div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                </div>   
               </div> 
               
<br>
  <div style="position:relative;left:500px;"> <button type="button" class="btn btn-default" style="background-color:#0b713d; color:white; width:97px;" data-toggle="collapse" data-target="#edit5"><i class="fa fa-plus"></i> Edit</button></div>
<br>

<div id="edit5" class="collapse" style="position:relative;left:400px;">                  
               <!-- Dropdown Menus -->
               <label>Category:</label>    
                           
               <select id="dropdown3" onchange="fetch_select(this.value);"  >
               <option value="">Select Category</option>
                 <?php
        
        $res3 = mysql_query("SELECT DISTINCT category FROM categories") or die(mysql_error());
		
        while($row3 = mysql_fetch_assoc($res3))
        {
            echo '<option value="'.$row3['category'].'">'.$row3['category'].'</option>';
        }
    ?>
               </select> 
<br><br>
  
               <div style="position:relative;right:25px;">
               <label>Sub-category:</label>                
               <select id="dropdown4" name="slt" onchange="fetch2(this);" >                  
               </select>     
               </div>
            
               
               
<br>
<label style="position:relative; left:35px">Edit:</label>
                <input id="editing2" type="text" name="editable2" style="background-color: #F3F3F3; width:200px; height:30px; position:relative; left:35px;" >
<br><br>
                <div style="position:relative;left:20px;" class="row">
                
                <div class="col-lg-6">
                <div> <button type="submit" name="save4" class="btn btn-default">Save</button></div>
                </div>                
                
                <div style="position:relative;right:200px" class="col-lg-3 col-sm-pull-3">
                <div> <button type="reset" class="btn btn-default" style="background-color:white; border: 1px solid #0b713d; color:#0b713d">Cancel</button></div>
                </div>
                
                <div class="col-lg-3" style="position:relative; right:240px">
                <div> <button type="submit" name="delete2" class="btn btn-default">Delete</button></div>
                </div>
                
                </div>                
               </div> 
               
<!--
<div style="position:relative; top:-30px; left:265px;" id="edit4">
<label>Sub-category:</label>
<select id="dropdown2">
<option value="">Select Sub-Category</option>
</select>
</div>
-->                                                             	                                                    
                </form>
  				
                
               </div>

               </div>
               </div>
          <!-- Checkout 4 ending -->
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
	$('#form1').submit(function() {
    if ($.trim($("#v_name").val()) === "" || $.trim($("#v_weight").val()) === ""  || $.trim($("#v_price").val()) === "" || $.trim($("#v_pic").val()) === "") {
        alert('Please complete all the fields');
        return false;
    }
});

$('#dropdown3').change(function() {
	$.post("add_details.php", {value: this.value});
	$('#dropdown4').val(this.value);	
	});

function showDiv() {
   document.getElementById('open').style.display = "block";
}

function fetch(data)
{
document.getElementById ("editing").value = data.value;	
}

function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("dropdown4").innerHTML=response; 
 
 }
 });
}

function fetch2(data)
{
document.getElementById ("editing2").value = data.value;	
}

function fetch_select2(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_1:val
 },
 success: function (response) {
  document.getElementById("dd2").innerHTML=response; 
  myfunction();
 }
 });
}

function myfunction(){
	if(document.getElementById ("dd1").value == 0){	
    document.getElementById('open').style.display = "none";  
	}
	else{
		document.getElementById('open').style.display = "block";
		}
} 
</script>

</body>
</html>