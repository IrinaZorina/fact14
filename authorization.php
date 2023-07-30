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

include 'testAutorizationK.php'; // Подключаем файл с классом Registration
$auth = new Authorization(); // Создаем экземпляр класса Authorization

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, была ли отправлена форма
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Получаем логин и пароль из формы
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Пытаемся авторизовать пользователя
        $user = $auth->authorizeUser($username, $password);

        if ($user) {
            // Авторизация успешна, выводим приветствие
            echo "Успешная авторизация. Добро пожаловать, " . $user . "!";
        } else {
            // Неверный логин или пароль, выводим сообщение об ошибке
            echo "Неверное имя пользователя или пароль.";
        }
    }
}
            ?>
        </form>
    </section>
    <br>
</header>
<?php require_once 'inc/footer.php' ?>