<?php
$conn=new mysqli('localhost','root','','users');
$sql = "INSERT INTO names (userName, email, psword)
VALUES ($_POST[userName],$_POST[email],$_POST[psword])";
$conn->close();
?>