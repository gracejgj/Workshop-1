<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'inc/config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM tbl_product WHERE product_id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {

        $cost = $obj->price * $quantity;

        $user = $_SESSION["user_id"];
		   
        $query = $mysqli->query("INSERT INTO tbl_payment (product_code, product_name, units, price, total, email, fname, payed) VALUES('$obj->product_code', '$obj->product_name', '$quantity',  '$obj->price', '$cost', '$user', '$user', 'Yet to Pay')");        
        
		}
      }
    }
  }

	unset($_SESSION['cart']);

?>

<!DOCTYPE html>
<html>
<head>
<title>Wedding Bouquets | BelleFlorist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">
</head>
<body>
	
<div id="container">
<?php include 'inc/header.php';?>
<hr></hr> 
<div class="main_content">


<h1>Success,</h1> 
<p>Whatever task you performed, has been executed successfully. Congrats!</p>
<p>In case you purchased a product, then please check your spam in email for the receipt.</p>



</div>
<!-- Products List End HB -->
<hr></hr>

<!-- Start of Page Footer -->
<?php include 'inc/footer.php';?>
<!-- End of Page Footer -->


</div>
</body>
</html>
		