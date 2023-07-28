<?php require_once 'inc/header.php'; ?>
<main class="some-text">
    <div class="login-form">
        <div>Авторизация</div>
        <div>Регистрация</div>
        <div>
            <form action="validation/auth.php" method="post">
                <input type="text" name="login" placeholder="Логин" class="input-text"><br>
                <input type="password" name="password" placeholder="Пароль" class="input-text"><br>
                <input type="submit" name="submit" value="Войти" class="input-text">
            </form>
        </div>
        <div>
            <form action="validation/reg.php" method="post">
                <input type="text" name="login" placeholder="Логин" class="input-text"><br>
                <input type="text" name="name" placeholder="Имя" class="input-text"><br>
                <input type="password" name="password" placeholder="Пароль" class="input-text"><br>
                <input type="submit" name="submit" value="Зарегистрироваться" class="input-text">
            </form>
        </div>
    </div>
</main>
<?php require_once 'inc/footer.php'; ?>