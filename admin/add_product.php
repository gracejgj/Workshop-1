

<!DOCTYPE html>
<html>

<script type="text/javascript">
	function checkoutFunction(){	
		
		alert("New Product has Been Inserted!");
		window.location.assign("product.php");

	}
</script>
<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content"> <br><br><br>
	<h2 style="text-align:center">ADD NEW PRODUCT</h2>
	<br><br>
	<form name="form" method="post" action="add_product2.php"> 
	
		<input type="hidden" name="new" value="1" />
		
		<p><input type="text" name="product_name" placeholder="Product Name"  /></p>
		<br>
		<p><input type="text" name="product_code" placeholder="Product Code" /></p>
		<br>
		<p><input type="text" name="catId" placeholder="Category Id" /></p>
		<br>
		<p><input type="text" name="description" placeholder="Description"  /></p>
		<br>
		<p><input type="number" name="price" placeholder="Product Price"  /></p>
		<br>
		<p><input type="number" name="product_qty" placeholder="Product Quantity"  /></p>
		<br>
	
		<!--<p><form onsubmit="submitForm(event);">
		<input type="file" name="image" id="image-selecter" accept="image/*">
		<input type="submit" name="submit" value="Upload Image"></form></p>-->
		<br>

	<p style="flex-direction:column">
	 <input type="reset" class="button button4" value="RESET" />
	<input type="submit" onclick="checkoutFunction();" class="button button4" value="SUBMIT" />
	</p></br>

	</form>
	
	<br />
	</div>

	<div id="footer">Copyright <a href="dashboard.php">Belle Florist Admin</a>. All Rights Reserved.</div>
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