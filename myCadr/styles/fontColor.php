<?php
$currentTime = date("H:m:s");
$dayTime = "08:00:00";
$nightTiem = "20:00:00";

if ($currentTime >= $dayTime && $currentTime < $nightTiem) {
    echo "aliceblue";
} else {
   echo "black";
}