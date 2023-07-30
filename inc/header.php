<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/StylesTest/stylesSun.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Моя страница</title>
</head>
<?php
require "custom_function.php";
$currentHour = date("H");
hour($currentHour);
?>
    <header>
        <section class="headerlogo">
            <div><img width="100"  src="images/Mandala.png" alt="Логотип"></div>
            <div class="location"><a class="tabl" href="authorization.php"><h6>Авторизация</h6></a></div>
            <div class="location"><a class="tabl" href="index.php"><h6>Главная</h6></a></div>
            <div class="location"><a class="tabl" href="VerificationTask.php"><h6>Таблица</h6></a></div>
            <div class="location1"><a class="tabl" href="training.php"><h6>Циклы</h6></a></div>
            <div class="location1"><a class="tabl" href="array.php"><h6>Массивы</h6></a></div>
            <div class="location1"><a class="tabl" href="string.php"><h6>Строки</h6></a></div>
            <div class="location1"><a class="tabl" href="function.php"><h6>Функции</h6></a></div>
            <div class="location1"><a class="tabl" href="bitrix.php"><h6>Bitrix</h6></a></div>
            <div class="location1"><a class="tabl" href="fact.php"><h6>Fact</h6></a></div>
            <div class="location1"><a class="tabl" href="GET_POST.php"><h6>GET/POST</h6></a></div>
            <div class="location1"><a class="tabl" href="Working_with_files.php"><h6>Working with files</h6></a></div>
            <div class="location1"><a class="tabl" href="OOPstring.php"><h6>OOP</h6></a></div>
        </section>
    </header>
