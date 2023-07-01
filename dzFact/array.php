<?php require_once "inc/header.php";?>

<?php

echo "<p class='zad'>Задачи 1-7 закоментированны в файле array.php</p>";

//Здача 1

/*$array=[50, 45, 40, 35, 30];

$result=0;

foreach($array as $value){
    $result+=$value;
}

echo "$result" . "<br>";*/

//Задача 2

/*echo "в одном порядке: <br>";

$array=[];

for($i=0;$i<5;$i++){
    $array[$i]=mt_rand(0,100);
    echo "$array[$i] <br>";
}


echo "в другом порядке: <br>";

for($i-=1;$i!=-1;$i--){
    echo "$array[$i]<br>";
}*/

//задача 3

/*$a=mt_rand(0,2);

$array=['1.jpg','2.jpg','3.jpg'];


echo <<<html
<img src="img/$array[$a]" alt="">
html;*/

//задача 4

/*$a=mt_rand(1,5);

$array=[];

$max=0;
$min=101;

for(;$a>0;$a--){
    $array[$a]=mt_rand(-100,100);
    if($array[$a]<$min && $array[$a]>0){
        $min=$array[$a];
    }
    elseif($array[$a]<$max && $array[$a]>(-101)){
        $max=$array[$a];
    }
}

if($min==101){
    echo "положительных чисел нет в массиве!<br>";
    echo "максимальное отрицательное число: " . "$max" . "<br>";
}

elseif($max==0){
    echo "отрицательных чисел нет в массиве!<br>";
    echo "минимальное положительное число: " . "$min" . "<br>";
}

elseif ($min!=101 && $max!=0){
    echo "минимальное положительное число: " . "$min" . "<br>" . "максимальное отрицательное число: " . "$max" . "<br>";
}

print_r($array);*/

//Задача 5

/*$array=[
    'Ivanov'=>[
        'mathematics' => 0,
        'physics' => 0,
        'chemistry' => 0,
        'computer_science' => 0
    ],
    'Smirnov'=>[
        'mathematics' => 0,
        'physics' => 0,
        'chemistry' => 0,
        'computer_science' => 0
    ],
    'Sidorov'=>[
        'mathematics' => 0,
        'physics' => 0,
        'chemistry' => 0,
        'computer_science' => 0
    ],
    'Petrova'=>[
        'mathematics' => 0,
        'physics' => 0,
        'chemistry' => 0,
        'computer_science' => 0
    ],
    'Soboleva'=>[
        'mathematics' => 0,
        'physics' => 0,
        'chemistry' => 0,
        'computer_science' => 0
    ]
];

$sum=[
    'mathematics' => 0,
    'physics' => 0,
    'chemistry' => 0,
    'computer_science' => 0
];



foreach($array as $key=>$value){
    echo "<br>$key<br><br>";//фамилия предмет

    foreach($value as $new_key=>$new_value){
        $new_value=mt_rand(2,5);

        echo "$new_key " . "$new_value<br>";//предмет оценка
        $sum[$new_key]+=$new_value;
    }

}

foreach ($sum as $key2=>$value2){
    $znam=count($array);
    $sred=$value2/$znam;
    echo "<br>средняя оценка по предметам в группе:<br>" . "$key2 " . "$sred<br>";
}*/

//Задача 6

/*$karib=[
    'January'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'February'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'March'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'April'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'May'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'June'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'July'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'August'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'September'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'October'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'November'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
],
    'December'=>[
        'kuba'=>0,
        'trinidat'=>0,
        'jamaika'=>0,
        'gaiti'=>0
    ]
];

$max_temp=[
    'kuba'=>0,
    'trinidat'=>0,
    'jamaika'=>0,
    'gaiti'=>0
];

$max_temps_by_month = [];

foreach ($karib as $month => $islands) {
    $max_temp_month = 0;
    echo "<br>месяц: " . "$month<br>";
    foreach ($islands as $island => $temperature) {
        $new_temperature = mt_rand(200, 400) / 10;
        echo "$island $new_temperature C<br>";

        if ($new_temperature > $max_temp[$island]) {
            $max_temp[$island] = $new_temperature;
        }

        if ($new_temperature > $max_temp_month) {
            $max_temp_month = $new_temperature;
        }
    }

    $max_temps_by_month[$month] = $max_temp_month;
    echo "Максимальная температура за месяц: $max_temp_month<br>";
}*/

//Задача 7

/*$tabl=[
    1=>[
        1=>mt_rand(1,10),
        2=>mt_rand(1,10),
        3=>mt_rand(1,10),
        4=>mt_rand(1,10),
        5=>mt_rand(1,10),
        6=>mt_rand(1,10)
    ],
    2=>[
        1=>mt_rand(1,10),
        2=>mt_rand(1,10),
        3=>mt_rand(1,10),
        4=>mt_rand(1,10),
        5=>mt_rand(1,10),
        6=>mt_rand(1,10)
    ],
    3=>[
        1=>mt_rand(1,10),
        2=>mt_rand(1,10),
        3=>mt_rand(1,10),
        4=>mt_rand(1,10),
        5=>mt_rand(1,10),
        6=>mt_rand(1,10)
    ],
    4=>[
        1=>mt_rand(1,10),
        2=>mt_rand(1,10),
        3=>mt_rand(1,10),
        4=>mt_rand(1,10),
        5=>mt_rand(1,10),
        6=>mt_rand(1,10)
    ],
    5=>[
        1=>mt_rand(1,10),
        2=>mt_rand(1,10),
        3=>mt_rand(1,10),
        4=>mt_rand(1,10),
        5=>mt_rand(1,10),
        6=>mt_rand(1,10)
    ]
];



$max_stolb=[];
$product=1;

foreach($tabl as $key=>$value){

    foreach($value as $new_key=>$new_value){


        if($new_key%2==0){
             if (!isset($max_stolb[$new_key]) || $new_value > $max_stolb[$new_key]) {
                $max_stolb[$new_key] = $new_value;
            }
        }
    }

}



echo "<table>";
foreach ($tabl as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";



echo "<table>";
echo "<tr>";
echo "<th>колонка</th>";
echo "<th>максимальное значение</th>";
echo "</tr>";

foreach ($max_stolb as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
    $product *= $value;
}

echo "</table>";


foreach($max_stolb as $key=>$value){
    echo "максимальное значение столбца: " . "$key" . "=" . "$value<br>";
}*/


?>

<?php require_once "inc/footer.php"; ?>
