<?php

// require_once "../inc/connect.php";
require_once "../inc/Authorization.php";

$auth = new Authorization(trim($_POST['login']), md5($_POST['password']));
$auth->mysql();

// $login = trim($_POST['login']);
// $password = md5($_POST['password']);

// $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
// $user = $result->fetch_assoc();

// if (is_countable($user) == 0) {
//     echo 'Такой пользователь не найден';
//     exit();
// }

// setcookie('user', $user['name'], time() + 3600, "/");

// $mysql->close();
// header('Location: /');
