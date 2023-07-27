<?php require_once 'inc/header.php' ?>
<title></title>
<header class="headerReg">
    <section class="registration">
        <form action="registration.php" method="post">
            <label for="username">Login:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <br>
            <button type="submit">Зарегистрироваться</button>
            <?php
            
            //Проверяем входящие данные
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                //Подключаемся к БД
                $hostname = 'localhost';
                $username = 'Valentin';
                $password = '123';
                $bdname = 'Registration';
                $connect = mysqli_connect($hostname, $username, $password);
                mysqli_select_db($connect, $bdname);
                //Проверка
                $query = "SELECT * FROM Users WHERE name = '$username' OR password = '$password'";
            $result = mysqli_query($connect, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                // Сравниваем
                if ($username == $user['name'] || $password == $user['password']) {
                    // Неверный пароль
                    echo "Логин уже существует.";
                }
            }
            else{
                //Заносим данные в БД
                $arr = mysqli_query($connect, "INSERT INTO Users (name,password,email) VALUE ('$username','$password','$email')");
                registr();
            }
            }
            ?>
    </section>
</header>
<?php require_once 'inc/footer.php' ?>