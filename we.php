<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include_once ("inc/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Maintenance | BelleFlorist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">

</head>

<style>
  body { text-align: center;}
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

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
		<!-- Products List End HB -->
		<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
			
		
	</div>
</body>
</html>