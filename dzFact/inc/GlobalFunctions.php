<?php
session_start();
//функция смены темы дня и ночи

function theme(){

    if ($_SESSION['theme']=='day'){
        echo <<<html

            <link rel="stylesheet" href="styles/style_index_day.css">

html;
    }

    elseif ($_SESSION['theme']=='night'){
        echo <<<html

            <link rel="stylesheet" href="styles/style_index_night.css">

html;
    }

    elseif ($_SESSION['theme']=='time' || $_SESSION['theme']!='day' || $_SESSION['theme']!='night' || empty($_SESSION)){
        $dateNum=date('G');

        $Num=(int)$dateNum;


        if(8<=$Num && $Num<20){
            echo <<<html

            <link rel="stylesheet" href="styles/style_index_day.css">

html;

        }
        else{
            echo <<<html

            <link rel="stylesheet" href="styles/style_index_night.css">

html;

        }
    }


}

//функция подсчета гласных и слов на сайте

function glassFun(...$stroka){
    $a=$stroka;
    $a=implode(' ', $a);
    $glas=substr_count($a,'а');
    $glas+=substr_count($a,'у');
    $glas+=substr_count($a,'о');
    $glas+=substr_count($a,'ы');
    $glas+=substr_count($a,'и');
    $glas+=substr_count($a,'э');
    $glas+=substr_count($a,'я');
    $glas+=substr_count($a,'ю');
    $glas+=substr_count($a,'ё');
    $glas+=substr_count($a,'е');
    echo "<span class='zad'>Количество гласных на сайте: $glas<br></span>";
    $array=$a;
    $array=explode(' ', $array);
    $c=count($array);
    echo "<br><span class='zad'>Количество слов на сайте: $c<br></span>";
}

//функция для изменения первой фразы до знака "!" и изменения цвета четных и нечетных слов

function rabotaText($a){
    $firstText=mb_substr($a,0,mb_strpos($a, '!')+1);

    $lastText=mb_substr($a,mb_strpos($a,'!')+1);

    $arr_last=explode(' ',$lastText);
    echo "<span style='color: azure'>$firstText</span><br>";
    $i=1;

    foreach ($arr_last as $value){

        if($i%2==0){
            echo "<span style='color: blue'>$value</span> ";
        }
        else{
            echo "<span style='color: gold'>$value</span> ";
        }
        $i++;

    }

}

//функция вычисления разницы сегодняшнего дня и даты рождения в днях

function raznicaDat($a){
    $string2=date('d.m.Y');

    $arr1=explode('.',$a);
    $arr2=explode('.',$string2);
    $day=abs($arr1[0]-$arr2[0]);
    $mes=abs($arr1[1]-$arr2[1]);
    $year=abs($arr1[2]-$arr2[2]);

    $otv=$year*365-$mes*30-$day;

    echo "<span class='zad'><br>Разница дней между датой рождения и сегодняшней: $otv</span><br>";
}

?>