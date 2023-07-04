<?php require_once "inc/header.php" ?>

<?php
//1

echo "<p class='zad'>Задача 1</p>";

$str="hello";
$str2=str_split($str,3);

print_r($str2);

//2

echo "<p class='zad'>Задача 2</p>";

$str="hello";
$arr[]=mb_substr($str,0,2);
$arr[]=mb_substr($str,2);

print_r($arr);

//3

echo "<p class='zad'>Задача 3</p>";

$str="fact";

$char=strtoupper(mb_substr($str,0,1));
$char2=mb_substr($str,1);
echo "<span class='zad'>$char$char2</span>";

//4

echo "<p class='zad'>Задача 4</p>";

$str="Смирнов Матвей Станиславович";

$arr=explode(' ',$str);

echo "<span class='zad'>$arr[1] " . "$arr[0]</span><br>";

print_r($arr);

//5

echo "<p class='zad'>Задача 5</p>";

$str="Привет, мИр";
$str1="и";
$str2="И";

$a=substr_count($str,$str1);
$b=substr_count($str, $str2);
$c=$a+$b;
echo "<span class='zad'>$c</span>";

//6

echo "<p class='zad'>Задача 6</p>";

$str='html css php';

$arr=explode(' ', $str);

echo "<span class='zad'>$arr[0]</span><br>";
echo "<span class='zad'>$arr[1]</span><br>";
echo "<span class='zad'>$arr[2]</span><br>";

//7

echo "<p class='zad'>Задача 7</p>";

$str='hello.png';
$b='.png';

$a=mb_substr($str,-4,4);

if($a==$b){
    echo "<span class='zad'>заканчивается на .png</span><br>";
}

else{
    echo "<span class='zad'>не заканчивается на .png</span><br>";
}

//8

echo "<p class='zad'>Задача 8</p>";

$str='hello, world!';

$arr=str_split($str);

print_r($arr);

echo"<br><br>";

$a=count($arr);

if($a>5){
    $b=mb_substr($str,0,5);
    echo "<span class='zad'>$b</span>" . "<span class='zad'>...</span>";
}
elseif($a<=5){
    echo "<span class='zad'>$str</span><br>";
}

//9

echo "<p class='zad'>Задача 9</p>";

/*$str='Clearly, the key features of the project structure, initiated exclusively synthetically, have been subjected to a whole series of independent studies.';

$str2=str_replace('a', '1',$str);
$str3=str_replace('b', '2',$str2);
$str4=str_replace('c', '3',$str3);

echo $str4;*/

//10

echo "<p class='zad'>Задача 10</p>";

$str='abc abc abc';
$a=strrpos($str, 'b');
echo "<span class='zad'>отсчет начинается с 0: </span>" . "<span class='zad'>$a</span>";

//11

echo "<p class='zad'>Задача 11</p>";

$str='html css php';

$arr=explode(' ', $str);

print_r($arr);

//12

echo "<p class='zad'>Задача 12</p>";

$string1='23.10.1999';
$string2=date('d.m.Y');

$arr1=explode('.',$string1);
$arr2=explode('.',$string2);

$day=abs($arr1[0]-$arr2[0]);
$mes=abs($arr1[1]-$arr2[1]);
$year=abs($arr1[2]-$arr2[2]);

$otv=$year*365-$mes*30-$day;

echo "<span class='zad'>ответ $otv</span>";


?>

<?php require_once "inc/footer.php"?>
