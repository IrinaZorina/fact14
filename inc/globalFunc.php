<?php

function aboutMe($str)
{
    $arr = explode('. ', $str);
    echo str_replace([$arr[0]], ["<span style='color:#e53170'>" . $arr[0] . "</span>"], $str);
}

function feedback($str)
{
    $arr = mb_str_split($str);
    foreach ($arr as $key => $value) {
        if ($key % 2 == 0) {
            echo "<span style='color:#f582ae'>" . $value . "</span>";
        } else {
            echo "<span style='color:#e53170'>" . $value . "</span>";
        }
    }
}

function dateDiff($bday, $date)
{
    $result = date_diff(date_create($bday), date_create($date));
    echo 'Дата моего дня рождения: ' . $bday . '<br>';
    echo 'Сейчас на дворе: ' . $date . '<br>';
    echo 'С момента моего дня рождения прошло следующее количество дней: ' . $result->days;
}

function vowels($str)
{
    $arr = mb_str_split($str);
    $vowels = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == 'а' or $arr[$i] == 'А') {
            $vowels++;
        }
        if ($arr[$i] == 'е' or $arr[$i] == 'Е') {
            $vowels++;
        }
        if ($arr[$i] == 'ё' or $arr[$i] == 'Ё') {
            $vowels++;
        }
        if ($arr[$i] == 'и' or $arr[$i] == 'И') {
            $vowels++;
        }
        if ($arr[$i] == 'о' or $arr[$i] == 'О') {
            $vowels++;
        }
        if ($arr[$i] == 'у' or $arr[$i] == 'У') {
            $vowels++;
        }
        if ($arr[$i] == 'ы' or $arr[$i] == 'Ы') {
            $vowels++;
        }
        if ($arr[$i] == 'э' or $arr[$i] == 'Э') {
            $vowels++;
        }
        if ($arr[$i] == 'ю' or $arr[$i] == 'Ю') {
            $vowels++;
        }
        if ($arr[$i] == 'я' or $arr[$i] == 'Я') {
            $vowels++;
        }
    }
    // preg_match_all('~(?<vowels>[аеёиоуыэюя])~iu', $page, $arr);
    // $vowels = count(array_filter($arr['vowels']));
    // echo $vowels . '<br>';
    echo 'Гласные буквы: ' . $vowels . '<br>';
}

function words($str)
{
    $str = preg_replace('/[a-zA-Z]/i', ' ', $str);
    $str = str_replace(['-'], ' ', $str);
    $str = str_replace(["'"], ' ', $str);
    $words = str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    // print_r($words);
    echo 'Слова: ' . count($words);
}

function theme($time)
{
    if ($time > 7 and $time <= 19) {
        echo "<link rel='stylesheet' href='styles/styles_day.css'>";
    } else {
        echo '<link rel="stylesheet" href="styles/styles_night.css">';
    }
}
