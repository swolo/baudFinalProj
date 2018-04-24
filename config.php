<?php
$currency = '&#036; '; //Currency code

$db_username = 'fusezedc';
$db_password = 'z3s6R8f0bN';
$db_name = 'fusezedc_products';
$db_host = 'localhost:3306';

$shipping_cost      = 10.50; 
$taxes              = array( //taxes or other % based fees
                             
                            'Sales Tax' => 7
                            );						
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>