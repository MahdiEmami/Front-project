<?php
include("../config.php");
$row=$_GET["id"];
$sql="DELETE FROM hotel WHERE hid='{$row}'";
$db->query($sql);
$db->close();
header("location:hotels.php")
?>