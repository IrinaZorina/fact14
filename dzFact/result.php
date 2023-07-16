<?php require_once "inc/header.php" ?>
<?php
$a=0;
print_r($_SESSION);
for($i=0;$i!=3;$i++){
    $a+=$_SESSION[$i];
}
echo "Ваш результат: " . $a;
?>
<?php require_once "inc/footer.php" ?>