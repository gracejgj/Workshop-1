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
		   
        $query = $mysqli->query
		("INSERT INTO tbl_payment (product_code, product_name, units, price, total, email, fname, payed) 
		VALUES('$obj->product_code', '$obj->product_name', '$quantity', '$obj->price' , '$cost', '$user', '$user', 'Online_Payment')");        
		
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

  <form class="credit-card" action="success.php" id="payment-form">
      <div class="form-header">
        <h4 class="title">Credit card detail</h4>
      </div>

      <div class="form-body">
        <!-- Card Number -->
        <input type="text" class="card-number" pattern="[0-9]{13,16}" min="13" max="16" title="Digits only, between 13 and 16 digits long." placeholder="Card Number [0-9]{13,16}" required>

        <!-- Date Field -->
        <div class="date-field">
          <div class="month" required>
            <select name="Month" required>
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
            </select>
          </div>
          <div class="year" required>
            <select name="Year" required>
              <option value="2016">2019</option>
              <option value="2017">2020</option>
              <option value="2018">2021</option>
              <option value="2019">2022</option>
              <option value="2020">2023</option>
              <option value="2021">2024</option>
              <option value="2022">2025</option>
              <option value="2023">2026</option>
              <option value="2024">2027</option>
            </select>
          </div>
        </div>

        <!-- Card Verification Field -->
        <div class="card-verification">
          <div class="cvv-input">
            <input type="text" placeholder="CVV" pattern="[0-9]{3,4}" min="3" max="4" title="Digits only, between 13 and 16 digits long."  required>
          </div>
          <div class="cvv-details">
            <p>3 or 4 digits usually found <br> on the signature strip</p>
          </div>
        </div>

        <!-- Buttons -->
        <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
      </div>
    </form>
</div>

<!-- Products List End HB -->
<hr></hr>

<!-- Start of Page Footer -->
<?php include 'inc/footer.php';?>
<!-- End of Page Footer -->


</div>
</body>
</html>



