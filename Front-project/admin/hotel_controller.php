<?php
include("../config.php");
$sql="SELECT * FROM hotel ORDER BY hid";
$result=$db->query($sql);
$rows=$result->fetch_all();
?>