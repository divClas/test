<?php
require_once 'connect.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `services` WHERE `id`='$id' ");
header('Location:../adminka.php');
