<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'inc/config.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Hand Bouquets | Belle Florist</title>
<link rel="stylesheet" type="text/css" href="css/products.css">
</head>
<body>
	<div id="container">
	<?php include 'inc/header.php';?>
	<hr></hr>
	
	<div class="main_content">
		<?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query("SELECT * FROM tbl_product where catID='1' ");
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {
			
			echo '<div class="card">';
            echo '<img src="img/hb/'.$obj->image.'" style="width:100%"/>';
			echo '<h1>'.$obj->product_name.'</h1>';
			echo '<p class="price">'.$currency.$obj->price.'</p>';
			echo '<p>'.$obj->description.'</p>';
		
           if($obj->product_qty > 0){
                echo '<p><a href="update-cart.php?action=add&product_id='.$obj->product_id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;
    	
		  echo '</div>';
          ?>
		  
		<!-- Products List End HB -->
		<hr></hr>
		
	<!-- Start of Page Footer -->
	<?php include 'inc/footer.php';?>
	<!-- End of Page Footer -->
			
		
	</div>
</body>
</html>