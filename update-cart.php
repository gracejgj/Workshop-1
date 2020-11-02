<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'inc/config.php';

$product_id = $_GET['product_id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT product_qty FROM tbl_product WHERE product_id = ".$product_id);


if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->product_qty)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;
    }
  }
}

header("location:cart.php");

?>
