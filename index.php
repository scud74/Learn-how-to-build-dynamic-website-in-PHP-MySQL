<!DOCTYPE html>
<?php
include("includes/db.php");
include("functions/functions.php");


?>
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
	
	<div id ="content_area">
	<div id ="product_box">
	
	<?php
	getPro();
	getCatPro();
	getBrandPro();
	?>
	
	
	</div>
	</div>
	</div>
	
	
	
	<! -- Main Container Ends -->
	
	</div>
	
	</body>

</html>
