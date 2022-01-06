<?php
include("../config.php");
$sql="SELECT * FROM user ORDER BY uid";
$result=$db->query($sql);
$rows=$result->fetch_all();
?>