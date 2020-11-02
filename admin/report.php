<?php include('pagination.php'); ?>

<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
	var graf = document.getElementById("graph").value;
	window.location.href = "index.php?type=" + graf;
}

window.onload = function () {
var graph_type = "<?php echo $graph ?>";
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "dark1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Total Units Sold"
	},
	data: [{
		type: graph_type, //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
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

	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	<div id="content"> 
	<br><br>
	<td align="left"><a href="indexs.php"><input type="submit" class="button button4" value="Report" /></a>
	<br>
	

		<!--<div class="box">	
			<h4 align="left">Sales Statistics</h4><hr>
			&nbsp;&nbsp;<b>Today:</b>
			<!--
			require_once "inc/config.php";
				$day = date('d');
				$month = date('m');
				$year = date('Y');
				$sql = "SELECT sum(total_price) AS aa FROM `tbl_order` WHERE `day`='$day' AND `month`='$month' AND `year`='$year'";
				$result = $con->query($sql);
				while ($row = $result->fetch_array()) {
					echo number_format($row['aa']);
				}
			?>
			 Tsh<br><br>
			&nbsp;&nbsp;<b>This Month:&nbsp; </b>
			
			require_once "../app/Connect.php";
				$day = date('d');
				$month = date('m');
				$year = date('Y');
				$sql = "SELECT sum(total_price) AS bb FROM `tbl_order` WHERE `month`='$month' AND `year`='$year'";
				$result = $con->query($sql);
				while ($row = $result->fetch_array()) {
					echo number_format($row['bb']);
				}
			?>
			 Tsh<br><br>
			&nbsp;&nbsp;<b>This Year:&nbsp;</b>
			<
			require_once "../app/Connect.php";
				$day = date('d');
				$month = date('m');
				$year = date('Y');
				$sql = "SELECT sum(total_price) AS cc FROM `tbl_order`` WHERE  `year`='$year'";
				$result = $con->query($sql);
				while ($row = $result->fetch_array()) {
					echo number_format($row['cc']);
				}
			?>
			 Tsh<br><br>
		</div>
	</center><br>-->
	
	<br>
	<h2 style="text-align:CENTER">DAILY SALES REPORT</h2>
	<br>
	
	 <table  id="myTable">
		<thead>
			<tr>
				<td class="hidden"></td>
				<th>Sales Date</th>
				<th>Customer</th>
				<th>Total Purchase</th>
				<th></th>
			</tr>
		</thead>
	
		<?php

		$conn = mysqli_connect("localhost","root","Jgracej9306__","florist");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sq=mysqli_query($conn,"select * from tbl_order order by date desc LIMIT $offset, $total_records_per_page");
		while($sqrow=mysqli_fetch_array($sq)){
		?>
			<tr>
				<td class="hidden"></td>
				<td><?php echo date('M d, Y h:i A',strtotime($sqrow['date'])); ?></td>
				<td><?php echo $sqrow['email']; ?></td>
				<td align="right"><?php echo number_format($sqrow['total'],2); ?></td>
				<!--<td>
					<a href="#detail<php echo $sqrow['order_id']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> View Full Details</a>
					<php include ('full_details.php'); ?>
				</td>-->
			</tr>
		<?php
		}
	?>
		
	</table>
		
		<div style='padding: 10px 20px 0px; border-top: dotted 1px; text-align:center;'>
	<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
	</div>

	<ul class="pagination">
		<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

		<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
		<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>

	<?php 
	if ($total_no_of_pages <= 10){  	 
	for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	}
	elseif($total_no_of_pages > 10){

	if($page_no <= 4) {			
	for ($counter = 1; $counter < 8; $counter++){		 
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
	}

	elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";
	for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                  
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
	}

	else {
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";

	for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                   
	}
	}
	}
	?>

	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
	<?php if($page_no < $total_no_of_pages){
	echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
	} ?>
	</ul>


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