<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from tbl_customer where user_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
?>

	<!DOCTYPE html>
	<html>

	<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Product quantity has been updated!");
		window.location.assign("quantity.php");

	}
</script>
	</head>


	<body>
	<div id="wrapper">
	 <div id="header">
	
		<div class="logout">
		Welcome,  <?php echo $_SESSION['admin_id'];?> 
		<a href='logout.php'>Logout</a>
		</div>	
  </div>

  <div id="navigation">
	  <ul>
		<li><a href="dashboard.php"><span>DASHBOARD</span></a></li>
		<li><a href="user.php"><span>USER</span></a></li>
		<li><a href="product.php"><span>PRODUCT</span></a></li>
		<li><a href="order.php"><span>ORDER</span></a></li>
		<li><a href="report.php"><span>REPORT</span></a></li>
		<li><a href="admin.php"><span>SETTING</span></a></li>

		 </ul>
		<div style="float:right">
		<?php
		echo date('d/m/Y  H:i:s');
		?>
		</div>
  </div>
	
    <div id="content"> 
	<br><br>
	<form action="user_update2.php?pid=<?php echo $p_id; ?>" method="post" align="center">
	
	<h2 style="text-align:center">UPDATE PROFILE</h2>
	<br><br>
	<td><input type="text" name="fname" value="<?php echo $rows['fname']; ?>" required />
	</td>
	<br>

	<td><input type="text" name="lname" value="<?php echo $rows['lname']; ?>" />
	</td>
	<br>

	<p><input type="text" name="address" value="<?php echo $rows['address']; ?>" />
	</p>
	<br>
	
	<p><select name="district" class="button button4"  placeholder="District" >
			<option value="District"><?php echo $rows['district']; ?></option>
			<option value="Kota Kinabalu">Kota Kinabalu</option>
			<option value="Penampang">Penampang</option>
			<option value="Putatan">Putatan</option>
			<option value="Sepanggar">Sepanggar</option>
			<option value="Karambunai">Karambunai</option>
			<option value="Inanam">Inanam</option>
			<option value="Likas">Likas</option>
			<option value="Luyang">Luyang</option>
			<option value="Tanjung Aru">Tanjung Aru</option>
			<option value="Petagas">Petagas</option>
			<option value="Kepayan">Kepayan</option>
			<option value="Segama">Segama</option>
			<option value="Menggatal">Menggatal</option>
			<option value="Tuaran">Tuaran</option>
			<option value="Lido">Lido</option>
			</select>
	<br>
	
	<input type="text" name="postcode" value="<?php echo $rows['postcode']; ?>" />
	</p>

	<input type="text" name="phone" value="<?php echo $rows['phone']; ?>" />
	<br>
	<td><input type="text" name="email" value="<?php echo $rows['email']; ?>" />
	<br>
	<input type="password" name="password" value="<?php echo $rows['password']; ?>"  />
	<br><br>
	  <p>
            <td colspan="2" align="center" style="margin-bottom:20px;" align="center;">
                <input type="submit" value="COMFIRM" class="button button4" onkeyup="myFunction()"  name="submit" />
                <input type="reset" value="RESET" class="button button4" onkeyup="myFunction()"  name="reset" />
            </td>
        </p>
</form>
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