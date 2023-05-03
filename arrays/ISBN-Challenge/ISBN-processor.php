<?php

//check to see if it is a valid IBSN number. Check if 10 digit number, multiple first digit by 1, then second digit by 2, etc. Find the total of multiplied digits and if the total is divided by 11 and there is no remainder then the ISBN is valid.


if (isset($_POST['submit'])) {
    $input = $_POST['input'];

    if (strlen($input) == 10) {
        $numbers = str_split($input);
        // print_r($numbers);
        // echo "<br>";

        $multiply = 1;
        $sum = 0; // Initialize a variable to keep track of the sum

        foreach ($numbers as $number) {
            $products = $number * $multiply++;
            // echo "<br>";
            // echo $products;

            $sum += $products; // Add the product to the sum
        }

        // echo "<br>";
        // echo $sum;

        if ($sum % 11 == 0) {
            echo "Valid";
        } else {
            echo "Invalid";
        }
    } else {
        echo "Invalid";
    }
} else {
    echo "Invalid";
}
