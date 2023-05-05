<?php

// explode() converts string to an array 

$string = "Ken, Ben, Len, Amy";

$explodedNames = explode(", ", $string);

echo "<pre>";

print_r($explodedNames);

echo "<br>";

//implode() converts array to a string

$implodedNames = implode("|", $explodedNames);

echo $implodedNames;