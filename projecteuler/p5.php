<?php
// Find the smallest multiple of
// a range of 1 to n
function smallestMultiple($range) {
  $dividend = $range;
  while (true) {
   	for ($i = 2; $i < $range; $i++) {
     	if ($dividend % $i != 0) break;
     	else if ($i == $range-1) return $dividend;
   	}
   	$dividend++;
  }

}

echo smallestMultiple(20) . PHP_EOL;
