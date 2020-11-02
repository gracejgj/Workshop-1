<?php include('pagination.php'); ?>
<!DOCTYPE html>
<head>

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
	
	<p style="flex-direction:column">
	<!--<input type="submit" class="w3-button w3-white w3-border w3-round-large" value="User Record" />
	<input type="submit" class="w3-button w3-white w3-border w3-round-large" value="User Detail" /> -->
	<a  href="add_customer.php"><input class="button button4" type="submit" value="INSERT NEW"  style="float:right"/>
	</a></p>

	<td>
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Name" title="Type in a user email">
	</td>
	
	<table id="myTable">
	<tr>
        <th align="center" width="12%">First Name</th>
        <th align="center" width="12%">Last Name</th>
        <th align="center" width="12%">Address</th>
        <th align="center" width="12%">Districts</th>
		<th align="center" width="8%">Postcode</th>
		<th align="center" width="10%">Phone</th>
		<th align="center" width="10%">Email</th>
		<th align="center" width="12%">Password</th>
		<th align="center">Action</th>
		<th></th>
    </tr>

		<?php
		
		$connect = mysqli_connect("localhost", "root", "Jgracej9306__", "florist");
		$sql = "select * from tbl_customer LIMIT $offset, $total_records_per_page";
		$result = mysqli_query($connect,$sql);

		while($rows = mysqli_fetch_array($result))
		{
		?>
		<tr>
			<td align="center" width="12%"><?php echo $rows['fname']; ?></td>
			<td align="center" width="12%"><?php echo $rows['lname']; ?></td>
			<td align="center" width="12%"><?php echo $rows['address']; ?></td>
			<td align="center" width="12%"><?php echo $rows['district']; ?></td>
			<td align="center" width="8%"><?php echo $rows['postcode']; ?></td>
			<td align="center" width="10%"><?php echo $rows['phone']; ?></td>
			<td align="center" width="10%"><?php echo $rows['email']; ?></td>
			<td align="center" width="12%"><?php echo $rows['password']; ?></td>
			
			<td align="center" width="10%">
			<a href="user_update.php?pid=<?php echo $rows['user_id']; ?>"><input type="submit" class="button button4" value="UPDATE" /></a>
			</td>
			<td align="center" width="5%">
			<input type="submit" name="btn_del" class="button button4"  value="DELETE" onClick="delFunction(<?php echo $rows['user_id']; ?>)" />
			</td>
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
		
	<script>
	function delFunction(use_id)
	{
		var message = confirm("Are you sure you want to delete this customer data");
		if (message == true)
		{
			window.location.href = "user_delete.php?uid=" + use_id;
		}
		else
		{
			
		}
	}
	</script>
		
	<script> /*search only for products*/
	function myFunction() 
	{
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
	td = tr[i].getElementsByTagName("td")[6];
	if (td) {
	txtValue = td.textContent || td.innerText;
	if (txtValue.toUpperCase().indexOf(filter) > -1) {
	tr[i].style.display = "";
		} else {
	tr[i].style.display = "none";
			}
			}       
		}
	}
	</script>
	
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