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
  <form class="form" action="index.php" method="post">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label for="">Пароль</label>
    <input type="text" name="password" placeholder="Введите свой пароль">
    <input type="submit" name="submit" value="Войти"><a href="index.php"></a></input>
    <p>
      У вас нет аккаунта? - <a href="#">Зарегистрируйтесь</a>
    </p>
  </form>
  <?php
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
  header("Location: /sing_up.php");
  ?>
</body>

</html>