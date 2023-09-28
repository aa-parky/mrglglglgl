<!DOCTYPE html>
<html>
<head>
    <title>Player Data</title>
</head>
<body>

<h1>Player Data</h1>

<?php
// Define a function to parse the player information
function parsePlayerInfo($playerText) {
    $playerInfo = [];
    $lines = explode("\n", $playerText);
    foreach ($lines as $line) {
        list($key, $value) = explode(": ", $line);
        $playerInfo[$key] = $value;
    }
    return $playerInfo;
}

// Read the data file and split it into player sections
$data = file_get_contents('data/master_alliance.txt');
$playerSections = explode('----------------------------------------', $data);

// Remove empty sections
$playerSections = array_map('trim', array_filter($playerSections));

// Parse each player's information and extract 'name' and 'last_words'
$playerData = [];
foreach ($playerSections as $playerSection) {
    $playerInfo = parsePlayerInfo($playerSection);
    $name = $playerInfo['name'];
    $lastWords = $playerInfo['last_words'];
    
    // Store the extracted data
    $playerData[] = [
        'name' => $name,
        'last_words' => $lastWords,
    ];
}

// Print the extracted data
foreach ($playerData as $player) {
    echo "<p><strong>Name:</strong> " . $player['name'] . "</p>";
    echo "<p><strong>Last Words:</strong> " . $player['last_words'] . "</p>";
    echo "<hr>";
}
?>

</body>
</html>
