<?php


if (isset($_POST['submit'])) {

    $spaces = $_POST['spaces'];
    $string = $_POST['string'];

    if ($spaces == 'withoutSpaces') {
        $string = str_replace(' ', '', $string);
        $length = strlen($string);
        echo "The string is $length characters long.";
    } else if ($spaces == 'withSpaces') {
        $length = strlen($string);
        echo "The string is $length characters long.";
    } else {
        echo "Please select an option";
    }
}
