<?php
session_start();
require_once "authregistr/database.php";
// Подключаем класс авторизации
require_once "auth.php";
// Заришем переменные в массив POST
// $login = isset($_POST['login']) ? $_POST['login'] : 0;
// $password = isset($_POST['password']) ? $_POST['password'] : 0;
// ====================ООП=====================
// Создадим объекты логина и пароля
$authLogin=new Auth();
$authPassword=new Auth();
$login=$authLogin->get_login();
$password=$authPassword->get_password();

 $password = md5($password);

// Проверка заполнения данных (Переменные обязательно в кавычках!!!!)
$selectData = "SELECT * FROM Registr WHERE login = '$login' AND password = '$password'";
$checkUser = mysqli_query($connect, $selectData);
/* Считаем количество пользователей в базе данных и ищем совпадения
   Так же проверим заполнение полей авторизации
*/
if (mysqli_num_rows($checkUser) > 0) {
    // Чтобы вытащить данные из БД нам нужно получить массив этих данных
    $user = mysqli_fetch_assoc($checkUser);
    // Теперь запускаем сессию чттобы авторизоваться и прописываем все поля из нашей таблицы!!!
    $_SESSION['user'] = [
        'id'->$user[$id],
        'login'->$user[$login],
        'password'->$user[$password],
        'email'->$user[$email]
    ];
    header("Location: my_card.php");
} else {
    $_SESSION['data_err'] = "Не верный логин или пароль";
    header("Location: index.php");
}

echo "<br>";
?>