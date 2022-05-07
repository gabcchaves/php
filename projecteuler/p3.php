<?php
// Find the largest prime factor
// of 600851475143
const NUM = 600851475143;

function isPrime($num) {
    for ($i = 2; $i <= $num/2; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$largest = 0;
for ($i = 2; $i < NUM/2; $i++) {
	if (NUM % $i == 0 && isPrime($i)) {
    	$largest = $i;
	}
}

echo $largest . PHP_EOL;
