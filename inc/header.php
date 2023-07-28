<?php require_once 'globalFunc.php'; ?>
<?php
if (isset($_GET['color'])) {
    setcookie('color', $_GET['color'], time() + 3600 * 24 * 7);
}
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $value) {
        if ($value == 'green') {
            echo "<link rel='stylesheet' href='styles/footerGreen.css'>";
        } elseif ($value == 'yellow') {
            echo "<link rel='stylesheet' href='styles/footerYellow.css'>";
        } elseif ($value == 'blue') {
            echo "<link rel='stylesheet' href='styles/footerBlue.css'>";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <?php
    $date = date("H");
    theme($date);
    ?>
    <title>Academy</title>
</head>

<body>
    <header>
        <div class="navigation">
            <div>
                <a href="index.php">
                    <div class="wow logo"></div>
                </a>
            </div>
            <nav class="wow nav flex-2">
                <a href="tables.php" class="item">Таблица</a>
                <a href="forms.php" class="item">HTML-формы</a>
                <a href="loops.php" class="item">Циклы</a>
                <a href="arrays.php" class="item">Массивы</a>
                <a href="strings.php" class="item">Строки</a>
                <a href="function.php" class="item">Функции</a>
            </nav>
            <?php
            if (isset($_COOKIE['user']) == '') :
            ?>
                <div class="wow nav">
                    <a href="login.php" class="item">Войти</a>
                </div>
            <?php else : ?>
                <div class="wow nav">
                    <a href="validation/exit.php" class="item">Выйти</a>
                </div>
            <?php endif; ?>
        </div>
    </header>