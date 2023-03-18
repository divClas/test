<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>UltraBrand</title>
</head>

<body>


    <?php
    include 'header.php';
    ?>

    <!-- Профиль -->
    <div class="profile">
        <div class="profile-inner">
            <form class="profile-inner">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="Ваша аватарка">
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>

                <a href="#"><?= $_SESSION['user']['email'] ?></a>
                <a href="vendor/logout.php" class="logout">Выход</a>
            </form>

            <div class="table__admin">
                <table>
                    <tr>
                        <th>наименование услуги</th>
                        <th>статус</th>

                    </tr>
                    <?php
                    require_once 'vendor/connect.php';
                    $add_user = $_SESSION['user']['id'];
                    $card = mysqli_query($connect, "SELECT * FROM `card` WHERE `user_id`='$add_user'");
                    $card = mysqli_fetch_all($card);
                    foreach ($card as $car) {
                        $title = mysqli_query($connect, "SELECT * FROM `services` WHERE `id`='$car[2]'");
                        $title = mysqli_fetch_assoc($title)['title'];
                    ?>
                        <tr>
                            <td><?= $title ?> </td>
                            <td><?= $car[3] ?> </td>
                        </tr>
                    <?
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>