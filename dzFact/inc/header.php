<?php

//тема!!!
require_once "inc/GlobalFunctions.php";
theme();

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

    <link rel="stylesheet" href="styles/style_index.css">

</head>
<body>
<header class="main_header">

		<nav>
			<div class="nav_conteiner">

				<img class="logo" src="img/logo.png" alt="logo">

				<ul class="nav_menu">
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/">Главная</a></li>
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/cycles.php">Циклы</a></li>
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/array.php">Массивы</a></li>
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/string.php">Строки</a></li>
                    <li class="menu"><a class="menu_text" href="http://dzfact/dzFact/function.php">Функции</a></li>
					<li class="menu"><a class="menu_text" href="http://dzfact/dzFact/method.php">Get-Post</a></li>
                    <li class="menu"><a class="menu_text" href="http://dzfact/dzFact/authorization.php">Авторизация</a></li>
				</ul>

			</div>


		</nav>

</header>
