<?php
session_start();
if (isset($_GET['theme'])) {
    $_SESSION['theme'] = $_GET['theme'];
}
$theme = 'light-theme.css';
if (isset($_SESSION['theme']) && $_SESSION['theme'] == 'dark') {
    $theme = 'dark-theme.css';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ==================Условие смены темы =================================-->
    <? if ($theme == 'light-theme.css'): ?>
        <? echo '<link rel="stylesheet" href="styles/light-theme.css">'; ?>
    <? else: ?>
        <? echo '<link rel="stylesheet" href="styles/dark-theme.css">'; ?>
    <? endif; ?>
    <!-- ====================================================================== -->
    <title>Document</title>
</head>

<body>



    <h1>Привет!</h1>
    <h3>Вы можете посетить любую из этих страниц!</h3>

    <a href="my_card.php">Главная</a> <br>
    <a href="fact.php">Факт</a> <br>
    <a href="bitrix.php">Битрикс</a> <br>
    <?php
    // Если сессия last_page существует то делаем проверки открытых страниц
    if (isset($_SESSION['last_page'])) {
        if ($_SESSION['last_page'] == 'http://mycadr/fact.php') {
            echo "Последняя посещенная страница была fact";

        } elseif ($_SESSION['last_page'] == 'http://mycadr/bitrix.php') {
            echo "Последняя посещенная страница была bitrix";
        } elseif ($_SESSION['last_page'] == 'http://mycadr/my_card.php') {
            echo "Последняя раз вы посещали главную страницу сайта";
        }
    }
    ?>
    <br>
    <br>
    <p>Форма выбора темы</p>
    <form action="" method="GET">
        <select name="theme" id="color">
            <option value="dark">Dark</option>
            <option value="light">Light</option>
        </select>
        <input type="submit" value="Выбрать тему">
    </form>
    <pre>
        <? print_r($_GET) ?>
    </pre>
    <h3><a href="index.php">Покинуть сайт!!!</a></h3>
</body>

</html>