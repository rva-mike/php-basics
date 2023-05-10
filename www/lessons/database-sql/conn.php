<?php

//This will enable error reporting and display all PHP errors and warnings on the web page. Make sure to remove these lines of code once you have resolved the errors in your code to prevent sensitive information from being displayed to users.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Define the database connection details
$db_host = "localhost";
$db_name = "mike_cms";
$db_user = "cms_www";
$db_pass = "password";

// Connect to the database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

// Uncomment this line to verify if the connection was successful
// echo "Connected successfully";

// Define the SQL query to select all articles and order them by publication date
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

// Execute the SQL query and store the result set in $results
$results = mysqli_query($conn, $sql);

// Check if the query was executed successfully
if ($results === false) {
    // If there was an error, print the error message
    echo mysqli_error($conn);
} else {
    // If the query was successful, fetch all the results into an array called $articles
    // using the MYSQLI_ASSOC flag to specify that we want an associative array (key-value pairs)
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // Print the array for debugging purposes
    var_dump($articles);
}




// Here is a detailed breakdown of what is happening:

// Four variables are defined to store the database host name, database name, database user name, and database password.

// The mysqli_connect() function is called with the four variables as arguments to establish a connection to the database.

// An if statement checks if the connection was successful using the mysqli_connect_error() function. If there was an error, the error message is printed using echo and the script is exited using exit().

// A SQL query is stored in a variable called $sql. The query selects all columns from the article table and sorts the results by the published_at column in ascending order.

// The mysqli_query() function is called with two arguments: the database connection object and the SQL query. The result of the query is stored in a variable called $results.

// An if statement checks if the result of the query is false. If it is, the error message is printed using mysqli_error() function.

// If the query was successful, the results are stored in an array called $articles using the mysqli_fetch_all() function. This function fetches all rows of the result set and returns an array of rows. Using the MYSQLI_ASSOC flag to specify that we want an associative array (key-value pairs)

// The var_dump() function is used to display the contents of the $articles array in a readable format. This is done for debugging purposes.

// Overall, this code connects to a database, queries a table, retrieves the results, and displays them on the screen for debugging purposes.