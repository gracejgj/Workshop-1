<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>


<!DOCTYPE html>
<html>
<body>

	<div id="container"> 
	<?php include 'inc/header.php';?>
	<hr></hr>
	<!-- Start of Main Content Area -->
	<div id="main_content">
	<div class="w3-content w3-section" style="max-width:1280px">
	  <img class="mySlides" src="img/slider-1.jpg"  onContextMenu="return false;" style="width:100%; height:100%">  
	  <img class="mySlides" src="img/slider-2.jpg"  onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/slider-3.jpg"  onContextMenu="return false;" style="width:100%; height:100%">
	  <img class="mySlides" src="img/slider-4.jpg"  onContextMenu="return false;" style="width:100%; height:100%">
	</div>
    </div>
   
    <div class="h_divider">&nbsp;</div>    
    <div class="sub_contents">
		
		<div class="sub_local">
		<h1>CREATED BY LOCAL ARTISAN FLORISTS</h1>
		<p>We pride ourselves on being the Sabah's most trusted name in flower delivery. We've been delighting customers since 1988, with a heartfelt passion for flowers. There are over 200 local Interflora florists across the Sabah, so we can deliver flowers same day, or in as little as three hours. If you're sending further afield - we have Interflora florists around the globe delivering to over countries with same day delivery also available across many locations.</p>
        </div>
        <div class="clearthis">&nbsp;</div>
 	</div>	
	<hr></hr>	  
	<?php include 'inc/footer.php';?>
	</div>
	
	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 5000); // Change image every 2 seconds
	}
	</script>
	
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
	
</body>
</html>
