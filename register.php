<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.png">
    <title>UltraBrand</title>

</head>


<body>
    <?php
    include 'header.php';
    ?>
    <div class="register">
        <div class="regmain">

            <form class="inner-register" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                <p>Зарегестрируйтесь</p>
                <input type="text" name="full_name" placeholder="Введите свое полное имя">

                <input type="text" name="login" placeholder="Введите свой логин">

                <input type="email" name="email" placeholder="Введите адрес своей почты">
                <input type="file" name="avatar" placeholder="Выберите аватар">

                <input type="password" name="password" placeholder="Введите пароль">

                <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
                <button type="submit">Войти</button>
                <p>
                    У вас уже есть аккаунт? - <a href="/">авторизируйтесь!</a>
                </p>
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </div>
    </div>

</body>

</html>