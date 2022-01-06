<?php 
include("config.php");
$sql="SELECT hid,dualperson,fourperson FROM hotel WHERE hid='{$_GET["id"]}'";
$result=$db->query($sql);
$hotels=$result->fetch_all();
?>