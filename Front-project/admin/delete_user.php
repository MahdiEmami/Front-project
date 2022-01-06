<?php
include("../config.php");
$sql="DELETE FROM user WHERE uid='{$_GET["id"]}'";
$db->query($sql);
$db->close();
header("location:users.php")
?>