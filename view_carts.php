<?php
session_start();
include_once("inc/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>

	<div id="container">
	<?php include 'inc/header.php';?>
	<hr></hr>
	
	<div class="main_content">

<h1 align="center">View Cart</h1>
<div class="cart-view-table-back">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0">
	<thead>
		<tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr>
	</thead>
  <tbody>
      <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","florist");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM table";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        }
        mysqli_close($conn);
    ?>
	
 	<?php
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$product_size = $cart_itm["product_size"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			
		   	$bg_size = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_size.'">';
			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		$grand_total = $total + $shipping_cost; //grand total including shipping cost
		foreach($taxes as $key => $value){ //list and calculate all taxes in array
				$tax_amount     = round($total * ($value / 100));
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		}
		
		$list_tax       = '';
		foreach($tax_item as $key => $value){ //List all taxes
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
		$_SESSION["payableamount"] = round($grand_total);
	}
    ?>
    <tr><td colspan="5"><span style="float:right;text-align: right;">
	<?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?>
	</span>
	</td>
	</tr>
	
    <tr>
	<td colspan="5"><a href="index.php" class="button">Add More Items</a>
	<button type="submit">Update</button>
	<button type="submit" name="remove_code[]" value="'.$product_code.'" />Empty</button>
	<a href="checkout1.php" class="button"/>Checkout</a>
       </td></tr>
	</tbody>
	</table>	

	<input type="hidden" name="return_url" value="<?php 
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo $current_url; ?>" />
	</form>
	</div>
	
	</div>
	<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
				
</div>
</body>
</html>
