<?php
$filename = 'data/collected_entries.lua';
if (file_exists($filename)) {
    echo "All deaths ratified by Lastrights Rumblecoin on: " . date("F d Y @ H:i", filemtime($filename));
} else {
    echo "The file $filename does not exist.";
}
?>
