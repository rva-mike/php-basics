<?php 

$a = 10;
$b = 5;
$c = TRUE;
$d = TRUE;

if($d || ( $a == 10 && $b > 10)){
    echo "True";
} else {
    echo "False";
}