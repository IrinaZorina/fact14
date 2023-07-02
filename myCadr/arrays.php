<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <?php
    $currentTime=date('H');
    $dayTime='8';
    $nightTime='20';
    if($currentTime>$dayTime && $currentTime<$nightTime){
        echo '<link rel="stylesheet" href="styles/style.css">';
    }else{
        echo '<link rel="stylesheet" href="styles/nightStyle.css">';
    }
    ?>
    <title>Arrays</title>
</head>

<body>
    <?php
    require "header.php";
    ?>
    <p>ЗАДАЧА. Вывести на экран элементы многомерного ассоциативного массива по одному из ключей.
        <?php
        echo "<br>";
        $arr7 = [
            'fruits' => [
                'apple' => 'яблоко',
                'pineapple' => 'ананас',
                'banana' => 'банан'
            ],
            'vagetables' => [
                'tomato' => 'помидор',
                'cucimber' => 'огурец'
            ],
            'drinks' => [
                'water' => 'вода',
                'coffee' => 'кофе',
                'tea' => 'чай'
            ]
        ];
        foreach ($arr7 as $key => $value) {
            if ($key == 'fruits') {
                foreach ($value as $item) {
                    echo $item . "<br>";
                }
            }
        }
        // Код визуальной проверки массива
        // echo '<pre>';
        // print_r($arr7);
        // echo '</pre>';
        // echo "<br>";
        ?>
    <p>ЗАДАЧА. Дан массив с элементами 50, 45, 40, 35, 30.
        Найдите сумму элементов этого массива. Запишите ее в переменную $result.
        <?php
        echo "<br>";

        $arr = [50, 45, 40, 35, 30];
        $result = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $result += $arr[$i];
        }
        echo "ОТВЕТ: Сумма всех элементов =  $result ";
        ?>
    <p>ЗАДАЧА. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами.
        После чего вывести данный массив в противоположном порядке.
        <?php
        echo "<br>";

        $arr2 = [];
        for ($i = 0; $i < 10; $i++) {
            $arr2[$i] = mt_rand(1, 100);
            echo $arr2[$i] . ' ';
        }
        echo "<br>";
        for ($i = count($arr2) - 1; $i >= 0; $i--) {
            echo $arr2[$i] . ' ';
        }
        ?>
    <p>ЗАДАЧА: Создать массив, заполненный названиями картинок, например, 1.png.
        Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
        <?php
        echo "<br>";

        $arr3 = [
            '<img src="image/alligator.jpg" alt="1 width=100px height=100px">', '<img src="image/dogs.jpg" alt="2" width=100px height=100px>',
            '<img src="image/horse.jpg" alt="3" width=100px height=100px>',
            '<img src="image/tiger.jpg" alt="4" width=100px height=100px>'
        ];
        $rand_img = $arr3[mt_rand(0, count($arr3) - 1)];
        echo $rand_img;
        ?>
    <p>ЗАДАЧА: Дано N действительных случайных чисел в диапазоне от -100 до 100.
        Найти минимальное положительное число и максимальное отрицательное число.
        <?php
        echo "<br>";
        $N = 20;
        $randomArr = [];
        $minPositive = 100;
        $maxNegative = -1;
        // Заполняем массив
        echo "Рандомный массив  = ";
        for ($i = 0; $i < $N; $i++) {
            $randomArr[$i] = mt_rand(-100, 100);
            echo $randomArr[$i] . " ";
        }
        echo '<br>';
        // Обходим массив и ищем числа
        for ($i = 0; $i < count($randomArr); $i++) {
            if ($randomArr[$i] < $minPositive && $randomArr[$i] > 0) {
                $minPositive = $randomArr[$i];
            } elseif ($randomArr[$i] < $maxNegative) {
                $maxNegative = $randomArr[$i];
            }
        }
        echo "Минимальное положительное число = $minPositive <br>";
        echo "Максимальное отрицательное число = $maxNegative";
        ?>
    <p>ЗАДАЧА. Для группы учащихся известны годовые оценки по следующим предметам:
        математика, физика, химия, информатика.
        Найти среднюю в группе оценку по каждому из предметов.
        Суммирование оценок по каждому предмету.
        <?php
        echo '<br>';
        $mathGrade = mt_rand(2, 5);
        $phisicsGrade = mt_rand(2, 5);
        $chemistryGrade = mt_rand(2, 5);
        $informGrade = mt_rand(2, 5);

        $averageMark = 0;
        $subjects = [
            "Математика" => "$mathGrade",
            "Физика" => "$phisicsGrade",
            "Химия" => "$chemistryGrade",
            "Информатика" => "$informGrade"
        ];
        foreach ($subjects as $key => $grade) {
            echo $key . " = " . $grade . " ";
            echo "<br>";
            $averageMark += $grade / count($subjects);
        }
        echo "Средний бал = " . $averageMark;
        ?>
    <p>ЗАДАЧА. Известна среднемесячная температура воздуха на следующих островах Карибского моря:
        Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив,
        содержащий месяц и максимальную температуру для островов.
        <?php
        echo "<br>";
        $maxTemperature = 0;
        $minTemperature = 100;
        $averageTemperature = 0;
        $arr = [
            "Куба" => [
                "январь" => 20,
                "февраль" => 21,
                "март" => 22,
                "апрель" => 23,
                "май" => 25,
                "июнь" => 27,
                "июль" => 30,
                "август" => 29,
                "сентябрь" => 27,
                "октябрь" => 25,
                "ноябрь" => 22,
                "декабрь" => 20
            ],
            "Тринидат" => [
                "январь" => 26,
                "февраль" => 26,
                "март" => 26,
                "апрель" => 27,
                "май" => 27,
                "июнь" => 30,
                "июль" => 32,
                "август" => 31,
                "сентябрь" => 30,
                "октябрь" => 28,
                "ноябрь" => 27,
                "декабрь" => 26
            ],
            "Ямайка" => [
                "январь" => 30,
                "февраль" => 30,
                "март" => 31,
                "апрель" => 31,
                "май" => 32,
                "июнь" => 32,
                "июль" => 33,
                "август" => 33,
                "сентябрь" => 33,
                "октябрь" => 32,
                "ноябрь" => 31,
                "декабрь" => 30
            ],
            "Гаити" => [
                "январь" => 31,
                "февраль" => 31,
                "март" => 32,
                "апрель" => 32,
                "май" => 32,
                "июнь" => 33,
                "июль" => 33,
                "август" => 33,
                "сентябрь" => 32,
                "октябрь" => 32,
                "ноябрь" => 31,
                "декабрь" => 31
            ]
        ];
        // Код визуальной проверки массива
        //     echo "<pre>";
        //   print_r($arr);
        //   echo "</pre>";
        foreach ($arr as $key => $month) {
            foreach ($month as $temperature) {
                if ($temperature > $maxTemperature) {
                    $maxTemperature = $temperature;
                } elseif ($temperature < $minTemperature) {
                    $minTemperature = $temperature;
                }
            }
            $averageTemperature += $temperature / count($arr);
        }
        echo "ОТВЕТ. Макс температура на островах = $maxTemperature гадусов.<br>";
        echo "Мин температура на островах = $minTemperature градусов.<br>";
        echo "Средняя температура на островах = $averageTemperature градусов.";
        ?>

        <?php
        require "footer.php";
        ?>
</body>

</html>