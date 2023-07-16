<?php
session_start();
$_SESSION=array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // require "../customFunc/changeTheme.php";
    // changeTheme();
    // ?>
    <title>registration</title>
</head>

<body>
    <form class="form" action="" method="post">
        <label for="">РЕГИСТРАЦИЯ</label> <br>
        <label for="">Ф.И.О</label>
        <input type="text" name="fullName" placeholder="Введите ваше полное имя">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label for="">Почта</label>
        <input type="email" name="email" placeholder="Введите почту">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="passwordConfirm" placeholder="Подтвердите пароль">
        <input type="submit" name="submit" value="Зарегистрироваться">
        <p>
            У вас уже есть аккаунт? - <a href="auth.php" target="_blank">Авторизация</a>
        </p>
        <?php
        // Заришем переменные в массив POST
        $password = isset($_POST['password']) ? $_POST['password'] : 0;
        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        $passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : 0;
        $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : 0;
        $login = isset($_POST['login']) ? $_POST['login'] : 0;
        $email = isset($_POST['email']) ? $_POST['email'] : 0;
        // Проверка заполнения данных
        if (!($fullName && $login && $email && $password)) {
            echo "Вы заполнили не все данные";
        }
        echo "<br>";
        if (!($password === $passwordConfirm)) {
            echo "Пароли не совпадают!";
        }
        // print_r($_POST);
        // session_unset();
        ?>
    </form>

</body>

</html>