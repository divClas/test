<?php
session_start();
require_once 'vendor/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/main.scss" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.png">
    <!-- <script src="/style/main.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->




    <title>UltraBrand</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="services">
        <div class="services__iner">
            <?php
            $services = mysqli_query($connect, "SELECT * FROM `services`");
            $services = mysqli_fetch_all($services);
            foreach ($services as $service) {
            ?>
                <div id="container">
                    <div class="product-details">

                        <h1><?= $service[3] ?></h1>
                        <p class="information"><?= $service[4] ?></p>
                        <div class="control">
                            <button class="btn">
                                <span class="price"><?= $service[5] ?>$</span>
                                <span class="buy"><a href="vendor/add__card.php?services_id=<?= $service[0] ?>">Заказать</a></span>
                            </button>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="<?= $service[1] ?>" alt="">
                        <div class="info">
                            <h2>Описание</h2>
                            <p><?= $service[2] ?></p>
                        </div>
                    </div>
                </div>

            <?
            }
            ?>


        </div>
    </div>






</body>

</html>