<?php

$cities = ["London", "Paris", "Brisbane", "Dublin"];

foreach($cities as $city){
    echo $city . "<br>";
}


$students = ["Sam"=>12, "Holly"=>11, "Ben"=>9];

foreach($students as $student=>$age){
    echo "$student is $age years old.<br>";
}






// $student = array("name" => "John", "age" => 30, "gender" => "Male");

// print_r($student);

// echo $student["name"]; // Output: John
// echo "<br>";
// echo $student["age"];  // Output: 30
// echo "<br>";
// echo $student["gender"]; // Output: Male