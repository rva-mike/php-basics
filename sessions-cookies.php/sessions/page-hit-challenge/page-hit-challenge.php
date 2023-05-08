<?php

session_start(); // start the session

if(isset($_SESSION['page_visits'])) {
  // increment the page visits count
  $_SESSION['page_visits']++;
} else {
  // set the page visits count to 1
  $_SESSION['page_visits'] = 1;
}

// display the page visit count
echo "You have visited this page " . $_SESSION['page_visits'] . " times.";

?>
