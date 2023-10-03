<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Define the path to data file
$dataFilePath = 'data/master_alliance.txt';
$obituariesPath = 'data/obituaries_lines.txt';  // Define the path to the obituaries file
$selectedPlayer = null;

// Initialize default values
$name = 'Default Name';
$lastWords = 'Default Last Words';
$player_obit = 'Default Obituary';

// Check if the master file exists and is readable
if (file_exists($dataFilePath) && is_readable($dataFilePath)) {
    // Read the file content into an array, splitting by '----------------------------------------'
    $dataEntries = explode("----------------------------------------", file_get_contents($dataFilePath));

    $playerData = [];
    foreach ($dataEntries as $entry) {
        $entry = trim($entry); // Trim whitespace
        if (empty($entry)) continue;

        $lines = explode("\n", $entry);
        $entryData = [];
        foreach ($lines as $line) {
    $parts = explode(': ', $line);
    if (count($parts) < 2) continue;  // Skip lines that don't split into at least two parts

    $key = trim($parts[0]);
    $value = trim($parts[1]);
    $entryData[$key] = $value;  // Ensure all data is trimmed
}


        $playerData[] = $entryData;
    }

    shuffle($playerData);  // Shuffle the player data
    $selectedPlayer = $playerData[0];  // Get the first entry after shuffling

    $name = $selectedPlayer['name'];
    $lastWords = $selectedPlayer['last_words'];

    // Now that you've read and processed master_alliance.txt, check for the selected player's data
    if (!$selectedPlayer) { 
        echo "No valid player data found in $dataFilePath";
        exit;  // Exit the script to prevent further processing.
    }

    if (file_exists($obituariesPath) && is_readable($obituariesPath)) {
        $obitTemplates = file($obituariesPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $selectedObitTemplate = $obitTemplates[array_rand($obitTemplates)];

        // Replace placeholders with actual values
        $replaceArray = [
            '{name}' => '<span class="player_name_obit">' . $name . '</span>',
            '{last_words}' => '<span class="player_obit_last">' . $lastWords .'</span>',  
            '{race_id}' => '<span class="player_race_id">' . $selectedPlayer['race_id'] . '</span>',
            '{class_id}' => '<span class="player_class_id">' . $selectedPlayer['class_id'] . '</span>',
            '{level}' => '<span class="player_level">' . $selectedPlayer['level'] . '</span>'
        ];
        
        $player_obit = str_replace(array_keys($replaceArray), array_values($replaceArray), $selectedObitTemplate);
        
    } else {
        echo "Could not read from $obituariesPath";
    }
} else {
    echo "Could not read from $dataFilePath";
}
?>
