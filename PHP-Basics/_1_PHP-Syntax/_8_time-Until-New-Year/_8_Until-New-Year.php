<?php

$cdate = mktime(0, 0, 0, 1, 1, 2015);
$today = time();

$difference = $cdate - $today;

$hoursUntil = $difference / 60 / 60;
$minutesUntil = $difference / 60;
$secondsUntil = $difference;

$days = floor($difference / 60 / 60 / 24);
$hours = floor($difference / 60 / 60 % 24);
$minutes = floor($difference / 60 % 60);
$seconds = floor($difference % 60);

echo 'Hours until new year : ' . number_format($hoursUntil, 0, ".", " ") . "\n"."<br>";
echo 'Minutes until new year : ' . number_format($minutesUntil, 0, ".", " ") . "\n"."<br>";
echo 'Seconds until new year : ' . number_format($secondsUntil, 0, ".", " ") . "\n"."<br>";
echo 'Days:Hours:Minutes:Seconds ' . $days . ":" . sprintf("%02d", $hours) . ":" . sprintf("%02d", $minutes) . ":" . sprintf("%02d", $seconds);
?>
