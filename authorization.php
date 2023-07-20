<?php require_once 'inc/header.php' ?>
<title></title>
<header class="headerAutorization">
    <section class="autorization">
        <form method="post" action="authorization.php">
            <label for="username">Имя пользователя:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <br>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <br>
            <input type="submit" value="Войти">
            <br>
            <br>
            <a href="registration.php" style="color: black;">Регистрация</a>
            <br>
            <br>
            <?php
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $registration = $_POST['password'];
            verification($username, $registration);
            }
            ?>
        </form>
    </section>
    <br>
</header>
<?php require_once 'inc/footer.php' ?>