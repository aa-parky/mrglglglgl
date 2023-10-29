<?php

// Read the file contents
$fileContents = file_get_contents('data/master_alliance.txt');

// Split by the separator
$playerBlocks = explode('----------------------------------------', $fileContents);

$players = [];

foreach ($playerBlocks as $block) {
	$lines = explode("\n", trim($block));
	if (count($lines) > 1) { // Make sure it's not an empty block
		$player = [];
		foreach ($lines as $line) {
			if (strpos($line, ': ') !== false) { // Check if the line contains the delimiter
				list($key, $value) = explode(': ', $line);
				$player[strtolower($key)] = $value;
			}
		}
		$players[] = $player;
	}
}

// Shuffle the players array and select only the first 100
shuffle($players);
$players = array_slice($players, 0, 100);

return $players;

?>
