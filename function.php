<?php require_once 'inc/header.php' ?>
<main>
<p><strong>Задачи на функции</strong></p>
    <br>
    <?php
    echo 'Задание. Создать функцию, которая сравнивает два числа и возвращает наибольшее.';
    echo '<br>';
    echo '<br>';
    function comparison($x,$y){
        echo "Входящие данные : $x , $y" . '<br>';
        if($x<$y){
            echo "Наибольшее значение : $y";
            echo'<br>';
        }
        else {
            echo "Наибольшее значение : $x";
            echo'<br>';
        }
    }
    $x=15;
    $y=12;
    comparison($x,$y);
    echo'<br>';
    echo'<br>';
    echo 'Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.';
    echo'<br>';
    echo'<br>';
    function gip($x,$y){
        echo "Входящие данные : $x , $y";
        $squaringX = pow($x,2);
        $squaringY = pow($y,2);
        $summ = $squaringX + $squaringY;
        $hypotenuse = sqrt($summ);
        return $hypotenuse;
        }
        $x = 10;
        $y = 10;
        $i = gip($x,$y);
        echo'<br>';
        echo'<br>';
        echo "Квадрат гипотинузы : $i";
        echo'<br>';
        echo'<br>';
        echo 'Создать функцию, которая принимает одно число (10).
        В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. 
        Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.';
        echo'<br>';
        echo'<br>';
        function squaring ($x){
            while($x<=1000000){
                echo $x . '<br>';
                $x *=10;
            }
                echo "Вы достигли предела";
        }
        $x=10;
        squaring($x);
        echo'<br>';
        echo'<br>';
        echo 'Создать функцию, в которой объявляется массив и случайными элементами.';
        echo'<br>';
        echo'<br>';
        function arr($arr){
            $arr = [rand(1,10),rand(1,10)];
            foreach ($arr as $vail){
                echo$vail . ' ';
            }
        }
        $arr1=[];
        arr($arr1);
        
        echo'<br>';
        echo'<br>';
        echo 'Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.';
        echo'<br>';
        echo'<br>';
        function arr1($arr){
            echo "Входящие данные : ".  implode('-',$arr) .'<br>';
            $sum = array_sum($arr);
            $count = count($arr);
            return $sum / $count;
        }
        $arr1 = [4,2];
        $average = arr1($arr1);
        echo  "Cреднеарифметическое значение массива - $average";
        echo'<br>';
        echo'<br>';
        echo 'Создать функцию, которая принимает строку. Вернуть количество слов в строке.';
        echo'<br>';
        echo'<br>';
        function string ($string){
            echo "Входящие данные : ".$string .'<br>';
            $count=0;
            $arr_string = explode(" ",$string);
            foreach ($arr_string as $word){
                if ($word !== 0){
                    $count++;
                }
            }
            echo "Количество сслов в строке : $count";
        }
        $string1 = 'Привет меня зовут Валентин.';
        string($string1);
        echo'<br>';
        echo'<br>';
        echo  "Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).";
        echo'<br>';
        echo'<br>';
        function reverseLetters($string) {
            echo "Входящие данные : ".$string .'<br>';
            $length = mb_strlen($string);
            $reversedString = '';
            while ($length > 0) {
                $i = mb_substr($string, $length - 1, 1);
                $reversedString .= $i;
                $length--;
            }
            return $reversedString;
        }
        
        $inputString = "HTML, CSS, PHP, BITRIX";
        $reversed = reverseLetters($inputString);
        echo "Результат : $reversed";
        echo'<br>';
        echo'<br>';
        echo "Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.";
        echo'<br>';
        echo'<br>';
        function string_length ($string){
            $lenght = mb_strlen($string);
            echo "Длина строки: $lenght";
        }
        $a = "HTML, CSS, PHP, BITRIX";
        string_length($a);
        echo'<br>';
        echo'<br>';
        echo "Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку";
        echo'<br>';
        echo'<br>';
        function stringcount($string){
            $leght = mb_strlen($string);
            $i=0;
            $word = '';
            while ($i<$leght){
                $a = mb_substr($string,$i,1);
                $word =$a;
                echo $word . '<br>';       
                $i++;
            }
            return $word;      
        }
        $word_string = "HTML, CSS, PHP, BITRIX";
        $word_string = preg_replace('[,]','', $word_string);
        stringcount($word_string);
    ?>
</main>
<?php require_once 'inc/footer.php' ?>