<?php

$cities = ["London", "Paris"];

echo "<pre>";

print_r($cities);

//adds to end of array
array_push($cities, "Brisbane", "Sydney");

print_r($cities);

//adds to beginning of array
array_unshift($cities, "Dublin", "Amsterdam");

print_r($cities);