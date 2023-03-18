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
	<link rel="stylesheet" href="style/main.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" href="images/logo.png">
	<link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

	<title>UltraBrand</title>
</head>


<?php

include 'header.php';

?>

<!DOCTYPE html>
<html>




<body>

	</form>
	<div class="profile">
		<div class="profile-inner">
			<form class="profile-quest">
				<img src="<?= $_SESSION['user']['avatar'] ?>" width="300">
				<h2><?= $_SESSION['user']['full_name'] ?></h2>
				<h2><?= $_SESSION['user']['login'] ?></h2>
				<a href="#"><?= $_SESSION['user']['email'] ?></a>
				<a href="vendor/logout.php" class="logout">Выход</a>
			</form>
			<div class="table__admin">
				<table>
					<tr>
						<th>Фио</th>
						<th>наименование услуги</th>
						<th>статус</th>

					</tr>
					<?php
					require_once 'vendor/connect.php';
					$card = mysqli_query($connect, "SELECT * FROM `card`");
					$card = mysqli_fetch_all($card);
					foreach ($card as $car) {
						$title = mysqli_query($connect, "SELECT * FROM `services` WHERE `id`='$car[2]'");
						$title = mysqli_fetch_assoc($title)['title'];
						$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$car[1]'");
						$full_name = mysqli_fetch_assoc($user)['full_name'];
					?>
						<tr>
							<td><?= $full_name ?></td>
							<td><?= $title ?> </td>
							<td><?= $car[3] ?> </td>
							<td><a href="vendor/acept_card.php?id=<?= $car[0] ?>">Потвердить</a> </td>
						</tr>
					<?
					}
					?>
				</table>
			</div>

			<div class="table__admin">
				<table>
					<tr>
						<th>ID</th>
						<th>IMG</th>
						<th>discription</th>
						<th>title</th>
						<th>Термин</th>
						<th>price</th>
					</tr>
					<?php
					$services = mysqli_query($connect,  "SELECT * FROM `services`");
					$services = mysqli_fetch_all($services);
					foreach ($services as $service) {
					?>
						<tr>
							<td><?= $service[0] ?></td>
							<td><img src="<?= $service[1] ?>" alt="" width="200px"> </td>
							<td><?= $service[2] ?></td>
							<td><?= $service[3] ?></td>
							<td><?= $service[4] ?></td>
							<td><?= $service[5] ?>$</td>
								<td><a href="/update.php?id=<?= $service[0] ?>">UPDATE</a></td>
								<td><a href="/vendor/delete.php?id=<?= $service[0] ?>">DELETE</a></td>
						</tr>
					<?
					}
					?>
				</table>
			</div>
			<div class="adminka">

				<form class="adminka__inner" action="vendor/create.php" method="post" enctype="multipart/form-data">
					<h3>Добавление Товара</h3>
					<label>Выберите фото нового товара </label>
					<input type="file" name="file" placeholder="Выберите аватар">
					<label>Укажите описание нового товара </label>
					<textarea name="discription" id="" cols="30" rows="10"></textarea>
					<label>Укажите титульник нового товара </label>
					<input type="text" name="title" placeholder="title">
					<label>Укажите термин нового товара </label>
					<input type="text" name="title2" placeholder="title2">
					<label>Укажите цену нового товара </label>
					<input type="number" name="price" placeholder="price">
					<button type="submit">Добавить новый товар</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js%22%3E"></script>
</body>

</html>
</main>
</body>

</html>