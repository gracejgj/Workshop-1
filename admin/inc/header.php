<?php 
include 'inc/session.php';
 ?>

<html>
<head>
<title>Admin | Belle Florist</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="canvasjs.min.js"></script>

</head>
<body>

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