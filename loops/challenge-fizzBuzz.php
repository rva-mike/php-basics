<?php


for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0 && $i % 3 == 0){
        echo "FIZZ BUZZ";
    } else if ($i % 5 == 0){
        echo "BUZZ";
    } else if($i % 3 == 0){
        echo "FIZZ";
    } else {
        echo $i;
    }
    echo "<br>";
}

