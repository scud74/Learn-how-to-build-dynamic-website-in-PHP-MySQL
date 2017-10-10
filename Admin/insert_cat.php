<form action=""method="post" style="padding:80px;">

<b>Insert New Category:</b>


<input type="text" name="new_cat" required />

<input type="submit" name="add_Cat" value="Add Category"/>

</form>

<?php

	include("$_SERVER[DOCUMENT_ROOT]/includes/db.php");

	$cat_title = isset ($_POST['cat_title']);

	$check ="select * from categories where cat_title='$cat_title'";

	$check_exist = mysqli_query($con, $check);

	$count_this = mysqli_num_rows($check_exist);

	if($count_this==1) {
		
		echo "This category is already inserted, Please add a new one";
		
	}


if (isset($_POST['add_cat'])) {
	
	$new_cat = $_POST['new_cat'];
	
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	$insert_cat = "insert into categories (cat_title) values ('$new_cat')";
	
	$run_cat = mysqli_query($con, $insert_cat);
	
	if($run_cat) {
		
		echo "<script>alert('New Category has been inserted!')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
		
	}

	
	
}
?>