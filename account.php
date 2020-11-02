<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<?php
include 'inc/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>My Account | Belle Florist</title>
<style>
input[type=text], [type=number]{
    border: none;
    border-bottom: 1px solid #000000;
	width: 30%;
	padding: 10px 10px; line-height: 20px;
	text-align: center;
}
</style>
</head>
<body>

	<div id="container"> 
	<?php include 'inc/header.php';?>
	<hr></hr>
	
	<div class="main_content">
	
	<div class="contents">
	
	<div class="row" style="margin-top:30px; text-align:center">
	
	<p><?php echo '<h3>Hi ' .$_SESSION['user_id'].'</h3>'; ?></p>
	<p><h4>Account Details</h4></p>
	<p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>

	</div><br>
		<div class="container">
		<form method="POST" action="update.php" align="center">

		<?php

		$result = $mysqli->query('SELECT * FROM tbl_customer WHERE user_id='.$_SESSION['user_id']);

		if($result === FALSE){
		die(mysql_error());
            }

			if($result) {
			$obj = $result->fetch_object();
								
			echo '<input type="text" id="username" name="username" placeholder="'. $obj->username. '"></p><br>';
			echo '<input type="text" id="fname" name="fname" placeholder="'. $obj->fname. '"></p><br>';
			echo '<input type="text" id="lname" name="lname" placeholder="'. $obj->lname. '"></p><br>';
			echo '<input type="text" id="address" name="address" placeholder="'. $obj->address. '"></p><br>';
			echo '<input type="text" name="district" placeholder="'. $obj->district. '" list="listid"></p><br>';
			echo '<datalist id="listid">';
			echo '<option label="Kota Kinabalu" value="Kota Kinabalu">';
			echo '<option label="Penampang" value="Penampang">';
			echo '<option label="Putatan" value="Putatan">';
			echo '<option label="Sepanggar" value="Sepanggar">';
			echo '<option label="Karambunai" value="Karambunai">';
			echo '<option label="Inanam" value="Inanam">';
			echo '<option label="Likas" value="Likas">';
			echo '<option label="Luyang" value="Luyang">';
			echo '<option label="Tanjung Aru" value="Tanjung Aru">';
			echo '<option label="Petagas" value="Petagas">';
			echo '<option label="Kepayan" value="Kepayan">';
			echo '<option label="Segama" value="Segama">';
			echo '<option label="Menggatal" value="Menggatal">';
			echo '<option label="Tuaran" value="Tuaran">';
			echo '<option label="Lido" value="Lido"></datalist><br>';
			echo '<input type="text" id="postcode" name="postcode" placeholder="'. $obj->postcode. '"></p><br>';
			echo '<input type="text" min="10" maxlength="15" id="phone" name="phone" placeholder="'. $obj->phone. '"></p><br>';
			echo '<input type="text" id="email" name="email" placeholder="'. $obj->email. '" ><p><br>';;
			echo '<input type="text" id="password" placeholder="'. $obj->password. '" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></p><br>';
			}

			?>
			
		<p style="flex-direction:column">
		<input type="reset" name="reset" class="w3-button w3-white w3-border w3-round-large"  value="RESET" />
		<input type="submit" name="submit" class="w3-button w3-white w3-border w3-round-large" value="SUBMIT" />
		</p></br>
			  
		</form>

	</div>
	</div>
	</div>
	
		  <!-- Start of Page Footer -->
		  <?php include 'inc/footer.php';?>
		  <!-- End of Page Footer -->
		  </div>
	</body>
</html>

