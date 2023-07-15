<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php
            $date = new DateTime('NOW');
            $hour = $date->format('G');
            if ( ($hour > 8) && ($hour < 20) ) {
                echo '<link rel="stylesheet" href="../styles/stylesDay.css">';
            } 
            else {
                echo '<link rel="stylesheet" href="../styles/stylesNight.css">';
            }
        ?>
        <title>Профиль</title>
        <link rel="stylesheet" href="../styles/Styles.css">
    </head>
    <body>
    <header class="head-line">
        <nav>
            <ul>
                <li><a href="cycles.php">Cycles</a></li>
                <li><a href="#">Кнопка2</li>
                <li><a href="#">Кнопка3</li>
                <li><img class="image_logo" src="../images/icons8.png" align="right" alt="иконка-лого"><a href="mySite.php"></a></li>
            </ul>
        </nav>
    </header>