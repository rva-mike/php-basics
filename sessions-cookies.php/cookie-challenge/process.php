<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $color = $_POST['color'];

    setcookie("name", $name, time()+6000);
    setcookie("age", $age, time()+6000);
    setcookie("color", $color, time()+6000);

    echo "Cookies have been set";

} else {
    echo "Please complete the form.";
}

