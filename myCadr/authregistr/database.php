<?php
// Заришем переменные в массив POST
$password = isset($_POST['password']) ? $_POST['password'] : 0;
// $hashPassword = isset($_POST['hashPassword'])?$_POST['hashPassword']:0;
$passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : 0;
$fullName = isset($_POST['fullName']) ? $_POST['fullName'] : 0;
$login = isset($_POST['login']) ? $_POST['login'] : 0;
$email = isset($_POST['email']) ? $_POST['email'] : 0;
$hashPassword = md5($password);

// ======================Подключаемся к базе данных==================================
$host = "localhost";
$userName = "Kirill";
$password = "123";
$connect = mysqli_connect($host, $userName, $password);
if (!$connect) {
    echo "database connect error";
} else {
    echo "";
}
mysqli_set_charset($connect, 'utf8');
//=================== Создаем базу данных==================================
$create = "CREATE DATABASE IF NOT EXISTS mySite";
mysqli_query($connect, $create);

// ==========Выбираем нашу базу данных==============================
mysqli_select_db($connect, "mySite");
// =========Создаем таблицу==================================
$reg = "CREATE TABLE IF NOT EXISTS Registr(id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30),
password VARCHAR(60),
email VARCHAR(50))";
mysqli_query($connect, $reg);
// Добавление данных в базу из формы
if (isset($_POST['password']) && ($_POST['login']) && ($_POST['email'])) {
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $password = mysqli_real_escape_string($connect, md5($_POST['password']));
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    // Проверка заполнения данных
    if (!($fullName && $login && $email && $password)) {
        echo "Вы заполнили не все данные. Попробуйте еще раз";
    }
    echo "<br>";
    if ($password !== $passwordConfirm) {
        echo "Пароли не совпадают!";
    }
    $insert = "INSERT INTO Registr(login,password,email) VALUES('$login','$password','$email')";
    if (mysqli_query($connect, $insert)) {
        echo "Вы успешно зарегистрировались!!!";
    } else {
        echo "Ошибка: " . mysqli_error($connect);
    }
}
?>