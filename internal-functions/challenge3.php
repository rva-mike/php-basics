<?php

date_default_timezone_set('America/New_York');

echo "Today is " . date('l');

echo "<br>";

echo date('l d F, Y');

echo "<br>";

echo date('Y/m/d');

echo "<br>";

echo date('l dS F Y, g:i A');

echo "<br>";

if(date('L') == 1){
    echo date('Y') . " is a leap year.";
} else {
    echo date('Y') . " is not leap year.";
}