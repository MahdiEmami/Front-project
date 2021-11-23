<?php
include('settings.php');
include('db.php');
$db=new db($dbhost,$dbuser,$dbpass,$dbname);
$sql="INSERT INTO `user`(`email`, `password`) VALUES ('{$_POST['email']}','{$_POST['password']}')";
echo $db->connect_error;
$result=$db->query($sql);
$db->close();
?>