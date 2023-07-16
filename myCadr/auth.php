<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  require "../customFunc/changeTheme.php";
  changeTheme();
  ?>
  <title>Авторизация</title>
</head>

<body>
  <form class="form" action="" method="post">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label for="">Пароль</label>
    <input type="text" name="password" placeholder="Введите свой пароль">
    <input type="submit" name="submit" value="Войти"><a href="sing_up.php"></a></input>
    <p>
      У вас нет аккаунта? - <a href="#">Зарегистрируйтесь</a>
    </p>
    <?php

    $login = 'kir';
    $password = isset($_POST['password']) ? $_POST['password'] : 0;
    $_SESSION['login'] = $login;
    $password = 'qwerty';
    $md5Password = md5($password);
    $submit = isset($_POST['submit']) ? $_POST['submit'] : 0;
    $_SESSION['password'] = $password;
    echo "<br>";
    if (!($password == $md5Password && $login)) {
      echo "Неверный логин или пароль!";
    } else {
      $_SESSION['login']=$login;
    }
    header("Location: /sing_up.php");
    ?>
  </form>
</body>

</html>