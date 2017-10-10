<table width="500" align="center" bgcolor="peach">


		<tr align ="center">
			<td colspan="6"><h2>View All Brands Here</h2></td>
			</tr>
				<tr align="center" bgcolor ="skyblue">
				<th>Brand ID</th>
				<th>Brand Tittle</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
			include("$_SERVER[DOCUMENT_ROOT]/includes/db.php");
			
			$get_brand = "select * from Brands";
			
			$run_brand = mysqli_query($con, $get_brand);
			
			$i = 0;
			
			while ($row_brand=mysqli_fetch_array($run_brand)) {
				
			$brand_id = $row_brand['brand_id'];
			$brand_title = $row_brand['brand_title'];
			$i++;
			?>
		
		<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $brand_title;?></td>
		<td><a href="index.php?edit_brand=<?php echo $brand_id;?>">Edit</td>
		<td><a href="delete_brand.php?delete_brand=<?php echo $brand_id;?>">Delete</td>
		</tr>	

		<?php } ?>	

</table>