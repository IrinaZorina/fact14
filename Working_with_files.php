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
    // echo "Файл успешно создан и текст записан в него.";
} else {
    // echo "Ошибка создания файла.";
}
// "Создайте папку 'test'.";

if(!is_dir('test')){
    mkdir('test');
}
// "Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.";
$filename = 'hello.txt';
$text = "Камнев Валентин, всем привет";

$file = fopen($filename, 'w');
if ($file) {
    fwrite($file, $text);
$textcurrect = substr($text,0,29);
    // echo "$textcurrect";
}

// "Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.";

$file1 = 'Привет. Меня зовут. Сергей';
file_put_contents('files/txt1.txt', $file1);
$file2 = 'Привет. Меня зовут. Андрей';
file_put_contents('files/txt2.txt', $file2);
$arr1 = explode('. ', $file1);
$arr2 = explode('. ', $file2);
$file3 = array_unique(array_merge($arr1, $arr2));
$file3 = implode('. ', $file3);
if (!is_dir('files')) {
    mkdir('files');
}
file_put_contents('files/txt3.txt', $file3);

// echo "Третий файл успешно создан";

// "Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.";

$file4 = array_intersect($arr1, $arr2);
file_put_contents('files/txt4.txt', implode('. ', $file4));
?>
<?php require_once 'inc/footer.php' ?>