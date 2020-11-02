<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
 <body>

    <div id="container"> 
	<?php include 'inc/header.php';?>
	<hr></hr> 
	
	<div class="main_content">

<div class="row">
		<?php
		 $result = $mysqli->query('SELECT * FROM tbl_customer WHERE user_id='.$_SESSION['user_id']);

                if($result === FALSE){
                  die(mysql_error());
                }
		 if($result) {
                  $obj = $result->fetch_object();
				  
		echo'
	  <div class="col-75">
		<div class="container">
		  <form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">
		  
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="fname" pattern="^[a-zA-Z ]+$" value="'.$obj["fname"].' '.$obj["lname"].'">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="'.$obj["email"].'"  required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="'.$obj["address"].'" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="'.$obj["address2"].'" pattern="^[a-zA-Z ]+$" required>

            <div class="row">
              <div class="col-50">
                <label for="state">District</label>
                <input type="text" id="district" name="district" placeholder="" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" pattern="^[a-zA-Z ]+$" required>
			
            <label for="ccnum">Card number</label>
            <input type="text" id="cardNumber" name="cardNumber" required>
			
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiration Date</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">         
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>             
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="expdate" name="expdate" class="form-control" pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" placeholder="12/22"required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>';
		if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {

					$i=1;
					$total=0;
					$total_count=$_POST['total_count'];
					while($i<=$total_count){
						$product_name = $_POST['product_name'.$i];
						$product_price = $_POST['product_price'.$i];
						$quantity_ = $_POST['quantity_'.$i];
						$total=$total+$product_price ;
						$sql = "SELECT product_id FROM tbl_product WHERE product_name='$product_name'";
						$query = mysqli_query($con,$sql);
						$row=mysqli_fetch_array($query);
						$product_id=$row["product_id"];
						echo "	
						<input type='hidden' name='prod_id_$i' value='$product_id'>
						<input type='hidden' name='prod_price_$i' value='$product_price'>
						<input type='hidden' name='prod_qty_$i' value='$quantity_'>
						";
						$i++;
					}
					
				echo'	
				<input type="hidden" name="total_count" value="'.$total_count.'">
					<input type="hidden" name="total_price" value="'.$total.'">	
					
				
        <input type="submit" id="submit" value="Continue to checkout" class="checkout-btn">
      </form>
    </div>
  </div>
  ';
  }else{
			echo"<script>window.location.href = 'cart.php'</script>";
		}
		?>

			<div class="col-25">
				<div class="container-checkout">
				
				<?php
				 if(isset($_SESSION['cart_products'])) {
						$total = 0; //set initial total value
					$b = 0; //var for zebra stripe table 
					foreach ($_SESSION["cart_products"] as $cart_itm)
					{
					echo"
				<h4>Cart<b>$grand_total</b>
				</h4>
				<table class='table table-condensed'>
					<thead><tr>
					<th>No</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Total</th></tr>
					</thead>
					<tbody>
					";
					$total=0;
					while($product_id => $quantity){
						$product_name = $_POST['product_name'.$i];
						$item_number_ = $_POST['item_number_'.$i];
						$product_price = $_POST['product_price'.$i];
						$product_qty = $_POST['product_qty'.$i];
						$subtotal = ($product_price * $product_qty); //calculate Price x Qty				
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
					}
						$sql = "SELECT product_id FROM tbl_product WHERE product_name='$product_name'";
						$query = mysqli_query($con,$sql);
						$row=mysqli_fetch_array($query);
						$product_id=$row["product_id"];
					
						echo "	

						<tr><td><p>$item_number_</p></td><td><p>$product_name</p></td>
						<td ><p>$quantity_</p></td><td ><p>$product_price</p></td></tr>";
						
						$i++;
					}

				echo"

				</tbody>
				</table>
				<hr>
				
				<h3>total<span class='price' style='color:black'><b>$$total</b></span></h3>";
					
				}
				?>
				</div>		
  </div>
</div>
</div>
<!-- Start of Page Footer -->
		<?php include 'inc/footer.php';?>
		<!-- End of Page Footer -->
</div>		
</body>
</html>