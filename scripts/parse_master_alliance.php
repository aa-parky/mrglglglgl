<?php
// Define the path to data file
$dataFilePath = 'data/master_alliance.txt';

// Check if the file exists and is readable
if (file_exists($dataFilePath) && is_readable($dataFilePath)) {
    // Read the file content into an array, splitting by '----------------------------------------'
    $dataEntries = explode("----------------------------------------", file_get_contents($dataFilePath));

    // Initialize an empty associative array to store player data
    $playerData = [];

    // Loop through each data entry
    foreach ($dataEntries as $entry) {
        // Trim any leading/trailing whitespace
        $entry = trim($entry);

        // Skip empty entries
        if (empty($entry)) {
            continue;
        }

        // Split the entry into lines
        $lines = explode("\n", $entry);

        // Initialize an empty associative array to store player data for this entry
        $entryData = [];

        // Loop through lines to extract key-value pairs
        foreach ($lines as $line) {
            // Split each line into key and value
            list($key, $value) = explode(': ', $line);

            // Store the key-value pair in the entryData array
            $entryData[$key] = $value;
        }

        // Add the entry data to the playerData array
        $playerData[] = $entryData;
    }

    // Randomly select a player entry
    $randomIndex = array_rand($playerData);
    $selectedPlayer = $playerData[$randomIndex];

    // Extract 'name' and 'last_words'
    $name = $selectedPlayer['name'];
    $lastWords = $selectedPlayer['last_words'];
} else {
    // If the data file doesn't exist or is not readable, provide a default value
    $name = 'Default Name';
    $lastWords = 'Default Last Words';
}

// Text to include before $name
$textBeforeName = "Mrglglglgl ";
// Concatenate the text and $name
$greeting = $textBeforeName . $name;

// Calculate the width and padding for the speech bubbles based on the length of lastWords
$widthPercentage = 25 + strlen($lastWords) * 0.5; // Adjust the scaling factor as needed
$paddingPercentage = [4, 6, 12, 0]; // Adjust these values as needed
?>
