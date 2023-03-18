
<?php
session_start();
require_once 'connect.php';

$file = $_File['file'];
$discription = $_POST['discription'];
$title = $_POST['title'];
$title2 = $_POST['title2'];
$price = $_POST['price'];
$path = '../uploads/' . time() . $_FILES['file']['name'];
if (move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/' . $path)) {
	move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/' . $path);
	mysqli_query($connect, "INSERT INTO `services` (`id`, `img`, `discription`, `title`,`title2`, `price`)
VALUES (NULL, '$path', '$discription', '$title','$title2', '$price')");
} else {
	$_SESSION['error'] = 'Ошибка с загрузкой изображения';
}
move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $path);
// print_r($title2);
header('Location:../adminka.php');
?>
