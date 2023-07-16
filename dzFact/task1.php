<?php require_once "inc/header.php" ?>


<p>2+2=</p><br>
<form method="post">
    <select name="1">
        <option value="0">2</option>
        <option value="0">3</option>
        <option value="1">4</option>
        <option value="0">5</option>
    </select>
    <input type="submit">
</form>


<?php
if(!empty($_POST)){
    $_SESSION=$_POST;
    print_r($_POST);
    header('location: task2.php');
    exit();
}
print_r($_SESSION)?>
<?php require_once "inc/footer.php" ?>
