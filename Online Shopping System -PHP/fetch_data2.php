<?php
include("dbconfig.php");

if(isset($_POST["get"])) {
	
$get= $_POST["get"];

$g = explode("_",$get);

$sql = "SELECT * FROM categories WHERE category='$g[1]'"; //Something that equals to both tables//
$query = mysqli_query($conn,$sql) or die;

echo "<div class='panel-group category-products' id='accordian1'>
		<div class='panel panel-default'>
		  <div class='panel-heading'>
			<h4 class='panel-title'>
			  <a data-toggle='collapse' data-parent='#accordian' href='#sub2'>
				<span class='badge pull-right'><i class='fa fa-plus'></i></span>
				  $g[1]
			  </a>
			</h4>
		  </div>
   <div id='sub2' class='panel-collapse collapse in'>
	 <div class='panel-body'>
										
      <ul> ";                                              
	    while($fetch=mysqli_fetch_array($query))
		 {
		  echo "<li><a href='index.php?sub_category=$fetch[2]'>$fetch[2]</a></li>";
		  }
                                           
echo "</ul>
		</div>
	  </div>
	 </div>
							
  </div>";
exit;
	}


	
if(isset($_POST['get_3']))
{
$get= $_POST["get_3"];

$g = explode("_",$get);

$sql = "SELECT * FROM categories WHERE category='$g[1]'"; //Something that equals to both tables//
$query = mysqli_query($conn,$sql) or die;

echo "<div class='panel-group category-products' id='accordian1'>
		<div class='panel panel-default'>
		  <div class='panel-heading'>
			<h4 class='panel-title'>
			  <a data-toggle='collapse' data-parent='#accordian' href='#sub2'>
				<span class='badge pull-right'><i class='fa fa-plus'></i></span>
				  $g[1]
			  </a>
			</h4>
		  </div>
   <div id='sub2' class='panel-collapse collapse in'>
	 <div class='panel-body'>
										
      <ul> ";                                              
	    while($fetch=mysqli_fetch_array($query))
		 {
		  echo "<li><a href='index_home.php?sub_category=$fetch[2]'>$fetch[2]</a></li>";
		  }
                                           
echo "</ul>
		</div>
	  </div>
	 </div>
							
  </div>";
 exit;
}
?>