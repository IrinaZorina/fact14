<?php
require_once 'inc/header.php';
include 'stringD.php';
$strings = new Strings();
$strings -> haystack = 'Привет меня зовут Валентин';
$strings -> needle = 'Валентин';
$conclusion = $strings -> search($strings -> haystack,$strings -> needle);
if ($conclusion !== false) {
    echo "Подстрока найдена в позиции: " . $conclusion;
} else {
    echo "Подстрока не найдена.";
}

echo '<br>';

$longString = $strings -> long($strings -> haystack);
if(isset($longString)){
    echo "Длинна строки = $longString";
}

echo '<br>';

$copyString = $strings -> copy($strings->haystack);
if(isset($copyString)){
    echo $copyString;
}

echo '<br>';

$strings -> replacement($strings->haystack);

echo '<br>';
$strings -> delete($strings->haystack);


include 'dzoop/DzPotomok.php';
include 'dzoop/Belka.php';
include 'dzoop/Jaguar.php';
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
require_once 'inc/footer.php';
?>