<?php require_once "inc/header.php";
require_once "class/authorization_class.php";
$authoriz=new authorization_class();
$authoriz->connectDB('localhost','root','','client');
?>

<?php
$authoriz->exitControl();//проверка условий для выхода (очистка сессии)
?>

<?php
$authoriz->writeLogPas();
$authoriz->PersonControl();

print_r($_POST);
print_r($_SESSION)
?>



<?php require_once "inc/footer.php"?>





