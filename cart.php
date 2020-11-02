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
</head>
<body>

<div id="container">
<?php include 'inc/header.php';?>
<hr></hr>
<div class="main_content">

<h2 align="center">Your Shopping Cart</h2><br>

	<?php
	
	if(isset($_SESSION["cart"])) //check session var
	{
	
	$total = 0; 
	echo '<table width="100%" cellpadding="10" cellspacing="0"><thread>';
	echo '<tr>';
    echo '<th align="left">Product Code</th>';
	echo '<th align="left">Product Name</th>';
    echo '<th align="left">Price</th>';
	echo '<th align="left">Quantity</th>';
    echo '<th align="left">Total</th></thread>';
	echo '</tr>';
 
	foreach($_SESSION['cart'] as $product_id => $quantity) {

	$result = $mysqli->query("SELECT product_code, product_name, description, product_qty, price FROM tbl_product WHERE product_id = ".$product_id);

	if($result){
		
	while($obj = $result->fetch_object()) {	
	
			$cost = $obj->price * $quantity; //work out the line cost
			$total = $total + $cost; //add to the total cost

			echo '<tr>';
			echo '<td>'.$obj->product_code.'</td>';
			 echo '<td>'.$obj->product_name.'</td>';
			echo '<td>'.$obj->price.'</td>';
			echo '<td>'.$quantity.'<a class="w3-button w3-white w3-border w3-round-large" style="padding:5px;" href="update-cart.php?action=add&product_id='.$product_id.'">+</a>&nbsp;<a class="w3-button w3-white w3-border w3-round-large" style="padding:5px;" href="update-cart.php?action=remove&product_id='.$product_id.'">-</a></td>';	
			echo '<td>'.$cost.'</td>';
			
            echo '</tr>';
	}
		//$grand_total = $total + $shipping_cost; //grand total including shipping cost
		//foreach($taxes as $key => $value){ //list and calculate all taxes in array
		//		$tax_amount     = round($total * ($value / 100));
		//		$tax_item[$key] = $tax_amount;
		//		$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		//}
		
		//$list_tax       = '';
		//foreach($tax_item as $key => $value){ //List all taxes
		//	$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		//}
		//$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
		//$_SESSION["payableAmount"] = round($grand_total);
		
		}
	}
		echo '<tr class="success">';
		echo '<td colspan="4" align="left"></td>';
		echo '<td>'.$total.'</td>';
		echo '</tr>';

		echo '</table><hr>';
	}
			?>	
			
	<!--<tr><td colspan="5"><span style="float:right;text-align: right;"><php echo $shipping_cost. $list_tax; ?>Amount Payable : <php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
	<tr><td> <h5>Select a date for delivery within Kota Kinabalu, or collection at our store</h5>Date: 
	
	<div class='container'>
	<input type='date' id="b_date" name="date" required /> 
	</div>-->
	
	</td></tr>
	
	<br><hr>

	<tr>
	<td><a href="update-cart.php?action=empty"><button class="w3-button w3-white w3-border w3-round-large">Empty Cart</button></a> </td>
	<td><a href="products.php"><button class="w3-button w3-white w3-border w3-round-large">Continue Shopping</button></a></td>

		<?php
		if(isset($_SESSION['user_id'])) {
			echo '<td><a href="orders-update.php"><button class="w3-button w3-white w3-border w3-round-large" style="float:right;">Check Out</button></a>';
		}

		else {
			echo '<a href="login.php" style="float:right"><button class="w3-button w3-white w3-border w3-round-large">Login</button></a>';
		}
		?>
	</tr>
	

</div>
<hr></hr>

<!-- Start of Page Footer -->
<?php include 'inc/footer.php';?>
<!-- End of Page Footer -->		
</div>
<script>
    $(function() {

        $( "#datepicker" ).datepicker({ 
            changeYear: true,
            minDate: '+2',
            maxDate: '+2M',
        });
    });

</script>	
</body>
</html>
