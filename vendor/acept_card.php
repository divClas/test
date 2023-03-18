<?php
session_start();
require_once 'connect.php';
$card_id = $_GET['id'];
$status = 'заявка создана';
mysqli_query($connect, "UPDATE `card` SET `status`='заявка потдверждена, ожидайте' WHERE `id`='$card_id'");
