<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

//pop removes last array item

$lastCity = array_pop($cities);

echo $lastCity;

echo "<br>";

echo "<pre>";
print_r($cities);

//shift removes first array item

$firstCity = array_shift($cities);

echo $firstCity;

echo "<br>";

print_r($cities);