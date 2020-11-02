<?php
session_start();
include 'inc/config.php';
include 'pagination.php';
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Wedding Bouquets | BelleFlorist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">
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
	
<div id="container">
<?php include 'inc/header.php';?><hr>
<br>
<div class="main_content">
	
	<table>
	<tr>
    	<th width="10%">Product ID</th>
		<th width="10%">Order Date</th>
		<th width="10%">Product Code</th>
        <th width="10%">Product Name</th>      
		<th width="10%">Price (Unit)s</th>
		<th width="10%">Unit Bought</th>
        <th width="10%">Total Cost</th>
		<th width="10%">Delivery Status</th>
		
    </tr>
	  <?php
          $user_id = $_SESSION["user_id"];
          $result = $mysqli->query("SELECT * from tbl_order where email='".$user_id."' LIMIT $offset, $total_records_per_page");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<tr>';
              echo '<td align="center" width="10%">'.$obj->order_id.' </td>';
              echo '<td align="center" width="10%"> '.$obj->date.' </td>';
              echo '<td align="center" width="10%"> '.$obj->product_code.' </td>';
              echo '<td align="center" width="10%"> '.$obj->product_name.' </td>';
              echo '<td align="center" width="10%"> '.$obj->price.' </td>';
              echo '<td align="center" width="10%">'.$obj->units.' </td>';
              echo '<td align="center"width="10%"> '.$currency.$obj->total.' </td>';
			  echo '<td align="center" width="10%"> '.$obj->status.' </td>';
			 // echo '<p><strong>Payment</strong>: '.$obj->payed.'</p>';
			  
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '</tr>';

			
            }
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
<!-- Products List End HB -->
		<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
			
		
	</div>
</body>
</html>