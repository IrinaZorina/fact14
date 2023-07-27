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
            // verification($username, $registration);
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                // Подключаемся к БД
                $hostname = 'localhost';
                $db_username = 'Valentin';
                $db_password = '123';
                $dbname = 'Registration';
                $connect = mysqli_connect($hostname, $db_username, $db_password, $dbname);
                // Извлекаем данные пользователя из БД по его имени
                $query = "SELECT * FROM Users WHERE name = '$username' OR password = '$password'";
                $result = mysqli_query($connect, $query);
                if ($result && mysqli_num_rows($result) > 0) {
                    $user = mysqli_fetch_assoc($result);
                    $hashedPassword = $user['password'];
                    // Сравниваем
                    if ($username == $user['name'] && $password == $user['password']) {
                        // Пароль верный, авторизация успешна
                        echo "Успешная авторизация. Добро пожаловать, " . $user['name'] . "!";
                    } else {
                        // Неверный пароль
                        echo "Неверное имя пользователя или пароль.";
                    }
                } else {
                    // Пользователь не найден
                    echo "Пользователь не найден.";
                }
            }
            }
            ?>
        </form>
    </section>
    <br>
</header>
<?php require_once 'inc/footer.php' ?>