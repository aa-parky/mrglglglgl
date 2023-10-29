<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Define the path to data file

// Initialize default values
$name = 'Default Name';
$lastWords = 'Default Last Words';
$player_obit = 'Default Obituary';
$dataFilePath = 'data/collected_entries.lua';
$obituariesPath = 'data/obituaries_lines.txt';
$selectedPlayer = null;
$class_mapping = [
    1 => "Warrior",
    2 => "Paladin",
    3 => "Hunter",
    4 => "Rogue",
    5 => "Priest",
    7 => "Shaman",
    8 => "Mage",
    9 => "Warlock",
    11 => "Druid"
];

$race_mapping = [
    1 => "Human",
    2 => "Orc",
    3 => "Dwarf",
    4 => "Night Elf",
    5 => "Undead",
    6 => "Tauren",
    7 => "Gnome",
    8 => "Troll"
];


// Check if the lua file exists and is readable
if (file_exists($dataFilePath) && is_readable($dataFilePath)) {
    $file_content = file_get_contents($dataFilePath);
    preg_match_all('/\["([^"]+)"\] = {([^}]+)}/', $file_content, $matches);
    
    $players = [];
    foreach ($matches[1] as $index => $player_name) {
        preg_match_all('/\["([^"]+)"\] = ([^,]+)/', $matches[2][$index], $player_details);
        $player_data = array_combine($player_details[1], $player_details[2]);
        $players[$player_name] = $player_data;
    }

    if (empty($players)) {
        echo "No player data found in $dataFilePath";
        exit;
    }

    // Select a random player
    $selectedPlayer = $players[array_rand($players)];
    $name = trim($selectedPlayer['name'], '"');
    $class_id = $selectedPlayer['class_id'];
    $guild = $selectedPlayer['guild'];
    $date = $selectedPlayer['date'];
    $map_pos = $selectedPlayer['map_pos'];
    $source_id = $selectedPlayer['source_id'];
    

// Set default value for lastWords if it's missing
if (!isset($selectedPlayer['last_words']) || empty($selectedPlayer['last_words'])) {
    $lastWords = '*!*';
} else {
    $lastWords = trim($selectedPlayer['last_words'], '"');
}


    $level = isset($selectedPlayer['level']) ? $selectedPlayer['level'] : null;
    $map_id = isset($selectedPlayer['map_id']) ? $selectedPlayer['map_id'] : null;
    $race_id = $selectedPlayer['race_id'];
    
    if (file_exists($obituariesPath) && is_readable($obituariesPath)) {
        $obitTemplates = file($obituariesPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $selectedObitTemplate = $obitTemplates[array_rand($obitTemplates)];

        // Replace placeholders with actual values
        $replaceArray = [
            '{name}' => '<span class="player_name_obit">' . $name . '</span>',
            '{last_words}' => '<span class="player_obit_last">' . $lastWords .'</span>',
            '{race_id}' => '<span class="player_race_id">' . $race_mapping[$race_id] . '</span>',
            '{class_id}' => '<span class="player_class_id">' . $class_mapping[$class_id] . '</span>',
            '{level}' => '<span class="player_level">' . $level . '</span>',
            '{guild}' => '<span class="player_guild">' . $guild . '</span>',
            '{date}' => '<span class="player_date">' . $date . '</span>',
            '{map_pos}' => '<span class="player_map_pos">' . $map_pos . '</span>',
            '{source_id}' => '<span class="player_source_id">' . $source_id . '</span>',
            '{map_id}' => '<span class="player_map_id">' . $map_id . '</span>'
        ];
        
        $player_obit = str_replace(array_keys($replaceArray), array_values($replaceArray), $selectedObitTemplate);
    } else {
        echo "Could not read from $obituariesPath";
    }
} else {
    echo "Could not read from $dataFilePath";
}
$obituariesPath = 'data/obituaries_lines.txt';  // Define the path to the obituaries file
$selectedPlayer = null;

