<?php
//HOW MANY DAYS UNTIL XMAS

// Set the default timezone to the user's timezone
date_default_timezone_set('America/New_York');


$xmas = strtotime('December 25');

$currentDate = strtotime('Today');

// $currentTime = time(); ^^^

$timeLeft = $xmas - $currentDate;

$minutes = $timeLeft / 60;
$hours = $minutes / 60;
$days = round($hours / 24);

echo "There are $days days left until Xmas.";



