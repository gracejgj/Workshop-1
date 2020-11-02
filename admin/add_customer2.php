<?php
session_start();
include_once("inc/config.php");
	
	$uname = ($_POST['username']);
	$fnme = ($_POST['fname']);
	$lnme = ($_POST['lname']);
	$add = ($_POST['address']);
	$dstrict = ($_POST['district']);
	$post = ($_POST['postcode']);
	$pone = ($_POST['phone']);
	$mail = ($_POST['email']);
	$pwd = ($_POST['pwd']);

        
$sql = "INSERT INTO tbl_customer (username, fname, lname,address, district, postcode, phone, email, password) VALUES ('$uname','$fnme', '$lnme','$add', '$dstrict', '$post', '$pone', '$mail', '$pwd')";

if (mysqli_query($mysqli,$sql)){
	echo '<script type="text/javascript">alert("New user added!");</script>';
	header("Location:http://localhost/belle/admin/user.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Error Occured");</script>';
	header("Location:http://localhost/belle/admin/add_customer.php");

}



?>