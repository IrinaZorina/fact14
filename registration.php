<?php require_once 'inc/header.php'?>
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
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    registr();
}
    ?>
    </section>
    </header>
    <?php require_once 'inc/footer.php' ?>