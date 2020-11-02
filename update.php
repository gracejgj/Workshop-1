<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'inc/config.php';

$username = $_POST["username"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$district = $_POST["district"];
$zip = $_POST["postcode"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$opwd = $_POST["opwd"];
$pwd = $_POST["pwd"];


if($username!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET username ="'. $username .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($fname!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET fname ="'. $fname .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($lname!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET lname ="'. $lname .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($address!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET address ="'. $address .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($district!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET district ="'. $district .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($pin!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET zip ='. $postcode .' WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($pin!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET phone ='. $phone .' WHERE user_id ='.$_SESSION['user_id']);
  if($result){
  }
}

if($email!=""){
  $result = $mysqli->query('UPDATE tbl_customer SET email ="'. $email .'" WHERE user_id ='.$_SESSION['user_id']);
  if($result) {
  }
}

//$result = $mysqli->query('Select password from tbl_customer WHERE user_id ='.$_SESSION['user_id']);

//$obj = $result->fetch_object();

if(/*$opwd === $obj->password &&*/ $pwd!=""){
  $query = $mysqli->query('UPDATE tbl_customer SET password ="'. $pwd .'" WHERE user_id ='.$_SESSION['user_id']);
  if($query){
  }
}


//else {
//  echo 'Wrong Password. Please try again. <a href="account.php">Go Back</a>';
//}
echo "<p>Successfully updated! </p>";
header("location:account.php");


?>
