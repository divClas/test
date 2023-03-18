<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style/main.css">
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
	<div class="signin">
		<div class="inner-signin">
			<p>Войдите в аккаунт</p>
			<form class="fsig" action="vendor/signin.php" method="post">
				<input class="login" type="text" name="login" placeholder="Введите свой логин">
				<input class="password" type="password" name="password" placeholder="Введите пароль">
				<button type="submit">Войти</button>
				<p>
					У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь!</a>
				</p>
				<?php
				if ($_SESSION['message']) {
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
				?>
		</div>
	</div>
</body>

</html>