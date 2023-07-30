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
            
            include 'testRegistrationK.php'; // Подключаем файл с классом Registration
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Проверяем, была ли отправлена форма
                if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
                    $registration = new Registration(); // Создаем экземпляр класса Registration
                    $registration->registration(); // Вызываем метод registration() для обработки регистрации
                }
            }
            ?>
    </section>
</header>
<?php require_once 'inc/footer.php' ?>