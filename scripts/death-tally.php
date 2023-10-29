<?php

// Read the content of the file
$file_content = file_get_contents('data/parsed_data.txt');

// Split the file content by new lines to get each line separately
$lines = explode("\n", $file_content);

// Initialize counters for each race
$human_deaths = 0;
$orc_deaths = 0;
$dwarf_deaths = 0;
$night_elf_deaths = 0;
$undead_deaths = 0;
$tauren_deaths = 0;
$gnome_deaths = 0;
$troll_deaths = 0;

// Loop through each line
foreach ($lines as $line) {
    // Split the line by tabs to get each part separately
    $parts = explode("\t", $line);

    // Check the race and add the death count accordingly
    if (isset($parts[1])) {
        switch ($parts[1]) {
            case 'Human':
                $human_deaths += intval($parts[3]);
                break;
            case 'Orc':
                $orc_deaths += intval($parts[3]);
                break;
            case 'Dwarf':
                $dwarf_deaths += intval($parts[3]);
                break;
            case 'Night Elf':
                $night_elf_deaths += intval($parts[3]);
                break;
            case 'Undead':
                $undead_deaths += intval($parts[3]);
                break;
            case 'Tauren':
                $tauren_deaths += intval($parts[3]);
                break;
            case 'Gnome':
                $gnome_deaths += intval($parts[3]);
                break;
            case 'Troll':
                $troll_deaths += intval($parts[3]);
                break;
        }
    }
}

?>
