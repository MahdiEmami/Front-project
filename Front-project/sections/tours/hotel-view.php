   <?php
    include("hotel-controller.php");
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
                <p class='right med'>شروع قیمت از  <span class='red'>{$row[5]}</span>تومان</p>
                <span class='yellow'>{$span}</span>
                <a src='hotel_details.php?id={$row[0]}'></a>
                </article>";
            }
            ?>
        </div>
    </section>