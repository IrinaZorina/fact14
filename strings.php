<?php require_once 'inc/header.php'; ?>
<main class="wow some-text">
    <!-- Дана строка «fact». Привести строку к виду «Fact». -->

    <?php

    $str = 'fact';
    // echo ucfirst($str1); 
    // echo str_replace('f', 'F', $str); 
    $str1 = strtoupper(mb_substr($str, 0, 1));
    $str2 = mb_substr($str, 1);
    echo $str1 . $str2;

    ?>
    <br>
    <!-- Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова». -->

    <?php

    $str = 'Закирова Регина Артуровна';
    // echo mb_substr($str2, 9, 6) . ' ' . mb_substr($str2, 0, 8);
    $arr = explode(' ', $str);
    //print_r($arr);
    echo $arr[1] . ' ' . $arr[0];

    ?>
    <br>
    <!-- Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). -->

    <?php

    $str = 'ПрИвет, мир!';
    $iqty = 0;
    $arr = mb_str_split($str);
    //print_r($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == 'и' or $arr[$i] == 'И') {
            $iqty++;
        }
    }
    echo $iqty;

    ?>
    <br>
    <!-- Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'. -->
    <!-- Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива. -->

    <?php

    $str = 'html css php';
    // echo mb_substr($stra, 0, 4) . ' ' . mb_substr($stra, 5, 3) . ' ' . mb_substr($stra, 9, 3);
    $arr = explode(' ', $str);
    //print_r($arr);
    echo $arr[0] . ' ' . $arr[1] . ' ' . $arr[2];

    ?>
    <br>
    <!-- Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'. -->

    <?php

    $str = 'tortik.png';
    $array[0] = mb_substr($str, -4, 4);
    //print_r($array);
    foreach ($array as $value) {
        if ($array[0] === '.png') {
            echo 'да';
        } else {
            echo 'нет';
        }
    }

    ?>
    <br>
    <!-- Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и 
    выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран. -->

    <?php

    $str = 'Надёжный веб-интегратор Факт!';
    $qty = mb_strlen($str);
    if ($qty > 5) {
        echo mb_substr($str, 0, 5) . '...';
    } else {
        echo $str;
    }

    ?>
    <br>
    <!-- Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. -->

    <?php

    $str = 'abc abc abc';
    // $str = str_replace('a', '1', $str);
    // $str = str_replace('b', '2', $str);
    // $str = str_replace('c', '3', $str);
    // echo $str;
    echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);

    ?>
    <br>
    <!-- Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'. -->

    <?php

    $str = 'abc abc abc';
    echo strpos($str, 'b', 8);

    ?>
    <br>
    <!-- В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами. -->

    <?php

    $date1 = '19-05-1993';
    $date2 = '04-07-2023';
    $result = date_diff(date_create($date1), date_create($date2));
    echo $result->days;

    ?>
</main>
<?php require_once 'inc/footer.php'; ?>