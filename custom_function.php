<?php 
// Функция смены фона
function hour($currentHour){
    // $currentHour = date("H");
if ($currentHour >= 8 && $currentHour < 20) {
    echo '<link rel="stylesheet" href="/StylesTest/stylesSun.css"';
} else
    echo '<link rel="stylesheet" href="/StylesTest/stylesNight.css">';
}

echo '<br>';

// Функция вывода даты
function custom_date($a,$b){
    $datetime1 = new DateTime($a);
    $datetime2 = new DateTime($b);
    $interval = $datetime1->diff($datetime2);
    $days = $interval->days;
    echo " $a - дата рождения, $b - текущее значение, разность: $days";
}

// Функция красим первое предложение AboutMe
function color_about_me ($aboutMy){
    $arrAboutMe = explode('.', $aboutMy);
    echo str_replace([$arrAboutMe[0]],["<span style ='color:red'>".$arrAboutMe[0]."</span>"],$aboutMy);
}

// Функция красим слова в разный цвет
function color_myOpinion($myOpinion){
    $words = explode(" ", $myOpinion);
            
            foreach ($words as $key => $word) {
                if (($key+1) % 2 == 0) {
                    echo "<span style='color: orange'>" . $word . "</span> ";
                } else {
                    echo "<span style='color: rgb(162 157 165)'>" . $word . "</span> ";
                }
            }
}
?>