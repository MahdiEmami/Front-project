<?php
include 'settings.php';
$dbc =new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$error= $dbc->connect_error;
echo $error;
$sql='SELECT * FROM product';
$result=$dbc->query($sql);
$productList=$result->fetch_all();
include 'product_show_view.php'
?>