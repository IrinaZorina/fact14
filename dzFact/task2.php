<?php session_start() ?>
<?php require_once "inc/header.php" ?>


    <p>2+5=</p><br>
    <form action="task3.php" method="post">
        <select name="2">
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="1">7</option>
        </select>
        <input type="submit">
    </form>

<?php
if(!empty($_POST)){
    /*array_push($_SESSION,$_POST['2']);*/
}
print_r($_SESSION)
?>
<?php require_once "inc/footer.php" ?>