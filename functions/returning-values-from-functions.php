<?php

function uppercase($name){
    $result = strtoupper($name);
    return $result;
}

echo uppercase("Smith");
$uppercasedName =  uppercase("Smith");
echo "<br>";
echo $uppercasedName;