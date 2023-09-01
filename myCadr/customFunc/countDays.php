<?php
function countDays($dateStr)
{
    $oldDate = strtotime($dateStr);
    $currentDate = time();
    $diff = $currentDate - $oldDate;
    echo floor($diff / (60 * 60 * 24)) . " дней";
}