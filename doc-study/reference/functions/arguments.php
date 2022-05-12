<?php
// Pass by value
function takes_array($array) { var_dump($array); }

function takes_multiple_args(
	$first,
	$second,
	$long_length_variable_name,
	$default_valued_argument = 10,
	$again = 'default value',
) {}

// Pass by reference
function invert_array(&$array) {
	$aux;
	for ($i = 0, $j = count($array)-1; $i <= count($array)/2; $i++, $j--) {
		$aux = $array[$j];
		$array[$j] = $array[$i];
		$array[$i] = $aux;	
	}
}

$a = [1, 2, 3];
invert_array($a);
var_dump($a);


// Default values
function add_ints($a = 1, $b = 1) { return $a + $b; }
function unite_arrays($a = [1, 1, 1], $b = [1, 1, 1]) { return $a + $b; }

var_dump(unite_arrays());

// Named arguments
function make_yogurt($flavor = "raspberry", $style = "Greek") {
	return 'Making a ' . $flavor . ' ' . $style . ' yogurt.' . PHP_EOL;
}

print make_yogurt(style: 'natural');

// Variable number of arguments
function add_numbers(...$numbers) {
	$sum = 0;
	for ($i = 0; $i < count($numbers); $i++) {
		$sum += $numbers[$i];	
	}
	return $sum;
}

var_dump(add_numbers(2.5, 2.5, 2.5, 2.5));

// Variable number of arguments of the same type
function add_integer_numbers(int ...$numbers) {
	$sum = 0;
	for ($i = 0; $i < count($numbers); $i++) {
		$sum += $numbers[$i];	
	}
	return $sum;
}

var_dump(add_integer_numbers(1, 2, 3, 4));

// Named arguments with different orders
function make_array($a, $b, $c) {
	return array($a, $b, $c);
}

var_dump(make_array(c: 3, b: 2, a: 1));

// EOF

