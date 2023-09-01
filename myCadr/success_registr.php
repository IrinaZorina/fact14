<?php
session_start();
require_once "authregistr/database.php";
// Заришем переменные в массив POST
$password = isset($_POST['password']) ? $_POST['password'] : 0;
$passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : 0;
$fullName = isset($_POST['fullName']) ? $_POST['fullName'] : 0;
$login = isset($_POST['login']) ? $_POST['login'] : 0;
$email = isset($_POST['email']) ? $_POST['email'] : 0;

// Проверка заполнения данных
if (empty($fullName) || empty($login) || empty($email) || empty($password) || $password !== $passwordConfirm) {
    $_SESSION['data_err'] = "Вы заполнили не все данные или пароли не совпадают";
    header("Location: registr.php");
}

echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <a href="index.php">Авторизуйтесь</a>
    </p>

</body>

</html>