<!-- <?php

        if (isset($_POST['login'])) {
            $login = $_POST['login'];
            $password = md5($_POST['password']);
            echo $login . '<br>' . $password;
        }

        ?> -->
<?php require_once 'inc/header.php'; ?>
<main class="some-text">
    <div class="login-form">
        <div>
            <form action="etc/greeting.html" method="post">
                <input type="text" name="login" placeholder="Логин"><br>
                <input type="text" name="password" placeholder="Пароль"><br>
                <button type="submit">Войти</button>
            </form>
        </div>
        <div>
            <form action="login.php" method="post">
                <input type="text" name="login" placeholder="Логин"><br>
                <input type="text" name="password" placeholder="Пароль"><br>
                <input type="text" name="repeat_password" placeholder="Повторите пароль "><br>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</main>
<?php require_once 'inc/footer.php'; ?>