<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*     Слайд 23
    Задание 1 */
    echo "Слайд 23 <br>";
    echo "Задание 1 <br>";
    for ($i=1; $i<=30; $i++) {
        if (!($i%2)) echo "$i <br>";
    };
    /* Задание 2 */
    echo "Задание 2 <br>";
    for ($i=1; $i<=50; $i++) {
        switch ($i) {
            case (!($i%5) and !($i%3)):
                echo "<strong>$i </strong>";
                break;
            case !($i%3):
                echo "<em>$i </em>";
                break;
            default:
                echo "$i ";
                break;
        }
        };
/*     Задание 3 */

    echo "<br>Задание 3 <br>";

/*     Домашнее задание */
    echo "<br>Домашнее задание<br>";
    echo "<br>Задание 1<br>";
    for ($i=5; $i<=13; $i++) {
        echo "$i <br>";
    }
    echo "<br>Задание 2<br>";
    $num = 1000;
    $n = 0;
    while ($num>=50) {
        $num/=2;
        $n++;
    }
    echo "Результат деления: $num <br>";
    echo "Количество итераций: $n <br>";
/*     for ($num=1000, $n=1; ; $num/=2, $n++) { 
        if ($num<50) {
            break;
        }
        echo "Результат деления:".($num/2)."<br>";
        echo "Количество итераций: $n<br>";
    }; */
    ?>
    <?php
    echo "<br>Задание 3<br>";
    $i = mt_rand(0, 10);
    $a=0;
    echo "i=$i <br>";
    while (($a+$i)<= 10) {
        echo "$a, ";
        $a++;
    }
/*     вариант2 (нужно закомментировать 1й) */
    /* $i = mt_rand(0, 10);
    switch ($i) {
        case "0":
            echo "0, 1, 2, 3, 4, 5, 6, 7, 8 , 9, 10";
            break;
        case "1";
            echo "0, 1, 2, 3, 4, 5, 6, 7, 8 , 9";
            break;
        case "2";
            echo "0, 1, 2, 3, 4, 5, 6, 7, 8";
            break;
        case "3";
            echo "0, 1, 2, 3, 4, 5, 6, 7";
            break;
        case "4";
            echo "0, 1, 2, 3, 4, 5, 6";
            break;
        case "5";
            echo "0, 1, 2, 3, 4, 5";
            break;
        case "6";
            echo "0, 1, 2, 3, 4";
            break;
        case "7";
            echo "0, 1, 2, 3";
            break;
        case "8";
            echo "0, 1, 2";
            break;
        case "9";
            echo "0, 1";
            break;
        case "10";
            echo "0";
            break;
    } */
    echo "<br>Задание 1 на циклы<br>";
    
    ?>
</body>
</html>