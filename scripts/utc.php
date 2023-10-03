<?php

// Set the default timezone to use (you can change this to your desired timezone)
date_default_timezone_set('UTC');

// Fetch the current date and time
$currentDateTime = new DateTime();

// Format the date and time
$formattedDate = $currentDateTime->format('F, jS, Y');

// Echo the formatted date and time
$formattedDate;

?>
