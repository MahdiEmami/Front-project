<?php
   include_once '../config.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
      if($myusername=='admin' and $mypassword=='admin') {
          $_SESSION['admin-login'] =true;
          header('location:dashboard.php');
      }else {
         $_SESSION['isInvalid']=true;
         header("location:index.php");
      }
   }
?>