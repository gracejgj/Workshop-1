<?php
include_once("inc/config.php");

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>

<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<style>
	.pagination {
	  list-style: none;
	  text-align: center; 
	   padding: 5px;
	}
	.pagination li {
	  display: inline-block;
	  margin: 10px;
	}

</style>
</head>
	<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Product has been deleted!");
		window.location.assign("product.php");

	}
</script>
</head>

	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content">
	<br><br><br>
	 <h2 align="center" style="margin-botton:20px;">REMOVE PRODUCT BY CODE</h2>
	 <br>
	<form name="productForm" method="post" action="remove_product2.php" align="center">
	<p><td colspan="2"><input type="text" placeholder="Product Code" name="product_code" required></td>
	 <br><br>
	<td align="center">
	<input type="submit" onclick="checkoutFunction();" class="button button4" name="removeproduct" value="Delete" class="click">
	</td>
	</form>
	<br><br>
	</div>
		
	<div id="footer">Copyright <a href="dashboard.php">Belle Florist Admin</a>. All Rights Reserved. </div>
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
	</div>
	</body>
	</html>