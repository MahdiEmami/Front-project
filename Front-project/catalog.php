<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>
    <?php include("sections/header/header.html") ?>
    <?php
    include("catalog_controller.php");
   ?>
   <section class="tours">
        <h3 class="tours__title">پیشنهاد های ما</h3>
        <div class="tours__container">
            <?php
            $imgUri="admin/addHotel/uploads/";
            foreach($rows as $row){
                $span=[];
                for($i=0;$i<$row[6];$i++){
                    $span[$i]="<i class='fa fa-star'></i>";
                }
                $span=implode("",$span);
                echo "<article class='card hotel__card hotel__card2'>
                <img class='hotel__card__image' src=".$imgUri.$row[7].">
                <h3>{$row[1]}</h3>
                <p class='right med'>{$row[2]}/{$row[3]}</p>
                <p class='right med'>$row[4]</p>
                <p class='right med'>قیمت به ازای هر شب اقامت <span class='red'>{$row[5]}</span>تومان</p>
                <span class='yellow'>{$span}</span>
                <a  href='hotel_details.php?id={$row[0]}' class='btn-fill' >بیشتر</a>
                </article>";
            
            }
            ?>
        </div>
    </section>
    <?php include("sections/footer/footer.html") ?>
    <script src="js/main.js"></script>
</body>
</html>