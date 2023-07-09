<?php
/* Создать функцию, которая сравнивает два числа и возвращает наибольшее. */
function findMax($num1, $num2) {
    if ($num1 > $num2) {
    return $num1;
    } else {
    return $num2;
    }
}
$number1 = 10;
$number2 = 20;
$maxNumber = findMax($number1, $number2);
echo $maxNumber;
echo "<br>";
echo "<br>";


/* Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника. */
function hypotenusa($a, $b) {
    $hypotenusa = sqrt(($a * $a) + ($b * $b));
    return $hypotenusa;
    }
$catet1 = 3;
$catet2 = 4;
$hypotenusa = hypotenusa($catet1, $catet2);
echo $hypotenusa;
echo "<br>";
echo "<br>";


/* Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела. */
function increaseNumber($number) {
    while ($number <= 1000000) {
        $number *= 10;
        echo $number . "<br>";
    }
    echo "Вы достигли предела.";
    }
$number = 10;
increaseNumber($number);
echo "<br>";
echo "<br>";


/* Создать функцию php, в которой объявляется массив и наполняется случайными элементами. */
function createArray($length) {
    $arr = array();
    for ($i = 0; $i < $length; $i++) {
        $arr[] = rand(1, 100);
    }
    return $arr;
    }
$length = 10;
$arr = createArray($length);
print_r($arr);
echo "<br>";
echo "<br>";


/* Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива */
function calculateAverage($array) {
    $sum = array_sum($array);
    $count = count($array);
    $average = $sum / $count;
    return $average;
    }
$array = [1, 2, 3, 4, 5];
$average = calculateAverage($array);
echo "Среднеарифметическое значение массива: " . $average;
echo "<br>";
echo "<br>";

/* Создать функцию, которая принимает строку. Вернуть количество слов в строке. */
function countWords($string) {
    $string = trim($string);
    if (empty($string)) {
    return 0;
    } 
    $words = explode(" ", $string);
    return count($words);
}
$string = "Это пример строки. Это задание 6 на 16й странице презентации.";
$wordCount = countWords($string);
echo "Строка: $string <br>";
echo "Количество слов: " . $wordCount;
echo "<br>";
echo "<br>";

/* Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.  */
function fillArrayWithRandomNumbers($arraySize) {
    $randomNumbers = array();
    for ($i = 0; $i < $arraySize; $i++) {
        $randomNumbers[] = rand(0,100); /* либо оставляем пустыми () */
    }
    return $randomNumbers;
}
$arraySize = 10;
$randomArray = fillArrayWithRandomNumbers($arraySize);
print_r($randomArray);
echo "<br>";
echo "<br>";


/* Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке. */
$string = "HTML, CSS, PHP, BITRIX";
echo "Строка: $string <br>";
function countWords1($string) {
    $string = trim($string);
    if (empty($string)) {
    return 0;
    } 
    $words = explode(" ", $string);
    return count($words);
}
$wordCount = countWords1($string);
echo "Количество слов: " . $wordCount;
echo "<br>";
echo "<br>";


/* Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »). */
$string = "HTML, CSS, PHP, BITRIX";
echo "Строка: $string <br>";
function reverse($string) {
    $string = strrev($string);
    echo "Новая строка: $string <br>";
}
reverse($string);
echo "<br>";
echo "<br>";


/* Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки. */
$string = "HTML, CSS, PHP, BITRIX";
$strLenght = 0;
echo "Строка: $string <br>";
function stringLenght($string) {
    $strLenght = strlen($string);
    echo "Длина строки: $strLenght <br>";
}
stringLenght($string);
echo "<br>";
echo "<br>";


/* Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку */
$string = "HTML, CSS, PHP, BITRIX";
echo "Строка: $string <br>";
function printLetters($string) {
    $string = preg_replace('/[^a-zA-Z]/', '', $string);
    $length = strlen($string);
    for ($i = 0; $i < $length; $i++) {
        echo $string[$i] . "<br>";
    }
}
printLetters($string);
echo "<br>";
echo "<br>";

