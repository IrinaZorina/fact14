<?php
$color1="";
$color2="";
function paintWords($text,$color1,$color2)
{
    $str = strip_tags($text);
    $arr = explode(" ", $str);
    $count = 0;
    // print_r($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($count % 2 == 0) {
            echo "$arr[$i]<span style=\"color:$color1\"</span> ";
        } else {
            echo "$arr[$i]<span style=\"color:$color2\"</span> ";
        }
        $count++;
    }
}
?>