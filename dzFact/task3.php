<?php session_start() ?>
<?php require_once "inc/header.php" ?>


    <p>7+9=</p><br>
    <form action="result.php" method="post">
        <select name="3">
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="1">16</option>
        </select>
        <input type="submit">
    </form>

<?php
if(!empty($_POST)){
    array_push($_SESSION,$_POST['3']);
}
print_r($_SESSION)?>
<?php require_once "inc/footer.php" ?>