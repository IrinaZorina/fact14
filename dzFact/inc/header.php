<?php
session_start();
require_once "inc/GlobalFunctions.php";
require_once "class/authorization_class.php";
theme();
$authoriz=new authorization_class();
$authoriz->connectDB('localhost','root','','client');
?>
<?php
$authoriz->exitControl();//проверка условий для выхода (очистка сессии)

$authoriz->writeLogPas();

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
					<li class="menu"><a class="menu_text" href="index.php">Главная</a></li>
					<!--<li class="menu"><a class="menu_text" href="cycles.php">Циклы</a></li>
					<li class="menu"><a class="menu_text" href="array.php">Массивы</a></li>
					<li class="menu"><a class="menu_text" href="string.php">Строки</a></li>
                    <li class="menu"><a class="menu_text" href="function.php">Функции</a></li>
					<li class="menu"><a class="menu_text" href="method.php">Get-Post</a></li>
                    <li class="menu"><a class="menu_text" href="authorization.php">Авторизация-задание</a></li>-->
                    <!--<li class="menu"><a class="menu_text" href="session.php">Session/Cookie</a></li>-->
                    <!--<li class="menu"><a class="menu_text" href="fact.php">Fact</a></li>
                    <li class="menu"><a class="menu_text" href="bitrix.php">Bitrix</a></li>-->
                    <li class="menu"><a class="menu_text" href="fon.php">Фон</a></li>
                   <!-- <li class="menu"><a class="menu_text" href="viktorina.php">Викторина</a></li>
                    <li class="menu"><a class="menu_text" href="files.php">Файлы</a></li>-->
					<li class="menu"><a class="menu_text" href="input.php">Авторизация</a></li>
                    <?php
						$authoriz->buttonExit();//появление кнопки выхода
                    ?>

				</ul>

			</div>


		</nav>

</header>
