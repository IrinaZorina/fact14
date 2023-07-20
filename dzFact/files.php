<?php require_once "inc/header.php";
print_r($_FILES);
print_r($_POST)
?>
1 задача

<?php

$str=fopen('hello.txt','rw+');
fwrite($str,$_POST['data']);

?>

<p class="zad">введите текст для записи в файл</p><br>
<form method="post">
    <input type="text" name="data">
    <input type="submit">
</form>
<br><p>содержание файла:</p><br>

2 задача (в php storm решение)

<?php
if(!file_exists('test')){
    mkdir('test');
}
?><br>

3 задача

<?php
echo "<br>";
$source=fopen('text/text.txt','rw');
$str=fread($source,filesize('text/text.txt'));
$arr_str=explode("\n",$str);
for($i=0;$i<2;$i++){
    echo $arr_str[$i] . "<br>";
}
?>

4 задача (пояснение в phpStorm в коментариях)
<!--два файла(first_text.txt и second_text.txt) находятся в директории text. Есть одно повторяющееся предложение
Программа переводит данные документов в строку, затем я разбил предложения на элементы массивов
Соединил эти элементы массивов в один
Удалил дубликат предложений
Записал получившийся массив без дубликатов предложений в строку и записал результат в файл third_text_nePovtor.txt
-->

<?php
$FirstTextSource=fopen('text/first_text.txt','rw');
$SecondTextSource=fopen('text/second_text.txt','rw');
$FirstText=fread($FirstTextSource,filesize('text/first_text.txt'));
$SecondText=fread($SecondTextSource,filesize('text/second_text.txt'));

$arrFirst=explode('. ', $FirstText);
//print_r($arrFirst);
$arrSecond=explode('. ',$SecondText);
//print_r($arrSecond);

$arrThird=array_merge($arrFirst,$arrSecond);
$arrThird=array_unique($arrThird);
print_r($arrThird);

$str=implode('. ',$arrThird);

file_put_contents('text/third_text_nePovtor.txt',$str)
?>

<br>5 задача<br>

<?php
$FirstTextSource=fopen('text/first_text.txt','rw');
$SecondTextSource=fopen('text/second_text.txt','rw');
$FirstText=fread($FirstTextSource,filesize('text/first_text.txt'));
$SecondText=fread($SecondTextSource,filesize('text/second_text.txt'));

$arrFirst=explode('. ', $FirstText);

$arrSecond=explode('. ',$SecondText);

$arrThird=array_merge($arrFirst,$arrSecond);
$nepovtor=array_unique($arrThird);
$povtor=array_diff_key($arrThird,$nepovtor);
print_r($povtor);
$str=implode('. ',$povtor);
file_put_contents('text/third_text_Povtor.txt',$str)
?>

<?php require_once "inc/footer.php"; ?>
