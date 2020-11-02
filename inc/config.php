<?php
$currency = 'RM'; //Currency Character or code

$db_username = 'root';
$db_password = 'Jgracej9306__';
$db_name = 'florist';
$db_host = 'localhost';

//Additional taxes and fees
$shipping_cost      = 4.00; //shipping cost
$taxes              = array( //List your Taxes percent here.                     
                            'Service Tax' => 4
                            );		
							
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}							
?>