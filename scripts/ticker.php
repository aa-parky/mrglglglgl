<?php

// Read the file contents
$fileContents = file_get_contents('data/parsed_data.txt');

// Split by the newlines to get each player's data
$playerLines = explode("\n", trim($fileContents));

$players = [];

foreach ($playerLines as $line) {
    $data = explode("\t", trim($line));
    if (count($data) == 4) { // Ensure we have 4 fields for each player
        $player = [
            'name' => $data[0],
            'race' => $data[1],
            'class' => $data[2],
            'level' => $data[3]
        ];
        $players[] = $player;
    }
}

// Shuffle the players array and select only the first 100
shuffle($players);
$players = array_slice($players, 0, 100);

return $players;

?>
