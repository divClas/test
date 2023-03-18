<?php
session_start();
require_once 'connect.php';
$id = $_POST['id'];
$file = $_FILES['file'];
$discription = $_POST['discription'];
$title = $_POST['title'];
$title = $_POST['title'];
$title2 = $_POST['title2'];
$price = $_POST['price'];

if ($file['size'] != '0') {
    $path = '../uploads/' . time() . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/' . $path)) {
        move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/' . $path);
        mysqli_query($connect, "UPDATE `services` SET `img`='$path',`discription`='$discription',`title`='$title',`title2`='$title2',`price`='$price' 
    WHERE `id`='$id'");
    } else {
        $_SESSION['error'] = 'Ошибка с загрузкой изображения';
    }
} else {

    mysqli_query($connect, "UPDATE `services` SET `discription`='$discription',`title`='$title',`title2`='$title2',`price`='$price' 
    WHERE `id`='$id'");
}

header('Location:../adminka.php');
