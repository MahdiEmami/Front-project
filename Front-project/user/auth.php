<?php
   include_once '../config.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
      $sql = "SELECT * FROM user WHERE email = '{$myusername}' and pssword = '{$mypassword}'";
      $result = $db->query($sql);
      $row=$result->fetch_array();
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          $id=$row[0];
          $_SESSION['login_user'] =$row['email'];
          header('location:dashboard.php?id='.$id);
      }else {
         $_SESSION['isInvalid']=true;
         header("location:login.php");
      }
   }
?>