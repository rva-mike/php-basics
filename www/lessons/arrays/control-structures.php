<?php

$articles = ["first" => "first post", "second" => "another post", "third" => "read this!"];

if (empty($articles)) {
    echo "the array is empty.";
} else {
    echo "the array is not empty";
}
echo "<br><br>";

//conditionals

var_dump(3 == 4);

echo "<br><br>";

$age = 21;

if ($age == 21) {
    echo "Value is true";
} else {
    echo "value is false";
}

echo "<br><br>";

// While loop

//     while (condition is true) {
//        code to run while condition is true
//     }

$month = 1;

while ($month <= 12) {
    echo $month . ", ";
    //need incrementor or it creates infinite loop
    $month++;
}

echo "<br><br>";


//for loops
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";

//else if 

$hour = 20;

if ($hour < 12) {
    echo "good morning";
} else if ($hour < 18) {
    echo "good afternoon";
} else if ($hour < 22) {
    echo "good evening";
} else {
    echo "good night";
}

echo "<br><br>";


//switch statement
$day = "Tue";

switch ($day) {
    case "Mon":
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
        break;
    case "Thur":
        echo "Thursday";
        break;
    case "Fri":
        echo "Friday";
        break;
    case "Sat":
        echo "Saturday";
        break;
    case "Sun":
        echo "Sunday";
        break;

    //same as 'else'
    default:
    echo "No info available for that day";
    break;
}

echo "<br><br>";


$primes = [2, 3, 5, 7, 11, 13, 17, 19];
 
for ($i = 1; $i <= 3; $i++) {
    echo $primes[$i] . ", ";
}
//output 3,5,7

echo "<br><br>";


$colors = ["red", "blue", "yellow"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}



if($i < 4){
    $array[] = "a";
} else if ($i >= 4 && $i <= 7 ){
    $array[] = "b";
} else {
    $array[] = "c";
}


