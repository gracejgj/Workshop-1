<?php
session_start();
include 'inc/config.php';

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>


<!DOCTYPE html>
<html>
<head>
<title>Hand Bouquets | BelleFlorist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">

</head>

<body>
	
	<div id="container"> <!--CONTENT-->
	<?php include 'inc/header.php';?>
	
	<hr></hr> <!--Border-->
	
	<div class="main_content">
		
	<article>
    <h1>We'll be back soon!</h1>
		<div>
			<p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
			<p>&mdash; The Team</p>
		</div>
	</article>

	</div>
	<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
			
		
	</div>
</body>
</html>