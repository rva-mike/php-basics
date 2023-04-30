<?php

$odd = 0;
$even = 0;

for($i = 1; $i <= 100; $i++){

    $randomNumber = rand(1, 7);

    if($randomNumber % 2 == 0){
        // echo "number is even";
        $even++;
    } else {
        // echo "number is odd";
        $odd++;
    }

}

echo "There were $odd odd numbers and $even even numbers.";

