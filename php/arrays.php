<?php require_once '../inc/header.php' ?>

<p><h4>#1 Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива.<br> 
    Запишите ее в переменную $result.</p>

<?php
$nums = [50, 45, 40, 35, 30];
$result = 0;
for ($i = 0; $i < count($nums); $i++){
    $result += $nums[$i];
}
echo "<font color = red> сумма эл-ов массива: $result </font>";
?>

<p><h4>#2 Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами.<br> 
    Запишите ее в переменную $result. После чего вывести данный массив в противоположном порядке.</p>

<?php    
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = mt_rand(0, 1000);
    echo $numbers[$i] . '<br/>';
};
echo '<br/>';

for($i = count($numbers)-1; $i >= 0 ; $i--){
    echo "<font color = red> $numbers[$i] <br/></font>";
};
?>

<p><h4>#3 Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать<br>
    название картинки из массива и выводить ее на экран</p>

<?php 
$images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg' ];
$rnd_val = mt_rand(0, 4);
echo "<img src = ../imgARRAYS/$images[$rnd_val] >";
?>

<p><h4>#4 Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и<br>
    максимальное отрицательное число</p>

<?php     
$n = rand(5, 15);
echo  "Получил массив из $n элементов: " . "<br>";
$numbers = [];
for ($i = 0; $i < $n; $i++) {
    $numbers[$i] = mt_rand(-1000, 1000); 
};
print_r($numbers);
echo "<br>" . "Упорядочил по возрастанию " . "<br>";
sort($numbers);
print_r($numbers);
echo "<br>" . "Удалил возможный 0 " . "<br>";
$numbers = array_diff($numbers, [0]);
print_r($numbers);
$otr = [];
$pol = [];
foreach($numbers as $key => $value){
    if($value < 0){
        $otr[] = $numbers[$key];
    }else{
        $pol[] = $numbers[$key];
    }
}
echo "<br> разделил на отрицательный и положительный массивы <br>";
print_r($otr);
echo "<br>";
print_r($pol);
echo "<br>";
echo  "<font color = red> максимальное отрицательное число:  </font>" . end($otr) . '<br>';
echo "<font color = red> минимальное положительное число:  </font>" . reset($pol) ;
?>

<p><h4>#5 Дано произвольное целое положительное число K (). Найти сумму всех четных цифр<br>
этого числа. Процедуры и функции  работы  со строками не использовать</p>

<?php 
$k = rand(100, 5000);
echo 'k = ' . $k . '<br>';
$arr_k = [];
$str_k = (string)$k;
$lenght_k = strlen($str_k);
for($i = 0; $i < $lenght_k; $i++){
    $arr_k[] = $str_k[$i]; 
}
echo 'получил массив: <br>';
print_r($arr_k);
foreach($arr_k as $key => $value){
    if($key % 2 != 0){
        $evens[] = $arr_k[$key];
    }
}
echo "<br> отделил четные в массив : ";    
print_r($evens) ;
$summ = 0; 
foreach($evens as  $value){
    $summ += $value;
}
echo  "<br>";
echo "<font color = red> Сумма всех четных цифр = $summ </font>";
?>

<p><h4>#6 Дано произвольное целое положительное число K (). Вывести цифры этого числа в порядке
неубывания (например, 546085 =>045568). Процедуры и функции работы со строками не использовать</p>

<?php 
$k = rand(1000, 50000);
echo 'k = ' . $k . '<br>';
$arr_k = [];
$str_k = (string)$k;
$lenght_k = strlen($str_k);
for($i = 0; $i < $lenght_k; $i++){
    $arr_k[] = $str_k[$i]; 
}
echo 'получил массив: ';
print_r($arr_k);
echo '<br> упорядочил по возрастанию массив: ';
sort($arr_k);
print_r($arr_k);
$new_k = "";
foreach($arr_k as  $value){
    $new_k .= $value;
}
echo '<br>';
echo "<font color = red> цифры этого числа в порядке неубывания:   $new_k </font>";
?>

<p><h4>#7 Дано произвольное целое положительное число K (). Вывести цифры этого числа в порядке невозрастания
//(например, 546085=>865540). Процедуры и функции работы со строками не использовать</p>

<?php 
$k = rand(1000, 50000);
echo 'k = ' . $k . '<br>';
$arr_k = [];
$str_k = (string)$k;
$lenght_k = strlen($str_k);
for($i = 0; $i < $lenght_k; $i++){
    $arr_k[] = $str_k[$i]; 
}
echo 'получил массив: ';
print_r($arr_k);
echo '<br> упорядочил по убыванию массив: ';
rsort($arr_k);
print_r($arr_k);
$new_k = "";
foreach($arr_k as  $value){
    $new_k .= $value;
}
echo '<br>';
echo "<font color = red> цифры этого числа в порядке невозрастания:   $new_k </font>";
?>

<p><h4>#8 Для группы учащихся известны годовые оценки по следующим предметам: математика,
физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов.
Суммирование оценок по каждому предмету</p>

<?php 
$rating = [
    'mat' => [3, 4, 5, 5, 4],
    'fiz' => [4, 5, 5, 4, 3],
    'him' => [2, 4, 5, 4, 3],
    'inf' => [2, 5, 5, 5, 3]
];
$summ = 0;
$medium = 0;
foreach($rating as $key => $score){
    $summ =  array_sum($score);
    echo "<font color = red> Сумма оценок по предмету $key = $summ </font>";
    $medium = $summ / count($score);
    echo "<font color = red> Средняя оценка по предмету $key = $medium <br> </font>";
}
?>

<p><h4>#9 Известна среднемесячная температура воздуха на следующих островах Карибского моря:
Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и 
максимальную температуру для островов</p>

<?php 
$Cuba = [1 => 22, 22, 23, 24.5, 25.5, 26.5, 27, 27.5, 27, 26, 24, 22.5];
$Trinidad = [1 => 26, 26, 26, 27, 28, 27, 27, 27, 27, 27, 27, 26];
$Jamaica = [1 => 25.7, 25.8, 25.9, 26.9, 27.4, 28.3, 28.6, 28.6, 28.3, 27.5, 26.8, 26.2];
$Haiti = [1 => 26, 27, 27, 28, 29, 29, 30, 30, 29, 29, 28, 27];
$month = [1 => "январь", "февраль", "март", "апрель", "май", "июнь", 
    "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
$cuba1 = array_combine($month, $Cuba);
$cuba1 = array_unique($cuba1);
$max = max($cuba1);
foreach($cuba1 as $key => $value){
    if($value == $max){
        $new0 = $key;
        $new1 = $value;
    }
}
$Trinidad1 = array_combine($month, $Trinidad);
$Trinidad1 = array_unique($Trinidad1);
$max = max($Trinidad1);
foreach($Trinidad1 as $key => $value){
    if($value == $max){
        $new01 = $key;
        $new11 = $value;
    }
}
$Jamaica1 = array_combine($month, $Jamaica);
$Jamaica1 = array_unique($Jamaica1);
$max = max($Jamaica1);
foreach($Jamaica1 as $key => $value){
    if($value == $max){
        $new02 = $key;
        $new12 = $value;
    }
}
$Haiti1 = array_combine($month, $Haiti);
$Haiti1 = array_unique($Haiti1);
$max = max($Haiti1);
foreach($Haiti1 as $key => $value){
    if($value == $max){
        $new03 = $key;
        $new13 = $value;
    }
}
$arr = [
    'куба' => [$new0, $new1],
    'тринидад' => [$new01, $new11],
    'ямайка' => [$new02, $new12],
    'гаити' => [$new03, $new13]
]; 
print_r($arr);
?>

<p><h4>#10 Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца
максимальный элемент. Найти произведение этих элементов.</p>

<?php 
$arr = [
    1 =>[mt_rand(-10, 10), mt_rand(-10, 10), mt_rand(-10, 10), mt_rand(-10, 10), mt_rand(-10, 10), mt_rand(-10, 10)], 
    2 =>[mt_rand(-10, 20), mt_rand(-10, 20), mt_rand(-10, 20), mt_rand(-10, 20), mt_rand(-10, 20), mt_rand(-10, 20)], 
    3 =>[mt_rand(-20, -10), mt_rand(-20, -10), mt_rand(-20, -10), mt_rand(-20, 10), mt_rand(-20, 10), mt_rand(-20, 10)], 
    4 =>[mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10)], 
    5 =>[mt_rand(-30, 30), mt_rand(-30, 30), mt_rand(-30, 30), mt_rand(-30, -20), mt_rand(-30, -20), mt_rand(-30, -20)],
    ];
foreach($arr as $key => $val){
    foreach($val as $k => $v){
        if($k == 1){
            $n1[] = $v;
        }elseif($k == 3){
            $n2[] = $v;
        }elseif($k == 5){
            $n3[] = $v;
        }
    }
}
echo "<font color = red> макс для 2 столбца = " .  max($n1) . ",</font><br>";
echo "<font color = red> макс для 4 столбца = " .  max($n2) . ",</font><br>";
echo "<font color = red> макс для 6 столбца = " .  max($n3) . ",</font><br>";
echo "<font color = red> произведение этих элементов =  </font>" . $mad = max($n1) * max($n2) * max($n3);
?>

<p><h4>#11 Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести
все элементы массива, начинающиеся на А</p>

<?php 
$arr = [
    ['april', 'may', 'june'],
    ['melon', 'tomato', 'apple'],
    ['hell', 'avito', 'arial']
];
foreach($arr as $key => $string){
    foreach($string as $ke => $str){
            if($str[0] === 'a'){
                echo "<font color = red> $str </font>";
            }   
    }    
}
?>

<p><h4>#12 Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива
и количество элементов массива для каждого измерения.</p>

<?php 
$arr = [
    [ 45, 0, 7654, 4536, 79799, 789],    //6
    [ 5, 0, -66, 656],                   //4  //15
    [ 564, 480, 46, 6486, 779],          //5
];
$sumIzm = count($arr);  //3
$sumVseh = 0; 
foreach($arr as $key => $izm ){
    if($key < $key+1){
    $sumVseh += count($izm);
    }
    echo "<font color = red> общее количество элементов в измерении $key: </font>" .  count($izm) . "<br>";
}
echo "<br><font color = red>  общее количество элементов массива:  $sumVseh </font>";
?>

<?php //require_once '../inc/footer.php' ?>