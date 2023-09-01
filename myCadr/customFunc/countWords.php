<?php
function countWords($strUrl)
{
    $str = file_get_contents($strUrl);
    $count = 0;
    $arr = str_word_count($str,1,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    for ($i = 0; $i < count($arr); $i++) {
        $count++;
    }
    echo $count;
}