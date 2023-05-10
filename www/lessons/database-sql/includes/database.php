<?php

// Set the database connection parameters
$db_host = "localhost";
$db_name = "mike_cms";
$db_user = "cms_www";
$db_pass = "password";

// Connect to the database using mysqli_connect function
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if there is an error during database connection
if (mysqli_connect_error()) {
    // If there is an error, print the error message and exit
    echo mysqli_connect_error();
    exit;
}
