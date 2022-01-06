<?php
include("../config.php");
$sql="UPDATE hotel SET hname='{$_POST["hname"]}',hprov='{$_POST["hprov"]}',hcity='{$_POST["hcity"]}'
,hdesc='{$_POST["hdesc"]}',hprice='{$_POST["hprice"]}',hstar='{$_POST["hstar"]}'
,hpic='{$_FILES["hpic"]["name"]}',htozihat='{$_POST["htozihat"]}' WHERE hid='{$_GET["id"]}'";
$db->query($sql);
$db->close();
header("location:hotels.php");
?>