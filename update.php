<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>UltraBrand</title>
</head>

<?php
session_start();
require_once 'vendor/connect.php';
include 'header.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `services` WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <h3>Обновление Товара</h3>
    <form class="adminksssa" action="vendor/update__script.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name='id' value="<?= $product['id'] ?> ">
        <input type="file" name="file" value="<?= $product['path'] ?>" placeholder="Выберите аватар">
        <textarea name="discription"><?= $product['discription'] ?></textarea>
        <input type="text" name="title" value="<?= $product['title'] ?>" placeholder=" title">
        <input type="text" name="title2" value="<?= $product['title2'] ?>" placeholder=" title2">
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <button type="submit">Обновить товар</button>
    </form>
</body>



</html>