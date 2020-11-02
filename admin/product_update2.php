<?php

include 'session.php';

if(isset($_POST['submit']))
{
	$p_id = $_GET['pid'];
	$pname = $_POST['product_name'];
	$pcode = $_POST['product_code'];
	$desc = $_POST['description'];
	$pqty = $_POST['product_qty'];
	$price = $_POST['price'];
	
	$sql = "update tbl_product set product_name = '$pname', product_code = '$pcode', description = '$desc' , product_qty = '$pqty' , price = '$price' where product_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Product has been updated.");
			window.location.href = "product.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Fail to update.");
			window.location.href = "product_update.php?pid=<?php echo $p_id; ?>";
		</script>
		<?php
	}
}
?>