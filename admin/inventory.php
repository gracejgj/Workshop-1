<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INVENTORY | Belle Florist</title>

<script src="js/jquery-3.3.1.js"></script>	
<script src="js/jquery.dataTables.min.js"></script>
	<?php include "sidebar.php" ?>
</head>

<body>

	<table id="example" class="display" border="1" align="right" width="1358">
		<tr>
			<td colspan="5" align="CENTER">INVENTORY</td>
		</tr>
		<thead>
		<tr>
			<th align="center" width="10%">Product Name</th>
			<th align="center" width="40%">Product Description</th>
			<th align="center" width="5%">Product Price</th>
			<th align="center" width="10%">Update</th>
			<th align="center" width="10%">Delete</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select * from tbl_product";
			$result = mysqli_query($connect,$sql);

			while($rows = mysqli_fetch_array($result))
			{
				?>
					<tr>
						<td align="center" width="20%"><?php echo $rows['product_name']; ?></td>
						<td align="center" width="40%"><?php echo $rows['description']; ?></td>
						<td align="center" width="20%"><?php echo $rows['price']; ?></td>
						<td align="center" width="10%">
							<a href="user_update_product.php?pid=<?php echo $rows['product_id']; ?>">
							<input type="submit" value="update" /></a>
						</td>
						<td align="center" width="10%">
							<input type="submit" name="btn_del" value="delete" onClick="delFunction(<?php echo $rows['product_id']; ?>)" />
						</td>
					</tr>         
				<?php
			}
		?>
		
		<tr>
			<td colspan="5" align="center">
				<a href="add_product.php"><input type="submit" value="add new product" /></a>
			</td>
		</tr>
		</tbody>
	</table>

</body>
	<!-- pagination script -->
	<script type="text/javascript">
       
      $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
       
    </script>
	
	<!-- delete function script* -->
	<script>
function delFunction(pro_id)
{
	var message = confirm("Are you sure you want to delete this product");
	if (message == true)
	{
		window.location.href = "delete_product.php?pid=" + pro_id;
	}
	else
	{
		
	}
}
</script>
</html>