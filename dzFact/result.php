<?php require_once "inc/header.php";
print_r($_POST);
if(!empty($_POST)){
    $_SESSION['task_3']=$_POST['task_3'];
}

?>
<?php
$a=0;
print_r($_SESSION);
for($i=1;$i!=4;$i++){
    $a+=$_SESSION["task_$i"];
}
echo "Ваш результат: " . $a;
?>
<?php require_once "inc/footer.php" ?>