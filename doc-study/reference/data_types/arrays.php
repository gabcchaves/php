<?php
// Declaring arrays
// Using array() constructor
$array = array(
	0 => 'a',
	1 => 'b',
	2 => 'c'
);

// Shorthand
$array = [
    0 => 'a',
    1 => 'b',
    2 => 'c'
];

echo $array[0] . PHP_EOL;

// Index type convertion
$array = [
    '1' => 'a'
];

echo var_dump($array) . PHP_EOL;

// Index overwriting
$array = [
    0 => 'a',
    '0' => 'b',
    0.5 => 'c' // This value is printed
];

echo var_dump($array) . PHP_EOL;

// No need for defining keys
$array = [1, 2, 3, 4];
echo var_dump($array) . PHP_EOL;

// Pushing elements
$array = [1, 2, 3, 4, 5, 6];
$array[] = 7;
$array['x'] = 8;
echo var_dump($array) . PHP_EOL;
echo var_dump($array) . PHP_EOL;

// Remove an element
unset($array['x']);
echo var_dump($array) . PHP_EOL;

// Remove an entire array
unset($array);

/* Reindexing array */
$array = [1, 2, 3, 4];
// Firstly delete all its elements
for ($i = 0; $i < count($array); $i++) {
    unset($array[$i]);
}

// The index remains the same
$array[] = 1;
echo var_dump($array) . PHP_EOL;

// Reindexing
$array = array_values($array);
echo var_dump($array) . PHP_EOL;


// So, unset deletes elements or arrays
// And array_values reindex arrays
?>
