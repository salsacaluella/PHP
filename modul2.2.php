<?php 
$dataProduk = array(
                //nama produk, merk, harga, status stok
                array("Galaxy S21", "Samsung", 19000000, true),
                array("Galaxy A71", "Samsung", 6999000, false),
                array("iPhone 12 Pro Max", "Apple", 20999000, true),
                array("iPhone 12 Mini", "Apple", 10999000, false),
            );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>katalog hp</title>
    <style>
         .kotak {
            max-width: 400px;
            margin: 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            border: solid 2px black;
            margin-bottom: 10px;
        }

        ;
    </style>
</head>
<body>
    <?php foreach ($dataProduk as $dp) : ?>
            <div class="kotak">
            <?= $dp[1] ?>
            <br>
            <strong><?= $dp[0] ?></strong>
            <br>
            <strong><?= "Rp".$dp[2] ?></strong>
            <br>
            <?php if ($dp[3]): ?>
                        <strong><?= "Stock tersedia"?></strong>
                    <?php else: ?>
                        <strong><?="Stok habis"?></strong>
                        <?php endif ?>
            <br>
            <?php if ($dp[3]): ?>
                <form action="order.php">
                    <button type="submit">Order</button>
                </form>
                <br>
            <?php endif ?>
            </div>
            
    <?php endforeach ?>
</body>
</html>