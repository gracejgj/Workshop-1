

<!DOCTYPE html>
<head>
<title>Belle Florist</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/products.css">	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- Including our scripting file. -->
<script type="text/javascript" src="script.js"></script> <!--search-->
</head>
	
	<div id="page_header">
		<div id="img">
		  <a href="index.php"><img src="img/logos.png"  alt="Belle" style="width:80%; height:40%;"></a>
		</div>
		  

		<div id="page_headerlinks">
		  <ul id="menu">
			<!-- <li><a href="#"><i class="far fa-heart"></i>Wishlist</a></li>-->
			 <?php
			  if(isset($_SESSION['user_id'])){
				echo '<li><a href="cart.php"><i class="fas fa-shopping-cart"></i>My Cart</a></li>';
				echo '<li><a href="order.php"><i class="fas fa-shipping-fast"></i>My Order</a></li>';
				echo '<li><a href="account.php"><i class="fas fa-user"></i></i>My Account</a></li>';
				echo '<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>';
			  }
			  else{
				echo '<li><i class="fas fa-sign-in-alt"></i><a href="login.php"></i>Log In</a></li>';
			  }
			  ?>
			
		  </ul>
		</div>

	<div id="header-search">
		<input type="text" id="search"  placeholder="Search me..." name="search"><i class="fas fa-search"></i>
		<br>
	<div id="display"></div>
	</div>
	</div>

<!-- End of Page Header -->

  <!-- Start of Page Menu -->
  <div id="page_menu">
	  <nav class="menu-navigation">
		<a href="products.php">Bouquets-to-go</a>
		<a href="wb.php">WEDDING</a>
		<a href="vege.php">SPECIAL</a>
		<a href="gallery.php">GALLERY</a>
		<!--<a href="we.php">Contact</a>-->
	</nav>	 
  </div>
  <!-- End of Page Menu -->
 <script type="text/JavaScript">
//Script courtesy of BoogieJack.com
var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
</script>
