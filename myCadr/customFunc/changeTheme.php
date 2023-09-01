<?php
function changeTheme()
{
    $currentTime = date('H');
    $dayTime = '8';
    $nightTime = '20';
    if ($currentTime > $dayTime && $currentTime < $nightTime) {
        echo '<link rel="stylesheet" href="styles/style.css">';
    } else {
        echo '<link rel="stylesheet" href="styles/nightStyle.css">';
    }
}