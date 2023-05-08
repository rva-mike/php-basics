<?php

//check if form submitted
if (isset($_POST['submit'])) {

    //assign variables, total, incrementor
    $ccNumber = $_POST['card-number'];
    $total = 0;
    $i = 1;

    //get last four digits
    $lastFour = substr($ccNumber, -4, 4);

    //split string into array
    $ccNumber = str_split($ccNumber);

    //reverse array
    $ccNumber = array_reverse($ccNumber);

    //loop through array and calculate
    foreach ($ccNumber as $digit) {
        //if even
        if ($i % 2 == 0) {
            //multiply by 2
            $digit *= 2;
            //if digit > 9 
            if ($digit > 9) {
                //subtract 9 
                $digit -= 9;
            }
        }
        //total = total + digit
        $total += $digit;

        //incrementor + 1
        $i++;
    }

    //check total/10
    if($total % 10 == 0){
        echo "Your credit card number with the last 4 digits " . $lastFour . " is VALID";
    } else {
        echo "Your credit card number with the last 4 digits " . $lastFour . " is INVALID";
    }
}
