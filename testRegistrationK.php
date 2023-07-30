<?php
class Registration {
    public function registration() {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Подключаемся к БД
            $hostname = 'localhost';
            $db_username = 'Valentin';
            $db_password = '123';
            $dbname = 'Registration';
            $connect = mysqli_connect($hostname, $db_username, $db_password);
            mysqli_select_db($connect, $dbname);

            // Проверка на существующего пользователя
            $query = "SELECT * FROM Users WHERE name = '$username'";
            $result = mysqli_query($connect, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                echo "Логин уже существует.";
            } else {
                // Хешируем пароль
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Заносим данные в БД
                $query = "INSERT INTO Users (name, password, email) VALUES ('$username', '$hashedPassword', '$email')";
                $insertResult = mysqli_query($connect, $query);

                if ($insertResult) {
                    header('Location: authorization.php');
                    exit();
                } else {
                    echo "Ошибка при регистрации.";
                }
            }
        }
    }
}