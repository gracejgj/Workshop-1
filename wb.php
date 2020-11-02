<?php
session_start();
include 'inc/config.php';

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Wedding Bouquets | BelleFlorist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">
<style>
.card {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  max-width: 410px;
  padding: 10px;
  margin: auto;
  text-align: center;
  display: inline-block;
  margin-bottom: 15px;
  margin-left: 10px;
}

.desc {
	height: 100px;
	{
.button {}		
.disabled {
  opacity: 0.6;
  cursor: not-allowed;
}	
</style>
</head>
<body>
	
<div id="container">
<?php include 'inc/header.php';?>
<hr></hr> 
<div class="main_content">
			
<!-- Products List Start -->

<?php
 $i=0;
$results = $mysqli->query("SELECT * FROM tbl_product where catId='2'");
		  
if($results){ 

//fetch results set as object and output HTML
while($obj = $results->fetch_object()) {

echo '<div class="card">';
echo '<img src="img/hb/'.$obj->image.' "style="width:100%"/>';
echo '<h2> '.$obj->product_name.' </h2>';
echo '<h3>'.$currency.$obj->price.' </h3>';
echo '<p class="desc"> '.$obj->description.' </p>';

	if($obj->product_qty > 0) {
	echo '<p><a href="update-cart.php?action=add&product_id='.$obj->product_id.'">
	<input type="submit" class="w3-button w3-white w3-border w3-round-large" value="Add To Cart" style="margin-bottom:15px;"></a></p>';          
	}

	else {

	echo '<button class="button disabled">Out Of Stock!</button>';
	}

	echo '</div>';

	$i++;
	}
	}

	?>
<hr></div>
</div><br>    
<!-- Products List End -->
<hr></hr>
<?php include 'inc/footer.php';?>

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