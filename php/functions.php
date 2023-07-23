<?php require_once '../inc/header.php' ?>


<p><h4>1. Создать функцию, которая сравнивает два числа и возвращает наибольшее</p>
<?php
function compare($a, $b){
    if($a > $b){
        return $a;
    } elseif($a < $b){
        return $b;
    }
}
$a = 10;
$b = 30;
$max = compare($a, $b);
echo   $max ;
?>


<p><h4>2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника</p>
<?php
function treangle($a, $b){
    $c = $a**2 + $b**2;
    $result = sqrt($c);
    return $result;
}
echo  treangle(2, 4) ;
?>


<p><h4>3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать
    число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться 
    сообщение, что вы достигли предела.</p>
<?php
function predel($a){
    
    while($a <= 1000000){
        $a *= 10;
        echo $a;
        echo '<br>';
    }
    if ($a > 1000000){
        echo "предел";
    }
    
}
predel(10);
?>


<p><h4>4. Создать функцию, в которой объявляется массив и случайными элементами.</p>
<?php
function rnd_arr($a){
    $arr = array();
    
    for($i = 0; $i < $a; $i ++){
        $arr[$i] = mt_rand();
    }
    return($arr);
}
$rand_array = rnd_arr(5);
print_r($rand_array);
?>




<p><h4>5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</p>
<?php
function arifm($a){
    $arr = array();
    for($i = 1; $i <= $a; $i ++){
        $arr[$i] = mt_rand();
    }
    $arifm = array_sum($arr) / count($arr);
    return($arifm);
}
$rand_array = arifm(5);
print_r($rand_array);
?>


<p><h4>6. Создать функцию, которая принимает строку. Вернуть количество слов в строке.</p>

<?php
function countWord($str){

    $arr = explode(' ', $str);
    return count($arr);
}
$arr = countWord('Вернуть количество слов в строке');
print_r($arr);
?>


<p><h4>7. Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.</p> 

<?php
function Fibo($n){
    $i = 2;
    $f1 = 1;
    $f2 = 1;
    echo "Последовательность Фибоначчи для " . $n . " элемента: 0 " . $f1 . ' ';
    while($i < $n ){
        $sum = $f1 + $f2;
        $f1 = $f2;
        echo $f2 . ' ';
        $f2 = $sum;
        $i++;
    }
    echo $sum;
}
Fibo(8) ;
?>


<p><h4>8. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный 
случайными числами.</p>

<?php
function randArr($a){
    $arr = [];
    for($i = 1; $i <= $a; $i++){
        $arr[$i] = mt_rand();
    }
    return $arr;
}
$rand_array = randArr(5);
print_r($rand_array);
?>

<p><h4>9. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</p>

<?php
function countWord1($str){
    $arr = explode(' ', $str);
    return count($arr);
}
$arr = countWord1('HTML, CSS, PHP, BITRIX');
print_r($arr);
?>  

    //or

<?php  
function inputStr($s){
    return str_word_count($s);
}
$str = 'HTML, CSS, PHP, BITRIX';
echo inputStr($str);
?>



<p><h4>10. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы 
(«XIRTIB ,PHP … »).</p>

<?php
function reversStr($s){
    return strrev($s);
}
$str = 'HTML, CSS, PHP, BITRIX';
echo reversStr($str);
?>

<p><h4>11. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки</p>

<?php
function lenStr($s){
    return strlen($s);
}
$str = 'HTML, CSS, PHP, BITRIX';
echo lenStr($str);
?>

<p><h4>12. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку</p>

<?php
function abc($s){
    $arr = explode(', ', $s);
    $arr = implode($arr);
    for($i = 0; $i< strlen($arr); $i++){
        print_r($arr[$i]);
        echo '<br>';
    }
}
$str = 'HTML, CSS, PHP, BITRIX';
echo abc($str) ;
?>