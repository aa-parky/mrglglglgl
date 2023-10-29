<?php
function generateMurlocsChg() {
    $lines = file('data/murlocs_charge.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines && count($lines) > 0) {
        return '' . $lines[array_rand($lines)] . '';
    } else {
        return '"Where Epic Fails Meet Murloc Wails!"';  // default text in case the file is empty or there's an error reading it
    }
}
?>
