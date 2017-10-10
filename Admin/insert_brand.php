<form action="" method="post" style="padding:80px;">


<b>Insert New Brand:</b>
<input type="text" name="new_brand" required />
<input type="submit" name="add_Brand" value="Add Brand"/>

</form>

<?php
include("$_SERVER[DOCUMENT_ROOT]/includes/db.php");


	if(isset($_POST['add_Brand'])) {
		
		$new_brand = $_POST['new_brand'];
		
		$insert_brand = "INSERT INTO brands (brand_title) Values ('$new_brand')";
		
		$run_brand = mysqli_query($con, $insert_brand);
		
		if ($run_brand) {
			
			echo "<script>alert('New Brand has been insertd!')</script>";
			echo"<script>window.open('index.php?view_brands','_self')</script>";

		
		}
		
		else
			echo "<script>alert('Failed')</script>";


	
	}




?>


