<?php

$db = mysqli_connect("localhost", "root", "","shop");

if (mysqli_connect_errno())
	
	{
		echo "The connection was not established:" . mysqli_connect_error();
		
	}
	
	
function getPro() {
	global $db;
	
	if (!isset($_GET['cat'])) {
		
		if (!isset($_GET['brand'])) {
		
		
			$get_products = "select * from products order by rand() LIMIT 0, 6";
			
			$run_products = mysqli_query($db, $get_products);
			
			while ($row_products=mysqli_fetch_array($run_products)) {
			
				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_cat = $row_products['product_cat'];
				$pro_brand = $row_products['product_brand'];
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


	
	}



	
}


function getCatPro() {
	global $db;
	
	if (isset($_GET['cat'])) {
		
		$product_cat = $_GET['cat'];
		
		$get_cat_pro = "select * from products where product_cat='$product_cat'";
		
		$run_cat_pro = mysqli_query($db, $get_cat_pro);
		
		$count = mysqli_num_rows($run_cat_pro);
		
		if ($count==0) {
		
			echo "<h2>No product found in this category<h2>";
			
			

		
		}
		
		
		
			while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)) {
			
				$pro_id = $row_cat_pro['product_id'];
				$pro_title = $row_cat_pro['product_title'];
				$pro_desc = $row_cat_pro['product_desc'];
				$pro_price = $row_cat_pro['product_price'];
				$pro_image = $row_cat_pro['product_img1'];
				
			
			
			echo "
			
			<div id= 'single_product'>
			<h3>$pro_title</h3>
			
			<p><b>Price: $pro_price </b></p>
			<img src = 'admin_area/product_images/$pro_image' width='180' height = '180'/><br>
			
			
			</div>
			";
			
			
			}
		
		
		}


	
}

	
	
	//creating a function get brand pro_brand
	
	
	
function getBrandPro() {
	global $db;
	
	if (isset($_GET['brand'])) {
		
		$product_brand = $_GET['brand'];
		
		$get_brand_pro = "select * from products where product_brand='$product_brand'";
		
		$run_brand_pro = mysqli_query($db, $get_brand_pro);
		
		$coun = mysqli_num_rows($run_brand_pro);
		
		if (count==0) {
		
			echo "<h2>No product found in this Brand<h2>";
			
			

		
		}
		
		
		
			while ($row_brand_pro=mysqli_fetch_array($run_brand_pro)) {
			
				$pro_id = $row_brand_pro['product_id'];
				$pro_title = $row_brand_pro['product_title'];
				$pro_desc = $row_brand_pro['product_desc'];
				$pro_price = $row_brand_pro['product_price'];
				$pro_image = $row_brand_pro['product_img1'];
				
			
			
			echo "
			
			<div id= 'single_product'>
			<h3>$pro_title</h3>
			
			<p><b>Price: $pro_price </b></p>
			<img src = 'admin_area/product_images/$pro_image' width='180' height = '180'/><br>
			
			
			</div>
			";
			
			
			}
		
		
		}


	
	}	
	

//getting the categories
function getCats(){
	
	global $db;

	//fetching category data from database.
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($db, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)) {
	
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		
		
		echo "<li><a href = 'index.php?cat=$cat_id'>$cat_title</a></li>";

	}
}

function getBrands() {
		
		global $db;
		//fetching Brands data from databas.
		$get_brands = "select * from brands";
		
		$run_brands = mysqli_query($db, $get_brands);
		
		while ($row_brands = mysqli_fetch_array($run_brands)) {
		
		
			$brand_id = $row_brands['brand_id'];
			$brand_title = $row_brands['brand_title'];
			
			echo "<li><a href = 'index.php?brand_id'>$brand_title</a></li>";
		}
	
}









?>