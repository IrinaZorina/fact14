<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrebkov</title>
    <?php
    function dayTime(){
        if(date("H") >= '08' and date("H") < '20'){
            $day = '<link rel="stylesheet" href="../css/style.css">';
            return $day;
        }else{
            $night = '<link rel="stylesheet" href="../css/style-night.css">';
            return $night;
        }
    } echo dayTime();
    ?>
</head>
<body>
<header>    
    <div class="decor header">
        <?php
        echo $str_header = '<p><a href="../html/table.html">Ссылка на таблицу</a></p> 
        <p><a href="../php/cycles.php">Дз "циклы"</a></p> 
        <p><a href="../php/arrays.php">Дз "массивы"</a></p>
        <p><a href="../php/strings.php">Дз "строки"</a></p>
        <p><a href="../php/functions.php">Дз "функции"</a></p>';
        $gа= substr_count($str_header, "а");
        $gА= substr_count($str_header, "А");
        $gя= substr_count($str_header, "я");
        $gЯ= substr_count($str_header, "Я");
        $gу= substr_count($str_header, "у");
        $gУ= substr_count($str_header, "У");
        $gю= substr_count($str_header, "ю");
        $gЮ= substr_count($str_header, "Ю");
        $gо= substr_count($str_header, "о");
        $gО= substr_count($str_header, "О");
        $gе= substr_count($str_header, "е");
        $gЕ= substr_count($str_header, "Е");
        $gё= substr_count($str_header, "ё");
        $gЁ= substr_count($str_header, "Ё");
        $gэ = substr_count($str_header, "э");
        $gЭ = substr_count($str_header, "Э");
        $gи = substr_count($str_header, "и");
        $gИ = substr_count($str_header, "И");
        $gы = substr_count($str_header, "ы");
        $gЫ = substr_count($str_header, "Ы");
        $sum_header = $gа+$gА+$gя+$gЯ+$gу+$gУ+$gю+$gЮ+$gо+$gО+$gе+$gЕ+$gё+$gЁ+$gэ+$gЭ+$gи+$gИ+$gы+$gЫ; 
        ?>
    </div>
</header>