
<!DOCTYPE html>
<html>

<script type="text/javascript">
	function checkoutFunction(){
		
	alert("New User has Been Added!");
	window.location.assign("user.php");
	}
</script>
<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content"> <br><br><br>
	<h2 style="text-align:center">ADD NEW CUSTOMER</h2>
	<br><br><br>
	<form name="form" method="post" action="add_customer2.php" align="center"> 
	
		<input type="hidden" name="new" value="1"/>
		
		<p><input type="text" name="fname" placeholder="First Name"/></p>
		<br>
		<p><input type="text" name="lname" placeholder="Last Name" /></p>
		<br>
		<p><input type="text" name="address" placeholder="Address" /></p>
		<br>
		<p><input type="text" name="district" placeholder="District" list='listid' /></p>
			<datalist id='listid'>
			<option label='Kota Kinabalu' value='Kota Kinabalu'>
			<option label='Penampang' value='Penampang'>
			<option label='Putatan' value='Putatan'>
			<option label='Sepanggar' value='Sepanggar'>
			<option label='Karambunai' value='Karambunai'>
			<option label='Inanam' value='Inanam'>
			<option label='Likas' value='Likas'>
			<option label='Luyang' value='Luyang'>
			<option label='Tanjung Aru' value='Tanjung Aru'>
			<option label='Petagas' value='Petagas'>
			<option label='Kepayan' value='Kepayan'>
			<option label='Segama' value='Segama'>
			<option label='Menggatal' value='Menggatal'>
			<option label='Tuaran' value='Tuaran'>
			<option label='Lido' value='Lido'>
			</datalist>
		<br>
		<p><input type="number" name="postcode" placeholder="Postcode" /></p>
		<br>
		<p><input type="number" name="phone" placeholder="Phone number" /></p>
	<br>
		<p><input type="text" name="username" placeholder="Username" /></p>
		<br>
		<p><input type="text" name="email" placeholder="Email" /></p>
		<br>
		<p><input type="text" name="pwd" placeholder="Password" /></p>
		<br>
		<br>
		
	<p style="flex-direction:column">
	<input type="reset" class="button button4"  value="RESET" />
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