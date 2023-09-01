<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
    include "customFunc/changeTheme.php";
    changeTheme();
    ?>
    <title>Functions</title>
</head>
<?php
include "header.php";
?>

<body>

    <p>ЗАДАЧА. Создать функцию, которая сравнивает два числа и возвращает наибольшее.
        <?php
        echo "<br>";
        function getGreatNum($a, $b)
        {
            if ($a > $b)
                return $a;
            else {
                return $b;
            }
        }
        $greatNum = getGreatNum(15, 10);
        echo "ОТВЕТ: Наиболешее число = " . $greatNum;
        ?>
    <p>ЗАДАЧА. Создать функцию, которая принимает длину двух катетов
        и возвращает значение гипотенузы прямоугольного треугольника.
        <?php
        echo "<br>";
        function getHipotinuse($a, $b)
        {
            $hip = sqrt((($a * $a) + ($b * $b)));
            return $hip;
        }
        $hipotenuse = getHipotinuse(4, 4);
        echo $hipotenuse;
        ?>
    <p>ЗАДАЧА. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет
        увеличивать число в 10 раз и выводить его на экран.
        Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
        <?php
        echo "<br>";
        function printLimit($param)
        {
            for ($i = 0; $i < PHP_INT_MAX; $i++) {
                $param *= 10;
                if ($param > 1000000) {
                    echo "Достигнут предел";
                    break;
                }
            }
        }
        printLimit(10);
        ?>
    <p>ЗАДАЧА. Создать функцию, в которой объявляется массив и случайными элементами.
        <?php
        echo "<br>";
        function getRandArray()
        {
            $n = 10;
            for ($i = 0; $i < $n; $i++) {
                $arr[$i] = mt_rand(-10, 10);
            }
            return $arr;
        }
        $arr = getRandArray();
        ?>
    <p>ЗАДАЧА. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.

        <?php
        echo "<br>";
        function getAverage($arr)
        {
            $arr = array();
            $avearage = 0;
            $sum = 0;
            $arrLenght = 10;
            for ($i = 0; $i < $arrLenght; $i++) {
                $arr[$i] = mt_rand(1, 10);
                $sum += $arr[$i];
            }
            $avearage = $sum / $arrLenght;
            return $avearage;
        }
        $arrRand = mt_rand(1, 10);
        $num = getAverage($arrRand);
        echo $num;
        ?>
    <p>ЗАДАЧА. Создать функцию, которая принимает строку. Вернуть количество слов в строке.
        <?php
        echo "<br>";
        function getWords($str)
        {
            $count = 0;
            $arr = explode(" ", $str);
            for ($i = 0; $i < count($arr); $i++) {
                $count++;
            }
            return $count;
        }
        $words = getWords("Создать функцию, в которой объявляется массив и случайными элементами.");
        echo "ОТВЕТ: Количество слов в строке = " . $words;
        ?>
    <p>ЗАДАЧА. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
        <?php
        $str = "html, css, php, bitrix";
        echo "<br>";
        function wordsCount($str)
        {
            $count = 0;
            $arr = explode(" ", $str);
            for ($i = 0; $i < count($arr); $i++) {
                $count++;
            }
            return $count;
        }
        $count = wordsCount($str);
        echo "ОТВЕТ: Количество слов в строке = " . $count;
        ?>
    <p>ЗАДАЧА. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
        <?php
        echo "<br>";
        $str = "HTML, CSS, PHP, BITRIX";
        function reverseStr($str)
        {
            $word = 0;
            $arr = explode(",", $str);
            for ($i = count($arr) - 1; $i >= 0; $i--) {
                $word = $arr[$i] . " ";
                echo $word;
            }
        }
        echo "ОТВЕТ: Перевернутая строка: ";
        reverseStr($str);
        ?>
    <p>ЗАДАЧА. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
        <?php
        echo "<br>";
        $str = "HTML, CSS, PHP, BITRIX";
        function countStrLen($str)
        {
            $count = 0;
            $arr = str_split($str);
            for ($i = 0; $i < count($arr); $i++) {
                $count++;
            }
            return $count;
        }
        $strLenght = countStrLen($str);
        echo "ОТВЕТ: Длина строки = " . $strLenght;
        ?>
    <p>ЗАДАЧА. Дана строка «HTML, CSS, PHP, BITRIX».
        Написать функцию, которая выводит каждую букву на новую строку
        <?php
        echo "<br>";
        function printChars($str)
        {
            $char = "";
            $arr = str_split($str);
            for ($i = 0; $i < count($arr); $i++) {
                $char = $arr[$i];
                echo $char . "<br>";
            }
        }
        echo "Печатаем каждый символ с новой строки: <br>";
        printChars($str);
        ?>
        
        <?php
        echo "<br>";
        function countDay($strDate){
        // $str = "10-02-2015";
        $oldDate = strtotime($strDate);
        $currentDate = time();
        $diff = $currentDate - $oldDate;
        // echo "Количество миллисекунд между датами =  " . $diff . "<br>";
        echo "ОТВЕТ: количество дней между датами = " . floor($diff / (60 * 60 * 24));
        }
        ?>
        <?php
        include "footer.php";
        ?>
</body>

</html>