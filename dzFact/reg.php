<?php require_once "inc/header.php";
require_once "class/authorization_class.php";
$authoriz=new authorization_class();
$authoriz->connectDB('localhost','root','','client');//подключаем БД
?>

    <form method="post">
        <input type="text" name="login" required>логин<br>
        <input type="password" name="password" required>пароль<br>
        <input type="password" name="repeat" required>повторите пароль<br>
        <input type="submit">
    </form>

<?php
$authoriz->regControl();//проверяем условия регистрации. Если все хорошо,то данные записываются в БД и переходим на страницу приветствия
print_r($_POST);
print_r($_SESSION)
?>

<?php require_once "inc/footer.php"?>