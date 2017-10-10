<!DOCTYPE>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel = "stylesheet" href="styles/styles_admin.css" media = "all"/>
		

	</head>
	
	<body>
	
	<div class ="main_wrapper">
	
	
	<div id="header"></div>
	<!-first we create a box called div and give style. and then inside this div we create links.-->
	
	<div id ="right">
	<h2 style="text-align:center;">Manage Content</h2>
	
	<a href="index.php?insert_product">Insert New Product</a>
	<a href="index.php?view_products">View All Products</a>
	<a href="index.php?insert_cat">Insert New Category</a>
	<a href="index.php?view_cats">View All Categories</a>
	<a href="index.php?insert_brand">Insert New Brand</a>
	<a href="index.php?view_brands">View All brands</a>
	
	
	</div>
	</div>
	<div id="left">
	<br></br>
	
	
	
	<?php
	if (isset($_GET['insert_product'])) {
			include("insert_product.php");
	}
	
	if (isset($_GET['view_products'])) {
			include("view_products.php");
	}
	
	if (isset($_GET['edit_pro'])) {
			include("edit_pro.php");
	}
	
	if (isset($_GET['insert_cat'])) {
			include("insert_cat.php");
	}
	
	if (isset($_GET['view_cats'])) {
			include("view_cats.php");
	}
	
	if (isset($_GET['edit_cat'])) {
			include("edit_cat.php");
	}
	
	if (isset($_GET['insert_brand'])) {
			include("insert_brand.php");
	}
	
	if (isset($_GET['view_brands'])) {
			include("view_brands.php");
	}
	
	if (isset($_GET['edit_brand'])) {
			include("edit_brand.php");
	}
	?>
	
	
	</body>
	
	
	
	</html>
	
	
		
	