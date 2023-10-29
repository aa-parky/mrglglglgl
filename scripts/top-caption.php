<?php
function generateSubHeadline() {
    $lines = file('data/murloc_headlines.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines && count($lines) > 0) {
        return '' . $lines[array_rand($lines)] . '';
    } else {
        return 'things started to go pear shaped';  // default text in case the file is empty or there's an error reading it
    }
}
?>
