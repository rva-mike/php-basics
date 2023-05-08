<?php

if (isset($_COOKIE['name'], $_COOKIE['age'], $_COOKIE['color'])) {
    echo "Your name is " . $_COOKIE['name'] . ".";
    echo "<br>";
    echo "Your age is " . $_COOKIE['age'] . ".";
    echo "<br>";
    echo "Your favorite color is " . $_COOKIE['color'] . ".";

} else {
    echo "The cookie has not been set.";
}