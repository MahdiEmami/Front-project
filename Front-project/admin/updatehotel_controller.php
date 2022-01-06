<?php
$row=$_GET["id"];
include("../config.php");
$select="SELECT * FROM hotel WHERe hid='{$row}' ";
$result= $db->query($select);
$s=$result->fetch_array();
?>