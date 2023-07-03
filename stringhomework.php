<?php
/* <!-- Дана строка «fact». Привести строку к виду «Fact». --> */
$str = "fact";
echo $str;
echo "<br>";
$str1 = str_replace("f", "F", $str);
echo $str1;
echo "<br>"; 
echo "<br>"; 

/* Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова». */

$str = "Сонник Ольга Андреевна";
echo $str;
echo "<br>";
$arr = explode(' ', $str, 3);
print_r($arr); 
echo "<br>";
array_splice($arr, 2, 1);
$arr = array_reverse($arr);
print_r($arr); 
echo "<br>"; 
echo "<br>"; 

/* Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). */

$str = "ПрИвет, мир";
echo $str;
echo "<br>";
/* $str1 = strtolower($str); */
$a = substr_count($str, "и");
$b = substr_count($str, "И");
echo 'Количество символов и = ';
echo $a + $b;
echo "<br>"; 
echo "<br>"; 

/* Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'. */
$str = "html css php";
$arr = explode(' ', $str, 3);
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo "<br>";

/* Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'. */
$str = "qwerty.png";
echo $str;
echo "<br>";
$str1 = mb_substr($str, -4);
if ($str1 == ".png") {
    echo "да";
} else echo "нет";
echo "<br>";
echo "<br>";

/* Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран. */
$str = "qwert";
echo $str;
echo "<br>";
if (mb_strlen($str) > 5) {
    echo mb_substr($str, 0, -5)."...";
} else echo $str;
echo "<br>";
echo "<br>";

/* Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. */
$str = "abcdefg abcdefg abcdefg";
echo $str;
echo "<br>";
$str1 = str_replace('a', '1', $str);
$str2 = str_replace('b', '2', $str1);
$str3 = str_replace('c', '3', $str2);
echo $str3;
echo "<br>";
echo "<br>";

/* Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'. */
$str = "abc abc abc";
echo $str;
echo "<br>";
echo "Позиция последней буквы 'b' = ". strrpos($str, 'b');
echo "<br>";
echo "<br>";

/* Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива. */
$str = "html css php";
$arr = explode(' ', $str, 3);
print_r($arr);
echo "<br>";
echo "<br>";

/* В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами. */
$x = '10-02-2015';
echo $x;
echo "<br>";
$x1 = '04-07-2023';
echo $x1;
echo "<br>";
$a = strtotime($x,0);
$a1 = strtotime($x1,0);
$b = $a1 - $a;
echo "Прошло времени в днях: ". $b / 86400;
/* Делим на 86400 (количество секунд в сутках), т.к. strtotime показывает количество секунд, прошедших с 1 января 1970 года 00:00:00 UTC */
echo "<br>";
echo "<br>";
