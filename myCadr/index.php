<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
    <h2>Авторизация</h2>
    <form class="form" action="success_auth.php" method="post">
        <p for="">Логин</p>
        <input type="text" name="login" placeholder="Введите свой логин">
        <p for="">Пароль</p>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <p>
            <input type="submit" name="submit" value="Войти"></input>
        </p>

        <p>
            <?php
            if (isset($_SESSION['data_err'])) {
                echo $_SESSION['data_err'];
                unset($_SESSION['data_err']);
            }
            ?>
        <p>
            У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a>
        </p>
    </form>
</body>

</html>