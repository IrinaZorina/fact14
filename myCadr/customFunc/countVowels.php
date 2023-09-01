<?php
function countVowels($strUrl)
{
    $text = file_get_contents($strUrl);
    $stripStr = strip_tags($text);
    $arr = mb_str_split($stripStr);
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if (
            $arr[$i] == 'а' || $arr[$i] == 'я' || $arr[$i] == 'у'
            || $arr[$i] == 'ю' || $arr[$i] == 'о' || $arr[$i] == 'е'
            || $arr[$i] == 'ё' || $arr[$i] == 'ы' || $arr[$i] == 'и'
            || $arr[$i] == 'э'
            || $arr[$i] == 'А' || $arr[$i] == 'Я' || $arr[$i] == 'У'
            || $arr[$i] == 'Ю' || $arr[$i] == 'О' || $arr[$i] == 'Е'
            || $arr[$i] == 'Ё' || $arr[$i] == 'Ы' || $arr[$i] == 'И'
            || $arr[$i] == 'Э'
            // Латиница
            || $arr[$i] == 'a' || $arr[$i] == 'u' || $arr[$i] == 'e'
            || $arr[$i] == 'o' || $arr[$i] == 'y' || $arr[$i] == 'i'
            || $arr[$i] == 'A' || $arr[$i] == 'U' || $arr[$i] == 'E'
            || $arr[$i] == 'O' || $arr[$i] == 'Y' || $arr[$i] == 'I'
        ) {
            $count++;
        }
    }
    echo $count;
}