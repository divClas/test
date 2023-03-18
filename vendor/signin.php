<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = ($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "role" => $user['role'],
        "login" => $user['login']

    ];
    header('Location: ../add.php');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../profile.php');
}
// if ($login == 'admin' && $password == 1122) {
//     session_start();
//     $_SESSION['admin'] = true;
//     $script = '../adminka.php';
// } else
//     $script = '../profile.php';
// header("Location: $script");
