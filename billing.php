<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'inc/config.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link rel="stylesheet" type="text/css" href="css/products.css">
	<!--<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Your Order Has Been Placed!");
		window.location.assign("fandom.php");

	}
</script> -->
<style>
th, td {
  padding: 8px;
  text-align: left;
  <!--border-bottom: 1px solid #ddd;-->
  outline: solid 1px;
}
</style>
</head>
<body>

<div id="container">
<?php include 'inc/header.php';?>
<hr></hr>
<div class="main_content">

	<div class="row">
	<div class="col-xs-12">
	<?php

	if(isset($_SESSION['cart'])) {

	echo '<h2>Invoice</h2>';
	echo '<hr>';
	echo '<table>';
	echo '<strong><h4>Billed To:</h4></strong><br>';
	?>

	<?php
	$result = $mysqli->query('SELECT * FROM tbl_customer WHERE user_id='.$_SESSION['user_id']);
	$result1 = $mysqli->query('SELECT date FROM tbl_order');
	if($result === FALSE){
	die(mysql_error());
	}

	if($result) {
	$obj = $result->fetch_object();
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name : &nbsp;'. $obj->fname. '&nbsp;&nbsp;'. $obj->lname. '<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address : &nbsp;'. $obj->address. '<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email : &nbsp;'. $obj->email. '<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone No. : &nbsp;' . $obj->phone. '<br>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; City : &nbsp;' . $obj->district. '<br>';    
	
	echo '</div>';
	
	echo '</table>';
	}
	}

	?>

	<?php
	$date = new DateTime(' ');
	echo $date->format('Y-m-d H:i:s');
	?>
	<hr>


<h3>Order summary</strong></h3>
	<?php

	if(isset($_SESSION['cart'])) {

	$total = 0;
	
	echo '<table width=90% ">
	<tr>
	<th align="center" width="20%">Item</th>
	<th align="center" width="20%">Name</th>
	<th align="center" width="20%">Price</th>
	<th align="center" width="20%">Quantity</th>
	<th align="center" width="20%">Totals</th>
	</tr>';
	
	foreach($_SESSION['cart'] as $product_id => $quantity) {

	$result = $mysqli->query("SELECT product_code, product_name, product_qty, price FROM tbl_product WHERE product_id = ".$product_id);


	if($result){

	while($obj = $result->fetch_object()) {
	$cost = $obj->price * $quantity; //work out the line cost
	$total = $total + $cost; //add to the total cost
	echo '<tr>
	<td align="center" width="20%">'.$obj->product_code.'</td>
	<td align="center" width="20%">'.$obj->product_name.'</td>
	<td align="center" width="20%">'.$cost.'</td>
	<td align="center" width="20%">'.$quantity.'</td>
	<td align="center" width="20%">'.$cost.'</td>
	</tr>';
	}
	}
	}

	echo '<tr>  
	<td colspan="6" align="left"></td>
	<td class="thick-line text-center"><strong>Subtotal</strong></td>
	<td class="thick-line text-right">'.$total.'</td>
	</tr>
	<tr>
	<td colspan="6" align="left"></td>	
	<td class="no-line text-center"><strong>Total</strong></td>
	<td class="no-line text-right">'.$total.'</td>
	</tr>
	<p><br>
	</tbody>
	</table>';
	
	echo '<a href="payment.php"><button class="w3-button w3-white w3-border w3-round-large" style="float:right;">Pay Online</button></a>';
	echo '<a href="success.php"><button class="w3-button w3-white w3-border w3-round-large" style="float:right; margin-right:10px;">COD</button></a>';
	}

	?>

<br>
<br>
</div>
<hr></hr>
</div>	
<!-- Start of Page Footer -->
<?php include 'inc/footer.php';?>
<!-- End of Page Footer -->		
</div>
</body>
</html>