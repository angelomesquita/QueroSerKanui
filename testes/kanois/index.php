<?php
const START = 1;
const END = 100;

PHP_SAPI == 'cli' ? $endOfLine = PHP_EOL : $endOfLine = '<br />';

function isMultiple($number, $divisor) {
	return $number % $divisor == 0 ? true : false;
}

for ($i = START; $i<=END; $i++) {
	isMultiple($i, 5) ? $output = 'Ka' : $output = '';
	isMultiple($i, 7) ? $output .= 'Nois' : $output .= '';
	
	if (empty($output)) {
		$output = $i;
	}

	echo $output . $endOfLine;
}