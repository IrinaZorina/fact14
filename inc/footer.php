<footer>
    <?php
    //считаем гласные
    echo  "гласных букв на странице: " . $sum_header + $sum_name+ $sum_inf + $sum_offer + $sum_section1 + $sum_section2;
    //вывод актуальной даты
    function toDay(){
    $today = date('j.m.Y');
    return $today;
    } 
    echo  ' <p>сегодня ' . toDay() . '</p>';
    //подсчет прожитых дней
    function livedDays(){
    $arr_myday = explode('.', $GLOBALS['myday']);
    $arr_today = explode('.', toDay());
    list($d1, $m1, $y1) = $arr_myday;
    list($d2, $m2, $y2) = $arr_today;
    $d = $d1 - $d2;
    $m = $m1 - $m2;
    $y = $y1 - $y2;
    if($d < 0){
        $d = -$d;
    }
    if($m < 0){
        $m = -$m;
    }
    if($y < 0){
        $y = -$y;
    }
    $y1 = ($y / 4);             //
    $y2 =(int)$y1;              // 
    $y3 = 0;                    //добавление високосных дней
    if(($y1 - $y2) >= 0.5){     //
        $y3 = $y2 + 1;          //
    }
    $sum_day = $d + ($m*30) + ($y*365) + $y3;
    return $sum_day;
    }
    echo "количество прожитых дней : " . livedDays();
    echo '<br>';
    //подсчет слов:
    $fullText = $contentText1." ".$contentText2." ".$contentText3;
    $fullText = str_replace('-', ' ', $fullText);//убрал - с подсчета как слово
    $arr_fullText = explode(' ', $fullText);//перевел строку в массив
    $arr_fullText = array_diff($arr_fullText, array('', null));//убрал ключи с пустыми значениями
    //print_r($arr_fullText);
    $k=0;
    foreach($arr_fullText as $valueT){
        $k++;    
    }
    echo "количество слов на странице : " . $k ;
    ?>
</footer>    
</body>
</html>