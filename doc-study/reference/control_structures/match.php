<?php
/* match keyword */
$food = 'bolo';
$result = match ($food) {
	'apple' => 'This food is an apple.',
	'bar' => 'This food is a bar',
	'bolo' => 'This food is a cake.',
};

var_dump($result);

// Multiple expressions
$x = 5;
$result = match ($x) {
	1, 3, 5 => 'Odd',
	default => 'Even',
};

var_dump($result);

// EOF

