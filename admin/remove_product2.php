<?php
	session_start();
    include_once("inc/config.php");

			$code = ($_POST['product_code']);
	
$sql = "DELETE FROM tbl_product WHERE product_code='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">alert("Product Deleted");</script>';
	header("Location:http://localhost/belle/admin/product.php");
} 
else 
{
	echo '<script type="text/javascript">alert("No such Product Exists");</script>';
	header("Location:http://localhost/belle/admin/remove_product.php");

}

?>
		