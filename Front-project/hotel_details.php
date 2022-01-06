<?php include("config.php"); 
$sql="SELECT * FROM hotel WHERE hid='{$_GET["id"]}'";
$result=$db->query($sql);
$row=$result->fetch_array();
$img_base_uri="admin/addHotel/uploads/"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزعیات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="theme.css">
</head>
<body>
<?php
include_once 'sections/header/header.html';
$span=[];
for($i=0;$i<$row["hstar"];$i++){
$span[$i]="<i class='fa fa-star'></i>";
}
$span=implode("",$span); ?>
<div class="hotel-detail__container">
<img class="detail__image" src="<?php echo $img_base_uri.$row["hpic"]?>" alt="hotel_<?php echo $row["hid"] ?>">
<div class="detail__content card detail__card">
    <h3 class="fweight"><?php echo $row["hname"] ?></h3>
    <span class="yellow"><?php echo $span ?> </span>
    <div class="detail__row">
        <h4 class="fweight">استان <?php echo $row["hprov"]?></h4>
    </div> 
    <div class="detail__row">
        <h4 class="fweight">شهر <?php echo $row["hcity"]?></h4>
    </div>
    <div class="detail__row">
        <p class="fweight"><?php echo $row["hdesc"]?> </p>
    </div>
    <div class="detail__row">
        <div class="progress">
            <div class="bar barfood"></div>
        </div>
        <p class="fix">کیفیت غذا</p>

    </div>
    <div class="detail__row">
        <div class="progress">
            <div class="bar barfaca"></div>
        </div>
        <p class="fix">امکانات رفاهی</p>

    </div>
    <div class="detail__row">
        <div class="progress">
            <div class="bar barlocation"></div>
        </div>
        <p class="fix">موقعیت و دسترسی</p>
    </div>
    </div>
</div>
<section class="detail__about">
<h3>درباره <?php echo $row["hname"]?></h3>
<p class="right"><?php echo $row["htozihat"] ?></p>
</section>
<section class="buy">
<table class="table">
    <tr>
        <td>نام اتاق</td>
        <td>قیمت به ازای هر شب</td>
        <td>تعداد اتاق های خالی</td>
        <td class="table__CA">تعداد اتاق</td>
    </tr>
    <?php
    include("hotel_details_controller.php");
    $isopen2=false;
    $isopen4=false;
    foreach($hotels as $hotel){
        echo "<tr><td class='select'>اتاق 2 نفره</td>
        <td class='price'>{$row["hprice"]}</td>
        <td>{$hotel[1]}</td>
        <td class='table__CA '><div class='table__td__edit'><a class='btn-fill table__btn hotel__room--add'><i class='fa fa-plus'></i></a>
        <a class='btn-fill table__btn'><i class='fa fa-minus'></i></a></div>
        </td>
        </tr>";
    }
    foreach($hotels as $hotel){
        $price=$row["hprice"]+1000000;
        echo "<tr><td class='select'>اتاق 4 نفره</td>
        <td class='price'>{$price}</td>
        <td>{$hotel[2]}</td>
        <td class='table__CA '><div class='table__td__edit'><a class='btn-fill table__btn hotel__room--add'><i class='fa fa-plus'></i></a>
        <a class='btn-fill table__btn hotel__room--remove'><i class='fa fa-minus'></i></a></div>
        </td>
        </tr>";
    }
    ?>
</table>
<table class="table">
    <tr>
    <th class="table__CA">اتاق اخذ شده</th>
    <th class="table__CA">مبلغ قابل پرداخت</th>
    </tr>
    <tr>
    <td class="table__CA hotel-room__buyed"></td>
    <td class="table__CA hotel-room__pay"></td>
    </tr>
    
</table>
</section>
<?php include("sections/footer/footer.html") ?>
</body>
<script>
    //bars start
    const progress=document.querySelectorAll(".progress");
    let c=[];
    for(var i=0;i<progress.length;i++){
        c.push(progress[i].querySelector(".bar"))
    }
    const foodWidth=<?php echo $row["hfood"] ?>;
    const facaWidth=<?php echo $row["hfaca"]?>;
    const locationWidth=<?php echo $row["hlocation"]?>;
    c[0].style.width=`${foodWidth}%`;
    c[1].style.width=`${facaWidth}%`;
    c[2].style.width=`${locationWidth}%`;
    //bars end
    let buyed=document.querySelector(".hotel-room__buyed");
    let pay=document.querySelector(".hotel-room__pay");
    const addbtn=document.querySelectorAll(".hotel__room--add");
    const removebtn=document.querySelectorAll(".hotel__room--remove");
    addbtn.forEach(n=>{
        n.addEventListener("click",()=>{
            const tValue= n.closest("tr").querySelector(".select").textContent;
            const tprice=n.closest("tr").querySelector(".price").textContent;
            let price=parseInt(tprice);
            buyed.innerHTML+=`,${tValue}`;
        })
    })
</script>
<script src="js/main.js"></script>
</html>
