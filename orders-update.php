<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'inc/config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {
    $result = $mysqli->query("SELECT * FROM tbl_product WHERE product_id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {

	
      $cost = $obj->price * $quantity;
      $user = $_SESSION["user_id"];
	// echo $insertdate = date("Y-m-d", strtotime($b_date));
	
        $query = $mysqli->query("INSERT INTO tbl_order (product_code, product_name, units, price, total, email, fname)
		VALUES('$obj->product_code', '$obj->product_name', '$quantity', '$obj->price', '$cost', '$user', '$user')");
		if ($mysqli->error) { 
			echo $mysqli->error; 
			 
			}
			
        if($query){
          $newqty = $obj->product_qty - $quantity;
          if($mysqli->query("UPDATE tbl_product SET product_qty = ".$newqty." WHERE product_id = ".$product_id)){

          }
        }

        //send mail script
        // $query = $mysqli->query("SELECT * from orders order by date desc");
        // if($query){
        //   while ($obj = $query->fetch_object()){
        //     $subject = "Your Order ID ".$obj->id;
        //     $message = "<html><body>";
        //     $message .= '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
        //     $message .= '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
        //     $message .= '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
        //     $message .= '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
        //     $message .= '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
        //     $message .= '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
        //     $message .= '<p><strong>Total Cost</strong>: '.$obj->total.'</p>';
        //     $message .= "</body></html>";
        //     $headers = "From: support@techbarrack.com";
        //     $headers .= "MIME-Version: 1.0\r\n";
        //     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        //     $sent = mail($user, $subject, $message, $headers) ;
        //     if($sent){
        //       $message = "";
        //     }
        //     else {
        //       echo 'Failure';
        //     }
          //}
        }



      }
    }
  }



header("location:billing.php");

?>
