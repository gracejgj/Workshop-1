<?php 
session_start();
$items = $_SESSION['cart_products'];
$cart_productsitems = explode(",", $items);
if(isset($_GET['empty']) & !empty($_GET['empty'])){
	$delitem = $_GET['empty'];
	unset($cart_itm[$delitem]);
	$cart_itm = implode(",", $cart_itm);
	$_SESSION['cart_products'] = $cart_itm;
}
header('location:view_carts.php');