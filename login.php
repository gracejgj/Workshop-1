<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["user_id"])){

        header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<style>
input[type=text], [type=number], [type=password], [type=email]{
    border: none;
    border-bottom: 1px solid #000000;
	width: 90%;
	padding: 10px 10px; line-height: 20px;
}
</style>
<body>
<div id="container">
<?php include 'inc/header.php';?>

<!-- Start of Main Content Area -->
    <div id="main_content">
		  
    <!-- Start of Sub Item Descriptions -->
    <div class="sub_items" style="margin-left:350px">
	<hr></hr>
    <div class="sub_left"><br>
	<div class="sub_items_header">
	<h1 style="margin-right:50px">SIGN IN</h1>
	</div><br>
	
	<div class="sub_items_text">
		<form action="log.php" method="post">
			<p><input type="email" name="email" placeholder="Enter your Email" required ></p><br>
			<p><input type="password" name="password" placeholder="Enter your password" required></p><br>
			<p style="flex-direction:column">
			<input type="submit" class="w3-button w3-white w3-border w3-round-large" name="submit" value="LOGIN">
			<p><br>
		</form>	
	</div>
   
    <div class="clearthis">&nbsp;</div>
    </div><br><br>
      <!-- End of Left Sub Item -->
		
      <!-- Start Right Sub Item -->
	<div class="sub_right"><br>
	<div class="sub_items_header">
	<h1>CREATE A NEW ACCOUNT</h1>
	</div><br>

		<div class="sub_items_text">
			<form name="signupForm" method="post" action="pro.php" id="signup">
			<p><input type="text" name="fname" pattern="^[a-zA-Z]+$" title="Must contains only characters" placeholder="First Name" required ></p><br>
			<p><input type="text" name="lname" pattern="^[a-zA-Z]+$" title="Must contains only characters" placeholder="Last Name" required ></p><br>
			<p><input type="text" name="username" pattern="[A-Za-z0-9]+" placeholder="Username" required ></p><br>
			<p><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="....@gmail.com" required ></p><br>
			<p><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Insert your Password" required></p><br>
			<p style="flex-direction:column">
			<input type="reset" name="reset" class="w3-button w3-white w3-border w3-round-large"  value="RESET" />
			<input type="submit" name="signup" class="w3-button w3-white w3-border w3-round-large" value="SIGN UP" /></p></br>
			</form>
		</div>
	<div class="clearthis">&nbsp;</div>
	</div>
      <!-- End of Right Sub Item -->
	  
    </div>
    <!-- End of Sub Item Descriptions -->
    </div>
    <!-- End of Main Content Area -->
    <div class="clearthis">&nbsp;</div>
	 <hr></hr>

<!-- Start of Page Footer -->
  <?php include 'inc/footer.php';?>
    <div class="clearthis">&nbsp;</div>
  <!-- End of Page Footer -->
	
</div>
</body>
</html>
