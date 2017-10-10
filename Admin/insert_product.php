<!DOCTYPE HTML>
<?php
include("$_SERVER[DOCUMENT_ROOT]/includes/db.php");


?>

<html>
	<head>
	<title> Inserting Product</title>
	</head>
	
	
	<body>
	<form method="post" action = "insert_product.php" enctype = "multipart/form-data">
	
	<table width="500" height="650" align="center" border="2" bgcolor="#19BFD1">
	
		<tr align="center">
		<td colspan="2"<h1>Insert New Product:</h1></td>
		</tr>
		
	<tr>
		<td align="right"<b>Product Title:</b></td>
		<td><input type="text" name="product_title" size="40"/></td>
		</tr>
		<tr>
		<td align="right"<b>Product Category:</b></td>
		<td>
		<select name="product_cat">
			<option>Select a Category</option>
			<?php
			$get_cats = "select * from categories";
			
			$run_cats = mysqli_query($con, $get_cats);
			
			while ($row_cats =mysqli_fetch_array($run_cats)) {
				
				$cat_id = $row_cats['cat_id'];
				$cat_title = $row_cats['cat_title'];
				
				echo "<option value='$cat_id'>$cat_title</option>";
				
			}
			
			
			?>
			</select>
			</td>
			</tr>
			<td align = "right"><b>Product Brand</b></td>
			<td>
			
				<select name = "product_brand">
				<option>Select Brand</option>
			<?php
			$get_brands = "select * from brands";
			
			$run_brands = mysqli_query($con, $get_brands);
			
			while ($row_brands =mysqli_fetch_array($run_brands)) {
				
				$brand_id = $row_brands['brand_id'];
				$brand_title = $row_brands['brand_title'];
				
				echo "<option value='$brand_id'>$brand_title</option>";
				
			}
			
			?>
			</select>
			</td>
			</tr>
			
			<tr>
				<td align ="right"><b>Product Image-1</b></td>
				<td><input type ="file" name="product_img1"/></td>
			</tr>
			
			<tr>
				<td align ="right"><b>Product Price</b></td>
				<td><input type ="text" name="product_price"/></td>
			</tr>
			<tr>
				<td align ="right"><b>Product description</b></td>
				<td><textarea name ="product_desc" cols="35" rows="10"/></textarea></td>
			</tr>
			<tr>
				<td align ="right"><b>Product Keywords</b></td>
				<td><input type ="text" name="product_keywords"/></td>
			</tr>
			<tr>
				<td align="center">
				<td colspan="2"><input type="submit" name="insert_product" value = "insert product"/></td>
				
	
		</body>
</html>


<?php

if (isset($_POST['insert_product'])) {
	//text data variables
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_keywords = $_POST['product_keywords'];
	
	/*inserting images names in database 
	and image files saving in my htdocs/admin_area/product_images/$product_img1*/
	
	
	
	/*image names*/
		$product_img1= $_FILES['product_img1']['name'];

		
		
			//image temporary name (we have to set image temp names)
		
		$temp_name1= $_FILES['product_img1']['tmp_name'];
		
		
		
		if ($product_title == '' OR $product_cat == '' OR $product_brand == '' OR $product_desc == '' ) {
			
		
			
			
			//simple validation alert. if user leaves any of the above field empty 
			//it will pop up the alert box and say please insert...your data here.
			echo "<script>alert('please fill all the fields!')</scripts>";
			exit();
		}
		
		else {
			
			move_uploaded_file($temp_name1, "product_images/$product_img1");
		
		
		
		$insert_product = "insert into products(product_cat, product_brand, date, product_title, product_img1, product_price, product_desc, product_keywords)
		values ('$product_cat', '$product_brand', NOW(),'$product_title', '$product_img1', '$product_price', '$product_desc', '$product_keywords' )";
		
		
		$run_product = mysqli_query($con, $insert_product);
		
		// if this query runs
		
		if ($run_product) {
			
			echo "<script>alert('product insertd successfully')</script>";
			echo "<script>window.open('index.php?insert_product','_self')</script>";
			
		}
		
	}

}

	
?>






