<?php require_once "inc/header.php" ?>


<p>2+2=</p><br>
<form action="task2.php" method="post">
    <select name="task_1">
        <option value="0">2</option>
        <option value="0">3</option>
        <option value="1">4</option>
        <option value="0">5</option>
    </select>
    <input type="submit">
</form>


<?php print_r($_SESSION)?>
<?php require_once "inc/footer.php" ?>
