<?php require_once "inc/header.php";
print_r($_POST);
if(!empty($_POST) && !array_key_exists('2',$_POST)){
    $_SESSION['task_1']=$_POST['task_1'];
}
?>


    <p>2+5=</p><br>
    <form action="task3.php" method="post">
        <select name="task_2">
            <option value="0">2</option>
            <option value="0">3</option>
            <option value="0">4</option>
            <option value="1">7</option>
        </select>
        <input type="submit">
    </form>

<?php print_r($_SESSION)?>
<?php require_once "inc/footer.php" ?>