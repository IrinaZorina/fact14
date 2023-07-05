<?php require_once 'inc/header.php' ?>
<main>
<p><strong>Задачи на массивы</strong></p>
    <br>
    <?php
    echo 'Задание. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.';
    echo '<br>';
    echo '<br>';
    $N = 100;
    $minPositive = null;
    $maxNegative = null;

    for ($i = 0; $i < $N; $i++) {
        $number = rand(-100, 100);

        if ($number > 0 && ($minPositive === null || $number < $minPositive)) {
            $minPositive = $number;
        }

        if ($number < 0 && ($maxNegative === null || $number > $maxNegative)) {
            $maxNegative = $number;
        }
    }

    echo "Минимальное положительное число: " . $minPositive . "<br>";
    echo "Максимальное отрицательное число: " . $maxNegative . "<br>";

    echo '<br>';
    echo '<br>';
    echo 'Задание. Дан двумерный массив из 5 строк и 6 столбцов. 
Определить для каждого четного столбца максимальный элемент. 
Найти произведение этих элементов.';
    echo '<br>';
    echo '<br>';
    $array = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 6; $j++) {
            $array[$i][$j] = rand(1, 100);
        }
    }
    $product = 1;

    for ($j = 0; $j < 6; $j += 2) {
        $max = $array[0][$j];
        for ($i = 1; $i < 5; $i++) {
            if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
            }
        }
        $product *= $max;
    }

    echo "Произведение максимальных элементов четных столбцов: " . $product;

    echo '<br>';
    echo '<br>';
    echo 'Задание. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
Найти среднюю в группе оценку по каждому из предметов. 
Суммирование оценок по каждому предмету.';
    echo '<br>';
    echo '<br>';

    $groupEstimates = [
        'mathematics' => [5, 4, 4, 5],
        'physics' => [4, 3, 4, 4],
        'chemistry' => [3, 5, 3, 5],
        'informatics' => [5, 4, 5, 3,]
    ];

    foreach ($groupEstimates as $key => $vail) {
        $sum = 0;
        foreach ($vail as $newvail) {
            $sum += $newvail;
        }
        $count = count($vail);
        $average = $sum / $count;

        echo "Средняя оценка по предмету $key: $average<br>";
    }
    echo '<br>';
    echo '<br>';
    ?>
</main>
<?php require_once 'inc/footer.php' ?>