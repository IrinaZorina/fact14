<?php require_once "inc/header.php"; ?>

<?php
$_SESSION['login']='martin';

print_r($_SESSION['login']);

 ?>

<p class="zad">очистить сессию (тема установиться по времени):</p>
<form method="post">
    <select name="ochistka">
        <option value="100">очистка</option>
    </select>
    <input type="submit" value="очистить">
</form>

<?php
print_r($_SESSION);
if($_POST['ochistka']==100){
    session_unset();
    echo "<br>";
    print_r($_SESSION);
}

require_once "inc/footer.php"; ?>


