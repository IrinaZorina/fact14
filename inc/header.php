<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <?php
    $time = date("H");
    $night = "19";
    $day = "07";
    if ($time > $day and $time <= $night) {
        echo '<link rel="stylesheet" href="styles/styles_day.css">';
    } else {
        echo '<link rel="stylesheet" href="styles/styles_night.css">';
    }
    ?>
    <title>Academy</title>
</head>

<body>
    <header>
        <div class="navigation">
            <a href="index.php">
                <div class="wow logo"></div>
            </a>
            <nav class="wow nav">
                <a href="tables.php" class="item">Таблица</a>
                <a href="forms.php" class="item">HTML-формы</a>
                <a href="loops.php" class="item">Циклы</a>
                <a href="arrays.php" class="item">Массивы</a>
            </nav>
        </div>
    </header>