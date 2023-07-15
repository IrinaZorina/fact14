<?php
session_start();
$_SESSION['login'] = $_POST['login'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <?php

    function theme($time)
    {
        if ($time > 7 and $time <= 19) {
            echo "<link rel='stylesheet' href='../styles/styles_day.css'>";
        } else {
            echo '<link rel="stylesheet" href="../styles/styles_night.css">';
        }
    }

    $date = date("H");
    theme($date);

    ?>

    <title>Academy</title>
</head>

<body>
    <header>
        <div class="navigation">
            <div>
                <a href="../index.php">
                    <div class="wow logo"></div>
                </a>
            </div>
            <nav class="wow nav flex-2">
                <a href="../tables.php" class="item">Таблица</a>
                <a href="../forms.php" class="item">HTML-формы</a>
                <a href="../loops.php" class="item">Циклы</a>
                <a href="../arrays.php" class="item">Массивы</a>
                <a href="../strings.php" class="item">Строки</a>
                <a href="../function.php" class="item">Функции</a>
            </nav>
            <div class="wow nav">
                <a href="../login.php" class="item">Авторизация</a>
            </div>
        </div>
    </header>
    <main class="some-text">

        <?php

        if (isset($_POST['submit'])) {
            $login = trim($_POST['login']);
            if (!preg_match('&^[a-zA-Zа-яА-ЯёЁ]+$&u', $login)) {
                exit('Имя некорректно!');
            }
            $_POST['password'] = md5($_POST['password']);
            $password = $_POST['password'];
            echo 'Приветствуем Вас, ' . $login . '.<br><br>';
        }

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';

        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';

        ?>

        <div>
            Для Вас открылись страницы <a href="fact.php" class="item">Fact</a> и <a href="bitrix.php" class="item">Bitrix</a>.<br><br>
        </div>

        <?php

        if (isset($_SESSION['site'])) {
            echo $_SESSION['login'] . ', в последний раз Вы находились на странице: ' . $_SESSION['site'];
        } else {
            echo $_SESSION['login'] . ', зайдите на какую-нибудь страницу выше!';
        }

        ?>
    </main>
    <br><br><br>
    <footer>
        <div class="footer-right">
            <div></div>
            <div></div>
            <div></div>
            <div>
                <p class="some-text"><a href="https://www.behance.net/lovehelm" class="item">Nazarov</a></p>
            </div>
        </div>
    </footer>
</body>

</html>