<?php
class Authorization {
    public function authorizeUser($username, $password) {
        // Подключаемся к БД
        $hostname = 'localhost';
        $db_username = 'Valentin';
        $db_password = '123';
        $dbname = 'Registration';
        $connect = mysqli_connect($hostname, $db_username, $db_password, $dbname);

        // Извлекаем данные пользователя из БД по его имени
        $query = "SELECT * FROM Users WHERE name = '$username'";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $hashedPassword = $user['password'];

            // Сравниваем хэшированные пароли
            if (password_verify($password, $hashedPassword)) {
                // Пароль верный, авторизация успешна
                return $user['name'];
            } else {
                // Неверный пароль
                return false;
            }
        } else {
            // Пользователь не найден
            return false;
        }
    }
}
?>