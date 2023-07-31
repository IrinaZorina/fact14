<?php
class Strings
{
    public $str;
    public $char1;
    public $char2;
    public function __construct($str)
    {
        $this->str = $str;

    }
    //===============================Замена и удаление подстроки===============================
    /*Так как функция str_replace не работает с кириллицей
     а mb_str_replace
    выдает как неопределенную функцию, то придется проделать манипуляции с кодировкой!! */
    public function mb_str_replace($search, $replace, $str)
    {
        $charset = mb_detect_encoding($str, "UTF-8");
        $unicodeStr = iconv($charset, "UTF-8", $str);
        return str_ireplace($search, $replace, $unicodeStr);
    }
    // ==========================Пользовательская функция нахождения и удаления подтроки=======================
    public function del_sub_string($search, $replace, $str)
    {
        $charset = mb_detect_encoding($str, "UTF-8");
        $unicodeStr = iconv($charset, "UTF-8", $str);
        $arr = str_split($unicodeStr);
        foreach ($arr as $value) {
            if ($value == $search) {
                $search = $unicodeStr;
            }
        }
        return str_ireplace($search, $replace, $unicodeStr);
    }
    // ============================Длина строки==========================
    public function str_length($str)
    {
        $count = 0;
        $arr = mb_str_split($str);
        for ($i = 0; $i < count($arr); $i++) {
            $count++;
        }
        return $count;
    }
    //============================ Поиск подстроки=======================
    public function get_substring($str, $start, $length)
    {
        $subStr = "";
        $arr = mb_str_split($str);
        for ($i = 0; $i < count($arr); $i++) {
            // Если счетчик >= параметру начала поиска подстроки, находим подстроку
            if ($i >= $start) {
                $subStr .= $arr[$i];
            }
            // Если длина подстроки = параметру длины подстроки, то завершаем цикл
            if (mb_strlen($subStr) == $length) {
                break;
            }
        }
        return $subStr;
    }
    // ============================Повтор подстроки строки===================================
    public function get_repeat_str($str, $start, $length, $repeat)
    {
        $subStr = "";
        $repeatStr = "";
        $arr = mb_str_split($str);
        for ($i = 0; $i < count($arr); $i++) {
            // Если счетчик >= параметру начала поиска подстроки, находим подстроку
            if ($i >= $start) {
                $subStr .= $arr[$i];
            }
            // Если длина подстроки = параметру длины подстроки, то завершим цикл
            if (mb_strlen($subStr) == $length) {
                break;
            }
        }
        // Если счетчик < параметра количества повторов, то повторим нашу подстроку
        for ($i = 0; $i < $repeat; $i++) {
            $repeatStr .= $subStr . " ";
        }
        return $repeatStr;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require_once "../../customFunc/changeTheme.php";
    changeTheme();
    ?>
</head>

<body>
    <p>ЗАДАЧА. Написать функцию замены подстроки в строке</p>
    <?php
    $str = new Strings("Привет мир");
    // Замена
    $str1 = $str->mb_str_replace("П", "б", "ПРивет");
    echo "Измененная строка = " . $str1 . "<br>";
    ?>
    <p>ЗАДАЧА. Написать функцию удаление подстроки из строки
        // Удаление
        <?php $str2 = $str->del_sub_string("При", " ", "Привет Привет Привет");
        echo "Строка с удаленной подстрокой = " . $str2 . "<br>";
        $str3 = $str->mb_str_replace("При", " ", "Привет Привет Привет");
        echo "Строка с удаленной подстрокой = " . $str3 . "<br>";
        ?>
        <p>ЗАДАЧА. Написать функцию нахождения длины строки</p>
        <?php
        // Длина строки
        $str4 = $str->str_length("Привет Привет Привет");
        echo "Длина строки = " . $str4 . "<br>";
        ?>
        <p>ЗАДАЧА. Написать функцию поиска подстроки</p>
        // Поиск подстроки
        <?php
        $str5 = $str->get_substring("Привет", 1, 4);
        echo "Подстрока = " . $str5 . "<br>";
        ?>
        <p>ЗАДАЧА. Написать функцию повторения подстроки N раз</p>
        <?php
        $str6 = $str->get_repeat_str("Пока", 0, 3, 10);
        echo "Вот столько повторов подстрок: " . $str6;
        ?>
</body>

</html>