<?php
include 'settings.php';
include 'db.php';
$uid=$_GET['id'];
$db=new db($dbhost,$dbuser,$dbpass,$dbname);
$sql="UPDATE user WHERE"
?>