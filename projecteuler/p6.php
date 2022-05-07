<?php
$squareSum = 0;
$sumSquare = 0;
function sumSquareDiff($range) {
	$squareSum = 0;
	$sumSquare = 0;
	for ($i = 1; $i <= $range; $i++) {
  	$sumSquare += $i;
  	$squareSum += $i**2;
	}
	return $sumSquare**2 - $squareSum;
}

echo sumSquareDiff(100) . PHP_EOL;
