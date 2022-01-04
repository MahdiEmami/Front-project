<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['create-submit'])){
    include_once '../config.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql="INSERT INTO user(email,pssword) VALUES('{$email}','{$pass}')";
    if ($conn->query($sql) === TRUE) {
        echo "با موفقیت ثبت نام شدید";
        echo "<script>window.alert('با موقیت ثبت نام شدید')</script>";
        header("location:../index.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
}
}
?>