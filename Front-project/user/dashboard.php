<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>dashboard</h1>
    <h2>خوش آمید <?php echo $_SESSION['login_user']?></h2>
    <a href="logout.php">logout</a>
</body>
</html>