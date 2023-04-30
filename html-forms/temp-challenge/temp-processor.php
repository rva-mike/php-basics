<?php

if(isset($_POST['submit'])){
    $temp = $_POST['temp'];
    $unit = $_POST['unit'];
    $decimal = $_POST['decimal'];

    if($unit == 'celsius'){
        $result = round(($temp -32) * 5 / 9, $decimal);
        echo "$temp degrees Fahrenheit is $result degrees Celsius.";
    } else {
        $result = round($temp * 9 / 5 + 32, $decimal);
        echo "$temp degrees Celsius is $result degrees Fahrenheit.";
    }

} else {
    echo "Please visit the form page";
}




// if(isset($_POST['submit'])){
//     $temp = $_POST['temp'];
//     $unit = $_POST['unit'];

//     if($unit == "celsius"){
//         $result = ($temp * 9/5) + 32;
//         echo $temp . " degrees Celsius is " . $result . " degrees Fahrenheit.";
//     } else {
//         $result = ($temp - 32) * 5/9;
//         echo $temp . " degrees Fahrenheit is " . $result . " degrees Celsius.";
//     }
// } else {
//     echo "Please visit the form page";
// }
