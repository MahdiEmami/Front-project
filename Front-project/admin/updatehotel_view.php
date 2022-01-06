<?php
include("session.php");
include("updatehotel_controller.php");
$base_uri="addHotel/uploads/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>only admin</title>
    <link rel="stylesheet" href="../theme.css">
</head>
<body>
    <div class="card hotel__card">
        <form enctype="multipart/form-data" action="update_hotel.php?id=<?php echo $s[0] ?>" method=post>
            <h1 class="h1 center ">اضافه کردن هتل</h1>
            <input value="<?php echo $s[1] ?>" required class="input hotel__input" type="text" name="hname" placeholder="نام هتل">
            <input value="<?php echo $s[2] ?>" required class="input hotel__input" type="text" name="hprov" placeholder="استان">
            <input value="<?php echo $s[3] ?>" class="input hotel__input" type="text" name="hcity" placeholder="شهر">
            <textarea  required name="hdesc" id="desc" cols="30" rows="10" class="text_area" placeholder="آدرس"><?php echo $s[4] ?></textarea>
            <textarea  required name="htozihat" id="desc" cols="30" rows="10" class="text_area" placeholder="توضیحات"><?php echo $s[8] ?></textarea>
            <input value="<?php echo $s[5] ?>" required class="input hotel__input" type="number" name="hprice" placeholder="قیمت به ازای هر شب به تومان">
            <input value="<?php echo $s[6] ?>" required class="input hotel__input" type="number" name="hstar" placeholder="تعداد ستاره" min="1" max="5">
            <input value="<?php echo $base_uri.$s[7] ?>" required type="file" name="hpic" class="input" placeholder="آپلود عکس">
            <input required type="submit" value="بارگزاری" class="btn-fill" name="submit">
        </form>
    </div>
</body>
</html>