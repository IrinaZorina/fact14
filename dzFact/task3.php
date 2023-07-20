<?php require_once "inc/header.php";
print_r($_POST);
if(!empty($_POST)){
    $_SESSION['task_2']=$_POST['task_2'];
}
?>


    <p>7+9=</p><br>
    <form action="result.php" method="post">
        <select name="task_3">
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="1">16</option>
        </select>
        <input type="submit">
    </form>

<?php print_r($_SESSION)?>
<?php require_once "inc/footer.php" ?>