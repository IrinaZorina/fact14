<?php require_once 'inc/header.php';?>

<?php

//1

echo '<span class="zad">задача 1<br><br></span>';

$val1=mt_rand(0,10);
$val2=mt_rand(0,10);

echo '<span class="zad">a= $val1<br></span>';
echo '<span class="zad">b= $val2<br></span>';

function srav($a, $b){
    if($a>$b){
        return $a;
    }
    elseif($b>$a){
        return $b;
    }
    elseif($a==$b){
        echo "Числа равны";
    }

}

echo '<span class="zad">srav($val1, $val2)</span>';

//2

echo '<br><br><span class="zad">задача 2</span><br><br>';

$val1=mt_rand(0,10);
$val2=mt_rand(0,10);

echo '<span class="zad">a= $val1</span><br>';
echo '<span class="zad">b= $val2</span><br>';
$c=0;

function katet($a, $b){
    $c=sqrt($a*$a+$b*$b);
    return $c;
}

echo "<span class='zad'>" . katet($val1, $val2) . "</span>";

//3

echo '<br><br><span class="zad">задача 3</span><br><br>';

$val1=10;

function uvelich($a){
    $i=0;
    do{
        $a*=10;
        echo "<span class='zad'>$a</span><br>";
        if($a>1000000){
            echo "<span class='zad'>вы достигли предела</span>";
            break;
        }
        $i++;
    }
    while($i<10);
}

uvelich($val1);

//4

echo '<br><br><span class="zad">задача 4</span><br><br>';

function mass($arr){
    print_r($arr);
}

$array=[];

for($i=0;$i<mt_rand(3,5);$i++){
    $array[$i]=mt_rand(5,10);
}

echo "<span class='zad'>" . mass($array) . "</span>";

//5

echo "<br><br><span class='zad'>задача 5</span><br><br>";

function mass2($arr){
    $c=0;
    foreach($arr as $value){
        $c+=$value;
    }
    $sred=$c/count($arr);
    return $sred;
}

$array=[];

for($i=0;$i<mt_rand(3,5);$i++){
    $array[$i]=mt_rand(5,10);
}

echo "<span class='zad'>" . mass2($array) . "</span>";

//6

echo '<br><br><span class="zad">задача 6</span><br><br>';

$b=0;

function stroka($a){
    $b=explode(' ', $a);
    echo "<span class='zad'>" . count($b) . "</span>";
}

$strochka='Задача организации, в особенности же постоянный количественный рост и сфера нашей активности требуют определения и уточнения модели развития. ';

stroka($strochka);

//7

echo '<br><br><span class="zad">задача 7</span><br><br>';

//8

echo '<br><br><span class="zad">задача 8</span><br><br>';

$array=[];

for($i=0;$i<mt_rand(2,10);$i++){
    $array[$i]=0;
}

function mass4($a){
    for($i=0;$i<count($a);$i++){
        $a[$i]=mt_rand(10,15);
    }

    return $a;
}

$b=mass4($array);

print_r($b);

//9

echo '<br><br><span class="zad">задача 9</span><br><br>';

$a='HTML, CSS, PHP, BITRIX';

echo "<span class='zad'>" . $a . "</span><br>";

function chislo($d){
    $c=explode(' ', $d);
    $chislo=count($c);
    echo "<span class='zad'>Число слов в строке: " . $chislo . "</span>";
}

chislo($a);

//10

echo '<br><br><span class="zad">задача 10</span><br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo '<span class="zad">' . $b . '</span><br>';

function revers($a){
    $z=str_split($a);
    for($i=count($z);$i!=-1;$i--){
        echo '<span class="zad">' . $a[$i] . '</span>';
    }
}

revers($b);

//11

echo '<br><br><br><br><span class="zad">задача 11</span><br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo '<span class="zad">' . $b . '</span><br>';

function dlinaStoki($a){
    $c=mb_strlen($a);
    echo "<span class='zad'>Длина строки: " . $c . "</span>";
}

dlinaStoki($b);

//12

echo '<br><br><span class="zad">задача 12</span><br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo "<span class='zad'>" . $b . "</span><br><br>";

function newStroka($a){
    $c=str_split($a);
    $c=array_diff($c, [","]);
    $str=implode('',$c);
    $c=str_split($str);
    for($i=0;$i<count($c);$i++){
        echo "<span class='zad'>" . $c[$i] . "</span><br>";
    }
}

newStroka($b);

?>


<?php require_once 'inc/footer.php';?>