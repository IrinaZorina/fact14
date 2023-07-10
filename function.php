<?php require_once 'inc/header.php'; ?>
<main class="wow some-text">

    <!-- Создать функцию, которая сравнивает два числа и возвращает наибольшее. -->

    <?php

    function maxNumber($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    $a = 3;
    $b = 4;
    $max = maxNumber($a, $b);
    echo 'Наибольшее число: ' . $max . '<br>';
    echo '<br>';

    ?>

    <!-- Создать функцию, которая принимает длину двух катетов и 
    возвращает значение гипотенузы прямоугольного треугольника. -->

    <?php

    function hypotenuse($a, $b)
    {
        $hypo = sqrt(($a * $a) + ($b * $b));
        return $hypo;
    }

    $leg1 = 3;
    $leg2 = 4;
    $hypo = hypotenuse($leg1, $leg2);
    echo 'Гипотенуза равна: ' . $hypo . '<br>';
    echo '<br>';

    ?>

    <!-- Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать 
    число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться 
    сообщение, что вы достигли предела. -->

    <?php

    function limit($a)
    {
        while ($a < 1000000) {
            $a *= 10;
            echo $a . '<br>';
        }
        echo 'Вы достигли предела!';
    }

    limit(10);
    echo '<br>' . '<br>';

    ?>

    <!-- Создать функцию, в которой объявляется массив со случайными элементами. -->

    <?php

    function randArr($n)
    {
        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = mt_rand(0, 9);
            echo $arr[$i] . ' ';
        }
        // echo '<pre>';
        // print_r($arr);
        // echo '</pre>';
    }

    $n = 10;
    randArr($n);
    echo '<br>' . '<br>';

    ?>

    <!-- Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива. -->

    <?php

    function average($arr, $n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = mt_rand(0, 9);
            $sum += $arr[$i];
            echo $arr[$i] . ' ';
        }
        echo '<br>' . $sum . '<br>';
        $avg = $sum / count($arr);
        return $avg;
    }

    $arr1 = [];
    $avg = average($arr1, 5);
    echo 'Среднее арифмитическое: ' . $avg . '<br>';
    echo '<br>';

    ?>

    <!-- Создать функцию, которая принимает строку. Вернуть количество слов в строке. -->

    <?php

    function qtyWords($str)
    {
        $str = trim($str);
        $words = explode(' ', $str);
        return count($words);
    }

    $str = '             Попробуй эти вкусные яблоки и груши и мёд   ';
    $qtyWords = qtyWords($str);
    echo 'Количество слов в строке: ' . $qtyWords . '<br>';
    echo '<br>';

    ?>

    <!-- Написать функцию, которая рассчитывает последовательность чисел Фибоначчи -->

    <?php

    // function fibo($i)
    // {
    //     if ($i == 0) {
    //         return 0;
    //     } elseif ($i == 1 or $i == 2) {
    //         return 1;
    //     } else {
    //         return fibo($i - 1) + fibo($i - 2);
    //     }
    // }

    // $fibonachi = fibo(8);
    // echo $fibonachi . '<br>';
    // echo '<br>';

    ?>

    <!-- Создайте функцию, которая принимает одномерный массив и возвращает массив, 
    заполненный случайными числами.  -->

    <?php

    function returnArr($arr, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = mt_rand(0, 9);
        }
        return $arr;
    }

    $arr1 = [];
    $returnArr = returnArr($arr1, 5);
    print_r($returnArr);
    echo '<br>' . '<br>';

    ?>

    <!-- Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке. -->

    <?php

    function qtyWords1($str)
    {
        $words = explode(', ', $str);
        return count($words);
    }

    $str = 'HTML, CSS, PHP, BITRIX';
    $qtyWords1 = qtyWords1($str);
    echo 'Количество слов в строке: ' . $qtyWords1 . '<br>';
    echo '<br>';

    ?>

    <!-- Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы 
    («XIRTIB ,PHP … »). -->

    <?php

    function reverseStr($str)
    {
        $qty = mb_strlen($str);
        if ($qty > 12) {
            return mb_substr(strrev($str), 0, 12) . '...';
        } else {
            strrev($str);
        }
    }

    $reverseStr = reverseStr($str);
    echo 'Строка в обратном порядке: ' . $reverseStr . '<br>';
    echo '<br>';

    ?>

    <!-- Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки. -->

    <?php

    function lengthStr($str)
    {
        return mb_strlen($str);
    }

    $lengthStr = lengthStr($str);
    echo 'Длина строки: ' . $lengthStr . '<br>';
    echo '<br>';

    ?>

    <!-- Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку -->

    <?php

    function newLine($str)
    {
        return chunk_split($str, 1, '<br>');
    }

    $newLine = newLine($str);
    echo $newLine;

    ?>

</main>
<?php require_once 'inc/footer.php'; ?>