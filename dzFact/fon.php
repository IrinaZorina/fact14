<?php require_once "inc/header.php"; ?>

<p class="zad">Выберете тему</p><br>
    <form method="post">
        <select name="theme">
            <option value="day">дневная</option>
            <option value="night">ночная</option>
            <option value="time">по времени</option>
        </select>
        <input type="submit" value="выбрать">
    </form>
<?php

if(!empty($_POST)){
    $_SESSION=$_POST;
    header('location: index.php');
}
?>
<?php require_once "inc/footer.php"; ?>