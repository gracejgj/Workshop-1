<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from tbl_product where product_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
?>

<form action="product_update2.php?pid=<?php echo $p_id; ?>" method="post">
    <table border="0" width="40%" align="center">
	<tr><td><h3>Update Profile</h3></td></tr>
	
	<tr><td>Product Name</td>
	<td><input type="text" name="product_name" value="<?php echo $rows['product_name']; ?>" required />
	</td></tr>
	
	<tr><td>Product Code</td>
	<td><input type="text" name="product_code" value="<?php echo $rows['product_code']; ?>" />
	</td></tr>
	
	<tr><td>Description</td>
	<td><input type="text" name="description" value="<?php echo $rows['description']; ?>" />
	</td></tr>
	
	<tr><td>Product Quantity</td>
	<td><input type="text" name="product_qty" value="<?php echo $rows['product_qty']; ?>" />
	</td></tr>
	
	<tr><td>Price</td>
	<td><input type="text" name="price" value="<?php echo $rows['price']; ?>" />
	</td></tr>

	  <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Confirm" name="submit" />
                <input type="reset" value="Clear" name="reset" />
            </td>
        </tr>
</table>
</form>