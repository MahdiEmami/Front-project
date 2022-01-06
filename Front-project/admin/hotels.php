<?php include("session.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست هتل ها</title>
    <link rel="stylesheet" href="../theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="table__container">
    <table class="table">
        <tr>
        <th>ID</th>
        <th>نام هتل</th>
        <th>استان</th>
        <th>شهر</th>
        <th>تعداد ستاره</th>
        <th class="table__CA">ویرایش</th>
        </tr>
        <?php 
        include("hotel_controller.php");
        foreach($rows as $r){
            $span=[];
                for($i=0;$i<$r[6];$i++){
                    $span[$i]="<i class='fa fa-star'></i>";
                }
                $span=implode("",$span);
            echo "<tr><td>{$r[0]}</td>
            <td>$r[1]</td>
            <td>{$r[2]}</td>
            <td>{$r[3]}</td>
            <td><span class='yellow'>{$span}</span></td>
            <td class='table__CA'><div class='table__td__edit'><a href='delete.php?id={$r[0]}' class='btn-fill btn-red table__btn btn--delete'><i class='fa fa-trash'></i></a>
            <a href='updatehotel_view.php?id={$r[0]}' class='btn-fill table__btn '><i class='fa fa-edit'></i></a></div></td></tr>";
        }
        ?>
    </table>
    </div>
    <script>
        const delete_btn= document.querySelectorAll(".btn--delete");
        delete_btn.forEach(n=>{
            console.log(n);
            n.addEventListener("click",e=>{
                e.preventDefault();
                if(window.confirm("آیا مطمعن هستید که میخواهید این رکورد را حذف کنید؟") ==true){
                    window.location.href=n.href;
                }
            })
        })
    </script>
</body>
</html>