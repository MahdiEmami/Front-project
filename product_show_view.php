<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>
    <h1>Tour Catalog</h1>
    <div class="container">
    <?php
    $from=array();
    $to=array();
    $desc=array();
        foreach($productList as $product){
            $from=$product[1];
            $to=$product[2];
            $desc=$product[3];
            $img=$product[4];
            $price=$product[5];
            echo "
            <div class='card'>
            <img src={$img} class='card_img'>
                <div class='card_body'>
            <h3>from {$from} to {$to}</h3>
            <p>{$desc}</p>
            <p>Price:{$price}</p>
                </div>
            </div>

            ";
        }
    ?>
    </div>
</body>
</html>