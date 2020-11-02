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
	<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Product quantity has been updated!");
		window.location.assign("quantity.php");

	}
</script>
	</head>

	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	
    <div id="content"> 
	<br><br><br>
	 <h2 align="center" style="margin-botton:20px;">CHANGE PRODUCTS QUANTITY</h2>
	<br><br>
	<tr>
		<td align="right"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Product Code" title="Type In Name"></td>
	</tr>
	
	<table id="myTable" width="100%">
	<tr>
    	<th>Product Name</th>
		<th>Product Code</th>
		<th>Product Name</th>
        <th>Quantity</th> 
		<th></th>
		<th>Action</th>
		<th></th>
    </tr>
		 <?php
           $result = $mysqli->query("SELECT * from tbl_product order by product_id asc ");
           if($result) {
             while($obj = $result->fetch_object()) {
			
			   echo '<tr>';
               echo '<td>'.$obj->product_name.'</td></p>';
               echo '<td><img src="img/hb/'.$obj->image.'" style="width:170px; height:200px"/>';
               echo '<td><p><strong>Product Code</strong>: '.$obj->product_code.'</td></p>';
               echo '<td><p><strong>Units Available</strong>: '.$obj->product_qty.'</td></p>';         
               echo '<td><form method="post" name="update_quantity" action="update_quantity.php"></td>';
               echo '<td><p><strong>New Qty</strong>:</td></p>';
               echo '<td><input type="number" name="quantity[]"/></td>';
               echo '</tr>';
             }
          }
        ?> 
	</table>
        <td><input style="clear:both" onclick="checkoutFunction();" type="submit" class="button button4" value="UPDATE"></td></p>
        </form>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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