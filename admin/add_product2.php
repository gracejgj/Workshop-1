<?php
session_start();
include_once("inc/config.php");

	$name = ($_POST['product_name']);
	$code = ($_POST['product_code']);
	$cat = ($_POST['catId']);
	$desc = ($_POST['description']);
	$fees = ($_POST['price']);
	$quant = ($_POST['product_qty']);
       
$sql = "INSERT INTO tbl_product(product_name, product_code, catId,  description, price, product_qty) VALUES ('$name', '$code', '$cat', '$desc' , '$fees', '$quant')";

if (mysqli_query($mysqli,$sql)){
	echo '<script type="text/javascript">alert("New product added. Add more!");</script>';
	header("Location:http://localhost/bfms/admin/product.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Error Occured");</script>';
	header("Location:http://localhost/bfms/admin/add_product.php");

}



?>