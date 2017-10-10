
<?php
include("includes/db.php");
include("functions/functions.php");


?>

<!DOCTYPE html>
<html>
	<head>
	<link rel = "stylesheet" href="styles/styles.css" media = "all"/>
	
	<title>Shopping</title>
	</head>

	<body>
	<! --Main container Starts -->
	<div class ="main_wrapper">
	
	<div id="form">
	<form method="get" action="results.php" enctype="multipart/form-data">
	
		<input type="text" name="user_query" placeholder="search a product"/>
		<input type="submit" name="search" value="search"/>
	</form>
	</div>
	</div>
	
	<div class="content_wrapper">
	<div id="left_sidebar">
	<div id="sidebar_title">Categories</div>
	<ul id = "cats">
	
	
	<?php
	
	getCats();
	
	?>
	</ul>
	<div id="sidebar_title">Brands</div>
	<ul id = "cats">
	
	<?php
	getBrands();
	?>
	
	</ul>
	</div>
	
	<div id="right_content">
	<div id = "product_box">
	<?php
	if(isset($_GET['search'])) {
		
	$user_keyword = $_GET['user_query'];
	
		
			$get_products = "select * from products where (product_keywords) like '%$user_keyword%'";
			
			$run_products = mysqli_query($con, $get_products);
			
			while ($row_products=mysqli_fetch_array($run_products)) {
			
				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_desc = $row_products['product_desc'];
				$pro_price = $row_products['product_price'];
				$pro_image = $row_products['product_img1'];
			
			
			echo "
			
			<div id= 'single_product'>
			<h3>$pro_title</h3>
			
			<p><b>Price: $pro_price </b></p>
			
			<img src = 'admin_area/product_images/$pro_image' width='180' height = '180'/><br>
			
			</div>
			";
			
			
			}
		
		
		}


	
	
	?>
	
	
	</div>
	
	
	
	
	<! -- Main Container Ends -->
	
	</div>
	
	</body>

</html>
