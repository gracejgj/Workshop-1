<!DOCTYPE html>

<?php
	include 'session.php';
	
	$p_id = $_GET['pid'];
	$sql = "select * from tbl_order where order_id = '$p_id'";
	$result = mysqli_query($connect,$sql);
	$rows = mysqli_fetch_array($result);
?>

<html>
<head>
<title>Admin | Belle Florist</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="canvasjs.min.js"></script>
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
<br><br><br>
<form action="update_order2.php?pid=<?php echo $p_id; ?>" method="post" align="center">

<h2>UPDATE ORDER STATUS</h2>
	<br><br>
	<select name="status" class="button button4" align="center">
	<option value="status"><?php echo $rows['status']; ?></option>
	<option value="Pending">Pending</option>
	<option value="On Delivery">On Delivery</option>
	<option value="Complete">Complete</option>				
	</select>
	
	<br><br>
	
	<td colspan="2" align="center">
	<input type="submit" class="button button4" value="Confirm" name="submit" />
	<input type="reset" class="button button4" value="Clear" name="reset" />
	</td><br><br>
</form>

</div>
<div id="footer">Copyright <a href="dashboard.php">Belle Florist Admin</a>. All Rights Reserved. </div>
</div>
</body>
</html>						