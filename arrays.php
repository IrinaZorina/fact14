<?php require_once 'inc/header.php'; ?>
<main class="wow some-text">

    <!-- Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result. -->

    <?php
    $arr = [50, 45, 40, 35, 30];
    $result = 0;
    foreach ($arr as $value) {
        $result += $value;
    }
    echo $result . '<br>';
    ?><br>

    <!-- Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. 
    После чего вывести данный массив в противоположном порядке. -->

    <?php
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = mt_rand(0, 9);
        echo $arr[$i] . ' ';
    }
    echo '<br>';
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        echo $arr[$i] . ' ';
    }
    echo '<br>';
    ?><br>

    <!-- Создать массив, заполненный названиями картинок, например, 1.png. 
    Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран. -->

    <?php
    $arr = ['book1.jpg', 'book2.jpg', 'book3.jpg'];
    $a = mt_rand(0, count($arr) - 1);
    echo "<img src=images/$arr[$a] width='200px' height='300px'>";
    ?><br>

    <!-- Дано N действительных случайных чисел в диапазоне от -100 до 100. 
    Найти минимальное положительное число и максимальное отрицательное число. --><br>

    <?php
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = mt_rand(-100, 100);
        echo $arr[$i] . ' ';
    }
    echo '<br>';
    $min = 101;
    $max = -101;
    for ($i = 0; $i < 10; $i++) {
        if ($arr[$i] < $min and $arr[$i] > 0) {
            $min = $arr[$i];
        } elseif ($arr[$i] > $max and $arr[$i] < 0) {
            $max = $arr[$i];
        }
    }
    echo 'Минимальное ' . $min . '<br>';
    echo 'Максимальное ' . $max . '<br>';
    ?><br>

    <!--Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
    Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету. -->

    <?php

    $sum_math = $sum_phys = $sum_chem = $sum_info = 0;

    $average_math = $average_phys = $average_chem = $average_info = 0;

    $arr = [
        'Математика' => [
            'Назаров' => mt_rand(2, 5),
            'Шахрай' => mt_rand(2, 5),
            'Ботез' => mt_rand(2, 5),
            'Токарева' => mt_rand(2, 5),
            'Коваль' => mt_rand(2, 5)
        ],
        'Физика' => [
            'Назаров' => mt_rand(2, 5),
            'Шахрай' => mt_rand(2, 5),
            'Ботез' => mt_rand(2, 5),
            'Токарева' => mt_rand(2, 5),
            'Коваль' => mt_rand(2, 5)
        ],
        'Химия' => [
            'Назаров' => mt_rand(2, 5),
            'Шахрай' => mt_rand(2, 5),
            'Ботез' => mt_rand(2, 5),
            'Токарева' => mt_rand(2, 5),
            'Коваль' => mt_rand(2, 5)
        ],
        'Информатика' => [
            'Назаров' => mt_rand(2, 5),
            'Шахрай' => mt_rand(2, 5),
            'Ботез' => mt_rand(2, 5),
            'Токарева' => mt_rand(2, 5),
            'Коваль' => mt_rand(2, 5)
        ]
    ];

    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    foreach ($arr['Математика'] as $value) {
        $sum_math += $value;
    }
    $average_math = $sum_math / count($arr['Математика']);

    foreach ($arr['Физика'] as $value) {
        $sum_phys += $value;
    }
    $average_phys = $sum_phys / count($arr['Физика']);

    foreach ($arr['Химия'] as $value) {
        $sum_chem += $value;
    }
    $average_chem = $sum_chem / count($arr['Химия']);

    foreach ($arr['Информатика'] as $value) {
        $sum_info += $value;
    }
    $average_info = $sum_info / count($arr['Информатика']);

    echo 'Сумма оценок по математике: ' . $sum_math . '. Средняя оценка: ' . $average_math . '<br>';
    echo 'Сумма оценок по физике: ' . $sum_phys . '. Средняя оценка: ' . $average_phys . '<br>';
    echo 'Сумма оценок по химии: ' . $sum_chem . '. Средняя оценка: ' . $average_chem . '<br>';
    echo 'Сумма оценок по информатике: ' . $sum_info . '. Средняя оценка: ' . $average_info . '<br>';

    ?><br>

    <!-- Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. 
Сформировать один новый массив, содержащий месяц и максимальную температуру для островов. -->

    <?php

    $max_jun = $max_jul = $max_aug = 0;

    $arr = [
        'Июнь' => [
            'Куба' => mt_rand(30, 50),
            'Тринидад' => mt_rand(30, 50),
            'Ямайка' => mt_rand(30, 50),
            'Гаити' => mt_rand(30, 50)
        ],
        'Июль' => [
            'Куба' => mt_rand(30, 50),
            'Тринидад' => mt_rand(30, 50),
            'Ямайка' => mt_rand(30, 50),
            'Гаити' => mt_rand(30, 50)
        ],
        'Август' => [
            'Куба' => mt_rand(30, 50),
            'Тринидад' => mt_rand(30, 50),
            'Ямайка' => mt_rand(30, 50),
            'Гаити' => mt_rand(30, 50)
        ]
    ];

    foreach ($arr['Июнь'] as $value) {
        if ($value > $max_jun) {
            $max_jun = $value;
        }
    }

    foreach ($arr['Июль'] as $value) {
        if ($value > $max_jul) {
            $max_jul = $value;
        }
    }

    foreach ($arr['Август'] as $value) {
        if ($value > $max_aug) {
            $max_aug = $value;
        }
    }

    $new_arr['Июнь'] = $max_jun;
    $new_arr['Июль'] = $max_jul;
    $new_arr['Август'] = $max_aug;

    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
    // echo '<pre>';
    // print_r($new_arr);
    // echo '</pre>';

    ?><br>

    <!-- Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. 
    Найти произведение этих элементов. -->

    <?php

    // $arr = [
    //     [1, 2, 3, 4, 5, 6],
    //     [7, 8, 9, 1, 2, 3],
    //     [4, 5, 6, 7, 8, 9],
    //     [1, 2, 3, 4, 5, 6],
    //     [7, 8, 9, 1, 2, 3]
    // ];

    $arr = [];
    for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j < 7; $j++) {
            $arr[$j][$i] = mt_rand(1, 9);
            echo $arr[$j][$i] . ' ';
        }
        echo '<br>';
    }

    echo '<br>';
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    // неправильно, не пойму как!

    // $column = [];
    // $max = 10;
    // foreach ($arr as $key => $value) {
    //     if ($key % 2 == 0) {
    //         foreach ($value as $item) {
    //             if ($item < $max) {
    //                 $max = $item;
    //             }
    //         }
    //         $column[] = $max;
    //     }
    // }

    // echo '<pre>';
    // print_r($column);
    // echo '</pre>';
    ?>
</main>
<?php require_once 'inc/footer.php'; ?>