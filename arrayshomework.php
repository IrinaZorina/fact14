<?php
/* Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result. */
$arr = array(50, 45, 40, 35, 30);
$a = array_sum($arr);
print_r($arr);
echo "<br>";
echo "Сумма ячеек: $a";
echo "<br>";
echo "<br>";


/* Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке. */
$arr = [];
for ($i=0; $i <= 10; $i++) { 
    $arr[$i] = mt_rand(0, 50);
}
print_r($arr);
echo "<br>";
$arr = array_reverse($arr);
print_r($arr);
echo "<br>";
echo "<br>";



/* Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран. */

$arr = ['1.png', '2.png', '3.png', '4.png'];
print_r($arr);
echo "<br>";
$a = $arr[array_rand($arr, 1)];
echo "$a";
echo "<br>";
echo "<img src='./site/img/$a'' alt=' ' srcset=' '>";
echo "<br>";
echo "<br>";


/* Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число. */
$arr = [];
$n = 10;
$min = 100;
$max = -100;
echo "n= $n";
echo "<br>";
for ($i=0; $i < $n; $i++) { 
    $arr[$i] = mt_rand(-100, 100);
}
print_r($arr);
echo "<br>";
for ($i=0; $i < $n; $i++) { 
    if ($arr[$i] > 0 and $arr[$i] < $min) {
        $min = $arr[$i];
    } continue;
}
for ($i=0; $i < $n; $i++) { 
    if ($arr[$i] < 0 and $arr[$i] > $max) {
        $max = $arr[$i];
    } continue;
}
echo "минимальное положительное число: $min";
echo "<br>";
echo "максимальное отрицательное число: $max";
echo "<br>";
echo "<br>";


/* Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету. */
$sumMath = $sumPhys = $sumChem = $sumProg = 0;
$arr = [
    'Математика' => [
        'Иванов' => mt_rand(2, 5),
        'Петров' => mt_rand(2, 5),
        'Сидоров' => mt_rand(2, 5),
    ],
    'Физика' => [
        'Иванов' => mt_rand(2, 5),
        'Петров' => mt_rand(2, 5),
        'Сидоров' => mt_rand(2, 5),
    ],
    'Химия' => [
        'Иванов' => mt_rand(2, 5),
        'Петров' => mt_rand(2, 5),
        'Сидоров' => mt_rand(2, 5),
    ],
    'Информатика' => [
        'Иванов' => mt_rand(2, 5),
        'Петров' => mt_rand(2, 5),
        'Сидоров' => mt_rand(2, 5),
    ]
];
foreach ($arr['Математика'] as $value) {
    $sumMath += $value;
}
$averageMath = $sumMath / count($arr['Математика']);
$averageMath = round($averageMath, 2);
foreach ($arr['Физика'] as $value) {
    $sumPhys += $value;
}
$averagePhys = $sumPhys / count($arr['Физика']);
$averagePhys = round($averagePhys, 2);
foreach ($arr['Химия'] as $value) {
    $sumChem += $value;
}
$averageChem = $sumChem / count($arr['Химия']);
$averageChem = round($averageChem, 2);
foreach ($arr['Информатика'] as $value) {
    $sumProg += $value;
}
$averageProg = $sumProg / count($arr['Информатика']);
$averageProg = round($averageProg, 2);

echo "Средняя оценка по математике: $averageMath <br>";
echo "Средняя оценка по физике: $averagePhys <br>";
echo "Средняя оценка по химии: $averageChem <br>";
echo "Средняя оценка по информатике: $averageProg <br>";
echo "<br>";


/* Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов. */

$arr = [
    'Январь' => [
        'Куба' => mt_rand(20, 35),
        'Тринидад' => mt_rand(20, 35),
        'Ямайка' => mt_rand(20, 35),
        'Гаити' => mt_rand(20, 35),
    ],
    'Февраль' => [
        'Куба' => mt_rand(20, 35),
        'Тринидад' => mt_rand(20, 35),
        'Ямайка' => mt_rand(20, 35),
        'Гаити' => mt_rand(20, 35),
    ],
    'Март' => [
        'Куба' => mt_rand(20, 35),
        'Тринидад' => mt_rand(20, 35),
        'Ямайка' => mt_rand(20, 35),
        'Гаити' => mt_rand(20, 35),
    ],
    'Апрель' => [
        'Куба' => mt_rand(20, 35),
        'Тринидад' => mt_rand(20, 35),
        'Ямайка' => mt_rand(20, 35),
        'Гаити' => mt_rand(20, 35),
    ],
];
$maxJan = $maxFeb = $maxMar = $maxApr = 0;
foreach ($arr['Январь'] as $value) {
    if ($maxJan < $value) {
        $maxJan = $value;
    }
};
foreach ($arr['Февраль'] as $value) {
    if ($maxFeb < $value) {
        $maxFeb = $value;
    }
};
foreach ($arr['Март'] as $value) {
    if ($maxMar < $value) {
        $maxMar = $value;
    }
};
foreach ($arr['Апрель'] as $value) {
    if ($maxApr < $value) {
        $maxApr = $value;
    }
};
$arr1 = [
    'Январь' => $maxJan,
    'Февраль' => $maxFeb,
    'Март' => $maxMar,
    'Апрель' => $maxApr
];
print_r($arr1);
echo "<br>";
echo "<br>";


/* Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов. */
$arr = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
        $arr[$j][$i] = mt_rand(1, 9);
        echo $arr[$j][$i] . ' ';
    }
    echo '<br>';
};
echo "<br>";

$evenColumnMaxElements = array();
$product = 1;

for ($j = 0; $j < count($arr); $j++) {
    if ($j % 2 == 1) { // если столбец четный
        $maxElement = $arr[$j][0]; // предполагаем, что максимальный элемент - первый элемент в столбце
        for ($i = 0; $i < count($arr[0]); $i++) {
            if ($arr[$j][$i] > $maxElement) {
                $maxElement = $arr[$j][$i]; //обновляем максимальный элемент
            }
        }
        $evenColumnMaxElements[] = $maxElement; // добавляем максимальный элемент в массив
        $product *= $maxElement; // умножаем на максимальный элемент
    }
}

echo "Максимальные элементы в четных столбцах: ";
foreach ($evenColumnMaxElements as $element) {
    echo $element . " ";
}
echo "<br>";
echo "Произведение этих элементов: " . $product;
echo "<br>";
echo "<br>";

/* Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.  */

$arr = array(
    array("Apple", "Banana", "Avocado"),
    array("Apricot", "Cherry", "Grape"),
    array("Almond", "Fig", "Peach")
);

echo "Элементы массива, начинающиеся на 'А': <br>";
foreach ($arr as $row) {
    foreach ($row as $element) {
        if (strpos($element, 'A') === 0) { // проверяем, начинается ли элемент на 'А'
            echo $element . "<br>";
        }
    }
};
echo "<br>";
echo "<br>";


/* Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения. */

$arr = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
        $arr[$j][$i] = mt_rand(1, 9);
        echo $arr[$j][$i] . ' ';
    }
    echo '<br>';
};
echo "<br>";
$string = count($arr[0]);
$row = count($arr);
$elements = $string * $row;
echo "Общее количество элементов массива: $elements <br>";
echo "Строк в массиве: $string <br>";
echo "Столбцов в массиве: $row <br>";

