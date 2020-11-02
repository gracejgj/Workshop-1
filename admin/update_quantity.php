<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if($_SESSION["type"]!="admin_id") {
  header("location:quantity.php");
}

include 'inc/config.php';

$_SESSION["product_id"] = array();
$_SESSION["product_id"] = $_REQUEST['quantity'];


$result = $mysqli->query("SELECT * FROM tbl_product ORDER BY product_id asc");
$i=0;
$x=1;

if($result) {
  while($obj = $result->fetch_object()) {
    if(empty($_SESSION["product_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["product_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE tbl_product SET product_qty =".$newqty." WHERE product_id =".$x);
      if($update)
        echo 'Data Updated';

      $i++;
      $x++;
    }
  }
}

header ("location:quantity.php");
?>
