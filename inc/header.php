<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/StylesTest/stylesSun.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
$currentHour = date("H");
if ($currentHour >= 8 && $currentHour < 20) {
    echo '<link rel="stylesheet" href="/StylesTest/stylesSun.css"';
} else
    echo '<link rel="stylesheet" href="/StylesTest/stylesNight.css">';
?>
    <title></title>
</head>

<body>
    <header>
        <section class="headerlogo">
            <img width="35px"  src="images/Mandala.jpg" alt="Логотип">
            <div class="location"><a class="tabl" href="index.php">Главная</a></div>
            <div class="location"><a class="tabl" href="VerificationTask.php">Таблица</a></div>
            <div class="location1"><a class="tabl" href="training.php">Циклы</a></div>
        </section>

    </header>
