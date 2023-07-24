<?php require_once 'inc/header.php' ?>
<?php
echo "Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.";
echo '<br>';
echo '<br>';
echo $filename = 'hello.txt';
echo '<br>';
echo $text = "Hello, world! I'm Name";
echo '<br>';

$file = fopen($filename, 'w');
if ($file) {
    fwrite($file, $text);
    echo "Файл успешно создан и текст записан в него.";
} else {
    echo "Ошибка создания файла.";
}
echo '<br>';
echo '<br>';
echo "Создайте папку 'test'.";
echo '<br>';
echo '<br>';
if(!is_dir('test')){
    mkdir('test');
}
echo '<br>';
echo '<br>';
echo "Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.";
echo '<br>';
$filename = 'hello.txt';
$text = "Камнев Валентин, всем привет";

$file = fopen($filename, 'w');
if ($file) {
    fwrite($file, $text);
$textcurrect = substr($text,0,29);
    echo "$textcurrect";
}
?>
<?php require_once 'inc/footer.php' ?>