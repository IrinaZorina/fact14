<?php
session_start();
$login = 'kir';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : 0;
$_SESSION['login'] = $login;
$password = '123';
$md5Password = md5($password);
$submit = isset($_SESSION['submit']) ? $_SESSION['submit'] : 0;
$_SESSION['password'] = $password;
echo "<br>";
if (!($password == $md5Password && $login)) {
    echo "Неверный логин или пароль!";
} else {
    $_SESSION['login'] = $login;
}

unset($_SESSION['login']);
unset($_SESSION['password']);
?>