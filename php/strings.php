<?php require_once '../inc/header.php' ?>

<p><h4>#4. Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</p>

<?php
    $str = 'html css php';
    $arr_str = explode(' ', $str);
    for($i = 0; $i< 3; $i++){
        print_r($arr_str[$i]);
        echo '<br>';
    }    

?>

<p><h4>#5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'</p>

<?php
    $str = 'words.TGFH.545.numbers.';   
    $p = '.png';
    if (mb_substr($str, -4, 4) == $p){
        echo "<font color = red> да </font>";
    }else{echo "<font color = red> нет </font>";}
        
?>

<p><h4>#6. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте<br>
    троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту<br>
    строку на экран</p>

<?php
    $str = 'words.TGFH.545-numbers.';   
    $len = mb_strlen($str);
    //echo $len;
    if( $len > 5){
        echo "<font color = red>" . substr($str, 0 , 5) . "... </font>";
    }else echo "<font color = red> $str </font>";
?>

<p><h4>#7. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>

<?php
    $str = "fgyjabugvcryjvyjrecjkicolg"; //12333
    $str = str_replace('a', '1', $str);
    $str = str_replace('b', '2', $str);
    $str = str_replace('c', '3', $str);
    echo "<font color = red> $str </font>";
?>


<p><h4>#8. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'</p>

<?php
    $str = 'abc abc abc';
    $arr = str_split($str);
    foreach($arr as $key => $value){
        if($value == 'b'){
            $n = $key;
        }
    }
    echo "<font color = red> позиция последней буквы 'b':  " . $n + 1 ." из 11 </font>";
?>
<p><h4>#9. Дана строка 'html css php'. С помощью функции explode запишите каждое<br> 
    слово этой строки в отдельный элемент массива.</p>

<?php
    $str = 'html css php';
    $arr = explode(' ', $str);
    print_r($arr);
?>
<p><h4>#10. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).<br>
    Определите количество дней между датами.</p>

<?php
    $str1 = '13-01-2000';
    $str2 = '23-07-2023';
    $arr1 = explode('-', $str1);
    $arr2 = explode('-', $str2);
    list($d1, $m1, $y1) = $arr1;
    list($d2, $m2, $y2) = $arr2;
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
    $y1 = ($y / 4); //5.75 високосных
    $y2 =(int)$y1; //5
    if(($y1 - $y2) >= 0.5){
        $y3 = $y2 + 1;
    }
    $sum = $d + ($m*30) + ($y*365) + $y3;
    echo "<font color = red> количество дней между датами: $sum </font>";
?>