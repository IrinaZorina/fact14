<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "../customFunc/changeTheme.php";
    changeTheme();
    ?>
    <title>Strings</title>
</head>
<?php
include "header.php";
?>

<body>
    <p>ЗАДАЧА. Дата строка «fact». Привести строку к виду «Fact».
        <?php
        $str6 = "fact";
        $strFirst = strtoupper(mb_substr($str6, 0, 1));
        echo "<br>";
        $strSecond = mb_substr($str6, 1);
        echo "ОТВЕТ $strFirst$strSecond";
        // Вариант номер 2
        echo "<br>";
        $str = "fact";
        $newStr = str_replace("f", "F", $str);
        echo "ОТВЕТ $newStr";
        ?>
    <p>ЗАДАЧА. Дана строка, в которой содержится «фамилия, имя, отчество».
        Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Юрков Кирилл Владимирович»,
        результирующая «Кирилл Юрков».
        <?php
        echo "<br>";
        $str = "Юрков Кирилл Владимирович";
        $arr = explode(" ", $str);
        $surName = $arr[0];
        $name = $arr[1];
        echo " ОТВЕТ: $name $surName";
        ?>
    <p>ЗАДАЧА. Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).
        <?php
        echo "<br>";
        $str = "Привет, мир";
        $char = "и";
        $count = 0;
        $arr = mb_str_split($str);
        // print_r($arr);
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == strtolower($char) || $arr[$i] == strtoupper($char)) {
                $count++;
            }
        }
        echo "ОТВЕТ: количество символа «и» в строке = $count";
        ?>
    <p>ЗАДАЧА. Дана строка ‘html css php'.
        Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
        <?php
        $str = "html css php";
        $arr = explode(" ", $str);
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . " <br>";
        }
        ?>
    <p>ЗАДАЧА. Дана строка. Проверьте, что она заканчивается на '.png'.
        Если это так, выведите 'да', если не так - 'нет'.<br>
        P.S Это очень просто поэтому напишем универсальный метод определения расширения файлов!
        <?php
        echo "<br>";
        // Универсальный способ определения расширения файла. Это немного не по условию за
        $fileName = "Мама.Мыла.Раму.svg";
        // Найдем подстроку в которой найдем последнее вхождение символа "." Функция mb_strrpos
        $fileExtension = mb_substr($fileName, mb_strrpos($fileName, '.') + 1);
        if (
            $fileExtension == "png" || $fileExtension == "jpg" ||
            $fileExtension == "svg" || $fileExtension == "jpeg" || $fileExtension == "pdf" ||
            $fileExtension == "txt"
        ) {
            echo "Расширение файла = $fileExtension";
        } else {
            echo "Неизвестное расширение файла";
        }
        ?>
    <p>ЗАДАЧА. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов,
        добавьте троеточие в конец и выведите на экран.
        Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.
        <?php
        echo "<br>";
        // $str="1234";
        $str = "Уровень безработицы в России достиг исторического минимума.";
        $strEnd = "...";
        $newStr = "";
        $arr = mb_str_split($str);
        for ($i = 0; $i < count($arr); $i++) {
            if (mb_strlen($str) > 5) {
                $newStr = mb_substr($str, 0, 5) . $strEnd;
            } else {
                $newStr = $str;
            }
        }
        echo "ОТВЕТ: $newStr";
        ?>
    <p>ЗАДАЧА. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, буквы 'c' - на 3.
        <?php
        echo "<br>";
        $str = "he ability to spread such fake news often relies on a 
        manipulative use of the social networks and the way they function.";
        // Способ номер 1
        echo "ОТВЕТ: " . strtr($str, "abc", "123");
        echo "<br>";
        // Способ номер 2
        $arr = mb_str_split($str);
        foreach ($arr as $value) {
            $value = strtr($str, "abc", "123");
        }
        echo "ОТВЕТ: $value";
        /* Я не знаю какой правильнее.
         По сути мы заменяем символы строки, и логично разбить строку на массив символов и обойти их в цикле.
        С другой стороны есть готовая функция,меняющая один список символов на другой прям в строке
        Нужна пояснительная бригада))*/
        ?>

    <p>ЗАДАЧА. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
        <?php
        echo "<br>";
        $str = "abc abc abc";
        $char = "b";
        $pos = mb_strrpos($str, $char);
        echo "ОТВЕТ: Позиция последней буквы 'b' = $pos";
        ?>

    <p>ЗАДАЧА. Дана строка 'html css php'.
        С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
        <?php
        echo "<br>";
        $str = "html css php";
        $arr = explode(" ", $str);
        $arr[0] = "html";
        $arr[1] = "css";
        $arr[2] = "php";
        print_r($arr);
        ?>
    <p>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
        Определите количество дней между датами.
        <?php
        echo "<br>";
        $str = "10-02-2015";
        $oldDate = strtotime("10-02-2015");
        $currentDate = time();
        $diff = $currentDate - $oldDate;
        echo "Количество миллисекунд между датами =  " . $diff . "<br>";
        echo "ОТВЕТ: количество дней между датами = " . floor($diff / (60 * 60 * 24));
        ?>
    <p>ЗАДАЧА. Подсчитать количество гласных букв на вашей странице.
        <?php
        echo "<br>";
        $homePage = file_get_contents('http://mycadr/');
        // echo $homePage;
        $stripHomePage = strip_tags($homePage);
        $arr = mb_str_split($stripHomePage);
        $count = 0;
        // echo $stripHomePage;
        for ($i = 0; $i < count($arr); $i++) {
            if (
                $arr[$i] == 'а' || $arr[$i] == 'я' || $arr[$i] == 'у'
                || $arr[$i] == 'ю' || $arr[$i] == 'о' || $arr[$i] == 'е'
                || $arr[$i] == 'ё' || $arr[$i] == 'ы' || $arr[$i] == 'и'
                || $arr[$i] == 'э'
                // Латиница
                || $arr[$i] == 'a' || $arr[$i] == 'u' || $arr[$i] == 'e'
                || $arr[$i] == 'o' || $arr[$i] == 'y' || $arr[$i] == 'i'
            ) {
                $count++;
            }
        }
        echo "ОТВЕТ: Количество гласных букв на главной странице = " . $count;
        ?>

    <p>ЗАДАЧА. Подсчитать количество слов на вашей странице.
        <?php
        echo "<br>";
        $homePage = file_get_contents('http://mycadr/');
        $stripHomePage = strip_tags($homePage);
        //Добавим кириллицу чтобы фунукция понимала русские слова
        $count = str_word_count($stripHomePage, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
        // print_r($count);
        echo "ОТВЕТ: Количество слов на странице = " . $count;
        ?>
        <!-- // ===============================================================
        // $str4="hello";
        // $arrSplit=str_split($str4,3);
        // print_r($arrSplit);
        // ==================================================================
        // $str5="hello";
        // $strFirstPart=mb_substr($str5,0,2);
        // $strSecontPart=mb_substr($str5,2);
        // echo $strFirstPart . " ". $strSecontPart;
        // $arr[0]=$strFirstPart;
        // $arr[1]=$strSecontPart;
        // print_r($arr); -->

        <?php
        include "footer.php";
        ?>
</body>

</html>