<?php
// ЗАДАЧА 1
session_start();
if ($login = isset($_POST['login']) ? [$_POST['login']] : 0) {
    $login = $_POST['login'];
}
$_SESSION['login'] = $login;
// print_r($_SESSION);
// ЗАДАЧА 2 
// $_SESSION['time'] = date('H-m-s');

// ЗАДАЧА 3
$oldTime = time();
//  Записываем время сессии в куки
setcookie('time', $oldTime);
// Находим новое время сессии
$newTime = time();
$_SESSION['time'] = $newTime;
// Промежуток-это разница между временем сессии и временем куки

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require "customFunc/changeTheme.php";
    changeTheme();
    ?>
    <title>cookie_session</title>
</head>

<body>
    <?php
    require "header.php";
    ?>
    <p>ЗАДАЧА 1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя
        пользователя, запишите его в сессию.
        При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".
    <form class="form" action="index.php" method="post">
        <p>Логин <input type="text" name="login"></p>
        <p><input type="submit"></p>
    </form>

    <p>ЗАДАЧА 2. Запишите в сессию время захода пользователя на сайт.
        При обновлении страницы выводите сохраненное время на экран.
        <?php
        if(isset($_SESSION['time'])){
        $_SESSION['time'] = date('H-m-s');
        $time = date('H-m-s');
        echo "ОТВЕТ: Последний раз пользователь заходил на сайт в " . $time;
        }
        ?>

    <p>ЗАДАЧА 3. Запишите в сессию время захода пользователя на сайт.
        При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
        <?php
        echo "<br>";
        // Промежуток-это разница между временем сессии и временем куки
        echo "ОТВЕТ: разница между временем сессий в секундах = " . $newTime - $_COOKIE['time'];
        ?>
        
        <?php
        require_once "footer.php";
        ?>
</body>

</html>