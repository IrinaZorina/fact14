<?php require_once 'inc/header.php';?>

<?php

//1

echo 'задача 1<br><br>';

$val1=mt_rand(0,10);
$val2=mt_rand(0,10);

echo 'a= ' . $val1 . '<br>';
echo 'b= ' . $val2 . '<br>';

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

echo srav($val1, $val2);

//2

echo '<br><br>задача 2<br><br>';

$val1=mt_rand(0,10);
$val2=mt_rand(0,10);

echo 'a= ' . $val1 . '<br>';
echo 'b= ' . $val2 . '<br>';
$c=0;

function katet($a, $b){
    $c=sqrt($a*$a+$b*$b);
    return $c;
}

echo katet($val1, $val2);

//3

echo '<br><br>задача 3<br><br>';

$val1=10;

function uvelich($a){
    $i=0;
    do{
        $a*=10;
        echo "$a<br>";
        if($a>1000000){
            echo "вы достигли предела";
            break;
        }
        $i++;
    }
    while($i<10);
}

//4

echo '<br><br>задача 4<br><br>';

function mass($arr){
    print_r($arr);
}

$array=[];

for($i=0;$i<mt_rand(3,5);$i++){
    $array[$i]=mt_rand(5,10);
}

echo mass($array);

//5

echo '<br><br>задача 5<br><br>';

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

echo mass2($array);

//6

echo '<br><br>задача 6<br><br>';

$b=0;

function stroka($a){
    $b=explode(' ', $a);
    echo count($b);
}

$strochka='Задача организации, в особенности же постоянный количественный рост и сфера нашей активности требуют определения и уточнения модели развития. ';

stroka($strochka);

//7

echo '<br><br>задача 7<br><br>';

//8

echo '<br><br>задача 8<br><br>';

$array=[];

for($i=0;$i<mt_rand(2,10);$i++){
    $array[$i]=0;
}

/*print_r($array);
echo "<br>";

for($i=0;$i<count($array);$i++){
    $array[$i]=mt_rand(10,15);
}

print_r($array);*/

function mass4($a){
    for($i=0;$i<count($a);$i++){
        $a[$i]=mt_rand(10,15);
    }

    return $a;
}

$b=mass4($array);

print_r($b);

//9

echo '<br><br>задача 9<br><br>';

$a='HTML, CSS, PHP, BITRIX';

echo "$a" . "<br>";

function chislo($d){
    $c=explode(' ', $d);
    $chislo=count($c);
    echo "Число слов в строке: " . "$chislo";
}

chislo($a);

//10

echo '<br><br>задача 10<br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo "$b" . "<br>";

function revers($a){
    $z=str_split($a);
    for($i=count($z);$i!=-1;$i--){
        echo $a[$i];
    }
}

revers($b);

//11

echo '<br><br>задача 11<br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo "$b" . "<br>";

function dlinaStoki($a){
    $c=mb_strlen($a);
    echo "Длина строки: " . "$c";
}

dlinaStoki($b);

//12

echo '<br><br>задача 12<br><br>';

$b='HTML, CSS, PHP, BITRIX';

echo "$b" . "<br><br>";

function newStroka($a){
    $c=str_split($a);
    $c=array_diff($c, [","]);
    $str=implode('',$c);
    $c=str_split($str);
    for($i=0;$i<count($c);$i++){
        echo $c[$i] . "<br>";
    }
}

newStroka($b);

?>


<?php require_once 'inc/footer.php';?>