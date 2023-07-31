<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>

<body>
    <form class="form" action="success_registr.php" method="post">
        <h2>РЕГИСТРАЦИЯ</h2>
        <p for="">Ф.И.О</p>
        <input type="text" name="fullName" placeholder="Введите ваше полное имя">
        <p for="">Логин</p>
        <input type="text" name="login" placeholder="Введите свой логин">
        <p for="">Почта</p>
        <input type="email" name="email" placeholder="Введите почту">
        <p for="">Пароль</p>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="passwordConfirm" placeholder="Подтвердите пароль">
        <p><input type="submit" name="submit" value="Зарегистрироваться">
        <p>
            <?php
            if (isset($_SESSION['data_err'])) {
                echo $_SESSION['data_err'];
                unset($_SESSION['data_err']);
            }
            ?>
        </p>
    </form>

</body>

</html>