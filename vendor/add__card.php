<?php
session_start();
require_once 'connect.php';
$user_id = $_SESSION['user']['id'];
$services_id = $_GET['services_id'];
$status = 'заявка создана';
mysqli_query($connect, "INSERT INTO `card`(`id`, `user_id`, `services_id`, `status`) 
VALUES (NULL,'$user_id','$services_id','$status')");
header('Location:../profile.php');
