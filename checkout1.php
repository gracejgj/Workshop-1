<?php

include 'inc/config.php';

?>

<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/checkout.css" type="text/css" media="screen" />
</head>
<body>

	<div id="container"> 
	<?php include 'inc/header.php';?>
	<hr></hr> 
	
	<div class="main_content">
	
	<?php

	$result = $mysqli->query('SELECT * FROM tbl_customer WHERE user_id='.$_SESSION['user_id']);

	if($result === FALSE){
	die(mysql_error());
	}

	if($result) {
	$obj = $result->fetch_object();
	
	echo '	<div class="row">';
	echo '<div class="col-75"> ';
	echo '<div class="container"> '; 
	echo '<form action="/action_page.php"> ';

	echo '<div class="row"> ';
	echo '<div class="col-50"> ';
	echo '<h3>Billing Address</h3> ';
	
	echo '<label for="fname"><i class="fa fa-user"></i>Full Name</label> ';
	echo '<input type="text" id="fname" name="fname" pattern="^[a-zA-Z ]+$" value=" '.$obj->fname.' '.$obj->lname.'"> ';

	echo '<label for="email"><i class="fa fa-envelope"></i> Email</label> ';
	echo '<input type="text" id="email" name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="'.$obj->email.'"  required"> ';

	echo '<label for="address"><i class="fa fa-address-card-o"></i>Address</label>';
	echo '<input type="text" id="address" name="address" value="'.$obj->address.'" required>';
	
	echo '<div class="col-50">';
	echo '<label for="zip">Postcode</label>';
	echo '<input type="text" id="zip" name="zip" placeholder="'. $obj->zip. '">';
	echo '</div>';
	
	echo '<label for="district"><i class="fa fa-institution"></i>District';
	echo '<select type="text" name="district" value="'.$obj->district.'" required>';
	echo '<option value="Kota Kinabalu">Kota Kinabalu</option>';
	echo '<option value="Penampang">Penampang</option>';
	echo '<option value="Putatan">Putatan</option>';
	echo '<option value="Sepanggar">Sepanggar</option>';
	echo '<option value="Karambunai">Karambunai</option>';
	echo '<option value="Inanam">Inanam</option>';
	echo '<option value="Likas">Likas</option>';
	echo '<option value="Luyang">Luyang</option>';
	echo '<option value="Tanjung Aru">Tanjung Aru</option>';
	echo '<option value="Petagas">Petagas</option>';
	echo '<option value="Kepayan">Kepayan</option>';
	echo '<option value="Segama">Segama</option>';
	echo '<option value="Menggatal">Menggatal</option>';
	echo '<option value="Tuaran">Tuaran</option>';
	echo '<option value="Lido">Lido</option>';
	echo '</select>';
	echo '</label>';


	echo '<div class="row">';
	echo '<div class="col-50">';
	echo '<label for="state">Delivery Date</label>';
	echo '<input type="date" name="depart" min="2019-05-20" max="2019-07-30" required>';
	echo '</div>';
	echo '</div>';
	echo '</div>';

	echo '<div class="col-50">';
	echo '<h3>Payment</h3>';
	echo '<label for="fname">Accepted Cards</label>';
	echo '<div class="icon-container">';
	echo '<i class="fa fa-cc-visa" style="color:navy;"></i>';
	echo '<i class="fa fa-cc-amex" style="color:blue;"></i>';
	echo '<i class="fa fa-cc-mastercard" style="color:red;"></i>';
	echo '<i class="fa fa-cc-discover" style="color:orange;"></i>';
	echo '</div>';
	
	echo '<label for="cname">Name on Card</label>';
	echo '<input type="text" id="cname" name="cardname" placeholder="John More Doe" required>';
	
	echo '<label for="ccnum">Credit card number</label>';
	echo '<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>';
	
	
	echo '<div class="row">';
	echo '<div class="col-50">';
	echo '<label for="expmonth">Exp Month</label>';
	echo '<select>';
	echo '<option value="01">January</option>';
	echo '<option value="02">February </option>';
	echo '<option value="03">March</option>';
	echo '<option value="04">April</option>';
	echo '<option value="05">May</option>';
	echo '<option value="06">June</option>';
	echo '<option value="07">July</option>';
	echo '<option value="08">August</option>';
	echo '<option value="09">September</option>';
	echo '<option value="10">October</option>';
	echo '<option value="11">November</option>';
	echo '<option value="12">December</option>';
	echo '</select>';
	
	echo '<select>';
	echo '<option value="19"> 2019</option>';
	echo '<option value="21"> 2020</option>';
	echo '<option value="21"> 2021</option>';
	echo '<option value="22"> 2022</option>';
	echo '<option value="23"> 2023</option>';
	echo '<option value="24"> 2024</option>';
	echo '<option value="25"> 2025</option>';
	echo '</select>';   

	echo '</div>';
	
	echo '<div class="col-50">';
	echo '<label for="cvv">CVV</label>';
	echo '<input type="text" id="cvv" name="cvv" placeholder="352" required>';
	echo '</div>';
	
	echo '</div>';
	echo '</div>';

	echo '</div>';
	
		}
	?>
	
	<label>
	<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
	</label>
	<input type="submit" value="Continue to checkout" class="btn">
	</form>
	</div>
	</div>

	
	<div class="col-25">
	<div class="container">
	<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
	<p><a href="#">Product 1</a> <span class="price">$15</span></p>
	<p><a href="#">Product 2</a> <span class="price">$5</span></p>
	<p><a href="#">Product 3</a> <span class="price">$8</span></p>
	<p><a href="#">Product 4</a> <span class="price">$2</span></p>
	<hr>
	<p>Total  <?php echo $_SESSION["payableamount"]; ?><span class="price" style="color:black"><b></b></span></p>
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