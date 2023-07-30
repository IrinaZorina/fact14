<?php
include 'DzPotomok.php';
include 'Belka.php';
include 'Jaguar.php';


//Экземпляры
$Jaguar = new Jaguar('Ягуар','Короткий ворс','рыжий с пятнами');
echo '<pre>';
var_dump($Jaguar);
$Jaguar -> Voice();
$Jaguar -> Movement();
$Jaguar -> Live();
echo '</pre>';
$belca = new Belka('Белка','Короткий ворс','Рыжий');
echo '<pre>';
var_dump($belca);
$belca -> Tail();
$belca -> Movement();
$belca -> VoiceB();
echo '</pre>';
$turtle = new Turtle('Черепаха','Falce','Зеленый','Панцырь');
echo '<pre>';
var_dump($turtle);
$turtle -> MovementT();
echo '</pre>';
?>