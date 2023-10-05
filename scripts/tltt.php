<?php
function generatetltt() {
	$lines = file('data/tyrionstales.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if ($lines && count($lines) > 0) {
		return '' . $lines[array_rand($lines)] . '';
	} else {
		return 'there! a bowl of petunias!';  // default text in case the file is empty or there's an error reading it
	}
}
?>
