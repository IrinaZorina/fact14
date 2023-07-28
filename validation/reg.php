<?php

// оставил как есть, без внедрения класса

require_once "../inc/connect.php";

$login = trim($_POST['login']);
$name = trim($_POST['name']);
$password = md5($_POST['password']);

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user = $result->fetch_assoc();

if (is_countable($user) != 0) {
    echo 'Такой пользователь уже существует';
    exit();
}

$mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES ('$login', '$name', '$password')");

$mysql->close();
header('Location: /');
