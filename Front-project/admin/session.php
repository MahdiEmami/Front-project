<?php
session_start();
if(!isset($_SESSION['admin-login'])){
    session_destroy();
    header("location:index.php");
}
?>