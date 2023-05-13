<?php


// function showMessage($name) {
//     echo "Hello $name";
// }

// showMessage('Mike');



// function showMessage($name = 'Bob') {
//     echo "Hello $name";
// }

// showMessage();



// function getMessage($name = 'Bob') {
//     return "Hello $name";
// }

// $message = getMessage();
// echo $message;


function getMessage($morning){
    if($morning){
        return "Good morning";
    } else {
        return "Good afternoon";
    }
}

$message = getMessage(true);
echo $message; 