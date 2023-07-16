<?php require_once "inc/header.php" ?>

<p class="zad">Вашему вниманию представлена Викторина, состоящая из 3 вопросов</p><br>
<form action="task1.php">
    <input type="submit" value="далее">
</form>

<?php
print_r($_SESSION);
require_once "inc/footer.php"?>