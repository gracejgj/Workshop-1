<?php
$connect = mysqli_connect("localhost", "root", "", "florist");

if(isset($_GET['pid']))
{
	$pro_id = $_GET['pid'];
	
	$sql = "delete from tbl_product where product_id = '$pro_id'";
	$result = mysqli_query($connect,$sql);
	
	if($result)
	{
		?>
		<script>
			alert("Product has been deleted.");
			window.location.href = "product.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Failed to delete.");
			window.location.href = "product.php";
		</script>
		<?php
	}
}
?>