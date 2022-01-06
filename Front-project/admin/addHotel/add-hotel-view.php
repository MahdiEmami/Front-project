<?php
session_start();
if(!isset($_SESSION['admin-login'])){
    session_destroy();
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>only admin</title>
    <link rel="stylesheet" href="../../theme.css">
    <link rel="stylesheet" href="hotel.css">
</head>
<body>
    <div class="card hotel__card">
        <form enctype="multipart/form-data" action="add-hotel-controller.php" method=post>
            <h1 class="h1 center ">اضافه کردن هتل</h1>
            <input required class="input hotel__input" type="text" name="hname" placeholder="نام هتل">
            <input required class="input hotel__input" type="text" name="hprov" placeholder="استان">
            <input class="input hotel__input" type="text" name="hcity" placeholder="شهر">
            <textarea required name="hdesc" id="desc" cols="30" rows="10" class="text_area" placeholder="آدرس"></textarea>
            <textarea required name="htozihat" id="desc" cols="30" rows="10" class="text_area" placeholder="توضیحات"></textarea>
            <input required class="input hotel__input" type="number" name="hprice" placeholder="قیمت به ازای هر شب به تومان">
            <input required class="input hotel__input" type="number" max="100" name="hfood" placeholder="شاخص کیفیت غذا">
            <input required class="input hotel__input" type="number" max="100" name="hfaca" placeholder="شاخص کیفیت امکانات رفاهی">
            <input required class="input hotel__input" type="number" max="100" name="hlocation" placeholder="شاخص موقعیت و و دسترسی">
            <input required class="input hotel__input" type="number" name="hdualperson" placeholder="تعداد اتاق 2 نفره">
            <input required class="input hotel__input" type="number" name="hfourperson" placeholder="تعداد اتاق 4 نفره">
            <input required class="input hotel__input" type="number" name="hstar" placeholder="تعداد ستاره" min="1" max="5">
            <input required type="file" name="hpic" class="input" placeholder="آپلود عکس">
            <input required type="submit" value="بارگزاری" class="btn-fill" name="submit">
        </form>
       
    </div>
</body>
</html>