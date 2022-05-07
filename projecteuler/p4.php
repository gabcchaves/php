<?php
// Invert the digits order
function invert($num) {
	$str = (string) $num;
	$aux;
	for ($i = 0, $j = strlen($str)-1; $i < strlen($str)/2; $i++, $j--) {
		$aux = $str[$j];
		$str[$j] = $str[$i];
		$str[$i] = $aux;
	}
	return (int) $str;
}

// Find the largest palindrome
$largest = 0;
for ($i = 100; $i < 1000; $i++) {
  for ($j = 100; $j < 1000; $j++) {
		if (invert($i * $j) == $i * $j) {
  		if ($i * $j > $largest) {
    		$largest = $i * $j;
  		}
		}
  }
}

echo $largest . PHP_EOL;
