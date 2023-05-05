<?php

$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];

$result = array_slice($letters, 5);

echo "<pre>";
print_r($result);

// result 
// Array
// (
//     [0] => f
//     [1] => g
//     [2] => h
// )

$result = array_slice($letters, 0, 5);
print_r($result);

// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
//     [3] => d
//     [4] => e
// )

$result = array_slice($letters, -5, 2);
print_r($result);

// Array
// (
//     [0] => d
//     [1] => e
// )