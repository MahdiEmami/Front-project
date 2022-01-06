<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
        .dashboard__icon{
            font-size: xx-large;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <aside>
        <h1 class="dashboard__logo">WORLD</h1>
        <div class="dashboard__home row">
            <i class="fa fa-home"></i>
            <a class="btn-text" href="">خانه</a> 
            </div>
        <div class="dashboard__users row">
            <i class="fa fa-user"></i>
            <p class="btn-text section__title">کاربران</p> 
        </div>
        <div class="dashboard__sect-container">
                <div class="dashboard__users row">
                <i class="fa fa-eraser"></i>
                <a class="btn-text" href="../user\signup.html">اضافه کردن کاربر</a> 
                </div>
                <div class="dashboard__users row">
                <i class="fa fa-list"></i>
                <a class="btn-text" href="users.php">لیست کاربران</a> 
                </div>
        </div>
    </div>
    <div class="dashboard__users row">
        <i class="fa fa-shopping-cart"></i>
        <p class="btn-text section__title">سفارش ها</p> 
    </div>
    <div class="dashboard__sect-container">
            <div class="dashboard__orders row">
            <i class="fa fa-list"></i>
            <a class="btn-text" href="">لیست سفارش ها</a> 
            </div>
    </div>
    <div class="dashboard__users row">
        <i class="fa fa-hotel"></i>
        <p class="btn-text section__title">هتل ها</p> 
    </div>
    <div class="dashboard__sect-container">
            <div class="dashboard__hotels row">
            <i class="fa fa-plus"></i>
            <a class="btn-text" href="addHotel/add-hotel-view.php">اضافه کردن هتل </a> 
            </div>
            <div class="dashboard__users row">
            <i class="fa fa-list"></i>
            <a class="btn-text" href="hotels.php">لیست هتل ها</a> 
            </div>
    </div>
    <div class="dashboard__home row">
        <i class="fa fa-sign-out"></i>
        <a class="btn-text" href="logout.php">خروج</a> 
        </div>
    </aside>
    <main class="dashboard__main">
            <div class="card dashboard__card">
                <h3>سفارش ها</h3>
                <i class="fa fa-shopping-cart"></i>
                <a href=""></a>
            </div>
            <div class="card dashboard__card">
                <h3>هتل ها</h3>
                <i class="fa fa-hotel"></i>
                <a href="hotels.php"></a>
            </div>
            <div class="card dashboard__card">
                <h3>کاربران</h3>
                <i class="fa fa-user"></i>
                <a href="users.php"></a>
            </div>
    </main>
    <script src="main.js"></script>
</body>
</html>