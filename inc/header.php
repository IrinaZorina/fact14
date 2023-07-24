<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/StylesTest/stylesSun.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
require "custom_function.php";
$currentHour = date("H");
hour($currentHour);
?>
    <title></title>
</head>

<body>
    <header>
        <section class="headerlogo">
            <div><img width="35px"  src="images/Mandala.jpg" alt="Логотип"> <a href="authorization.php" style="color: black;">Авторизация</a></div>
            <div class="location"><a class="tabl" href="index.php">Главная</a></div>
            <div class="location"><a class="tabl" href="VerificationTask.php">Таблица</a></div>
            <div class="location1"><a class="tabl" href="training.php">Циклы</a></div>
            <div class="location1"><a class="tabl" href="array.php">Массивы</a></div>
            <div class="location1"><a class="tabl" href="string.php">Строки</a></div>
            <div class="location1"><a class="tabl" href="function.php">Функции</a></div>
            <div class="location1"><a class="tabl" href="bitrix.php">Bitrix</a></div>
            <div class="location1"><a class="tabl" href="fact.php">Fact</a></div>
            <div class="location1"><a class="tabl" href="GET_POST.php">GET/POST</a></div>
            <div class="location1"><a class="tabl" href="Working_with_files.php">Working with files</a></div>
        </section>

    </header>
